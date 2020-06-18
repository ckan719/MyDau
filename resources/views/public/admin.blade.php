
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/styleforadmin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="admin">
                
                    <i class="fa fa-user-circle" aria-hidden="true"></i> <a href="">
                        @if(session()->exists('username'))
                            {{session()->get('username')}}
                        @endif
                    </a>
                    <a href="/public/out"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                
            </div>
            <div class="menu">
                <h2></h2>
                <ul>
                    <li id = "on-tc"><span>Trang chủ</span></li>
                    <li id = "on-tt"><span>Tin tức</span></li>
                    <li id = "on-sk"><span>Sự kiện</span></li>
                    <li id = "on-gt"><span>Giới thiệu</span></li>
                    <li id = "on-tk"><span>Tài khoản</span></li>
                    <li id = "on-ttcn"><span>Thông tin cá nhân</span></li>
                </ul>
            </div>
            <div class="footerleft">
                <div class="icon">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    <i class="fa fa-power-off" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="header">
                <div class="trai">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    <input type="text" placeholder = "Search"><i class="fa fa-search" aria-hidden="true"></i>
                </div>
                <div class="phai">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                </div>
            </div>
            <div class="content">
                <h2 id = "id-name">Quản lý</h2>
                
                <div class="form">
                    <div class="showhere">
                        
                    </div>
                </div>

            </div> 
        </div>
        <div style = "clear: both;"></div>
        <div class="footer">
            <p>Footer</p>
        </div>
    </div>
</body>
<script src="{{URL::asset('/js/jsforadmin.js')}}"></script>

</html>