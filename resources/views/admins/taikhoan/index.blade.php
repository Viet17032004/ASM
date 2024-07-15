
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
        <h4 class="card-header">Danh sách tài khoản</h4>
        <div class="card-body">
            <a href="{{ route('taikhoan.create') }}" class="btn btn-success">Thêm sản phẩm</a>
            <table class="table">
                <thead>
                    <th>STT</th>
                    <th>Ảnh đại diện</th>
                    <th>Họ tên</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Giới Tính</th>
                    <th>Đại chỉ</th>
                    <th>Ngày Sinh</th>
                    <th>Mật khẩu</th>
                    <th>Chức Vụ</th>
                    <th>Hành động</th>
                </thead>
                <tbody>
                    @foreach ($tb_tai_khoan as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <img src="{{ Storage::url($item->anh_dai_dien) }}" width="100" height="100" alt="">
                            </td>
                            <td>{{ $item->ho_ten }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->so_dien_thoai }}</td>
                            <td>{{ $item->gioi_tinh }}</td>
                            <td>{{ $item->dia_chi }}</td>
                            <td>{{ $item->ngay_sinh }}</td>
                            <td>{{ $item->mat_khau }}</td>

                            <td>{{ $item->ten_chuc_vu }}</td>
                            <td>
                                <a href="{{ route('taikhoan.edit', $item->id) }}">
                                    <button class="btn btn-warning">Sửa</button>
                                </a>
                                <form action="{{ route('taikhoan.destroy', $item->id) }}" method="post">
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

