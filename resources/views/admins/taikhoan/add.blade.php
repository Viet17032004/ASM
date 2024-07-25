
@extends('layouts.admin')

@section('title', 'Danh sách Khách Hàng')
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
          <form action="{{ route('taikhoan.store') }}" method="POST" enctype="multipart/form-data">
            {{-- 1 cơ chế bảo mật của laravel --}}
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Hình ảnh:</label>
                <input type="file" class="form-control" name="anh_dai_dien">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tên tài khoản:</label>
                <input type="text" class="form-control" name="ho_ten" placeholder="Nhập tên  tài khoản">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Số lượng:</label>
                <input type="email" class="form-control" min="1" name="email"
                    placeholder="Nhập email">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Số điện thoại:</label>
                <input type="tel" class="form-control" min="1" name="so_dien_thoai"
                    placeholder="Nhập số điện thoại">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Giới Tính:</label>
                <input type="text" class="form-control"  name="gioi_tinh">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Địa chỉ :</label>
              <input type="text" class="form-control" name="dia_chi">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Ngày Sinh:</label>
            <input type="date" class="form-control"    name="ngay_sinh">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Mật khẩu:</label>
          <input type="password" class="form-control" min="1" name="mat_khau">
      </div>
            <div class="mb-3">
                <label for="" class="form-label">Danh mục:</label>
                <select class="form-select" name="chuc_vu_id">
                    @foreach ($tb_chuc_vu as $item)
                        <option value="{{ $item->id }}">{{ $item->ten_chuc_vu }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Trạng thái:</label>
                <select name="trang_thai" class="form-select">
                    <option selected>Chọn trạng thái</option>
                    <option value="0" >Ẩn</option>
                    <option value="1" >Hiển thị</option>
                </select>
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Thêm mới</button>
            </div>
        </form>
        </div>
    </div>
</div>


@endsection

