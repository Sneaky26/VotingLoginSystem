<?php
    include('connect.php');
    $sql = "SELECT * FROM voterinfo";

    $result = $conn->query($sql);

    echo"<table border=1>";
    echo"<tr>";
    echo"<th>Voter's ID</th><th>Username</th><th>Password</th><th>Delete Action</th></tr>";
    if ($result -> num_rows > 0){
        while ($row = $result->fetch_assoc()){
            echo"<tr><td>". $row['voterID'] . "</td>";
            echo"<td>". $row['username'] . "</td>";
            echo"<td>". $row['password'] . "</td>";
            echo"<td><a href='dataprocess.php?id=".$row['voterID']."'>delete</a></td>";
            echo"</tr>";
        }
    } else {
        echo"no content";
    }
    echo"</table>";

?>