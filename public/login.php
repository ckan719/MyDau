<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="..\src\style.css">
    </head>
    <body>
        <div id="container">
            <div id="content">
                <div id="icon">
                    <img id="logo" src="..\image\logo.png" alt="logo">
                </div>
                <div id="signin"><h2>Sign In</h2></div>
                <div id="log">
                    <form method="POST" onsubmit="myFcsubmit()">
                        <input class="input" placeholder="User Name" type="text" id="username" name="name" required><br>
                        <input class="input" placeholder="Password" type="password" id="password" name="pass" required><br>
                        <input name="f_click" id="submit" type="submit" value="Login">
                    </form>
                </div>

            </div>
        </div>
        
    </body>
    <script src="..\js\handling.js"></script>
</html>