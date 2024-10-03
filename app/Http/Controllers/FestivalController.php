<?php

namespace App\Http\Controllers;

use App\Models\Festival;
use Illuminate\Http\Request;

class FestivalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $festivals = Festival::paginate(10);
        return view('festival.index', compact('festivals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('festival.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'time' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        Festival::create($request->all());

        return redirect('/')->with('status', 'Festival updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Festival $festival)
    {
        return view('festival.show', compact('festival'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $festival = Festival::findOrFail($id);
        return view('festival.edit', compact('festival'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $festival = Festival::findOrFail($id);
        $festival->update($request->all());
        $festival->save();
        return redirect('/')->with('status', 'Festival updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Festival::findOrFail($id)->delete();
        return redirect('/')->with('status', 'Festival deleted successfully');
    }
}
