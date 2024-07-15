<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
       
    {{-- Nơi để các đường dẫn file css và thư viện css và thư viện dùng chung cho cả trang layout --}}
    @yield('css')
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        header {
            height: 56px; /* Ví dụ, bạn có thể điều chỉnh chiều cao này */
            background: #f8f9fa;
        }
        main {
            display: flex;
            flex: 1;
            padding-top: 56px; /* Điều chỉnh padding top để tránh trùng với header */
        }
        aside {
            width: 250px;
            background: #343a40;
            color: white;
        }
        .content {
            flex: 1;
            padding: 20px;
        }
    </style>
</head>

<body>
    <header>
      @include('admins.blocks.header')
    </header>
    <main>
        <aside>
          @include('admins.blocks.sidebar')
        </aside>
        <div class="content">
            {{-- Chỉ định section có tên trong yield được hiển thị  --}}
            @yield('content')
        </div>
    </main>
    <footer>
        @include('admins.blocks.footer')
    </footer>
    {{-- Nơi để các đường dẫn file js và thư viện js và thư viện dùng chung cho cả trang layout --}}
    
    @yield('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
