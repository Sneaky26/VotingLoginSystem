<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <div id ="imageTitle">
            <h2>Voting System</h2>
            <img src="" placeholder="Images">
        </div>
        <ul>
            <li><a href="mainLogin.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>
            <li><a href="retrieve.php">Table</a></li>
            <li><a href="addminus.php">PlaceHolder</a></li>
        </ul>
    </nav>
    <main>
        <div id="mainCard">
        <form action="dataprocess.php" method="post">
            <h1>Signup Section</h1>
            <label for="voterid">Voter's ID: </label>
            <input type="text" name="voterid"><br>
            <label for="username">Username: </label>
            <input type="text" name="username"><br>
            <label for="password">Password: </label>
            <input type="password" name="password"><br>    
            <button type="submit" name="insertinfo">Sign Up</button>
        </form>
        </div>
    <main>
    <script src="process.js"></script>
</body>
</html>
<?php
    include('retrieve.php');
?>