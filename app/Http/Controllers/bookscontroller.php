<?php

namespace App\Http\Controllers;

use App\Models\books;
use Illuminate\Http\Request;

class bookscontroller extends Controller
{
    public function index()
    {
        $books = books::all ();
        return response() ->json($books);
    }

    public function show($id)
    {
        $books = books::find ($id);
        return response() ->json($books);
    }

    public function store(Request $request)
    {
        books::create($request->all());
        return response() ->json("Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $books = books::find ($id);
        $books->update($request->all());
        return response() ->json("Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $books = books::find ($id);
        $books->delete();
        return response() ->json("Berhasil Dihapus");
    }

}