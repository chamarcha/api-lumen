<?php

namespace App\Http\Controllers;

use App\Models\customers;
use Illuminate\Http\Request;

class Customerscontroller extends Controller
{
    public function index()
    {
        $customers = customers::all ();
        return response() ->json($customers);
    }

    public function show($id)
    {
        $customers = customers::find ($id);
        return response() ->json($customers);
    }

    public function store(Request $request)
    {
        $customers = customers::create($request->all());
        return response() ->json("Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $customers = customers::find ($id);
        $customers->update($request->all());
        return response() ->json("Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $customers = customers::find ($id);
        $customers->delete();
        return response() ->json("Berhasil Dihapus");
    }

}