<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>J109212106的期末作業</title>
  </head>
  <body>
    <div class="container">
    <h1>陳仁志的期末作業</h1>
    @auth
    <?php $username = Auth::user()->name; echo $username; ?>
    @endauth
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">J109212106</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">首頁</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/lucky/">樂透</a>
                </li>
                @guest
                <li class="nav-item">
                <a class="nav-link" href="/login/">登入</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/register/">註冊</a>
                </li>
                @endguest
                @auth
                <li class="nav-item">
                <a class="nav-link" href="/mylogout/">登出</a>
                </li>
                <li class="nav-item">
                @endauth
                <!--
                <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                -->
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
                </head>
                <body>
                    
                </body>
                </html>>
            </ul>
            </div>
        </div>
        </nav>

    @auth <!--登入的人才有權限 -->
    <form method='get' action="/insert/">
        @csrf
    最新消息: <input type=text size=40 name=title>
    <input type=submit value="新增">
    </form>
    @endauth
    <table class="table table-striped"> <!--讓表格比較漂亮-->
    <tr>
            <th>編號</th><th>馬路消息</th><th>張貼時間</th><th>管理</th>
    </tr>
    @foreach ($titles as $item)
        <tr>
            <td>{{ $item -> id }}</td>
            <td>{{ $item -> title }}</td>
            <td>{{ $item -> created_at }}</td>
            <td><a href="/remove/{{ $item->id }}/">刪除</a></td>
        </tr>
    @endforeach
    </table>


    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>