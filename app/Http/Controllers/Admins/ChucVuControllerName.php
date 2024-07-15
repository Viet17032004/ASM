<?php

namespace App\Http\Controllers\Admins;

use App\Models\TaiKhoan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ChucVuModel;

class ChucVuControllerName extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public $tb_chuc_vu;
    public function __construct()
    
    {
        $this->tb_chuc_vu = new ChucVuModel();
    }
    public function index()
    {
        //
        $listChucVu = $this->tb_chuc_vu->getAll();
        return view('admins.chucvu.index',['tb_chuc_vu' => $listChucVu]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admins.chucvu.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $dataInsert = [
            
            'ten_chuc_vu' => $request->ten_chuc_vu,
            
        ];
        //dd($dataInsert);
        $this->tb_chuc_vu->createChucVu($dataInsert);
        return redirect()->route('chucvu.index');
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
