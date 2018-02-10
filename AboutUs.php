<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script src="js/jquery-2.1.1.js" type="text/javascript"></script>
        <link href="https://fonts.googleapis.com/css?family=Paprika" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
        <link href="css/menu.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/modernizr.js" type="text/javascript"></script>
        <script>
            function myMap() {
                var map = {
                    center: new google.maps.LatLng(49.766441, -94.492204),
                    zoom: 5,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"), map);
                var marker = new google.maps.Marker({
                    position: myCenter,
                    animation:google.maps.Animation.BOUNCE
                });
                marker.setMap(map);
            }
        </script>
        
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQkKlKgEmuvdXjfvxiETjyqRgmFs3aCVA&callback=myMap"></script>
        
        <meta charset="UTF-8">
        <title>About Us</title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="topContainer rounded-corners"><div class="flex-top">
            <p class="paraTop" style="font-weight: bold">The original property refers to the area as "Rat Portage"<br />
                This property dates back to 1881, when the land was owned by the Husband Company. 
                In 1885, Thomas Spencer along with his partner Frank Clark purchase the property for $100, 
                Thomas was the newspaper editor, businessman and politician.
                He was connected to Sir John A MacDonald and Louis Riel. His wife was Charlotte Spencer.<br />
                In late 1885, David Thomas purchased the property.
                He was the first jeweler in Kenora. One of his catalogs was donated to the Lake of the Woods Museum.<br /> 
                John Kerr Brydon purchased the property in 1886. He prompted the name change from "Rat Portage" to "Kenora."
                John had an interest in the town of Kenora and he participated in the Boundary Settlement between Ontario and Manitoba. 
                At the time John built 14 homes in Kenora, as well as practicing law and becoming the town clerk.<br />
                In 1887 Roderick Lennon purchased the property.
                Roderick was a contractor, businessman, newspaper owner, militia officer and a politician.<br />
                William Young who was the justice of the peace at the time purchased the property in 1891.
                William was one of the first to discover gold in the area.
            </p></div>
        </div>
        <div class="container" style="height: 250px">
            <div class="flex-slide rounded-corners"></div>
            <div class="flex-slide rounded-corners">
                <iframe class="rounded-corners" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d644.2608517164562!2d-94.49246175929652!3d49.76643945561441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52be08825d7232e7%3A0x2530a38d32f3a96d!2sLake+of+the+Woods+Vacation+rentals+kenora!5e0!3m2!1sen!2sca!4v1509848823456" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
       
    </body>
</html>
