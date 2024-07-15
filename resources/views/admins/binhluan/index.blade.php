
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
        <h4 class="card-header">Danh sách bình luận</h4>
        <div class="card-body">
            <a href="{{ route('binhluan.create') }}" class="btn btn-success">Thêm sản phẩm</a>
            <table class="table">
                <thead>
                    <th>STT</th>
                    <th>Tài khoản</th>
                    <th>Sản phẩm bình luận </th>
                    <th>Nội dung </th>
                    <th>Thời gian</th>
                    <th>Hành động</th>
                </thead>
                <tbody>
                    @foreach ($tb_binh_luan as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->TaiKhoans->ho_ten }}</td>
                            <td>{{ $item->SanPhams->ten_san_pham }}</td>
                            <td>{{ $item->noi_dung }}</td>
                            <td>{{ $item->thoi_gian }}</td>

                            <td>
                                <a href="{{ route('binhluan.edit', $item->id) }}">
                                    <button class="btn btn-warning">Sửa</button>
                                </a>
                                <form action="{{ route('binhluan.destroy', $item->id) }}" method="post">
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

