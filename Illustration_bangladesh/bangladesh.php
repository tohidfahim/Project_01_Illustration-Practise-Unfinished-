<?php

  require( __DIR__.'/facebook_start.php' );
  require( __DIR__.'/cred.php' );
 
  $helper = $fb->getRedirectLoginHelper();
 
  $permissions = ['email', 'user_posts','publish_actions']; // optional
  $loginUrl    = $helper->getLoginUrl($callback_url, $permissions);

  ?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bangladesh</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="icon" type="image/png" href="images/palette.png">
    <link href="css/custom.css" rel="stylesheet">

  </head>
  <body>
    <img src=<?php echo $bg_path?> class="bg">
    <div class="container">
      <div class="row">
        
        <div class="header">
          <h1>BANGLADESH</h1>
          <img class="profile" src="images/illustrationBD.jpg"/>
        </div>
        <div class="content">
        <br/>
        <p>Show your support for Bangladesh</p>       
          <a class="button button-primary" href=<?php echo htmlspecialchars($loginUrl);?> > Log in to Facebook </a> 
       
       </div>
        <ul class="share-buttons">
          <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fisupportnetneutrality.in%2F&t=Show%20your%20support%20for%20Net%20Neutralty" title="Share on Facebook" target="_blank"><img src="images/simple_icons_black/Facebook.png"></a></li>
        </ul>
      </div>
    </div>
    
  </body>
</html>
