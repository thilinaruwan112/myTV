<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        // Path to the JSON file
        $filePath = storage_path('app/data.json');

        // dd($filePath);
        // Check if the file exists
        // if (!Storage::exists($filePath)) {
        //     abort(404, 'JSON file not found.');
        // }

        // Read the JSON file
        $json = file_get_contents($filePath);

        // Decode JSON data
        $data = json_decode($json);
        // Pass data to the view
        return view('home', ['cards' => $data]);
    }
}
