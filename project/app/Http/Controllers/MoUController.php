<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mou;
use Carbon\Carbon;

class MoUController extends Controller
{
    
    public function index()
    {
        $today = Carbon::today();
        $livemous = mou::where('end_date','>=',$today)->get();
        $expiredmous = mou::where('end_date','<',$today)->get();
        return view('dashboard', compact('livemous','expiredmous'));
    }
    public function selectcolumns()
    {
        $data = mou::select('name','type')->get();
        return view('mou',compact('data'));
    }
    public function industrial()
    {
        $today = Carbon::today();
        $data = mou::where('type','industrial') ->where('end_date','>=',$today)->get();
        return view('industrial',compact('data'));
    }
    public function intercollege()
    {
        $today = Carbon::today();
        $data = mou::where('type','intercollege') ->where('end_date','>=',$today)->get();
        return view('intercollege',compact('data'));
    }
}





