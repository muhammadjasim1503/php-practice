<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "ticket_management_system";

$conn = new mysqli($server,$username, $password, $db);

$query = "Select * FROM users";
$result = $conn->query($query);


echo "Users Table<br>";
if ($result->num_rows>0){
    while ($row = $result->fetch_assoc()){
        var_dump($row);
        echo "<br>";
    }
}

echo "-----------------------------------------------------------------------------------------------------------<br>";
echo "Tickets table<br>";

$query = "Select * FROM tickets";

$result = $conn->query($query);
if ($result->num_rows>0){
    while ($row = $result->fetch_assoc()){
        var_dump($row);
        echo"<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<!DOCTYPE 