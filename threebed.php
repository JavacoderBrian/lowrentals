<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en" class="no-js">
    <head>
        <title>Three Bedroom Suite</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/jquery-2.1.1.js" type="text/javascript"></script>
        <script src="js/jquery.slideshow.lite.js" type="text/javascript"></script>        
        <link href="https://fonts.googleapis.com/css?family=Paprika" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
        <link href="css/menu.css" rel="stylesheet" type="text/css"/>        
        <link href="css/slideshow.css" rel="stylesheet" type="text/css"/>
        <link href="css/sched.css" rel="stylesheet" type="text/css"/>
        <link href="widgets/jqwidgets/styles/jqx.base.css" rel="stylesheet" type="text/css"/>        
        <script src="js/modernizr.js" type="text/javascript"></script>
        <script src="widgets/jqwidgets/jqxcore.js" type="text/javascript"></script>
        <script type="text/javascript" src="widgets/jqwidgets/jqxcore.js"></script>
        <script type="text/javascript" src="widgets/jqwidgets/jqxbuttons.js"></script>
        <script type="text/javascript" src="widgets/jqwidgets/jqxscrollbar.js"></script>
        <script type="text/javascript" src="widgets/jqwidgets/jqxdata.js"></script>
        <script type="text/javascript" src="widgets/jqwidgets/jqxdate.js"></script>
        <script type="text/javascript" src="widgets/jqwidgets/jqxscheduler.js"></script>
        <script type="text/javascript" src="widgets/jqwidgets/jqxscheduler.api.js"></script>
        <script type="text/javascript" src="widgets/jqwidgets/jqxdatetimeinput.js"></script>
        <script type="text/javascript" src="widgets/jqwidgets/jqxmenu.js"></script>
        <script type="text/javascript" src="widgets/jqwidgets/jqxcalendar.js"></script>
        <script type="text/javascript" src="widgets/jqwidgets/jqxtooltip.js"></script>
        <script type="text/javascript" src="widgets/jqwidgets/jqxwindow.js"></script>
        <script type="text/javascript" src="widgets/jqwidgets/jqxcheckbox.js"></script>
        <script type="text/javascript" src="widgets/jqwidgets/jqxlistbox.js"></script>
        <script type="text/javascript" src="widgets/jqwidgets/jqxdropdownlist.js"></script>
        <script type="text/javascript" src="widgets/jqwidgets/jqxnumberinput.js"></script>
        <script type="text/javascript" src="widgets/jqwidgets/jqxradiobutton.js"></script>
        <script type="text/javascript" src="widgets/jqwidgets/jqxinput.js"></script>
        <script type="text/javascript" src="widgets/jqwidgets/globalization/globalize.js"></script>        
        <script src="js/scheduler.js" type="text/javascript"></script>
        <script type="text/javascript">
            function goSwitch() {
                if ($('#slideshow').css('display') != 'none') {
                    $('#scheduler').show().siblings('div').hide();
                    $('#btnClicker').prop('value', 'Click here to display Pictures');
                } else if ($('#scheduler').css('display') != 'none') {
                    $('#slideshow').show().siblings('div').hide();
                    $('#btnClicker').prop('value', 'Click here to book room');
                }
            }
            $(function () {
                $("#slideshow").slideshow({
                    height: 683,
                    width: 1024,
                    caption: false
                });
            });
        </script>
    </head>
    <body style="background-color: transparent">
        <?php include 'header.php'; ?><br />
        <div class="container">
            <div>
                <div id="slideshow" class="rounded-corners flex-slide">
                    <a href="#"><img src="img/BOTTOM/IMG_1242.PNG" alt=""/></a>
                    <img src="img/BOTTOM/IMG_1267.PNG" alt=""/>
                    <img src="img/BOTTOM/IMG_1276.PNG" alt=""/>
                    <img src="img/BOTTOM/IMG_1287.PNG" alt=""/>
                    <img src="img/BOTTOM/IMG_1293.PNG" alt=""/>
                    <img src="img/BOTTOM/IMG_1294.PNG" alt=""/>
                    <img src="img/BOTTOM/IMG_1299.PNG" alt=""/>
                    <img src="img/BOTTOM/IMG_1318.PNG" alt=""/>
                    <img src="img/BOTTOM/IMG_1320.PNG" alt=""/>
                    <img src="img/BOTTOM/IMG_1334.PNG" alt=""/>
                    <img src="img/BOTTOM/IMG_1354.PNG" alt=""/>
                    <img src="img/BOTTOM/IMG_1355.PNG" alt=""/>
                    <img src="img/BOTTOM/IMG_1361.PNG" alt=""/>
                    <img src="img/BOTTOM/IMG_1368.PNG" alt=""/>
                    <img src="img/BOTTOM/IMG_1374.PNG" alt=""/>
                </div>
                <div class="rounded-corners flex-slide" id="scheduler" style="display: none"></div></div>
            <div class="rounded-corners flex-bedroom">
                <p class="para">Our 3 bedroom, 1 bathroom (sleeps 6-10). Comfortable approx. 1200 sq. ft. on the main floor<br />
                <h2>Low Season</h2><p class="para">
                    Jan 2 - April 30<br />
                    Nightly $189.00<br />
                    Weekly $1,323.00<br />
                    Monthly $5,000.00<br />
                    minimum 1 night<br />
                    7 nights or more $285.71 avg nightly<br />
                    30 nights or more $166.67 avg nightly<br /></p>
                <h2>High Season</h2>
                <p class="para">Mar 1- Jan 1<br />
                    Nightly $300.00<br />
                    Weekly $2,100.00<br />
                    Monthly $10,000.00<br />                    
                    <input type="button" value="Click here to book room" id="btnClicker" onclick="goSwitch()" />
                </p>
            </div>                
        </div>
        <div class="rounded-corners container"><h2>Fees</h2><p class="para">
                Rates are subject to change until reservation is confirmed. HST not included

                Damage deposit requires an open credit card/1.00 fee to approve credit credit

                Our house is a pet and smoke free environment due to owner's allergies

                An additional $25.00 per night will be charged for bookings for over 2 people for the 3 bedroom suite rental

                An additional $25.00 per night will be charged for bookings over 2 people for the 1 bedroom suite rental

                50% down at the time of booking ( non- refundable) and the rest of the payment is 48 hours prior.of check in.</p>
        </div>
    </body>
</html>
