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
        .lightcontrol {position: absolute;height: 25px;width: 25px;border-radius: 50%;}
    </style>
    
    <div class="grid_8">
	<div style="margin-top: 1%;">
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
                                <? $state_14_07 = file_get_contents('http://192.168.0.14/sec/?pt=7&cmd=get'); ?>
                                <a title="Свет в детской" class="lightcontrol <?php echo $state_14_07; ?>" data-param="" style="position: absolute;left: 222px;top: 90px;" href='#'></a>
                                <? $state_15_10 = file_get_contents('http://192.168.0.15/sec/?pt=10&cmd=get'); ?>
                                <a title="Свет в гостинной" class="lightcontrol <?php echo $state_15_10; ?>" data-param="http://192.168.0.15/sec/?cmd=10:2" style="position: absolute;left: 467px;top: 90px;" href="#"></a>
                                <? $state_15_11 = file_get_contents('http://192.168.0.15/sec/?pt=11&cmd=get'); ?>
                                <a title="Свет в спальне" class="lightcontrol <?php echo $state_15_11; ?>" data-param='http://192.168.0.15/sec/?cmd=11:2' style="position: absolute;left: 199px;top: 253px;" href="#"></a>
                                <? $state_15_12 = file_get_contents('http://192.168.0.15/sec/?pt=12&cmd=get'); ?>
                                <a title="Свет в холе" class="lightcontrol <?php echo $state_15_12; ?>" data-param='http://192.168.0.15/sec/?cmd=12:2' style="position: absolute;left: 345px;top: 413px;" href="#"></a>
                                <? $state_15_13 = file_get_contents('http://192.168.0.15/sec/?pt=13&cmd=get'); ?>
                                <a title="Свет в прихожей" class="lightcontrol <?php echo $state_15_13; ?>" data-param='http://192.168.0.15/sec/?cmd=13:2' style="position: absolute;left: 331px;top: 261px;" href="#"></a>
                                <? $state_15_07 = file_get_contents('http://192.168.0.15/sec/?pt=7&cmd=get'); ?>
                                <a title="Свет в ванной" class="lightcontrol <?php echo $state_15_07; ?>" data-param='http://192.168.0.15/sec/?cmd=7:2' style="position: absolute;left: 256px;top: 444px;" href="#"></a>
                                <? $state_15_08 = file_get_contents('http://192.168.0.15/sec/?pt=8&cmd=get'); ?>
                                <a title="Свет в туалете" class="lightcontrol <?php echo $state_15_08; ?>" data-param='http://192.168.0.15/sec/?cmd=8:2' style="position: absolute;left: 196px;top: 444px;" href="#"></a>
                                <? $state_15_09 = file_get_contents('http://192.168.0.15/sec/?pt=9&cmd=get'); ?>
                                <a title="Свет на кухне" class="lightcontrol <?php echo $state_15_09; ?>" data-param='http://192.168.0.15/sec/?cmd=9:2' style="position: absolute;left: 98px;top: 413px;" href="#"></a>
                            </div>

                            <div id="controls_temperature" style="display: none;">
                                <a title="Температур в квартире" class="tempcontrol" data-param='' style="position:absolute;left: 329px;top: 261px;" href="#"></a>
                            </div>

                            <div id="controls_devices" style="display: none;">
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
                            </div>
                            
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
       
       $(".lightcontrol").click(function(){
            var lamp = $(this);
            //var label = lamp.attr("label");
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
            $.get(link);

            //$.get("key.php?key_label=" +label + "&key_pio=" + action, function(data){ 
		//$.get("ab-data.php?p=keys", function(data)
		//{
                    //$("#keys").html(data);
		//});
            //});
       });
       
       	setInterval(function(){
		var device_list = [2];
		for ( j = 0; j < device_list.length; j++ )
		{
			//$.get('megad-ajax.php', {id: device_list[j], get_all : 1}, function(data)
			//{
			//	state_all = data.split(';');
			//	dev_id = state_all[state_all.length - 1];
			//	for ( i = 0; i < 14; i++ )
			//	my_toggle.trigger("iToggle.toggleID", ["p_" + dev_id + "_" + i, state_all[i]]);
			//	$("#p_" + dev_id + "_14").val(state_all[14]);
			//	$("#p_" + dev_id + "_15").val(state_all[15]);
			//})
		}
	}, 3000 );
       
       
       
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