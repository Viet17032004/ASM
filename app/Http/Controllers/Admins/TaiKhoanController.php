<?php

namespace App\Http\Controllers\Admins;

use App\Models\TaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TaiKhoanController extends Controller
{
    public $tb_tai_khoan;

    public function __construct()

    {
        $this->tb_tai_khoan = new TaiKhoan();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listTaiKhoan = TaiKhoan::all();
        return view('admins.taikhoan.index', ['tb_tai_khoan' => $listTaiKhoan]);
        //

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // Sử dụng QuryBuider
        $tb_chuc_vu = DB::table('tb_chuc_vu')->get();
        //Hiển thị ra file view
        return view('admins.taikhoan.add' , ['tb_chuc_vu' => $tb_chuc_vu]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //xử lý ảnh
    if($request->hasFile('anh_dai_dien')){
$filename = $request->file('anh_dai_dien')->store('uploads/taikhoan','public');
    }else{
        $filename = null;
    }
$dataInsert = [
    'anh_dai_dien' => $filename,
    'ho_ten' => $request->ho_ten,
    'email' => $request->email,
    'so_dien_thoai' => $request->so_dien_thoai,
    'gioi_tinh' => $request->gioi_tinh,
    'dia_chi' => $request->dia_chi,
    'ngay_sinh' => $request->ngay_sinh,
    'mat_khau' => $request->mat_khau,
    'chuc_vu_id' => $request->chuc_vu_id,
    'trang_thai'=>$request->trang_thai,
];
//dd($dataInsert);
$this->tb_tai_khoan->createTaiKhoan($dataInsert);
return redirect()->route('taikhoan.index');
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
        $title = "Chỉnh sửa sản Phẩm";
        //Lấy thông tin chi tiết
        //Sử dụng quyry buider
        $TaiKhoan = $this->tb_tai_khoan->find($id);
        
        //Sử dụng Eloquent
        // $TaiKhoan = TaiKhoan::findOrFail($id);
        $tb_chuc_vu = DB::table('tb_chuc_vu')->get();
        if(!$TaiKhoan){
            return redirect()->route('taikhoan.index')->with('error','sản phẩm ko tồn tại');
            
        }
        return view('admins.taikhoan.update', compact('title','TaiKhoan','tb_chuc_vu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          //
          if ($request->isMethod('PUT')) {

            $params = $request->except('_token', '_method');
            $TaiKhoan = TaiKhoan::findOrFail($id);
            //Xử lý Hình Ảnh
            if ($request->hasFile('anh_dai_dien')) {
                //Nếu có đẩy hỉnh ảnh thì sẽ xóa hình cũ Thêm hình mới 
                if ($TaiKhoan->anh_dai_dien) {
                    Storage::disk('public')->delete($TaiKhoan->anh_dai_dien);
                }
                $params['anh_dai_dien'] = $request->file('anh_dai_dien')->store('uploads/taikhoan', 'public');
            } else {
                //Nếu không có hình ảnh sẽ lấy lại hình ảnh cũ 
                $params['anh_dai_dien'] = $TaiKhoan->anh_dai_dien;
            }
            //Cập nhật dữ liệu
            //Eloquent
            $TaiKhoan->update($params);
            return redirect()->route('taikhoan.index')->with('sucess', 'Cập nhật  sản phẩm thành công?');
            // 

        }

        //


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        if ($request->isMethod('DELETE')) {
            $TaiKhoan = TaiKhoan::findOrFail($id);

            if ($TaiKhoan) {
                $TaiKhoan->delete();
                return redirect()->route('taikhoan.index')->with('sucess', 'Xóa sản phẩm thành công?');
            }
            return redirect()->route('khach_hang.index')->with('error', 'Không có sản phẩm');
        }

    }
}
