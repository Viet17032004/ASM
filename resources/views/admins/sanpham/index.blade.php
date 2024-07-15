
@extends('layouts.admin')

@section('title', 'Danh Sách Sản Phẩm')
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
        <h4 class="card-header">Danh sách tài khoản</h4>
        <div class="card-body">
            <a href="{{ route('sanpham.create') }}" class="btn btn-success">Thêm sản phẩm</a>
            <table class="table">
                <thead>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Số Lượng</th>
                    <th>Giá Sản Phẩm</th>
                    <th>Giá Khuyến Mãi</th>
                    <th>Ngày Nhập</th>
                    <th>Mô tả</th>
                    <th>Danh Mục</th>
                    <th>Hành động</th>
                </thead>
                <tbody>
                    @foreach ($tb_san_pham as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->ten_san_pham }}</td>
                            <td>{{ $item->so_luong }}</td>
                            <td>{{ $item->gia_san_pham }}</td>
                            <td>{{ $item->gia_khuyen_mai }}</td>
                            <td>{{ $item->ngay_nhap }}</td>
                            <td>{{ $item->mo_ta }}</td>
                            
                            <td>{{ $item->ten_danh_muc }}</td>
                            <td>
                                <a href="{{ route('sanpham.edit', $item->id) }}">
                                    <button class="btn btn-warning">Sửa</button>
                                </a>
                                <form action="{{ route('sanpham.destroy', $item->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" onclick="return confirm('ban co muon xoa khong?')" class="btn btn-danger">Xóa</button>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection




