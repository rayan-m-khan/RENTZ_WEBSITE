<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if(isset($_POST['alo'])){
    $reg ="'". $_POST['bid']."'";
    $ph = "'".$_POST['bid1']."'";
    
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
                
                $sql = "UPDATE reg SET alloted='YES' WHERE regno=$reg AND phone=$ph ";

                if (mysqli_query($conn, $sql)) {
                    echo "<h1> ALLOTED SUCCESSFULLY</h1> <br> <a href='req.php'>GO BACK</a>";
                    
                  } else {
                    echo "Error updating table: " . mysqli_error($conn);
                  }
                
                
                $conn->close();
  }
  else{
    $reg ="'". $_POST['bid']."'";
    $ph = "'".$_POST['bid1']."'";
    
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
                
                $sql = "DELETE FROM reg WHERE regno=$reg AND phone=$ph ";

                if (mysqli_query($conn, $sql)) {
                    echo "<h1> DELETED SUCCESSFULLY</h1> <br> <a href='req.php'>GO BACK</a>";
                    
                  } else {
                    echo "Error updating table: " . mysqli_error($conn);
                  }
                
                
                $conn->close();
  }
}


 ?>