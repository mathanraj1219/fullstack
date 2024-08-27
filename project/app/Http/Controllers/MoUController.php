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
        $data = mou::select('name','type','pdf_file')->get();
        return view('mou',compact('data'));
    }
    public function industrial()
    {
        $today = Carbon::today();
        $data = mou::where('type','industrial','pdf_file') ->where('end_date','>=',$today)->get();
        return view('industrial',compact('data'));
    }
    public function intercollege()
    {
        $today = Carbon::today();
        $data = mou::where('type','intercollege','pdf_file') ->where('end_date','>=',$today)->get();
        return view('intercollege',compact('data'));
    }

    // Method to show the "Add/Delete MoU" page
    public function manage()
    {
        $mous = mou::all(); // Fetch all MoUs for deletion dropdown
        return view('mous.manage', compact('mous'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'departments' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'type' => 'required|string|max:50',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'recipient_email' => 'required|email|max:255',
            'pdf_file'=>'required|mimes:pdf|max:2048'
        ]);
        if ($request->hasFile('pdf_file')) {
            $fileName = $request->file('pdf_file')->store('pdfs', 'public');
        }        
        mou::create([
            'name' => $request->name,
            'departments' => $request->departments,
            'company_name' => $request->company_name, // Include this
            'type' => $request->type,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'recipient_email' => $request->recipient_email,
            'pdf_file'=>$fileName,
        ]);
        return redirect()->back()->with('success', 'MoU added successfully!');
    }   
        

    public function destroy(Request $request)
    {
        $mou = mou::findOrFail($request->mou_id);
        $mou->delete();
        return redirect()->back()->with('success', 'MoU deleted successfully!');
    }


}



