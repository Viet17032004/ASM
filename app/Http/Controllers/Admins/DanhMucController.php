<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $tb_danh_muc;
    public function __construct()
    
    {
        $this->tb_danh_muc = new DanhMuc();
    }
    public function index()
    {
        //
        $listDanhMuc = $this->tb_danh_muc->getAll();
        return view('admins.danhmuc.index',['tb_danh_muc' => $listDanhMuc]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admins.danhmuc.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if($request->hasFile('hinh_anh')){
            $filename = $request->file('hinh_anh')->store('uploads/danhmuc','public');
                }else{
                    $filename = null;
                }
            $dataInsert = [
                'hinh_anh' => $filename,
                'ten_danh_muc' => $request->ten_danh_muc,
                'mo_ta' => $request->mo_ta,
            ];
            //dd($dataInsert);
            $this->tb_danh_muc->createDanhMuc($dataInsert);
            return redirect()->route('danhmuc.index');
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
