<?php 
require( __DIR__.'/facebook_start.php' );
$text = htmlspecialchars($_POST['text']);
//echo $text;
$token = $_SESSION['facebook_access_token'];
var_dump($_SESSION['path']);
$path = $_SESSION['path'];
var_dump($path);
//Upload image
upload($path,$token,$fb,$text);
function upload($path,$token,$fb,$text)
{
	$image = [
	  'caption' => $text,
	  'source' => $fb->fileToUpload($path),
	  
	];

	try {
	  // Returns a `Facebook\FacebookResponse` object
	  $response = $fb->post('/me/photos', $image, $token);
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
	  echo 'Graph returned an error: ' . $e->getMessage();
	  exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
	  echo 'Facebook SDK returned an error: ' . $e->getMessage();
	  exit;
	}

	$graphNode = $response->getGraphNode();

	print_r($graphNode);
	//echo " \n Photo ID: " . $graphNode['id'];
}

session_write_close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Show your support for Net Neutralty | Update </title>
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/skeleton.css">
<link rel="icon" type="image/png" href="images/palette.png">
<link href="css/custom.css" rel="stylesheet">


</head>
<body>
<?php include_once("analyticstracking.php") ?>
<img src=<?php echo $bg_path?> class="bg">
<div class="container">
    <div class="row">
      
      <div class="header">
      	<h1>Thank You For Visiting us!</h1>
        <img class="profile" src=<?php echo $path ?> alt="">
      </div>
      <div class="content">
      Your picture is uploaded.
       <br/>
      Spread the word:
        <ul class="share-buttons">
		  <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fisupportnetneutrality.in%2F&t=Show%20your%20support%20for%20Net%20Neutralty" title="Share on Facebook" target="_blank"><img src="images/simple_icons_black/Facebook.png"></a></li>  
		</ul>
</div>


</body>
</html>