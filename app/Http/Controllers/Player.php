<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Player extends Controller
{
    public function index($channelKey, $defaultName)
    {
        // Path to the JSON file
        $filePath = storage_path('app/data.json');

        // Read the JSON file
        $json = file_get_contents($filePath);

        // Decode JSON data
        $data = json_decode($json);

        // Pass data to the view
        return view('player', [
            'channelKey' => $channelKey,
            'defaultName' => $defaultName,
            'data' => $data,
        ]);
    }
}
