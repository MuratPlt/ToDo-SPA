<?php

namespace App\Http\Controllers;

use App\Models\Notes;
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

    public function store(Request $item){
        $Todo = new Notes();
        $Todo->id = (int)DB::table('notes')->max('id') + 1;
        $Todo->todo = $item->todo;
        $Todo->save();
    }
}
