<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cast;

class caseController extends Controller
{
    public function create()
    {
        return view('cast.create');
    }
    public function save(request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'umur' => 'required',
        ]);
        $cast = new cast;

        $cast->nama = $request->nama;
        $cast->umur = $request->umur;

        $cast->save();

        return redirect('/cast');
    }

    public function index()
    {
        $cast = cast::all();
        return view('cast.index', compact('cast'));
    }
    public function show($cast_id)
    {
        $cast = cast::where('id', $cast_id)->first();
        return view('cast.show', compact('cast'));
    }

    public function edit($cast_id)
    {
        $cast = cast::where('id', $cast_id)->first();
        return view('cast.edit', compact('cast'));
    }
    public function update(Request $request, $cast_id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'umur' => 'required',
        ]);
        $cast = cast::find($cast_id);

        $cast->nama = $request['nama'];
        $cast->umur = $request['umur'];

        $cast->save();
        return redirect('/cast');
    }
    public function delete($cast_id)
    {
        $cast = cast::find($cast_id);

        $cast->delete();

        return redirect('/cast');
    }
}
