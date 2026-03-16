<?php   
    include "connect.php";

    $sql = "SELECT * FROM username";
    $result = $conn->query($sql);

    echo"<table border=1>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
    </tr>";
    while ($row = $result->fetch_assoc()){
        echo"<tr>
        <td>".$row['id']."</td>".
        "<td>".$row['name']."</td>".
        "<td>".$row['email']."</td>".
        "<td>"."<button onclick='deleteData(".$row['id'].")'>Delete</button>". 
        "<button onclick=\"editData('".$row['id']."','".$row['name']."','".$row['email']."')\"> Edit</button>"."</td></tr>";
    } 
    echo"</table>";
?>