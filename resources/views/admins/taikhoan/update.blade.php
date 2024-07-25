@extends('layouts.admin')

@section('title', 'Chỉnh Sửa Khách Hàng')
@section('css')
    {{-- Nơi để các đường dẫn file css và thư viện css dùng riêng cho trang  --}}
    <style>
        /* .content{
          background-color: aqua;
        } */
    </style>
    {{-- Hàm asset dùng để trỏ đường dẫn trong laravel --}}
    <link rel="stylesheet" href="{{ asset('assets/admins/css/index.css') }}">
@endsection
@section('content')



<div class="container">
    <div class="card">
        <h4 class="card-header">Thêm tài khoản</h4>
        <div class="card-body">
          <form action="{{ route('taikhoan.update',$TaiKhoan->id) }}" method="POST" enctype="multipart/form-data">
            {{-- 1 cơ chế bảo mật của laravel --}}
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Tên Tài Khoản:</label>
                <input type="text" class="form-control" value="{{$TaiKhoan->ho_ten}}" name="ho_ten">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email Tài Khoản:</label>
                <input type="email" class="form-control" name="email" value="{{$TaiKhoan->email}}" placeholder="Nhập tên sản phẩm">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Số Điện Thoại:</label>
                <input type="tel" class="form-control"  name="so_dien_thoai" value="{{$TaiKhoan->so_dien_thoai}}"
                    placeholder="Nhập email">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Giới Tính:</label>
                <input type="text" class="form-control"  name="gioi_tinh" value="{{$TaiKhoan->gioi_tinh}}"
                    placeholder="Nhập số điện thoại">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Địa Chỉ:</label>
                <input type="text" class="form-control"  name="dia_chi" value="{{$TaiKhoan->dia_chi}}"
                    placeholder="Nhập số điện thoại">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Ngày Sinh:</label>
                <input type="date" class="form-control"  name="ngay_sinh" value="{{$TaiKhoan->ngay_sinh}}"
                placeholder="Nhập số điện thoại">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Mật khẩu:</label>
                <input type="text" class="form-control"  name="mat_khau" value="{{$TaiKhoan->mat_khau}}"
                placeholder="Nhập số điện thoại">
            </div>
           
            <div class="mb-3">
                <label for="" class="form-label">Trạng thái:</label>
                <select name="trang_thai" class="form-select">
                    <option selected>Chọn trạng thái</option>
                    <option value="0" {{ $TaiKhoan->trang_thai == '0' ? 'selected' : '' }}>Ẩn</option>
                    <option value="1" {{ $TaiKhoan->trang_thai == '1' ? 'selected' : '' }}>Hiển thị</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Danh mục:</label>
                <select class="form-select" name="chuc_vu_id">
                    @foreach ($tb_chuc_vu as $item)
                        <option {{$item->id == $TaiKhoan->chuc_vu_id ? 'selected' : ''}} value="{{ $item->id }}">{{ $item->ten_chuc_vu }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Ảnh Tài Khoản:</label>
                <input type="file" class="form-control" name="anh_dai_dien" 
                    onchange="showImage(event)">
            </div>

            <img id="img_product" src="{{ Storage::url($TaiKhoan->anh_dai_dien) }}" alt="Hình ảnh sản phẩm" 
                style="width: 200px">

            <div class="mb-3 d-flex justify-content-center">
                <button type="reset" class="btn btn-outline-secondary me-3">Nhập lại</button>
                <button type="submit" class="btn btn-success">Chỉnh Sửa</button>
            </div>
        </form>
        </div>
    </div>
</div>


@endsection
@section('js')
    <script>
        function showImage(event) {
            const img_product = document.getElementById('img_product');

            const file = event.target.files[0];

            const reader = new FileReader();

            reader.onload = function () {
                img_product.src = reader.result;
                img_product.style.display = 'block';
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
