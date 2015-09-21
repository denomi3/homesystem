 <style>
        .scenario_window {height: 60px; background-color: #4d5061;margin-right: 20px;}
        .scenario_text{color: white;font-size: 1.1em;font-family: arial;}
        .scenario_text2{color: white;font-size: 1.1em;font-family: arial; margin-top: 25px;}
         body{background-color: #3a3d50;}
        .img_style{height: 45px;}
        .text_style {color: white;font-size: 16px;font-family: arial;}
        .child {display: inline-block;vertical-align: middle;margin: 0 0.5em 0 0.5em;margin-top: 5px;}
        .parent {word-wrap: break-word;text-align: left;}
 </style>


<div class="container_12" style="min-width: 960px;">
    
    
    <div class="grid_8">
	<div style="margin-top: 3%;">
            <a href="/" style="text-decoration: none;">
		<img src="images/arrow.png" style="width: 46px;float: left;margin-right: 15px;">
		<span class="header_style" style="font-size: 2.5em;font-family: ARIAL;">Сценарии</span>
            </a>
	</div>
    </div>
    <div class="grid_4">
	<?php include("partial_login_header_view.php");?>
    </div>
    <div class="clear"></div>
			
    <div class="grid_3 main_div_unit">
        <div class="scenario_text">По умолчанию</div>
    </div>
    <div class="grid_3 main_div_unit">
        <div class="scenario_text">Освещение</div>
    </div>
    <div class="grid_3 main_div_unit">
        <div class="scenario_text">Камеры</div>
    </div>	
    <div class="grid_3 main_div_unit">
        <div class="scenario_text">Окна</div>
    </div>
			
    <div class="clear"></div>  
    
    <div class="grid_3">
            <a href="#" style="text-decoration: none;">
                    <div class="parent control_unit_container_scenarios ui-state-highlight main_div_unit scenario_window">
                            <div class="child">
                                    <img class="img_style" src="images/scenarios_white.png">
                            </div>
                            <div class="child">
                                    <div class="text_style">
                                            Выключить <br> все сценарии
                                    </div>
                            </div>
                    </div>
            </a>
    </div>
    <div class="grid_3">
            <a href="#" style="text-decoration: none;">
                    <div class="parent control_unit_container_scenarios ui-state-highlight main_div_unit scenario_window">
                            <div class="child">
                                    <img class="img_style" src="images/sc_light_off.png">
                            </div>
                            <div class="child">
                                    <div class="text_style">
                                            Выключить <br> весь свет
                                    </div>
                            </div>
                    </div>
            </a>
    </div>	
    <div class="grid_3">
            <a href="#" style="text-decoration: none;">
                    <div class="parent control_unit_container_scenarios ui-state-highlight main_div_unit scenario_window">
                            <div class="child">
                                    <img class="img_style" src="images/camera_white_off.png">
                            </div>
                            <div class="child">
                                    <div class="text_style">
                                            Выключить <br> все камеры
                                    </div>
                            </div>
                    </div>
            </a>
    </div>	
    <div class="grid_3">
            <a href="#" style="text-decoration: none;">
                    <div class="parent control_unit_container_scenarios ui-state-highlight main_div_unit scenario_window">
                            <div class="child">
                                    <img class="img_style" src="images/windows_open.png">
                            </div>
                            <div class="child">
                                    <div class="text_style">
                                            Открыть <br> все окна
                                    </div>
                            </div>
                    </div>
            </a>
    </div>
			
    <div class="clear"></div>      
    
    <div class="grid_3 main_div_unit">
        <div class="scenario_text2">Охрана</div>
    </div>
    <div class="grid_3">
            <a href="#" style="text-decoration: none;">
                    <div class="parent control_unit_container_scenarios ui-state-highlight main_div_unit scenario_window">
                            <div class="child">
                                    <img class="img_style" src="images/sc_light_on.png">
                            </div>
                            <div class="child">
                                    <div class="text_style">
                                            Включить <br> весь свет
                                    </div>
                            </div>
                    </div>
            </a>
    </div>
    <div class="grid_3">
            <a href="#" style="text-decoration: none;">
                    <div class="parent control_unit_container_scenarios ui-state-highlight main_div_unit scenario_window">
                            <div class="child">
                                    <img class="img_style" src="images/camera_white_on.png">
                            </div>
                            <div class="child">
                                    <div class="text_style">
                                            Включить <br> все камеры
                                    </div>
                            </div>
                    </div>
            </a>
    </div>	
    <div class="grid_3">
            <a href="#" style="text-decoration: none;">
                    <div class="parent control_unit_container_scenarios ui-state-highlight main_div_unit scenario_window">
                            <div class="child">
                                    <img class="img_style" src="images/windows_close.png">
                            </div>
                            <div class="child">
                                    <div class="text_style">
                                            Закрыть <br> все окна
                                    </div>
                            </div>
                    </div>
            </a>
    </div>
    
    <div class="clear"></div>   
    
    <div class="grid_3">
            <a href="#" style="text-decoration: none;">
                    <div class="parent control_unit_container_scenarios ui-state-highlight main_div_unit scenario_window">
                            <div class="child">
                                    <img class="img_style" src="images/away_home.png">
                            </div>
                            <div class="child">
                                    <div class="text_style">
                                            Никого нет <br> дома
                                    </div>
                            </div>
                    </div>
            </a>
    </div>
    <!--<div class="grid_3">
            <a href="#" style="text-decoration: none;">
                    <div class="parent control_unit_container_scenarios ui-state-highlight main_div_unit scenario_window">
                            <div class="child">
                                    <img class="img_style" src="images/scenarios_white.png">
                            </div>
                            <div class="child">
                                    <div class="text_style">
                                            Диско - пати)
                                    </div>
                            </div>
                    </div>
            </a>
    </div>-->	
    <div class="grid_3">
        
    </div>	
    <div class="grid_3">
          
    </div>
    
    <div class="clear"></div>   
    
    <div class="grid_3">
            <a href="#" style="text-decoration: none;">
                    <div class="parent control_unit_container_scenarios ui-state-highlight main_div_unit scenario_window">
                            <div class="child">
                                    <img class="img_style" src="images/night.png">
                            </div>
                            <div class="child">
                                    <div class="text_style">
                                            Спокойной <br> ночи
                                    </div>
                            </div>
                    </div>
            </a>
    </div>
    <div class="grid_3">
    
    </div>	
    <div class="grid_3">
        
    </div>	
    <div class="grid_3">
          
    </div>
    
    <div class="clear"></div>   
    
    <div class="grid_3">
            <a href="#" style="text-decoration: none;">
                    <div class="parent control_unit_container_scenarios ui-state-highlight main_div_unit scenario_window">
                            <div class="child">
                                    <img class="img_style" src="images/morning.png">
                            </div>
                            <div class="child">
                                    <div class="text_style">
                                            Доброе утро
                                    </div>
                            </div>
                    </div>
            </a>
    </div>
    <div class="grid_3">
    
    </div>	
    <div class="grid_3">
        
    </div>	
    <div class="grid_3">
          
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