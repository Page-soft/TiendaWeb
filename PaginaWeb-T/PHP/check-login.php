<?php
    session_start();
    include "db_conn.php";

    if (isset($_POST['username']) && isset($_POST['psswd']) && isset($_POST['roles'])){

        function test_input($data){
            $data =trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $username = test_input($_POST['username']);
        $psswd = test_input($_POST['psswd']);
        $roles = test_input($_POST['roles']);

        if (empty($username)){
            header ("Location : index.php?error=Username Is Required");
        }else if (empty($psswd)){
            header("Location : index.php?error=Password Is Required");
        }else{
            $psswd = md5($psswd);

            $sql ="SELECT * FROM users WHERE username='$username' AND psswd='$psswd'";
            $result = mysqli_query($conn, $sql);


            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if ($row['psswd']=== $psswd && $row['roles']== $roles){
                    $_SESSION['nombre'] = $row['nombre'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['roles'] = $row['roles'];
                    $_SESSION['username'] = $row['username'];

                    header("Location: home.php");
               
                } else{
                    header("Location : index.php?error=Incorrect User name or password");
                }
            }else {
                header("Location: index.php?error=Incorrect User name or password");
            }
        }
    }
    else {
        header("Location: index.php");
    }