<?php
    include "connect.php";
    $name = $_POST['name'];
    $sql = "SELECT * FROM user WHERE name LIKE '%$name%'";
    $result = $conn->query($sql);

    echo"<table border=1>
    <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>ACTIONS</th></tr>";
    while($row = $result -> fetch_assoc()){
        echo"<tr id='row".$row['id']."'>"
        ."<td>".$row['id']."</td>
        <td>".$row['name']."</td>
        <td>".$row['email']."</td>
        <td>".
        "<button onclick=deleteData('".$row['id']."')>DELETE</button>".
        "<button onclick=\"editData('".$row['id']."','".$row['name']."','".$row['email']."')\">EDIT</button>"
        ."</td>";
    }
    echo"</table>";
?>