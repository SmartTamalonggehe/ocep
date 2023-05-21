<?php

namespace App\Http\Controllers\API;

use App\Models\kamus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KamusApi extends Controller
{
    public function index()
    {
        $data = kamus::with('indonesia', 'waropen')->get();
        return response()->json($data);
    }
}
