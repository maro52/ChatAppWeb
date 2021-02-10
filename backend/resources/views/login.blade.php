<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/005c1b89ac.js" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>ログイン</title>
    </head>
    <body>
        <div class="mx-auto" style="width: 200px;"><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            <form action="{{ route('top') }}" method="post">
                @csrf
                <div class="form-group">
                <i class="fas fa-user"></i>
                    <label for="inputId"> ID</label>
                    <div class="row">
                        <div class="col-xs-4">
                            <input type="id" class="form-control" id="id" aria-describedby="idHelp" placeholder="ID">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <label for="inputPass">パスワード</label>
                    <div class="row">
                        <div class="col-xs-4">
                            <input type="password" class="form-control" id="pass" placeholder="パスワード">
                        </div>
                    </div>
                </div><br/>
                <button type="submit" class="btn btn-success">ログイン</button>
            </form>
        </div>
    </body>
</html>