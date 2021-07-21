<?php
//
//namespace App\Http\Controllers;
//
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
//use mysqli;
//
//class BaseController extends Controller
//{
//    private $baseInit = null;
//    public $result = null;
//
//
//    public function getBases()
//    {
//        $bases = DB::table('bases')->get();
//
//        return view("index")->with('bases', $bases);
//    }
//
//    public function getData()
//    {
//        // get posts
//        $this->result = $this->baseInit->query("SELECT * FROM wp_posts ");
//
//    }
//
//    public function getBasePosts(Request $request)
//    {
//        $command = $_REQUEST['base'];
//
//        foreach($command as $baseId) {
//            $bases = [];
//            $bases = DB::table('bases')->where('id', $baseId)->get();
//
//            foreach($bases as $base){
//                $getBase = [
//                    'id' => $base->id,
//                    'host' => $base->host,
//                    'user' => $base->user,
//                    'password' => $base->password,
//                    'dbname' => $base->dbname,
//                ];
//            }
//        }
//
//        // connection
//        $this->baseInit = new mysqli($getBase['host'], $getBase['user'], $getBase['password'], $getBase['dbname']);
//
//        // Check connection
//        if ($this->baseInit->connect_error) {
//            die("Connection failed: " . $this->baseInit->connect_error);
//        }
//
//        $this->getData();
//
//        if(isset($_GET['base']))
//        {
//            $list = array (
//                array('aaa', 'bbb', 'ccc', 'dddd'),
//                array('123', '456', '789'),
//                array('"aaa"', '"bbb"')
//            );
//
//            $fp = fopen('file2.txt', 'w');
//
//            foreach($list as $row){
//                fputcsv($fp, $row);
//            }
//            fclose($fp);
//
//            echo "csv file Downloaded";
//
//        }else{
//            echo "some";
//        }
//
//        return view('getData')->with('result', $this->result);
//    }
//
//    public function download_csv()
//    {
//
//        if(isset($_GET['base']))
//        {
//            $list = array (
//                array('aaa', 'bbb', 'ccc', 'dddd'),
//                array('123', '456', '789'),
//                array('"aaa"', '"bbb"')
//            );
//
//            $fp = fopen('file2.txt', 'w');
//
//            foreach($list as $row){
//                fputcsv($fp, $row);
//            }
//            fclose($fp);
//
//            echo "csv file Downloaded";
//
//        }else{
//            echo "some";
//        }
//    }
//
//}
