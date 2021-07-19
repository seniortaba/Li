<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Base;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    public function getBases()
    {
        $bases = DB::table('bases')->get();

        return view("index")->with('bases', $bases);
    }

    public function getBaseRequest()
    {
       $comand = $_REQUEST['base'];

        print_r(array_values($comand));

        foreach($comand as $baseId) {
            $getBase = [
                'id' => $baseId->id,
                'host'=> $baseId->host,
                'user'=> $baseId->user,
                'password'=> $baseId->password,
                'dbname'=> $baseId->dbname,
            ];
        }
       die($getBase);

        


        // $baseInit = new PDO("mysql:host=$getBase['dbname'];dbname=$getBase['dbname']", 
        // $getBase['user'], $getBase['paassword']);

        // if($baseInit->error){
        //     die('fuck');
        // }else{
        //     return "corect";
        // }
    // }
    
   }
}