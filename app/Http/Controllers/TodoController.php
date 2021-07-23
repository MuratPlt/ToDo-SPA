<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index(){
        $Data = DB::select('select * from notes');

        return response()->json(['notes' => $Data]);
    }

    public function delete($id){
        DB::delete('delete from notes where id =' . $id);

        return response()->json([], 204);
    }
}
