<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function createNote(Request $request){
    $note = new Note();
    $note->title = $request['title'];
    $note->content = $request['content'];
    $note->save();
    return view('create');
    }
}
