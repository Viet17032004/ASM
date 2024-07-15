<?php

namespace App\Http\Controllers\Admins;

use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public $tb_san_pham;

     public function __construct()

     {
        $this->tb_san_pham = new SanPham();
     }
    public function index()
    {
        //
        $listSanPham = $this->tb_san_pham->getAll();
        return view('admins.sanpham.index',['tb_san_pham' => $listSanPham]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $tb_danh_muc = DB::table('tb_danh_muc')->get();
        return view('admins.sanpham.add',['tb_danh_muc'=>$tb_danh_muc]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $dataInsert = [
            'ten_san_pham' => $request->ten_san_pham,
            'so_luong' => $request->so_luong,
            'gia_san_pham' => $request->gia_san_pham,
            'gia_khuyen_mai' => $request->gia_khuyen_mai,
            'ngay_nhap' => $request->ngay_nhap,
           
            'mo_ta' => $request->mo_ta,
            'danh_muc_id' => $request->danh_muc_id,
        ];
        //dd($dataInsert);
        $this->tb_san_pham->createSanPham($dataInsert);
        return redirect()->route('sanpham.index');
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
