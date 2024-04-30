<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'store';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'show' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        return 'destroy';
    }
}
