<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name ="'". $_POST['name']."'";
    $ph = "'".$_POST['num']."'";
    $age = "'".$_POST['age']."'";
    $b="'".$_POST['bid']."'";
    
    
    $servername = "localhost";  
    $username = "root";  
    $password = ""; 
    $dbname = "cars";  

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    

$stmt = $conn->query("INSERT INTO reg VALUES ($name, $age, $ph,$b,'yes','no')");


if ($stmt==TRUE) {
    
$stmt1 = $conn->query("SELECT * FROM allcars WHERE regno=$b");
if ($stmt1->num_rows > 0) {
    // Output data of each row
    
    while ($row = $stmt1->fetch_assoc()) {
        $ff=$row['cname'];
        $bb=$row['brand'];
    }
}
    echo "<h2 >Your Request For Car '".$ff."' of Brand '".$bb."' has been Submitted successfully!</h2>";
} else {
    // Insertion failed
    echo "Error inserting data ";
}
    $conn->close();
}


?>
<a href="new.php" style="text-align:center;">RETURN TO HOME</a>
