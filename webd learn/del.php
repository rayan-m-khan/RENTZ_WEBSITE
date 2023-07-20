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
            height: 250px;
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
<br><h5>NOTE: TO REMOVE ANY CAR FROM THE LIST JUST ENTER ITS REGISTER NUMBER</h5><br><br><br>
REGISTER NUMBER &emsp; <input id="reg" name="reg" type="text" required><br><br>
<input type="submit" value="DELETE">

</form>
</div>
<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $r="'". $_POST['reg']."'";

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
    

$stmt = $conn->query("SELECT * FROM reg where regno=$r");
$stmt1=$conn->query("SELECT * FROM allcars WHERE regno=$r");


if ($stmt->fetch_assoc() > 0) {
    
    $s1=$conn->query("DELETE FROM reg WHERE regno=$r");
    
}
if($stmt1->fetch_assoc()>0){
    $s2=$conn->query("DELETE FROM allcars WHERE regno=$r");
    echo "DELETION SUCCESSFULL";
} 
else{
    echo "INVALID REGISTRATION NUMBER";
}
    
    
}

?>
</body>

</html>