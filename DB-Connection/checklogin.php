<?php
include ("connection.php");
if (isset($_POST["submit"])) {
    $username = $_POST [ "username"];
    $password = $_POST ["password"];

    $sql = "select * from signup where username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1){
        header("Location:welcome.php");
    }
    else{
        echo '<script>
            window.location.href = "login.php";
            alert("Login Failed . INVALID USERNAME OR PASSWORD!!")
        </script>';
    }
}
?>