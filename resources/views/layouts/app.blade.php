<html>
<head>
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: row;
            margin: 0;
        }
        #sidebar {
            width: 250px;
            background-color: #f4f4f4;
            padding: 20px;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div id="sidebar">
        @section('sidebar')
            <h3>Esto es la barra lateral.</h3>
        @show
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
