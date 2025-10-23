<?php

namespace App\Http\Controllers;

use App\Models\ChatbotQa;
use Illuminate\Http\Request;

class ChatbotApiController extends Controller
{
    public function index()
    {
        $qas = ChatbotQa::orderBy('category')->get();

        $grouped = $qas->groupBy('category');

        return response()->json($grouped);
    }
}