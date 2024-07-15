
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
        <h4 class="card-header">Bảng Giỏ Hàng</h4>
        <div class="card-body">
            <a href="{{ route('giohang.create') }}" class="btn btn-success">Thêm sản phẩm</a>
            <table class="table">
                <thead>
                    <th>STT</th>
                    <th>Người đặt</th>
                    <th>Hành động</th>
                </thead>
                <tbody>
                    @foreach ($tb_gio_hang as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            
                            <td>{{ $item->NguoiDung->ho_ten }}</td>
                            
                            <td>
                                <a href="{{ route('giohang.edit', $item->id) }}">
                                    <button class="btn btn-warning">Sửa</button>
                                </a>
                                <form action="{{ route('giohang.destroy', $item->id) }}" method="post">
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

