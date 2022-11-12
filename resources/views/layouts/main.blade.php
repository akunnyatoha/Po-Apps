<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0-beta.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0-beta.0/dist/trix.umd.min.js"></script>

    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: 'Oswald', sans-serif;
        }
    </style>

    <title>POS APPS | {{$title}}</title>
  </head>
  <body>
    
    <div class="vw-100 vh-100" style="background-color: rgb(255, 219, 219); display:flex; flex-direction:row;">

        {{-- Sidebar --}}
            <div class="bg-danger" style="width: 20vw; height:100vh; display:flex; flex-direction:column; padding:0 0; margin:0">
                <div class="container" style="color: white;">
                    <div class="mt-3 mb-2 text-center">
                        <span class="fs-3">POS WEB APP</span>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="mb-2 text-center">
                            <a href="/" style="text-decoration: none; color:white">Dashboard</a>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-2 text-center">
                            <a href="/purchase" style="text-decoration: none; color:white">Purchase Order</a>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-2 text-center">
                            <a href="/sales/create" style="text-decoration: none; color:white">Sales Order</a>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-2 text-center">
                            <a href="/barang" style="text-decoration: none; color:white">Barang</a>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-2 text-center">
                            <a href="/suplier" style="text-decoration: none; color:white">Suplier</a>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-2 text-center">
                            <a href="/customer" style="text-decoration: none; color:white">Customer</a>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="color:white">
                                  Report
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                  <li><a class="dropdown-item" href="/reportPo">Pembelian</a></li>
                                  <li><a class="dropdown-item" href="/reportSo">Penjualan</a></li>
                                </ul>
                              </div>
                            <hr>
                        </div>
                    </div>
                </div>

            </div>
        {{-- End Sidebar --}}
        
        {{-- Main --}}
            <div class="container" style="padding: 0 0;">
                {{-- Navbar --}}    
                        <nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow">
                            <div class="container">
                              <a class="navbar-brand" href="#">Navbar</a>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav ms-auto">
                                  <a class="nav-link active" href="#">Logout</a>
                                </div>
                              </div>
                            </div>
                        </nav>
                {{-- End Navbar --}}

                {{-- Content --}}
            <div>
                @yield('content')
            </div>
        {{-- End Content --}}

            </div>
        {{-- End Main --}}

        

    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>