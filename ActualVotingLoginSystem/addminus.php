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
            <li><a href="" onmouseover="hoverNav(this)" onmouseout="unhoverNav(this)">PlaceHolder</a></li>
        </ul>
    </nav>
    <main>
        <div id="mainCard">
        <form>
            <h1>add minus multi divi</h1>
            <label for="num1">Num 1: </label>
            <input type="text" id="num1" name="num1"><br>
            <label for="num2">Num 2: </label>
            <input type="text" id="num2" name="num2"><br>
            <label for="result" id="result">RESULT: </label> <br>
            <button type="button" onclick="processor('plus')">Plus</button>
            <button type="button" onclick="processor('minus')"> Minus</button>
            <button type="button" onclick="processor('divide')">Divide</button>
            <button type="button" onclick="processor('multiply')">Multiply</button>
        </form>
        </div>
    <main>
    <script src="process.js"></script>
</body>
</html>