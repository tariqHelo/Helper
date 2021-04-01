<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaticsController extends Controller
{
    public function index()
    {

        $statics =  DB::select("SELECT * , count(*) as count FROM answers GROUP BY title , answer");
        $data = [];
        foreach ($statics as $key => $value) {
            if(isset($data[$value->title])):
                $data[$value->title][$value->answer] = $value->count;
            else:
                $data[$value->title] = [
                    $value->answer   =>  $value->count
                ];
            endif;
        }


        return view("statics.index" , ['data' => $data]);
    }
}
