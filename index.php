<html>
    <head>
        <meta content="text/html; charset=windows-1252" http-equiv="content-type">
        <link href="css/menu.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Paprika" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.flex-item1')
                        .css('cursor', 'pointer')
                        .click(
                                function () {
                                    window.location.href = "threebed.php";
                                }
                        );
                $('.flex-item2')
                        .css('cursor', 'pointer')
                        .click(
                                function () {
                                    window.location.href = "onebed.php";
                                }
                        );
            });
        </script>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="topContainer" align="center"><div class="flex-top rounded-corners"><p class="paraTop">Come spend your vacation at our newly remodeled historic home,
                    just walking distance to all shops and restaurants.<br />We are located on The Lake of the Woods harbor front, downtown Kenora, Ontario, Canada.<br /><br />
                    A short walk to the 'Big White Tent' for all the down town attractions.<br /><br />
                    Enjoy music festivals, fire works, farmers market, River Air sight seeing tours,Kenora Air service,
                    MS Kenora Cruise Boat and ice skating.</p></div></div>

        <div class="container" align="center">
            <div class="rounded-corners flex-item1"><strong>3 Bedroom Suite</strong>
                <p class="para">Our 3 bedroom, 1 bathroom (sleeps 6 -10) comfortably, is approximately 1200 square ft.<br />
                    The fully air conditioned suite is located on the main floor of our home. It features 3 bedrooms (two queen size, and one king size bed, as well as a double pullout couch).<br />
                    In the central room there is a 60 inch flat screen TV, with an additional futon in the sun room.<br />
                    Full bathroom features a combination tub/shower, and toilet.<br />
                    For those summer evenings a sunroom, when you just want to sit around inside and enjoy the amazing view of the lake.</p>
                <h2><input type="button" onclick="location.href=threebed.php;" value="Click here for pics and rates" /></h2>

            </div>
            <div class="rounded-corners flex-item2"><strong>1 Bedroom Suite</strong>
                <p class="para">Our 1 bedroom, featuring a double bed, Queen size pull out sofa (sleeps 2-4).
                    This fully air conditioned comfortable suite is approximately 600 square feet and the top floor of our home.<br /> 
                    Full Kitchen complete with pots, spices and utensils.<br />For those that would like to just sit and watch the activity on the lake there is a balcony to sit and watch.
                    Our suites are pet free as well as smoke free environments.Complimentary WiFi throughout. 
                    As well as a continental first day breakfast.<br />1 parking per suite (2 if available).</p>
                <h2><input type="button" onclick="location.href=onebed.php;" value="Click here for pics and rates" /></h2>
            </div>
        </div>
    </body>
</html>
