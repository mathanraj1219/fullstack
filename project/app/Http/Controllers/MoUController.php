<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mou; // Ensure this matches your model file name
use Carbon\Carbon;

class MoUController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $livemous = mou::where('end_date', '>=', $today)->get();
        $expiredmous = mou::where('end_date', '<', $today)->get();
        return view('dashboard', compact('livemous', 'expiredmous'));
    }

    public function selectcolumns()
    {
        $today = Carbon::today();
        $data = mou::select('name','departments','company_name', 'pdf_file')
                   ->where('end_date', '>=', $today)
                   ->get();
        return view('mou', compact('data'));
    }

    public function outcomes()
    {
        $today = Carbon::today();

        // Retrieve all active MoUs
        $data = mou::select('name', 'departments', 'company_name', 'pdf_file', 'outcome')
                   ->where('end_date', '>=', $today)
                   ->get();

        // Separate data into categories
        $placementData = $data->filter(function ($mou) {
            return stripos($mou->outcome, 'PLACEMENT') !== false;
        });

        $internshipData = $data->filter(function ($mou) {
            return stripos($mou->outcome, 'INTERNSHIP') !== false;
        });

        return view('outcomes', compact('placementData', 'internshipData', 'data'));
    }

    public function industrial()
    {
        $today = Carbon::today();
        $data = mou::where('type', 'industrial')
                   ->where('end_date', '>=', $today)
                   ->get();
        return view('industrial', compact('data'));
    }

    public function intercollege()
    {
        $today = Carbon::today();
        $data = mou::where('type', 'intercollege')
                   ->where('end_date', '>=', $today)
                   ->get();
        return view('intercollege', compact('data'));
    }

    public function showDepartmentMoUs($department)
    {
        $today = Carbon::today();

        // Retrieve MoUs that are active and relevant to the specified department
        $mous = mou::where('departments', 'LIKE', "%$department%")
                   ->where('end_date', '>=', $today)
                   ->get();

        // Pass the department name and MoUs to the view
        return view('mous.department', compact('department', 'mous'));
    }

    // Method to show the "Add/Delete MoU" page
    public function manage()
    {
        $mous = mou::all(); // Fetch all MoUs for deletion dropdown
        return view('mous.manage', compact('mous'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'departments' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'type' => 'required|string|max:50',
            'outcome' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'recipient_email' => 'required|email|max:255',
            'pdf_file' => 'required|mimes:pdf|max:2048',
        ]);

        // Handle the file upload
        $fileName = null;
        if ($request->hasFile('pdf_file')) {
            $fileName = $request->file('pdf_file')->store('pdfs', 'public');
        }

        try {
            mou::create([
                'name' => strtoupper($request->name),
                'departments' => strtoupper($request->departments),
                'company_name' => strtoupper($request->company_name),
                'type' => strtoupper($request->type),
                'outcome' => strtoupper($request->outcome),
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'recipient_email' => $request->recipient_email,
                'pdf_file' => $fileName,
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to add MoU.']);
        }
    
        return redirect()->back()->with('success', 'MoU added successfully!');
    }

    public function destroy(Request $request)
    {
        $mou = mou::findOrFail($request->mou_id);
        $mou->delete();
        return redirect()->back()->with('success', 'MoU deleted successfully!');
    }
}
