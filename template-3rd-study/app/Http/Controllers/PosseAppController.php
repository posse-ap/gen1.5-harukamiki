<?php

namespace App\Http\Controllers;
use App\InputData;
use App\Languages;
use App\Contents;
use App\LanguagesData;
use App\ContentsData;
use Illuminate\Http\Request;

class PosseAppController extends Controller
{
    public function index(){
    //すべてのレコード
        $study_time_all = InputData::All();
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

        // 棒グラフ　(今月)
        $month_days = date('t');
        $this_month =  date('Y-m');

        $day = 1;
        $study_length_per_day = [];
        while($day <= $month_days){
            $total_per_day = InputData::where('studied_on', $this_month . '-' . $day)->sum('length');
            $study_length_per_day[] = $total_per_day;
            $day++;
        }

        // 円グラフ　言語別
        $study_time_by_language = LanguagesData::select("language_id")->selectRaw('SUM(length) as lang_total')->groupby("language_id")->get();

        // 円グラフ　学習コンテンツ別
        $study_time_by_content = ContentsData::select("content_id")->selectRaw('SUM(length) as content_total')->groupby("content_id")->get();

        // dd($study_time_by_content);
        // dd($study_time_by_language);
        // dd($study_length_per_day);
        // dd($language_list);
        

        return view('index', compact('study_time_all','study_time_today', 'study_time_month', 'study_time_total','study_length_per_day', 'language_list', 'contents_list', 'study_time_by_language', 'study_time_by_content'));
    }
}
