<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <title>laundry management system</title>
    <link rel="stylesheet" href="product/servicestyle.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    </head>

    <body>

        <div class="nav">
                <li><a href="index.php">HOME</a></li>


        </div>
          <div id="mainbox" onclick="openFunction()">&#9776; SERVICE MENU</div>

        <div id="menu" class="sidemenu">

            <header>OUR SERVICES</header>

            <a href="product/hotellaundry/hotellaundry.php">Hotel Laundry</a>

            <a href="product/companylaundry/companylaundry.php">Company Laundry</a>

            <a href="product/apartmentlaundry/apartmentlaundry.php">Apartment Laundry</a>

            <a href="product/otherservices/otherservices.php">Other Service</a>

            <a href="#" class="closebtn" onclick="closeFunction()">&times;</a>


        </div>

        <div class="services-text">

            <p>Our E-Laundry services ensure full customer satisfaction where laundry is properly sorted and packed to avoid misplacement or mixing up.
            </p>
            <p>Washing and drying are done with efficient and good quality laundry machines at the required optimal conditions.
            Our qualified staff also provide panctual picking and dropping services around the clock</p>



        </div>



<script type="text/javascript">
    
    function openFunction(){

        document.getElementById("menu").style.width="300px";
        document.getElementById("mainbox").style.marginLeft="300px";
        document.getElementById("mainbox").innerHTML="";

    }

     function closeFunction(){

        document.getElementById("menu").style.width="0px";
        document.getElementById("mainbox").style.marginLeft="0px";
         document.getElementById("mainbox").innerHTML="&#9776; SERVICE MENU";
    }



        </script>





    </body>
</html>
