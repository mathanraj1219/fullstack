<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


class MoUController extends Controller
{
    // Method to show the MoUs
    public function index()
    {
        // Example: Static data (Replace this with actual database queries)
        $liveMoUs = [
            ['id' => 1, 'name' => 'MoU 1', 'department' => 'CSE', 'company_name' => 'Company A', 'start_date' => '2023-01-01', 'end_date' => '2025-01-01'],
            ['id' => 2, 'name' => 'MoU 2', 'department' => 'ECE', 'company_name' => 'Company B', 'start_date' => '2022-05-10', 'end_date' => '2024-05-10'],
        ];


        $expiredMoUs = [
            ['id' => 1, 'name' => 'MoU 3', 'company_name' => 'Company C'],
            ['id' => 2, 'name' => 'MoU 4', 'company_name' => 'Company D'],
        ];


        // Pass the data to the view
        return view('dashboard', compact('liveMoUs', 'expiredMoUs'));
    }
}





