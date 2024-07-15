
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
        <h4 class="card-header">Danh sách đơn hàng</h4>
        <div class="card-body">
            <a href="{{ route('donhang.create') }}" class="btn btn-success">Thêm sản phẩm</a>
            <table class="table">
                <thead>
                    <th>STT</th>
                    <th>Mã đon hàng</th>
                    <th>id người đặt</th>
                    <th>tên người nhận</th>
                    <th>email người nhận</th>
                    <th>Số điện thoại người nhận</th>
                    <th>Địa chỉ</th>
                    <th>Tổng tiền</th>
                    <th>Ngày Đặt</th>
                    <th>Ghi chú</th>
                    <th>Phương thức thanh toán</th>
                    <th>Hành động</th>
                </thead>
                <tbody>
                    @foreach ($tb_don_hang as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->ma_don_hang  }}</td>
                            <td>{{ $item->nguoi_dung_id  }}</td>
                            <td>{{ $item->ten_nguoi_nhan }}</td>
                            <td>{{ $item->email_nguoi_nhan }}</td>
                            <td>{{ $item->so_dien_thoai_nguoi_nhan }}</td>
                            <td>{{ $item->dia_chi_nguoi_nhan }}</td>
                            <td>{{ $item->tong_tien }}</td>
                            <td>{{ $item->ngay_dat }}</td>
                            

                            
                            
                            <td>{{ $item->ghi_chu }}</td>
                            {{-- <td>{{ $item->phuong_thuc_thanh_toan_id  }}</td> --}}
                            <td>{{ $item->ThanhToans->ten_phuong_thuc }}</td>
                            <td>
                                <a href="{{ route('donhang.edit', $item->id) }}">
                                    <button class="btn btn-warning">Sửa</button>
                                </a>
                                <form action="{{ route('donhang.destroy', $item->id) }}" method="post">
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




