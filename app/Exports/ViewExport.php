<?php
namespace App\Exports;
use App\Models\Answer;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;

class ViewExport implements FromView
{
    public function view(): View
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
        return view('statics.str', [
            'data' => $data
        ]);
    }
}
