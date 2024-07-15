
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
          <form action="{{ route('danhmuc.store') }}" method="POST" enctype="multipart/form-data">
            {{-- 1 cơ chế bảo mật của laravel --}}
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Hình ảnh:</label>
                <input type="file" class="form-control" name="hinh_anh">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tên danh muc:</label>
                <input type="text" class="form-control" name="ten_danh_muc" placeholder="Nhập tên danh mục">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Mô tả:</label>
              <textarea class="form-control" rows="3" name="mo_ta" placeholder="Nhập mô tả sản phẩm"></textarea>
          </div>
            <div class="mb-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Thêm mới</button>
            </div>
        </form>
        </div>
    </div>
</div>


@endsection

