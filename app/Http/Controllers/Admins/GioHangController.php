<?php

namespace App\Http\Controllers\Admins;

use App\Models\GioHang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GioHangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    $tb_gio_hang = GioHang::all();
    return view('admins.giohang.index',compact('tb_gio_hang'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
