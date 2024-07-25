<?php

namespace App\Http\Controllers\Admins;

use App\Models\DanhMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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
        $title = "Chỉnh sửa sản Phẩm";
        //Lấy thông tin chi tiết
        //Sử dụng quyry buider
        $DanhMuc = $this->tb_danh_muc->getDanhMuc($id);
        
        //Sử dụng Eloquent
        // $TaiKhoan = TaiKhoan::findOrFail($id);
       
        if(!$DanhMuc){
            return redirect()->route('danhmuc.index')->with('error','sản phẩm ko tồn tại');
            
        }
        return view('admins.danhmuc.update', compact('title','DanhMuc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        if ($request->isMethod('PUT')) {

            $params = $request->except('_token', '_method');
            $DanhMuc = DanhMuc::findOrFail($id);
            //Xử lý Hình Ảnh
            if ($request->hasFile('img_danh_muc')) {
                //Nếu có đẩy hỉnh ảnh thì sẽ xóa hình cũ Thêm hình mới 
                if ($DanhMuc->hinh_anh) {
                    Storage::disk('public')->delete($DanhMuc->hinh_anh);
                }
                $params['hinh_anh'] = $request->file('img_danh_muc')->store('uploads/danhmuc', 'public');
            } else {
                //Nếu không có hình ảnh sẽ lấy lại hình ảnh cũ 
                $params['hinh_anh'] = $DanhMuc->hinh_anh;
            }
            //Cập nhật dữ liệu
            //Eloquent
            $DanhMuc->update($params);
            return redirect()->route('danhmuc.index')->with('sucess', 'Cập nhật  sản phẩm thành công?');
            // 

        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        
    }
}
