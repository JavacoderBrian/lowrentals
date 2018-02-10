<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>One Bedroom Suite</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <body>
        <?php include 'header.php'; ?>
        <br />
        <div class="container" >
            <div>
                <div id="slideshow" class="rounded-corners flex-slide">
                    <a href="#">
                        <img src="img/TOP/IMG_1139.PNG" alt=""/></a>
                    <img src="img/TOP/IMG_1160.PNG" alt=""/>
                    <img src="img/TOP/IMG_1163.PNG" alt=""/>
                    <img src="img/TOP/IMG_1189.PNG" alt=""/>
                    <img src="img/TOP/IMG_1206.PNG" alt=""/>
                    <img src="img/TOP/IMG_1207.PNG" alt=""/>
                    <img src="img/TOP/IMG_1215.PNG" alt=""/>
                    <img src="img/TOP/IMG_1219.PNG" alt=""/>
                    <img src="img/TOP/IMG_1224.PNG" alt=""/>
                    <img src="img/TOP/IMG_1228.PNG" alt=""/>
                    <img src="img/TOP/IMG_1235.PNG" alt=""/>
                </div>
                <div class="rounded-corners flex-slide" id="scheduler" style="display: none">

                </div>                    
            </div>
            <div class="rounded-corners flex-bedroom">
                <p class="para">Our 1 Bedroom, featuring a double bed, Queen size pull out sofa(sleeps 2-4). 
                    Comfortable approx. 600 sq. ft. on the top floor of our home.                    
                <h2>Low season</h2><p class="para">
                    Jan 2 - April 30<br />
                    Nightly;C$98.00<br />
                    Weekly;C$685.00<br />
                    Monthly;C$1,600.00<br /></p>
                <h2>High season</h2>
                <p class="para">May,1-Sep,21<br />
                    Nightly;C$109.00<br />
                    Weekly;C$ 763.00<br />
                    Monthly;C$2,500.00<br />
                    <input type="button" id="btnClicker" value="Click here to book room" onclick="goSwitch()" /></p>
            </div>
        </div>
        <div class="rounded-corners container"><div class="flex-top"><h2>Fees</h2><p class="para">

                    Rates are subject to change until reservation is confirmed. HST not included

                    Damage deposit requires an open credit card/1.00 fee to approve credit credit

                    Our house is a pet and smoke free environment due to owner's allergies

                    An additional $25.00 per night will be charged for bookings for over 2 people for the 3 bedroom suite rental

                    An additional $25.00 per night will be charged for bookings over 2 people for the 1 bedroom suite rental

                    50% down at the time of booking ( non- refundable) and the rest of the payment is 48 hours prior.of check in.</p>
            </div></div>
    </body>
</html>
