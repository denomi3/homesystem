<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HomeSystem</title>
    <meta name="description" content="HOMESYSTEM">
    <meta name="author" content="">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/style.css" rel="stylesheet">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/scripts.js"></script>
        <!--<script src="js/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>-->
        <script type='text/javascript' charset='utf-8'>
            // Hides mobile browser's address bar when page is done loading.
              window.addEventListener('load', function(e) {
                setTimeout(function() { window.scrollTo(0, 1); }, 1);
              }, false);
        </script>
        
</head>
<body>

<?php 
require_once("application/models/model_login.php");   
include 'application/views/'.$content_view; 
?>

</body>
</html>