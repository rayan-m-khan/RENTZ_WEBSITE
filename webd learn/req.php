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
        a{
            color: #3a3838;
        text-decoration: none;
        }

        </style>
        <script>
              function f1(el){
            
            el.style.boxShadow = ' 0px 3px 6px  #f0c20a';
            el.style.opacity="0.8";
          }
          function fh2(el){
            el.style.boxShadow='none';
            el.style.opacity="1";
          }
        </script>
    </head>
    <body>
    <div class="bg">
            <p><img style="vertical-align: middle; box-shadow: none;" src="rlogo.png.crdownload" width="100px" height="100px" > <b style="color: rgb(15, 51, 8) ; font-size: 30px;font-family:Georgia, 'Times New Roman', Times, serif;">&emsp13;RENTZ  -  ADMIN PAGE</b> </p>
        </div>
        <p ><a href="admin.html" style="background-color: #3a3838;border-radius: 10px; padding: 5px; color: azure;" onmouseover="f1(this)" onmouseout="fh2(this)">HOME</a></p>

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
                    <tr >
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["age"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                        <td><?php echo $row["regno"]; ?></td>
                        <td><?php echo $row["cname"]; ?></td>
                        <td><?php echo $row["price"]; ?></td>
                        <td><?php echo $row["alloted"]; ?></td>
                        
                        <?php $x="'".$row["regno"]."'";?>
                        <td><form method="post" action="alloted.php">
                        <input type="hidden" id="bid" name="bid" value="<?php echo $row['regno']; ?>" readonly><br>
                        <input type="hidden" id="bid1" name="bid1" value="<?php echo $row['phone']; ?>" readonly><br>
                        <input type="submit" name="alo"  value="ALLOT"> / <input type="submit" name="del" value="DELETE">

                            </form>
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
        </table>

    </body>
</html>    



