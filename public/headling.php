<?php 
        session_start();
        $namesever = "localhost";
        $user = "root";
        $account = "";
        $dbname = "datadau";
        $conn = new mysqli($namesever,$user,$account,$dbname);
        if($conn->connect_error){
            die("Connection failed : " . $conn->connect_error);
        }
        $name = $_POST["dname"];
        $pass = $_POST["dpass"];
        $sql = "select * from Account where '".$name."' = name and '".$pass."' = pass";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          $_SESSION['name'] = $name;
          echo 1;
        } else {
            echo -1;
        }
        $conn->close();
?>
