<!DOCTYPE html>
<html>

<head>
    <style>
      a{
        color: #3a3838;
        text-decoration: none;
        

      }
      /* header{
        position: fixed;
        width: 100%;
        top:0%;
        left:0px;
        padding-top: 0%;
      } */
      
        .bg {
            background-color: #f0c20a;
            box-shadow: 10px 5px 20px grey ;
            color: white;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            top:0px;
            padding-top: 0%;
            box-sizing: border-box;
            position: relative;
            width: 100%;
            border-top: 0%;
            left:0px;
        }
        table,tr,td{
            text-align: center;
            padding-left: 30px;
        }
       

        h3{
          background-color: #f0c20a;
          border-radius: 0%;
          box-shadow:10px 0px 10px #717171;

          
        }

        * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .mySlides {display: none;}
        img{vertical-align:bottom;box-shadow:10px 0px 10px #494646;}

        /* Slideshow container */
        .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
        }

        /* Caption text */
        .text {
        color: rgb(155, 161, 162);
        font-size: 15px;
        top: 10px;
        padding: 8px 12px;
        position: absolute;
        bottom: 0%;
        width: 100%;
        text-align: center;
        font-family:serif;
        height: 100px;
        
         
        }

        /* Number text (1/3 etc) */
        .numbertext {
        color: grey;
        font-size: 12px;
        padding: 0px 160px;
        position:relative;
        top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
        }

        .active {
        background-color: #717171;
        }

        /* Fading animation */
        .fade {
        animation-name: fade;
        animation-duration: 1.5s;
        }

        @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
        .text {font-size: 11px}
        }

        h1{
            text-align: center;
            color: rgb(15, 51, 8);
            background-color:#f0c20a;
            border-radius: 90%;
            border-color: black;
            font-size: x-large;
            box-shadow: 10px 0px 20px rgb(67, 67, 48);
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        h5{
            text-align: center;
            

        }
        h5:focus{
          box-shadow: 20px 20px 20px #f0c20a;
        }
        .con{
          background-image: url(bg.jpg);
          text-align: center;
          color: white;

        }
    </style>

</head>

<body>
    <div class="bg">
        <p><img style="vertical-align: middle; box-shadow: none;" src="rlogo.png.crdownload" width="100px" height="100px" > <b style="color: rgb(15, 51, 8) ; font-size: 30px;font-family:Georgia, 'Times New Roman', Times, serif;">&emsp13;RENTZ - Your Ultimate Car Rental Experience</b> </p>
    </div>
        <p ><a href="#brand" style="background-color: #3a3838;border-radius: 10px; padding: 5px; color: azure;" onmouseover="fh11(this)"  onmouseout="fh12(this)">BRANDS</a>&emsp;&emsp;&emsp;&emsp;<a
          href="#about"  style="background-color: #3a3838;border-radius: 10px; padding: 5px; color: azure;" onmouseover="fh11(this)"  onmouseout="fh12(this)">ABOUT US</a>&emsp;&emsp;&emsp;&emsp;<a
          href="#contact"  style="background-color: #3a3838;border-radius: 10px; padding: 5px; color: azure;" onmouseover="fh11(this)"  onmouseout="fh12(this)">CONTACT</a>&emsp;&emsp;&emsp;&emsp;<a href="login.html"  style="background-color: #3a3838;border-radius: 10px; padding: 5px; color: azure;" onmouseover="fh11(this)"  onmouseout="fh12(this)">TERMS AND CONDITION</a></p>
    <br>
    <div align=center class="slideshow-container" >

        <div class="mySlides fade" >
          
          <a href="hyundai.php"><img src="car01.jpeg" style="width:60%;box-shadow: none;" ></a>
          <div class="text"><b>HYUNDAI</b></div>
          <div class="numbertext">1 / 3</div>
        </div>
        
        <div class="mySlides fade">
          
          <a href="jeep.php"><img src="car.jpeg" style="width:60%;box-shadow: none;"></a>
          <div class="text"><b>JEEP</b></div>
          <div class="numbertext">2 / 3</div>
        </div>
        
        <div class="mySlides fade">
          <a href="audi.php"><img src="audi1.jpeg" style="width:60%;box-shadow: none;"></a>
          <div class="text"><b>AUDI</b></div>
          <div class="numbertext">3 / 3</div>
        </div>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
        
        <script>
          function fh111(el){
            
            el.style.boxShadow = ' 0px 10px 10px #f0c20a';
            el.style.opacity="1";
          }
          function fh121(el){
            el.style.boxShadow='none';
            el.style.opacity="0.6";
          }

          function fh(el){
            
            el.style.boxShadow = ' 0px 10px 10px #f0c20a';
            el.style.opacity="0.8";
          }
          function fh1(el){
            el.style.boxShadow='10px 0px 10px #494646';
            el.style.opacity="1";
          }
          function fh11(el){
            
            el.style.boxShadow = ' 0px 3px 6px  #f0c20a';
            el.style.opacity="0.8";
          }
          function fh12(el){
            el.style.boxShadow='none';
            el.style.opacity="1";
          }
        let slideIndex = 0;
        showSlides();
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script><br><br>
    <a href="#top" style="background-color: #494646;color: azure; border-radius: 10px;padding: 10px; position: fixed;opacity: 0.6;right: 10px;" onmouseover="fh111(this)"  onmouseout="fh121(this)">Move to top ^</a>
    <h1 id="brand">BRANDS </h1><br><br>
    
    
    <table>
        <tr>
            <td><a href="bmw.php"> <h5 ><img src="bmw.webp" width="700 px" height="400px" onmouseover="fh(this)"  onmouseout="fh1(this)"></h5>
                <p style="text-align: center;"><b>BMW</b></p><br></a></td>
                <td><a href="jaguar.php"><h5 ><img src="jaguar.jpeg" width="700 px" height="400px" onmouseover="fh(this)"  onmouseout="fh1(this)"></h5>
                    <p style="text-align: center;"><b>JAGUAR</b></p></a><br></td>
        </tr>
        <tr>
            <td><a href="nissan.php"> <h5 ><img src="nissan.jpg" width="700 px" height="400px" onmouseover="fh(this)"  onmouseout="fh1(this)"></h5>
                <p style="text-align: center;"><b>NISSAN</b></p></a></td>
                <td><a href="toyota.php"><h5 ><img src="toyota1.jpg" width="700 px" height="400px" onmouseover="fh(this)"  onmouseout="fh1(this)"></h5>
                    <p style="text-align: center;"><b>TOYOTA</b></p></a><br></td>
        </tr>
        <tr>
            <td> <a href="jeep.php"> <h5 ><img src="jeep.jpeg" width="700 px" height="400px" onmouseover="fh(this)"  onmouseout="fh1(this)"></h5>
                <p style="text-align: center;"><b>JEEP</b></p><br></a></td>
                <td><a href="hyundai.php"><h5 ><img src="hyundai1.jpg" width="700 px" height="400px" onmouseover="fh(this)"  onmouseout="fh1(this)"></h5>
                    <p style="text-align: center;"><b>HYUNDAI</b></p></a><br></td>
        </tr>
        <tr>
            <td> <a href="audi.php"> <h5 ><img src="audi.jpeg" width="700 px" height="400px" onmouseover="fh(this)"  onmouseout="fh1(this)"></h5>
                <p style="text-align: center;"><b>AUDI</b></p><br></a></td>
                <td><a href="mercedes.php"><h5 ><img src="mercedeze.jpeg" width="700 px" height="400px" onmouseover="fh(this)"  onmouseout="fh1(this)"></h5>
                    <p style="text-align: center;"><b>MERCEDES-BENZ</b></p></a><br></td>
        </tr>
    </table>
    <h1 id="about">ABOUT US</h1>
    <p><img src="rlogo.png.crdownload" width=80px height="80px">&emsp;Welcome to RENTZ, the premier destination for hassle-free car rentals. Whether you're planning a road trip, need a vehicle for business purposes, or simply desire the joy of driving a new car, RENTZ is here to provide you with an exceptional car rental experience. With our extensive fleet of well-maintained vehicles, user-friendly website, and dedicated customer support, RENTZ aims to make renting a car a seamless and enjoyable process.
      At RENTZ, we understand that renting a car should be convenient, reliable, and tailored to your specific needs. Our mission is to exceed your expectations by offering a wide range of high-quality vehicles, competitive prices, and exceptional customer service. With RENTZ, you can choose from a diverse selection of cars, from compact sedans to luxurious SUVs, to match your preferences and budget.
      </p><h3><br><b><u>Why Choose RENTZ:</u></b><br><br>
    <b>1.Extensive Vehicle Selection:</b> RENTZ boasts a diverse fleet of vehicles, meticulously maintained and regularly serviced to ensure reliability and comfort. Whatever your requirements, we have the perfect car to meet your needs.
  <br><br><b>2.Easy Online Booking:</b> Our user-friendly website and intuitive booking system make reserving a car with RENTZ a breeze. Simply enter your desired dates, location, and car preferences, and our platform will present you with a range of available options.
<br><br><b>3.Competitive Pricing:</b> RENTZ understands the value of affordability. We offer highly competitive rental rates, transparent pricing, and attractive deals to ensure that you receive the best value for your money.
<br><br><b>4.Flexible Rental Options:</b> Whether you require a car for a few hours, a weekend getaway, or an extended trip, RENTZ provides flexible rental durations tailored to your schedule. Choose from hourly, daily, weekly, or monthly rental plans to accommodate your unique needs.
<br><br><b>5.Exceptional Customer Support:</b> Our dedicated support team is available round the clock to assist you with any queries, concerns, or special requests you may have. We are committed to delivering personalized service and ensuring your complete satisfaction throughout your rental journey.
<br><br></h3>
<p>With RENTZ, car rental has never been easier. Experience the freedom and convenience of driving a well-maintained vehicle, supported by our commitment to exceptional service. Discover a world of possibilities with RENTZ and embark on your next adventure with confidence. Book your car today and let RENTZ elevate your car rental experience to new heights.
</p><br><br><br>
<h1>CONTACT</h1>
<div id="contact" class="con">
  <br><br><br>
  <p><u>PHONE</u></p>
  <p>+91 8759465120  or  +91 8754932457</p>
  <br>
  <p><u>EMAIL</u><br><br>rentz@gmail.com</p>
  <p ><u>HEAD QUARTERS</u><br><br>CITY: BANGLORE<br><br>STATE: KARNATAKA<br><br>COUNTRY: INDIA<br><br> </p>
  <p><u>FOLLOW US ON</u><br><br><a href="instagram.com"><img src="insta2.png" width="30px" height="30px"  onmouseover="fh11(this)"  onmouseout="fh12(this)"></a>&emsp;<a href="facebook.com"><img src="face1.png" width="30px" height="30px" onmouseover="fh11(this)"  onmouseout="fh12(this)"></a> </p><br><br><br><br>
</div>

</body>

</html>

