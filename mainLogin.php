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
            <li><a href="mainLogin.php" onmouseover="hoverNav(this)" onmouseout="unhoverNav(this)">Login</a></li>
            <li><a href="signup.php"  onmouseover="hoverNav(this)" onmouseout="unhoverNav(this)">Signup</a></li>
            <li><a href="retrieve.php" onmouseover="hoverNav(this)" onmouseout="unhoverNav(this)">Table</a></li>
            <li><a href="addminus.php" onmouseover="hoverNav(this)" onmouseout="unhoverNav(this)">PlaceHolder</a></li>
        </ul>
    </nav>
    <main>
        <div id="mainCard">
        <form>
            <h1>Signup Section</h1>
            <label for="voterid">Voter's ID: </label>
            <input type="text" name="voterid" id="signupid"><br>
            <label for="username">Username: </label>
            <input type="text" name="username" id="signupuser"><br>
            <label for="password">Password: </label>
            <input type="password" name="password" id="signuppassword"><br>    
            <button type="button" onclick="signupInfo()">Submit</button>
        </form>
        </div>
        <div id="mainCard">
        <form>
            <h1>Login Section</h1>
            <label for="voterid">Voter's ID: </label>
            <input type="text" name="voterid" id="loginid"><br>
            <label for="username">Username: </label>
            <input type="text" name="username" id="loginuser"><br>
            <label for="password">Password: </label>
            <input type="password" name="password" id="loginpassword"><br>    
            <button type="button" onclick="checkPassword()">Submit</button>
        </form>
        </div>
    <main>
    <script src="process.js"></script>
</body>
</html>