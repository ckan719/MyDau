<!-- <?php
    session_start();
    if(isset($_SESSION['user'])){
        $con = mysqli_connect('localhost','root','','datadau') or die('Fail');
        $user = $_SESSION['user'];
        $sql = "SELECT * from account where user = '$user'";
        $rs = $con->query($sql);
        $row = mysqli_fetch_array($rs);
        if($row[3] == '0'){
            header('Location: ./dauportal.php');
        }else{
            header('Location: ./admin.php');
        }
    }
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('src/styleforlogin.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
			
        <header>Login</header>
        <form action="{{URL::to('/public/check')}}" method="POST">
        {{ csrf_field() }} 
            <div class="input-field">
                <input name="username" type="text" required>
                <label for="">Username</label>
            </div>
            <div class="input-field" >
                <input name="pass" class="pw" type="password"required>
                <span class="show"><i class="fa fa-eye" aria-hidden="true"></i></span>
                <label for="">Password</label>
            </div>
            <div class="button">
                <div class="inner">
                    <button class="button1" type="submit" name = login-submit>Login</button>
                </div>               
            </div>
        </form>
        <div class="conten">Or login with</div>
        <div class="link">
            <div class="facebook">
                <i class="fa fa-facebook-square" aria-hidden="true"><span>Facebook</span></i>
            </div>
            <div class="google">
                <i class="fa fa-google-plus-square" aria-hidden="true"><span>Google</span></i>
            </div>
        </div>
        <div class="sigup">
            Not a member? <a href="#">Signup now</a>
        </div>
    </div>

    <script>
        var x = document.querySelector('.pw');
        var y = document.querySelector('.show');
        y.addEventListener('click',active);
        function active(){
            if(x.type === 'password'){
                x.type = 'text';
                y.style.color = "#1DA1F2";
            }else{
                x.type ='password';
                y.style.color = "#111";
            }
        }
    </script>
</body>
</html>