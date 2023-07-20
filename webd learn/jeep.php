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
        a{
            color: #3a3838;
        text-decoration: none;
        }
        
        
        h2{
            text-align: center;
            color: rgb(15, 51, 8);
            background-color:#f0c20a;
            border-radius: 90%;
            border-color: black;
            font-size: x-large;
            box-shadow: 10px 0px 20px rgb(67, 67, 48);
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        button{
            size: 10px;
            border-radius: 8px;
            background-color: whitesmoke;
            text-decoration: bold;
            box-shadow: 0px 0px 5px #f0c20a;
            font-size: 20;
        }
        .con{
          background-image: url(bg.jpg);
          text-align: center;
          color: white;

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
            <p><img style="vertical-align: middle; box-shadow: none;" src="rlogo.png.crdownload" width="100px" height="100px" > <b style="color: rgb(15, 51, 8) ; font-size: 30px;font-family:Georgia, 'Times New Roman', Times, serif;">&emsp13;RENTZ - Your Ultimate Car Rental Experience</b> </p>
        </div>
            <p ><a href="new.php" style="background-color: #3a3838;border-radius: 10px; padding: 5px; color: azure;" onmouseover="f1(this)" onmouseout="fh2(this)">HOME</a>&emsp;&emsp;&emsp;&emsp;<a
              href="#contact"  style="background-color: #3a3838;border-radius: 10px; padding: 5px; color: azure;" onmouseover="f1(this)" onmouseout="fh2(this)">CONTACT</a>&emsp;&emsp;&emsp;&emsp;<a href="login.html"  style="background-color: #3a3838;border-radius: 10px; padding: 5px; color: azure;" onmouseover="f1(this)" onmouseout="fh2(this)">TERMS AND CONDITION</a></p>
        <br>
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

        

        $sql = "SELECT * FROM allcars where brand='JEEP'";
        $result = $conn->query($sql);
        

        // Check if the query was successful
        if ($result->num_rows > 0) {
            // Output data of each row
            ?><table><?php
            while ($row = $result->fetch_assoc()) {
                $x="'".$row['regno']."'";
                $sq="SELECT * FROM reg where regno=$x ";
                $res1 = $conn->query($sq);
                $f1 = $res1->fetch_assoc();

                ?>
                    <tr >
                        <td> <img src=<?php echo "'".$row["image"]."'"; ?>  width="600px" height="300px" style="padding-left:35px;"></td>
                        <td style="text-align:center;background-color:darkslategrey;color:white;width:800px;border-radius:10px"><h1><b><?php echo $row["cname"]; ?></b></h1>
                        <p style="padding-left:30px;"><b>BRAND : <?php echo $row["brand"]; ?> &emsp;| &emsp; MODEL YEAR : <?php echo $row["model"]; ?> <br><br>DRIVEN : <?php echo $row["driven"]."kms"; ?> &emsp;| &emsp; CONDITION : <?php echo $row["condition"]; ?><br><br>COLOR : <?php echo $row["color"]; ?>&emsp;| &emsp;FUEL TYPE : <?php echo $row["varient"]; ?><br><br>TRANSMISSION : <?php echo $row["type"]; ?>&emsp;| &emsp;PRICE PER DAY : <?php echo $row["price"]; ?><br><br>
                       <?php 
                            if($f1 > 0){
                                ?> NOT AVAILABLE </b></p> </td><?php

                            }else{
                          ?>
                        <a href="first.php?id=<?php echo $row["regno"]; ?>" ><button  >RESERVE</button></a></b></p> </td>
            
                    </tr>
                    
                    
                    
                            <?php }
            }
            ?></table><?php
        }
         else {
            echo "No records found.";
        }
        $conn->close();
        ?>
        <br><br>
        <h2>CONTACT</h2>
        <div id="contact" class="con">
        <br><br><br>
        <p><u>PHONE</u></p>
        <p>+91 8759465120  or  +91 8754932457</p>
        <br>
        <p><u>EMAIL</u><br><br>rentz@gmail.com</p>
        <p ><u>HEAD QUARTERS</u><br><br>CITY: BANGLORE<br><br>STATE: KARNATAKA<br><br>COUNTRY: INDIA<br><br> </p>
        <p><u>FOLLOW US ON</u><br><br><a href="instagram.com"><img src="insta2.png" width="30px" height="30px"  onmouseover="f1(this)"  onmouseout="fh2(this)"></a>&emsp;<a href="facebook.com"><img src="face1.png" width="30px" height="30px" onmouseover="f1(this)"  onmouseout="fh2(this)"></a> </p><br><br><br><br>
        </div>


                
    </body>
</html>