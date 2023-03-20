<?php
    session_start();
    include('server/connection.php');

    if(!isset($_SESSION['logged_in'])) {
        header('location:login.php');
        exit;
    }
     if(isset($_GET['logout'])){
        if  (isset($_SESSION['logged_in'])) {
            unset($_SESSION['logged_in']);
            unset($_SESSION['user_email']);
            unset($_SESSION['user_name']);
            unset($_SESSION['user_photo']);
            header('location: login.php');
            exit;
        }
     }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>
<body>
    <center><b><h2>WELCOME PAGE</h2></b></center>
   <center><table border="0"></center>
   <tr>
        <td rowspan="4">
        <td colspan="3">
            <img src ="itn.png" alt="logoitn" height="auto" width="180px">
        </td>
    </tr>
    <tr>
            <td>NAMA</td>
            <td>: Najwa Adinda</td>
        </tr>
        <tr>
            <td>NRP</td>
            <td>: 162021041</td>
        </tr>
        <tr>
            <td>KELAS</td>
            <td>: BB</td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <button style= "margin: 10px;">
                <a href="welcome.php?logout=1"style="text-decoration:none"
                id="logout-btn" class="btn btn-danger" name="logout-btn">LOG OUT</a>
                </button>
             </td>
         </tr>
    </table>
</body>
</html>
