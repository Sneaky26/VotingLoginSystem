# PHP Basics & MySQL Interactions

---

## 1. PHP Syntax

```php
<?php
    // your code goes here
?>
```
> Every PHP file starts with `<?php` and ends with `?>`
> Every line ends with `;`

---

## 2. Variables

```php
$name = "John";       // String
$age = 20;            // Number
$price = 12.5;        // Decimal
$isLoggedIn = true;   // Boolean
```
> All variables start with `$`

---

## 3. Echo (printing output)

```php
echo "Hello World";
echo $name;
echo "Hello " . $name;         // combining strings with .
echo "<h1>Hello $name</h1>";   // variables work inside double quotes
```

---

## 4. String Tricks

```php
strlen($name)           // length of string
strtoupper($name)       // "JOHN"
strtolower($name)       // "john"
trim($name)             // removes spaces from both ends
str_replace("a","b",$name) // replace characters
```

---

## 5. If / Else

```php
$age = 20;

if ($age >= 18) {
    echo "Adult";
} else if ($age >= 13) {
    echo "Teen";
} else {
    echo "Kid";
}
```

---

## 6. Arrays

```php
$fruits = ["apple", "banana", "mango"];

echo $fruits[0];         // "apple"
count($fruits);          // 3
array_push($fruits, "grape"); // add to end

// loop through array
foreach ($fruits as $fruit) {
    echo $fruit;
}
```

---

## 7. Functions

```php
function greet($name) {
    return "Hello " . $name;
}

echo greet("John"); // "Hello John"
```

---

## 8. Superglobals (getting data from forms)

```php
$_POST['username']   // get data sent via POST (forms)
$_GET['id']          // get data from URL like ?id=5
$_SESSION['user']    // store data across pages
```

---

## 9. Isset (checking if value exists)

```php
if (isset($_POST['username'])) {
    echo "username was submitted";
}

if (isset($_GET['id'])) {
    echo "id was passed in URL";
}
```

---

## 10. Include (reusing files)

```php
include('connect.php');   // include another PHP file
```
> Use this to include your database connection in every file

---

---

# MySQL Interactions

---

## 11. Connecting to Database

```php
<?php
$conn = new mysqli("localhost", "root", "", "votingsystem");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```
- `localhost` → server
- `root` → username (XAMPP default)
- `""` → password (XAMPP default is empty)
- `votingsystem` → your database name

---

## 12. SELECT (get data)

```php
$sql = "SELECT * FROM voterinfo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['voterid'];
        echo $row['username'];
    }
} else {
    echo "no data found";
}
```

---

## 13. INSERT (add data)

```php
$sql = "INSERT INTO voterinfo 
        VALUES('$voterid', '$username', '$password')";

if ($conn->query($sql)) {
    echo "inserted successfully";
} else {
    echo "failed to insert";
}
```

---

## 14. DELETE (remove data)

```php
$sql = "DELETE FROM voterinfo 
        WHERE voterid = '$voterid'";

if ($conn->query($sql)) {
    echo "deleted successfully";
} else {
    echo "failed to delete";
}
```

---

## 15. UPDATE (edit data)

```php
$sql = "UPDATE voterinfo 
        SET username = '$username', password = '$password'
        WHERE voterid = '$voterid'";

if ($conn->query($sql)) {
    echo "updated successfully";
} else {
    echo "failed to update";
}
```
> ⚠️ `UPDATE` has no `FROM` — common mistake!

---

## 16. SELECT with WHERE (search/filter)

```php
$sql = "SELECT * FROM voterinfo 
        WHERE voterid = '$voterid' 
        AND username = '$username'
        AND password = '$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "found!";
} else {
    echo "not found!";
}
```
> Use this for login checking

---

## 17. Displaying Data in HTML Table

```php
<?php
include('connect.php');
$sql = "SELECT * FROM voterinfo";
$result = $conn->query($sql);
?>

<table border="1">
    <tr>
        <th>Voter ID</th>
        <th>Username</th>
        <th>Password</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['voterid']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['password']; ?></td>
    </tr>
    <?php endwhile; ?>
</table>
```

---

## 18. Full dataprocess.php Structure

```php
<?php
include('connect.php');

function insertDB($conn, $voterid, $username, $password) {
    $sql = "INSERT INTO voterinfo VALUES('$voterid','$username','$password')";
    if ($conn->query($sql)) { echo "success"; } 
    else { echo "failed"; }
}

function deleteDB($conn, $voterid) {
    $sql = "DELETE FROM voterinfo WHERE voterid='$voterid'";
    if ($conn->query($sql)) { echo "success"; } 
    else { echo "failed"; }
}

function updateDB($conn, $voterid, $username, $password) {
    $sql = "UPDATE voterinfo SET username='$username', password='$password' WHERE voterid='$voterid'";
    if ($conn->query($sql)) { echo "success"; } 
    else { echo "failed"; }
}

function loginDB($conn, $voterid, $username, $password) {
    $sql = "SELECT * FROM voterinfo WHERE voterid='$voterid' AND username='$username' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) { echo "success"; } 
    else { echo "failed"; }
}

// trigger functions based on what was sent
if (isset($_POST['insertinfo'])) {
    insertDB($conn, $_POST['voterid'], $_POST['username'], $_POST['password']);
} else if (isset($_GET['id'])) {
    deleteDB($conn, $_GET['id']);
} else if (isset($_POST['updateinfo'])) {
    updateDB($conn, $_POST['voterid'], $_POST['username'], $_POST['password']);
} else if (isset($_POST['logininfo'])) {
    loginDB($conn, $_POST['voterid'], $_POST['username'], $_POST['password']);
}
?>
```

---

## 19. Common Mistakes

| Wrong | Correct |
|---|---|
| `UPDATE FROM voterinfo` | `UPDATE voterinfo` (no FROM) |
| forgetting `;` at end of line | always end with `;` |
| `$variable` outside `<?php ?>` | wrap in `<?php echo $var; ?>` |
| same function name twice | use different names |
| `header()` before `echo` | put `header()` before any output |

---

## 20. Quick SQL Cheat Sheet

```sql
SELECT * FROM table                          -- get all
SELECT * FROM table WHERE id = '1'          -- get one
INSERT INTO table VALUES('a','b','c')       -- add
DELETE FROM table WHERE id = '1'            -- remove
UPDATE table SET col='val' WHERE id = '1'  -- edit
```
