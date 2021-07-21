<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    private $DB;

    public function __construct()
    {
        $this->DB = new BaseController('base');
    }


    public function getBases()
    {
        $bases = DB::table('bases')->get();
        return view("index")->with('bases', $bases);
    }


    public function getPosts()
    {
        $this->DB->query("SELECT * FROM wp_posts");
        $results = $this->DB->resultSet();
        return view('getData')->with('results', $results);
    }

    public function DownloadCSV()
    {
        $this->DB->query('SELECT * FROM wp_posts');
        $results = $this->DB->resultSet();

        if(isset($_GET['base']))
        {
            $fp = fopen('file3.csv', 'w');

            foreach($results as $row){
                fputcsv($fp, $row);
            }
            fclose($fp);

            echo "csv file Downloaded";

        }else{
            echo "some";
        }

    }
}
