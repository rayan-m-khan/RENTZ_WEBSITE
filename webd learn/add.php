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
        form{
            text-align: center;
            background-color: #f0c20a;
            width: 500px;
            height: 500px;
            padding: 20px;
            box-shadow: 0px 10px 10px grey;
            border-radius: 10px;
            
        }
        .ab{
            text-align: center;
            padding-left: 500px;
        }
        h5{
            color: grey;

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
<div class="ab">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<h5>ENTER THE DEATILS </h5>
REGISTER NUMBER &emsp; <input  id="reg" name="reg" type="text" placeholder="Enter register no." required><br><br>
IMAGE LINK &emsp;&emsp;&emsp;&emsp13;&emsp; <input  id="im" name="im" type="text" size="10000" style="width:165px;" placeholder="Enter image link" required><br><br>
CAR NAME &emsp;&emsp;&emsp;&emsp;&emsp; <input  id="cn" name="cn" type="text" placeholder="Enter carname" required><br><br>
MODEL YEAR&emsp;&emsp;&emsp; &emsp; <input  id="my" name="my" type="number" placeholder="Enter model year" required><br><br>
BRAND &emsp;&emsp;&emsp;&emsp;&emsp;
  <select id="br" name="br">
    <option value="AUDI">AUDI</option>
    <option value="BMW">BMW</option>
    <option value="TOYOTA">TOYOTA</option>
    <option value="JEEP">JEEP</option>
    <option value="HYUNDAI">HYUNDAI</option>
    <option value="JAGUAR">JAGUAR</option>
    <option value="NISSAN">NISSAN</option>
    <option value="MERCEDES-BENZ">MERCEDES-BENZ</option>
  </select><br><br>
CONDITION &emsp;&emsp;&emsp;&emsp;&emsp; <input  id="con" name="con" type="text" placeholder="Enter condition" required><br><br>
COLOR &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <input  id="col" name="col" type="text" placeholder="Enter colour" required><br><br>
DRIVEN  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp13; <input  id="dr" name="dr" type="number" placeholder="Enter driven in km "required><br><br>
VARIENT &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <input  id="var" name="var" type="text" placeholder="(DIESEL/PETROL)" required><br><br>
TYPE &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp13; <input  id="ty" name="ty" type="text" placeholder="(AUTOMATIC/MANUAL)" required><br><br>
PRICE &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <input  id="pr" name="pr" type="text" placeholder="Enter price/day" required><br><br>


<input type="submit" value="ADD">

</form>
</div>
<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $reg="'". $_POST['reg']."'";
    $im="'". $_POST['im']."'";
    $cn="'". $_POST['cn']."'";
    $my= $_POST['my'];
    $br="'". $_POST['br']."'";
    $con="'". $_POST['con']."'";
    $col="'". $_POST['col']."'";
    $dr=$_POST['dr'];
    $var="'". $_POST['var']."'";
    $ty="'". $_POST['ty']."'";
    $pr="'". $_POST['pr']." INR'";

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
    

$stmt = $conn->query("INSERT INTO allcars VALUES ($reg, $im, $cn,$my,$br,$con,$col,$dr,$var,$ty,$pr)");


if ($stmt==TRUE) {
    
    echo "<h2 >SUCCESSFULLY ADDED</h2>";
} else {
    // Insertion failed
    echo "Error inserting data ";
}
    $conn->close();
}



?>
</body>

</html>