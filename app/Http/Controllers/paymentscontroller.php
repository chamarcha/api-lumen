<?php

namespace App\Http\Controllers;

use App\Models\payments;
use Illuminate\Http\Request;

class Paymentscontroller extends Controller
{
    public function index()
    {
        $payments = payments::all ();
        return response() ->json($payments);
    }

    public function show($id)
    {
        $payments = payments::find ($id);
        return response() ->json($payments);
    }

    public function store(Request $request)
    {
        $payments = payments::create($request->all());
        return response() ->json("Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $payments = payments::find ($id);
        $payments->update($request->all());
        return response() ->json("Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $payments = payments::find ($id);
        $payments->delete();
        return response() ->json("Berhasil Dihapus");
    }

}