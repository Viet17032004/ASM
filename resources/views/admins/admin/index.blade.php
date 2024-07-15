
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

  <div class="row">
    <div class="col-md-4 mb-4 ">

      
      <div class="bg-primary p-3">
        <h2>Danh sách tài khoản</h2>
        <h3 class="text-center "><p>Tổng số tài khoản: {{ $userCount }}</p></h3>
      </div>
    </div>
    <div class="col-md-4 mb-4 ">
      <div class="bg-success p-3">
        <h2>Danh sách sản phẩm</h2>
        <h3 class="text-center"><p>Tổng số sản phẩm: {{ $sanphammax}}</p></h3>
      </div>
    </div>
    <div class="col-md-4 mb-4 ">
   
     <div class="bg-info p-3">
      <h2>Danh sách đơn hàng</h2>
        <h3 class="text-center"><p>Tổng số đơn hàng: {{ $donhangmax}}</p></h3>
     </div>
    </div>
</div>
   
</div>



@endsection

