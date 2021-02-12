<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/005c1b89ac.js" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>トップ</title>
    </head>
    <body>
        <div class="mx-auto" style="width: 200px;"><br/><br/>
            <form action="{{ route('top') }}" method="post">
                @csrf
                <div class="form-group">
                <i class="fas fa-user"></i>
                    <label for="inputId"> 名前</label>
                    <div class="row">
                        <div class="col-xs-4">
                            <input type="name" class="form-control" id="name" placeholder="名前">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <label>コメント</label>
                    <textarea multiple class="form-control" id="comment" rows="3" placeholder="内容をご記入ください"></textarea>
                </div>
                <button type="submit" class="btn btn-success">投稿</button>
            </form>
        </div>
    </body>
</html>