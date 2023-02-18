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
            'title' => 'required|max:50',
            'content' => 'required|min:20',
            // 'icon' => 'image',
        ]);

        $attributes['user_id'] = Auth::user()->id;
        // $attributes['icon'] = $request->file('icon')->store('icons');
        
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
    public function show($id)
    {
        $note = Note::find($id);
        return view('notes.note', [
            'note' => $note,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note = Note::find($id);
        return view('notes.edit', [
            'note' => $note,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $note = Note::find($id);

        $attributes = $request->validate([
            'title' => 'required|max:50',
            'content' => 'required|min:20'
        ]);

        $note->update($attributes);

        // $note->update([
        //     'title' => $request->title,
        //     'content' => $request->content
        // ]);

        return redirect('/notatki');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Note::find($id);
        $note->delete();

        return redirect('/notatki');
    }
}
