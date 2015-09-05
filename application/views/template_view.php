<!doctype html>
<html lang="us">
<head>
	<meta charset="utf-8">
	<title>Home System</title>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
	<link href="js/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet">
	<link href="css/grid960/960.css" rel="stylesheet"/>
	<link href="css/style.css" rel="stylesheet">
        <script src="js/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
        <script type='text/javascript' charset='utf-8'>
            // Hides mobile browser's address bar when page is done loading.
              window.addEventListener('load', function(e) {
                setTimeout(function() { window.scrollTo(0, 1); }, 1);
              }, false);
        </script>
</head>
<body>
    
<?php include 'application/views/'.$content_view; ?>

</body>
</html>