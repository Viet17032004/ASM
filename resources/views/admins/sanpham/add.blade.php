
@extends('layouts.admin')

@section('title', 'Danh sách Sản Phẩm')
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
          <form action="{{ route('sanpham.store') }}" method="POST" enctype="multipart/form-data">
            {{-- 1 cơ chế bảo mật của laravel --}}
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Tên sản phẩm:</label>
                <input type="text" class="form-control" name="ten_san_pham">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Số lượng :</label>
                <input type="number" class="form-control" name="so_luong" placeholder="Nhập tên  tài khoản">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Giá Sản Phẩm:</label>
                <input type="text" class="form-control" min="1" name="gia_san_pham"
                    placeholder="Nhập email">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Giá Khuyến Mãi :</label>
                <input type="text" class="form-control" min="1" name="gia_khuyen_mai"
                    placeholder="Nhập số điện thoại">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Ngày Nhập :</label>
              <input type="date" class="form-control" min="1" name="ngay_nhap"
                  placeholder="Nhập số điện thoại">
          </div>

           
      <div class="mb-3">
        <label for="" class="form-label">Mô tả:</label>
        <textarea class="form-control" rows="3" name="mo_ta" placeholder="Nhập mô tả sản phẩm"></textarea>
    </div>
            <div class="mb-3">
                <label for="" class="form-label">Danh mục:</label>
                <select class="form-select" name="danh_muc_id">
                    @foreach ($tb_danh_muc as $item)
                        <option value="{{ $item->id }}">{{ $item->ten_danh_muc }}</option>
                    @endforeach
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

