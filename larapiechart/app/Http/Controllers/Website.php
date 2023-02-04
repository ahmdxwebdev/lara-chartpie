<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Website extends Controller
{
    public function index() {
        $result=DB::select(DB::raw('select count(*) as total_city, city from student group by city'));
        $chartData="";
        foreach($result as $list) {
            $chartData.="['".$list->city."', ".$list->total_city."],";
        }
        $arr['chartData']=rtrim($chartData, ",");
        return view('chart', $arr);
    }

    public function addData() {
        return view('addData');
    }

}
