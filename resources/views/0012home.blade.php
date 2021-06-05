<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <style>
        body {
          font-family: "Lato", sans-serif;
        }
        
        .sidenav {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #111;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
        }
        
        .sidenav a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 25px;
          color: #818181;
          display: block;
          transition: 0.3s;
        }
        
        .sidenav a:hover {
          color: #f1f1f1;
        }
        
        .sidenav .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }
        
        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
        </style>
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="{{ url('/') }}">Rak Buku</a>
        <a href="{{ url('rak-buku') }}">Buku</a>
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
    <div class="container mt-3">
        <h2 class="mt-5">Table Rak Buku</h2>
        <form action="{{ url('/') }}" method="">
            <div class="d-flex justify-content-between pt-2">
                <div class="mr-2 mb-2">
                    <input type="text" name="search" id="" class="form-control">
                </div>
                <div class="col-md">
                    <input type="submit" value="Search" class="btn btn-success btn-sm">
                </div>
            </div>
        </form>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Jenis</th>
                 
                </tr>
            </thead>
            <tbody>
                
            @foreach($data as $item)
			      <tr>
                <td>{{ $loop->iteration }} </td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->tahun_terbit }}</td>
                <td>{{ $item->jenis }}</td>
                
            </tr>
			      @endforeach
            </tbody>
        </table>
    </div>
</body>

<script src="{{ URL::asset('js/app.js') }}"></script>
<script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
    </script>
</html>