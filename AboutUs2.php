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
        <link rel="stylesheet" href="/css/flexboxgrid.css">
        <link href="slick/slick.css" rel="stylesheet" type="text/css"/>
        <link href="slick/slick-theme.css" rel="stylesheet" type="text/css"/>
        <link href="css/aboutus.css" rel="stylesheet" type="text/css"/>
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
                    animation: google.maps.Animation.BOUNCE
                });
                marker.setMap(map);
            }
        </script>
        <script>
            $(document).ready(function () {
                $("#submit").click(function () {
                    var name = $("#name").val();
                    var email = $("#email").val();
                    var message = $("#message").val();
                    var contact = $("#contact").val();
                    $("#returnmessage").empty(); // To empty previous error/success message.
                    // Checking for blank fields.
                    if (name == '' || email == '' || contact == '') {
                        alert("Please Fill Required Fields");
                    } else {
                        // Returns successful data submission message when the entered information is stored in database.
                        $.post("contact_form.php", {
                            name1: name,
                            email1: email,
                            message1: message,
                            contact1: contact
                        }, function (data) {
                            $("#returnmessage").append(data); // Append returned message to message paragraph.
                            if (data == "Your Query has been received, We will contact you soon.") {
                                $("#form")[0].reset(); // To reset form fields on success.
                            }
                        });
                    }
                })
                $('.testimon').slick({

                });
            });
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQkKlKgEmuvdXjfvxiETjyqRgmFs3aCVA&callback=myMap"></script>

        <meta charset="UTF-8">
        <title>Lake of the Woods Vacation Rentals</title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="topContainer rounded-corners" style="text-align: center" ><p class="paraTop">The original property refers to the area as "Rat Portage"<br />
                This property dates back to 1881, when the land was owned by the Husband Company.

In 1885, Thomas Spencer and Frank Clark purchase the property for $100. He was the newspaper editor, business and politician. He was connected to Sir John A MacDonald and Louis Riel. Charlotte Spencer was he wife.

In 1885, David Thomas purchased the property.
He was the first jeweler in Kenora. One of his catalogs was donated to the Lake of the Woods Museum.

In 1886, John Kerr Brydon purchased the property. He prompted the name change from "Rat Portage" to "Kenora."
John had an interest in the town of Kenora and he participated in the Boundary Settlement between Ontario and Manitoba.
John built 14 homes in Kenora. At the time he practiced law and became the town clerk.

In 1887 Roderick Lennon purchased the property.
Roderick was a contractor, businessman,newspaper owner, militia officer and politician.

In 1891 William Young purchased the property
He was the justice of the peace. William was one of the first to discover gold in the area.<br /></p>
        </div>
        <div class="container">
          <h3>Contact Form</h3>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <label>Name: <span>*</span></label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <input type="text" id="name" placeholder="Name"/>
            </div>
          </div>
        </div>
        <!--        <div>
                    <div class="flex-top">
                    <div id="mainform">
                        <form id="form">
                            <h3>Contact Form</h3>
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
                    </div></div>
                    <div class="flex-bedroom rounded-corners">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d644.2608517164562!2d-94.49246175929652!3d49.76643945561441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52be08825d7232e7%3A0x2530a38d32f3a96d!2sLake+of+the+Woods+Vacation+rentals+kenora!5e0!3m2!1sen!2sca!4v1509848823456" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>-->

    </body>
</html>
