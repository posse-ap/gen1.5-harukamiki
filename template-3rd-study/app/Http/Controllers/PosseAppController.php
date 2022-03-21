<?php

namespace App\Http\Controllers;
use App\InputData;
use App\Languages;
use App\Contents;
use Illuminate\Http\Request;

class PosseAppController extends Controller
{
    public function index(){
    //今日の合計勉強時間
        $today = date("Y-m-d"); 
        $study_time_today = InputData::where('studied_on', $today)->sum('length');

    //今月の合計勉強時間
        //月初め
        $startDate = new \DateTime('first day of this month');
        $startDate = $startDate->format('Y-m-d');
        //月終わり
        $endDate  = new \DateTime('last day of this month');
        $endDate = $endDate->format('Y-m-d');

        $study_time_month = InputData::whereBetween('studied_on', [$startDate, $endDate])->sum('length');

        //合計勉強時間
        $study_time_total = InputData::sum('length');

        // 言語
        $language_list =  Languages::All();
        
        // コンテンツ
        $contents_list =  Contents::All();

        return view('index', compact('study_time_today', 'study_time_month', 'study_time_total', 'language_list', 'contents_list'));
    }
}
