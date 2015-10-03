<div class="container_12" style="min-width: 960px;">
    
    <style>
        .cnv{height: 560px;width: 760px; position: relative;background:url(/images/home_cheme_plan.png)  no-repeat;
            -moz-background-size: 100%; /* Firefox 3.6+ */
            -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
            -o-background-size: 100%; /* Opera 9.6+ */
            background-size: 100%; /* Современные браузеры */}
        .lightcontrol.ON {
            position: relative;
            background:url(/images/light_on.png) no-repeat;
            -moz-background-size: 100%; /* Firefox 3.6+ */
            -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
            -o-background-size: 100%; /* Opera 9.6+ */
            background-size: 100%; /* Современные браузеры */
            box-shadow: 0px 0px 13px 16px rgba(255, 191, 0, 0.3)
        }
        .lightcontrol.OFF {position: relative;background:url(/images/light_off.png) no-repeat;
            -moz-background-size: 100%; /* Firefox 3.6+ */
            -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
            -o-background-size: 100%; /* Opera 9.6+ */
            background-size: 100%; /* Современные браузеры */
        }
        .tempcontrol {position: relative;background:url(/images/temperature.png) no-repeat;
            -moz-background-size: 100%; /* Firefox 3.6+ */
            -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
            -o-background-size: 100%; /* Opera 9.6+ */
            background-size: 100%; /* Современные браузеры */
        }
        .lightcontrol,.tempcontrol,.devcontrol,.securcontrol {
            position: absolute;
            height: 25px;
            width: 25px;
            border-radius: 50%;
            color: white;
            text-decoration: none;
        }
        .temp_pos{
            margin-left: 29px;
            font-size: 20px;
            font-family: arial;
        }
    </style>
    
    <div class="grid_8">
	<div style="margin-top: 3%;">
            <a href="/" style="text-decoration: none;">
		<img src="images/arrow.png" style="width: 46px;float: left;margin-right: 15px;">
		<span class="header_style" style="font-size: 2.5em;font-family: ARIAL;">Переферия</span>
            </a>
	</div>
    </div>
    <div class="grid_4">
	<?php include("partial_login_header_view.php");?>
    </div>
    <div class="clear"></div>
    
		
			<div class="grid_10">                            
                            <div class="control_unit cnv">
                            <div id="controls_light" style="display: block;">
                                <? 
				foreach($data as $row_)
                                {
                                        if ($row_['key_type'] == 'key')
                                        {
                                            list($dmega_id, $dmega_port) = explode(":", $row_['key_addr']);
                                            list($dmega_l, $dmega_t) = explode(";", $row_['key_place']);
                                            $dmega_addr = 'http://'.$dmega_id.'/sec/';
                                            $dmega_addr = preg_replace("/\,$/", "", $dmega_addr);                                              
                                            $dmega_title = $row_['key_title'];
                                            $state = file_get_contents($dmega_addr.'?pt='.$dmega_port.'&cmd=get');
                                            echo '<a id="'.$row_['key_addr'].'" title="'.$dmega_title.'" class="lightcontrol '.$state.'" style="position: absolute;left: '.$dmega_l.'px;top: '.$dmega_t.'px;" href="#"></a>';
                                        }
                                }
                                ?>
                            </div>

                            <div id="controls_temperature" style="display: none;">
                                <? 
				foreach($data as $row_)
                                {
                                        if ($row_['key_type'] == 'temp')
                                        {                                             
                                            $dmega_title = $row_['key_title'];
                                            list($dmega_l, $dmega_t) = explode(";", $row_['key_place']);
                                            echo '<a id="temp_'.$row_['key_addr'].'" title="'.$dmega_title.'" class="tempcontrol" style="position: absolute;left: '.$dmega_l.'px;top: '.$dmega_t.'px;" href="#">'
                                                    . '<span class="temp_pos">'
                                                         .round($row_['temp_value']).'&deg;'
                                                    . '</span>'
                                               . '</a>';
                                        }
                                }
                                ?>
                            </div>

                            <!--<div id="controls_devices" style="display: none;">
                                <a title="Вода, кран" class="devcontrol" data-param='' style="position: absolute;left: 149px;top: 490px;" href="#"></a>
                                <a title="Жалюзи на кухне" class="devcontrol" data-param='' style="position: absolute;left: 29px;top: 428px;" href="#"></a>
                                <a title="Жалюзи в детской" class="devcontrol" data-param='' style="position: absolute;left: 130px;top: 79px;" href="#"></a>
                                <a title="Жалюзи в зале" class="devcontrol" data-param='' style="position: absolute;left: 580px;top: 79px;" href="#"></a>
                                <a title="Жалюзи в спальне" class="devcontrol" data-param='' style="position: absolute;left: 129px;top: 257px;" href="#"></a>
                            </div>

                            <div id="controls_security" style="display: none;">
                                <a title="Охрана входной двери" class="lightcontrol" data-param='' style="position: absolute;left: 338px;top: 412px;" href="#"></a>
                                <a title="Сигнализация на кухне" class="lightcontrol" data-param='' style="position: absolute;left: 29px;top: 428px;" href="#"></a>
                                <a title="Сигнализация в детской" class="lightcontrol" data-param='' style="position: absolute;left: 130px;top: 79px;" href="#"></a>
                                <a title="Сигнализация зале" class="lightcontrol" data-param='' style="position: absolute;left: 580px;top: 79px;" href="#"></a>
                            </div>-->
                            
                        </div>
                            
			</div>
                        <div class="grid_2">
                            <div class="control_unit_regulators_panel" style="margin-top: 17px;padding-left: 10px;margin-left: -15px;border-left: solid white 2px;">
                            <div class="dev_switch">
                                Освещение
                            </div>
                            <div class="switch" style="text-align: -webkit-right; margin-bottom: 20px;">
                                <input id="exampleRadioSwitch1" type="radio" checked name="testGroup">
                                <label for="exampleRadioSwitch1">Освещение</label>
                            </div> 
                            <div class="dev_switch">
                                Климат
                            </div>
                            <div class="switch" style="text-align: -webkit-right;margin-bottom: 20px;">
                                <input id="exampleRadioSwitch2" type="radio" name="testGroup">
                                <label for="exampleRadioSwitch2">Климат</label>
                            </div> 
                            <div class="dev_switch">
                                Устройства
                            </div>
                            <div class="switch" style="text-align: -webkit-right;margin-bottom: 20px;">
                                <input id="exampleRadioSwitch3" type="radio" name="testGroup">
                                <label for="exampleRadioSwitch3">Устройства</label>
                            </div>
                            <div class="dev_switch">
                                Охрана
                            </div>
                            <div class="switch" style="text-align: -webkit-right;margin-bottom: 20px;">
                                <input id="exampleRadioSwitch4" type="radio" name="testGroup">
                                <label for="exampleRadioSwitch4">Охрана</label>
                            </div>
                            
                        </div> 
			</div>
					
			<div class="clear"></div>
			
</div>

<script>
   
   $(document).ready(function(){
        function LightTimer() {
            $(".lightcontrol").each(function() {
                var _this = $(this);
                var arr = _this.attr('id').split(':');
                    $.get('megad/getstate/', {id: arr[0], port : arr[1]}, function(data)
                    {
                        _this.removeClass("OFF").removeClass("ON").addClass(data); 
                    });
              });
        }
        setInterval(function(){ LightTimer() }, 2000);
      
       
       $(".lightcontrol").click(function(){
            var lamp = $(this);
            var arr = lamp.attr('id').split(':');
            var action = 0;
            if ( lamp.hasClass("OFF") )
            {
                action = 1;
		lamp.removeClass("OFF").addClass("ON");
            }
            else
            {
		action = 0;
		lamp.removeClass("ON").addClass("OFF");
            }
            
            var link = lamp.data('param');
            $.get('megad/control/', {id: arr[0], port : arr[1], state : 2});
       });
      
        
       $("#exampleRadioSwitch1").click(function(){
            $("#controls_devices").fadeOut(500);
            $("#controls_security").fadeOut(500);
            $("#controls_temperature").fadeOut(500);
            $("#controls_light").fadeIn(500);
       });
       
       $("#exampleRadioSwitch2").click(function(){
            $("#controls_light").fadeOut(500);
            $("#controls_devices").fadeOut(500);
            $("#controls_security").fadeOut(500);
            $("#controls_temperature").fadeIn(500);
       });
       
       $("#exampleRadioSwitch3").click(function(){
            $("#controls_light").fadeOut(500);
            $("#controls_security").fadeOut(500);
            $("#controls_temperature").fadeOut(500);
            $("#controls_devices").fadeIn(500);
       });
       
       $("#exampleRadioSwitch4").click(function(){
            $("#controls_light").fadeOut(500);
            $("#controls_devices").fadeOut(500);
            $("#controls_temperature").fadeOut(500);
            $("#controls_security").fadeIn(500);
       });
   })

</script>