<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;
use PDOStatement;
use PDOException;



class BaseController extends Controller
{
    private $baseInit;
    private $stmt;

    public function __construct(Request $request)
    {
        $command = $request['base'];

        foreach ($command as $baseId) {
//            $bases = [];
            $bases = DB::table('bases')->where('id', $baseId)->get();

            foreach ($bases as $base) {
                $getBase = [
                    'id' => $base->id,
                    'host' => $base->host,
                    'user' => $base->user,
                    'password' => $base->password,
                    'dbname' => $base->dbname,
                ];
            }
        }

        //Set DSN
        $dsn = 'mysql:host=' . $getBase['host'] . ';dbname=' . $getBase['dbname'];

        //Set Options
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        // PDO instance
        try {
            $this->baseInit = new PDO($dsn, $getBase['user'], $getBase['password'], $options);
        } catch (PDOException $e) {
            die($e->getMessage());
        }


    }

    public function query($query)
    {
        $this->stmt = $this->baseInit->prepare($query);
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function  resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }


}
