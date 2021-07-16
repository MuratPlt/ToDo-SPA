<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index(){
        $Data = DB::select('select todo from notes');

        return response()->json(['todos' => $Data]);
    }
}
