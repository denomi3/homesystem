<?php 
require_once("application/models/model_login.php");   

if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) 
{   
    $model = new Model_Login();
    $user_login = $model->checkUser($_COOKIE['id'], $_COOKIE['hash']);
    if(!isset($user_login))
    {       
        Route::ErrorPage404();
    } 
} 
else 
{ 
   Route::ErrorPage404();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>ПАНЕЛЬ АДМИНИСТРИРОВАНИЯ</title>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link href="../../bootstrap/css/admin_style.css" rel="stylesheet" media="screen">
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
    <div class="navbar navbar-fixed-top navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="brand">
                    ПАНЕЛЬ АДМИНИСТРИРОВАНИЯ
                </a>
                <?php 
                    include 'application/admin/views/partial/navigation.php'
                ?> 
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span2 min230">
                <div class="well">
                      <?php 
                            include 'application/admin/views/partial/sidemenu.php'
                      ?> 
                </div>
            </div>
            <div class="span9 borderLeft">
                <?php 
                include 'application/admin/views/'.$content_view; 
                ?>
            </div>
        </div>
    </div>
    <script src="../../js/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="../../bootstrap/bootstrap.min.js"></script>
    <script>
        $('.tree-toggle').click(function () {
            $(this).parent().children('ul.tree').toggle(200);
        });
    </script>
    
</body>
</html>