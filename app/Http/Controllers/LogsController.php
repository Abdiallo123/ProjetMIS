<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
class LogsController extends Controller
{
    public function index(){
       $logs = Log::orderBy('created_at', 'desc')->take(10)->get();

       return view('logs', compact('logs'));
    }
}
