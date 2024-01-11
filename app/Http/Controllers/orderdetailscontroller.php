<?php

namespace App\Http\Controllers;

use App\Models\orderdetails;
use Illuminate\Http\Request;

class Orderdetailscontroller extends Controller
{
    public function index()
    {
        $orderdetails = orderdetails::all ();
        return response() ->json($orderdetails);
    }

    public function show($id)
    {
        $orderdetails = orderdetails::find ($id);
        return response() ->json($orderdetails);
    }

    public function store(Request $request)
    {
        $orderdetails = orderdetails::create($request->all());
        return response() ->json("Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $orderdetails = orderdetails::find ($id);
        $orderdetails->update($request->all());
        return response() ->json("Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $orderdetails = orderdetails::find ($id);
        $orderdetails->delete();
        return response() ->json("Berhasil Dihapus");
    }

}