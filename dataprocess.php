<?php
    include('connect.php');
    header("Location: signup.php");
    function insertDB($conn,$voterid,$username,$password){
        $sql = "INSERT INTO voterinfo
                VALUES('$voterid','$username','$password');";       
        if ($conn -> query($sql)){
            echo"hey it works to insert data";
        } else {
            echo"sorry failed to insert data";
        }
    }
    function deleteDB($conn,$voterid){
        $sql = "DELETE FROM voterinfo 
                WHERE voterid ='$voterid'";
        if ($conn -> query($sql)){
            echo"hey it works to delete data";
        } else {
            echo"sorry failed to delete data";
        }
    }
    function updateDB($conn,$voterid,$username,$password){
        $sql = "UPDATE voterinfo 
                SET voterid ='$voterid', username='$username', password='$password'
                WHERE voterid = '$voterid';";
        if ($conn -> query($sql)){
            echo"hey it works to update data";
        } else {
            echo"sorry failed to update data";
        }
    }
        
    if (isset($_POST['insertinfo'])){
        insertDB($conn,$_POST['voterid'],$_POST['username'],$_POST['password']);
    } else if (isset($_GET['id'])){
        deleteDB($conn,$_GET['id']);
    } else if (isset($_POST['updateinfo'])){
        updateDB($conn,$_POST['voterid'],$_POST['username'],$_POST['password']);
    }
?>