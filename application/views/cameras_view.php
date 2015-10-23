 <style>
        .camera_window {height: 170px; background-color: black;}
        .camera_text{color: white;text-align: center;margin-top: 78px;font-family: arial;}
        body{background-color: steelblue;}
 </style>


<div class="container_12" style="min-width: 960px;">
    
    
    <div class="grid_8">
	<div style="margin-top: 3%;">
            <a href="/" style="text-decoration: none;">
		<img src="images/arrow.png" style="width: 46px;float: left;margin-right: 15px;">
		<span class="header_style" style="font-size: 2.5em;font-family: ARIAL;">Камеры</span>
            </a>
	</div>
    </div>
    <div class="grid_4">
	<?php include("partial/partial_login_header_view.php");?>
    </div>
    <div class="clear"></div>
			
    <div class="grid_3 camera_window main_div_unit">
        <div id="ip_cam_hallway" class="camera_text">
            Камера недоступна
        </div>
    </div>
    
    <div class="grid_3 camera_window main_div_unit">
        <div class="camera_text">Камера недоступна</div>
    </div>
    <div class="grid_3 camera_window main_div_unit">
        <div class="camera_text">Камера недоступна</div>
    </div>
		
    <div class="grid_3 camera_window main_div_unit">
        <div class="camera_text">Камера недоступна</div>
    </div>
			
    <div class="clear"></div>  
    
    <div class="grid_3 camera_window main_div_unit">
        <div class="camera_text">Камера недоступна</div>
    </div>
    
    <div class="grid_3 camera_window main_div_unit">
        <div class="camera_text">Камера недоступна</div>
    </div>
		
    <div class="grid_3 camera_window main_div_unit">
        <div class="camera_text">Камера недоступна</div>
    </div>
		
    <div class="grid_3 camera_window main_div_unit">
        <div class="camera_text">Камера недоступна</div>
    </div>
			
    <div class="clear"></div>        
    
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