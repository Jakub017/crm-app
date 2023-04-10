<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Note;
use \Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $notes = Note::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        return view('notes.index', [
            'notes' => $notes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notes.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => 'required|unique:notes,title',
            'content' => 'required',
            'tags' => '',
        ]);

        $attributes['user_id'] = Auth::user()->id;
                
        Note::create($attributes);

        // Note::create([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'user_id' => Auth::user()->id,
        // ]);

        return redirect('/notatki');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        return view('notes.note', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {

        $attributes = $request->validate([
            'title' => 'required|unique:notes,title,' . $note->id,
            'content' => 'required',
            'tags' => '',
        ]);

        $note->update($attributes);

        return redirect('/notatki');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $note->delete();

        return redirect('/notatki');
    }
}
