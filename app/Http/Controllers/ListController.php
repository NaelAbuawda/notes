<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function list(){
        $notes = Note::all()->sortByDesc('created_at');
        return view('list', compact('notes'));

    }
}
