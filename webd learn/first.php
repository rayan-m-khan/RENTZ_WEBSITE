

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
        .ab{
            text-align: center;
            padding-left: 500px;
            
            

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
        <!-- <?php $b="'".$_GET['id']."'"; ?> -->
        <div class="bg">
            <p><img style="vertical-align: middle; box-shadow: none;" src="rlogo.png.crdownload" width="100px" height="100px" > <b style="color: rgb(15, 51, 8) ; font-size: 30px;font-family:Georgia, 'Times New Roman', Times, serif;">&emsp13;RENTZ - Your Ultimate Car Rental Experience</b> </p>
        </div>
            <p ><a href="new.php" style="background-color: #3a3838;border-radius: 10px; padding: 5px; color: azure;" onmouseover="f1(this)" onmouseout="fh2(this)">HOME</a>&emsp;&emsp;&emsp;&emsp;<a
              href="#contact"  style="background-color: #3a3838;border-radius: 10px; padding: 5px; color: azure;" onmouseover="f1(this)" onmouseout="fh2(this)">CONTACT</a>&emsp;&emsp;&emsp;&emsp;<a href="login.html"  style="background-color: #3a3838;border-radius: 10px; padding: 5px; color: azure;" onmouseover="f1(this)" onmouseout="fh2(this)">TERMS AND CONDITION</a></p>
        <br>
        <div class="ab">
            <form method="POST" action="abc.php" ><br><br>
                 NAME:&emsp;&emsp13; <input type="text" placeholder="Enter your name" id="name" name="name" required><br><br>
                 NUMBER: <input type="number" id="num" name="num" placeholder="Enter your number" required><br><br>
                 AGE: &emsp;&emsp;&emsp13;<input type="number" id="age" name="age"placeholder="Enter your age" required><br><br>
                 <input type="hidden" id="bid" name="bid" value="<?php echo $_GET['id']; ?>" readonly><br>
                 <input type="submit" value="Submit"><br> 


            </form>

            </div>
        
    
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