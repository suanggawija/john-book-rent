<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>John Book Rent | @yield('title', '')</title>
</head>
<style>
    *{
        font-family: sans-serif
    }
    main{
        padding: 0px 50px
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
         border: 1px solid #000000;
        padding: 2px;
    }
    nav ul{
        display: flex;
        align-items: center
    }
    nav ul li{
        padding: 5px;
        list-style: none;
        margin-right: 20px
    }
    nav ul li a{
        text-decoration: none;
    }

    button{
        background: blue;
        color: white;
        padding: 10px 15px;
        border: none;
        margin-bottom: 10px
    }
    .card{
        padding: 24px;
        border: 1px solid black;
        width: 23%
    }
    select, input{
        margin-bottom: 10px;
        width: 200px;
        height: 30px;
    }
    .card select{
        margin:  5px 0px 10px;
        width: 100%;
        height: 40px
    }

</style>
<body>
    <nav>
        <ul>
            <p style="font-size: 30px; margin-right: 20px">John Book</p>
            <li><a href="/">Book List</a></li>
            <li><a href="/author">Author List</a></li>
            <li><a href="/rate">Rating Form</a></li>
        </ul>
    </nav>
    <main>
        @yield('contain')
    </main>
</body>
</html>