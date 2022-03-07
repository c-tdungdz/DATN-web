  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../public/css/login.css">
  {{--  <link rel="stylesheet" href="../public/css/style.css">  --}}
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row">
      
      
<div class="wrapper fadeInDown">
    <div id="formContent">
       <!-- Tabs Titles -->
      <!-- Icon -->
      <div class="fadeIn first">
        <h1 style="color: black"> ADMIN</h1>
      </div>
  
      <!-- Login Form -->
      <form method="post" action="{{ route('dangnhap') }}">
        {{csrf_field() }}
        <input type="text" name="taikhoan" class="fadeIn second" placeholder="login" value="">
        <input type="password" name="matkhau" class="fadeIn third"  placeholder="">
        <a href="admin" class="btn btn-danger set-send" style="margin: 30px 0px"> Login </a>
      </form>
  
      <!-- Remind Passowrd -->
  
    </div>
  </div>

    </div>
  </div>
</body>
</html>