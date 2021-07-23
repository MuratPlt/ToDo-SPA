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

    public function store($item){
        echo $item;
        //$id = DB::select('SELECT LAST_INSERT_ID() FROM notes');
        //DB::insert('INSERT INTO notes VALUES (' . $id . ', ' . $item . ')');
        return response()->json(201);
    }
}
