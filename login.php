<?php
session_start();
include "config.php";
if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }    
}
$username=validate($_POST['username']);
$password=validate($_POST['password']);


if (empty($username)) {
    header("Location: index.php?error=User Name is required");
    exit();
} elseif (empty($password)) {
    header("Location: index.php?error=Password is required");
    exit();
} else {
    $sql="SELECT * FROM faculty WHERE faculty_id='$username' AND password='$password'";
    $result=mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)===1) {
        $row=mysqli_fetch_assoc($result);
        if ($row['faculty_id']===$username && $row['password']===$password) {
            $_SESSION['faculty_id']=$row['faculty_id'];
            $_SESSION['name']=$row['name'];
            $_SESSION['email']=$row['email'];
            header("Location: home.php");
            exit();
        } else {
            header("Location: index.php?error=Incorrect User Name or password");
            exit();
        }
    } else {
        header("Location: index.php?error=Incorrect User Name or password");
        exit();
    }
}
