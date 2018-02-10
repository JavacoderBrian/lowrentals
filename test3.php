<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>    
    <head>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <meta name="google-signin-client_id" content="725884671036-p6ol1o44hnukomo6oksefcdptaioadh9.apps.googleusercontent.com">
        <meta charset="UTF-8">
        <script>
            function onSignIn(googleUser) {
                var profile = googleUser.getBasicProfile();
                var id_token = googleUser.getAuthResponse().id_token;                
                console.log("ID Token: "+ id_token);
                console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
                console.log('Name: ' + profile.getName());
                console.log('Image URL: ' + profile.getImageUrl());
                console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
            }</script>
        <title>Google Title</title>
    </head>
    <body>
        <div class="g-signin2" data-onsuccess="onSignIn"></div>
        <?php
        
        ?>
    </body>
</html>
