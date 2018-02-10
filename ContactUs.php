<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOW Rental Contact Us</title>
        <link href="css/menu.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Paprika" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
        <script>
            function myMap() {
                var map = {
                    center: new google.maps.LatLng(49.766441, -94.492204),
                    zoom: 5,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"), map);
                var marker = new google.maps.Marker({
                    position: myCenter,
                    animation: google.maps.Animation.BOUNCE
                });
                marker.setMap(map);
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQkKlKgEmuvdXjfvxiETjyqRgmFs3aCVA&callback=myMap"></script>
        <script type="text/javascript">
        $('.flex-iframe').css('height', $(window).height()+'px');
        </script>
           
    </head>
    <body>
        <?php include 'header.php'; ?>
        <?php include 'contact_form.html'; ?>
        <!--<div class="topContainer">
            <div class="flex-contact rounded-corners" >
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d644.2608517164562!2d-94.49246175929652!3d49.76643945561441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52be08825d7232e7%3A0x2530a38d32f3a96d!2sLake+of+the+Woods+Vacation+rentals+kenora!5e0!3m2!1sen!2sca!4v1509848823456" class="flex-iframe" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div id="mainform" class="flex-contact">
                <form id="form">
                    <h3>Please enter your info into the fields below</h3>
                    <h4>and someone will call you to schedule</h4>
                    <p id="returnmessage"></p>
                    <label>Name: <span>*</span></label>
                    <input type="text" id="name" placeholder="Name"/>
                    <label>Email: <span>*</span></label>
                    <input type="text" id="email" placeholder="Email"/>
                    <label>Contact No: <span>*</span></label>
                    <input type="text" id="contact" placeholder="10 digit Mobile no."/>
                    <label>Message:</label>
                    <textarea id="message" placeholder="Message......."></textarea>
                    <input type="button" id="submit" value="Send Message"/>
                </form>
            </div>
        </div>-->
    </body>
</html>
