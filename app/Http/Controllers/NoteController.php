<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notes;

class NoteController extends Controller
{
    //
    public function index()
    {
        return Notes::all();
    }
 
    public function show(Notes $note)
    {
        return $note;
    }

    public function store(Request $request)
    {
        $note = Notes::create($request->all());
        return response()->json($note, 201);
    }

    public function update(Request $request, Notes $note)
    {
        $note->update($request->all());
        return response()->json($note, 200);
    }

    public function delete(Notes $note)
    {
        $note->delete();

        return response()->json(null, 204);
    }
}
