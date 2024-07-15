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
</head>

<body>
    <header>
      @include('clients.blocks.header')
    </header>
    <main>
        <aside>
          @include('clients.blocks.sidebar')
        </aside>
        <div class="content">
            
                {{-- Chỉ định section có tên trong yield được hiển thị  --}}
                @yield('content')
        </div>
    </main>
    <footer>
        @include('clients.blocks.footer')
    </footer>
    {{-- Nơi để các đường dẫn file js và thư viện js và thư viện dùng chung cho cả trang layout --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </script>
    @yield('js')
</body>

</html>
