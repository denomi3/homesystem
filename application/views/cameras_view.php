 <style>
        .camera_window {height: 170px; background-color: black;}
        .camera_text{color: white;text-align: center;margin-top: 78px;font-family: arial;}
        body{background-color: steelblue;}
 </style>
 
 
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="page-header">
				<a href="/"><img src="images/arrow.png" style="width: 36px;margin-right: 6px;margin-top: 19px;"></a>
				<a href="/" style="text-decoration: none;"><h1 class="header_style"><strong>Камеры</strong></h1></a>  	
			</div>	
		</div>
		<div class="col-md-4">
                        <?php include("partial/partial_login_header_view.php");?>
		</div>
	</div>
        <div class="row">
		<div class="col-md-4 row-devide">
                        <div id="ip_cam_hallway" class="camera_text" style="margin-top: 22px;">
                            <img src="http://localhost:8081/" width="100%">
                        </div>
                </div>
                <div class="col-md-4 row-devide">
                        <div id="ip_cam_hallway" class="camera_text" style="margin-top: 22px;">
                            <img src="http://localhost:8082/" width="100%">
                        </div>
                </div>
                <div class="col-md-4 row-devide">
                     <div class="camera_text">Камера недоступна</div>
                </div>
	</div>
</div>
 
 

 <script>
    
    $(document).ready(function(){              
        // вешаем на клик по элементу с id = example-1
        //$('#example-1').click(function(){
        //    // загрузку HTML кода из файла example.html
        //    $(this).load('ajax/example.html');       
        //}) 
        
        
        //$.ajax({
        //    url: '192.168.0.227',
        //    success: function(data) {
        //    $('#ip_cam_hallway').html(data);
        //}
    //});
        
        
    }); 
</script>