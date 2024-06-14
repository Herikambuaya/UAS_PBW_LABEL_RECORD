<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LabelRecord; // Pastikan ini adalah model yang sesuai

class ApiController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = Data::where('lableName', 'LIKE', "%{$query}%")
                        ->orWhere('description', 'LIKE', "%{$query}%")
                        ->get();

        return response()->json($results);
    }
}