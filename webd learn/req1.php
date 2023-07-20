<!DOCTYPE html>
<html>
    <head>
        <style>
    .bg {
            background-color: #f0c20a;
            box-shadow: 10px 5px 20px grey ;
            color: white;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        table{
            border-collapse: collapse;
            width: 1500px;
            
        }
        tr,td{
            border:2px solid black;
            border-spacing: px;
            padding: 10px;
            text-align: center;


        }
        </style>
<script>
function fun1(ele) {
    var buttonId = 'button_' + ele;
    var rowId = ele;

    // Create an AJAX request to send the row ID to the PHP function
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        
        if (this.readyState == 4 && this.status == 200) {<?php
            
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
                echo "fail";
                $sql = "UPDATE reg SET alloted='YES' WHERE regno=$x ";

                if (mysqli_query($conn, $sql)) {
                    
                  } else {
                    echo "Error updating table: " . mysqli_error($conn);
                  }
                
                
                $conn->close();
           
            
            
            
            ?>
            console.log(this.responseText);
        }
    };
    xhttp.open("GET", "your-php-function.php?rowId=" + rowId, true);
    xhttp.send();
}
</script>

        
        
    </head>
    <body>
    <div class="bg">
            <p><img style="vertical-align: middle; box-shadow: none;" src="rlogo.png.crdownload" width="100px" height="100px" > <b style="color: rgb(15, 51, 8) ; font-size: 30px;font-family:Georgia, 'Times New Roman', Times, serif;">&emsp13;RENTZ  -  ADMIN PAGE</b> </p>
        </div><br><br>
        <?php
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
        

        

        $sql = "SELECT * FROM reg AS r,allcars AS a WHERE r.regno=a.regno ";
        $result = $conn->query($sql);

        // Check if the query was successful
        if ($result->num_rows > 0) {
            // Output data of each row
            ?><table>
                <tr >
                        <td>NAME</td>
                        <td>AGE</td>
                        <td>PHONE</td>
                        <td>REGISTER NO.</td>
                        <td>CAR</td>
                        <td>PRICE</td>
                        <td>ALLOTED</td>
                        <td>ACTION</td>
                    </tr><?php
         
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["age"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
            <td><?php echo $row["regno"]; ?></td>
            <td><?php echo $row["cname"]; ?></td>
            <td><?php echo $row["price"]; ?></td>
            <td><?php echo $row["alloted"]; ?></td>
            <td>
                <?php $buttonId = 'button_' . $row["regno"]; ?>
                <button name="b" id="<?php echo $buttonId; ?>" onclick="fun1('<?php echo $row['regno']; ?>')">ALLOT</button>
            </td>
        </tr>
        <?php
    }
    ?></table><?php
}
 else {
    echo "No records found.";
}

$conn->close();
            
        ?>
        

    </body>
</html>    