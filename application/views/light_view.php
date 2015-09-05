<div class="container_12" style="min-width: 960px;">
    
    <style>
        .cnv{height: 560px;width: 760px; position: relative;background:url(/images/home_cheme_plan.png)  no-repeat;
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */}
    </style>
		
			<div class="grid_10">
                            <div style="margin-top: 1%;">
                                    <a href="/" style="text-decoration: none;">
                                        <img src="images/arrow.png" style="width: 46px;float: left;margin-right: 15px;">
                                        <span class="header_style" style="font-size: 2.5em;font-family: ARIAL;">Переферия</span>
                                    </a>
                            </div>
                            
                            <div class="control_unit cnv">
                            <div id="controls_light" style="display: block;">
                                    <a class="lightcontrol on" data-param="" style="position: absolute;left: 214px;top: 85px;" href='#'><img title="Свет в детской" style="width:30%;" src="images/light_on.png"></a>
                                    <a class="lightcontrol on" data-param="http://192.168.0.15/sec/?pt=7&amp;cmd=10:2" style="position: absolute;left: 467px;top: 85px;" href="#"><img title="Свет в гостинной" style="width:30%;" src="images/light_on.png"></a>
                                    <a class="lightcontrol on" data-param='http://192.168.0.15/sec/?pt=7&amp;cmd=11:2' style="position: absolute;left: 191px;top: 244px;" href="#"><img title="Свет в спальне" style="width:30%" src="images/light_on.png"></a>
                                    <a class="lightcontrol on" data-param='http://192.168.0.15/sec/?pt=7&amp;cmd=12:2' style="position: absolute;left: 329px;top: 261px;" href="#"><img title="Свет в холе" style="width:30%;" src="images/light_on.png"></a>
                                    <a class="lightcontrol on" data-param='http://192.168.0.15/sec/?pt=7&amp;cmd=13:2' style="position: absolute;left: 329px;top: 391px;" href="#"><img title="Свет в прихожей" style="width:30%;" src="images/light_on.png"></a>
                                    <a class="lightcontrol on" data-param='http://192.168.0.15/sec/?pt=7&amp;cmd=7:2' style="position: absolute;left: 249px;top: 439px;" href="#"><img title="Свет в ванной" style="width:30%;" src="images/light_on.png"></a>
                                    <a class="lightcontrol on" data-param='http://192.168.0.15/sec/?pt=7&amp;cmd=8:2' style="position: absolute;left: 188px;top: 439px;" href="#"><img title="Свет в туалете" style="width:30%;" src="images/light_on.png"></a>
                                    <a class="lightcontrol on" data-param='http://192.168.0.15/sec/?pt=7&amp;cmd=9:2' style="position: absolute;left: 91px;top: 407px;" href="#"><img title="Свет на кухне" style="width:30%;" src="images/light_on.png"></a>
                            </div>

                            <div id="controls_temperature" style="display: none;">
                                   <a class="lightcontrol" data-param='' style="position:absolute;left: 329px;top: 261px;" href="#"><img title="Температур в квартире" style="width:30%;" src="images/temperature.png"></a>
                            </div>

                            <div id="controls_devices" style="display: none;">
                                    <a class="lightcontrol" data-param='' style="position: absolute;left: 149px;top: 490px;" href="#"><img title="Вода, кран" src="images/water.png" style="width:30%;"></a>
                                    <a class="lightcontrol" data-param='' style="position: absolute;left: 29px;top: 428px;" href="#"><img title="Жалюзи на кухне" src="images/blinds.png" style="width:30%;"></a>
                                    <a class="lightcontrol" data-param='' style="position: absolute;left: 130px;top: 79px;" href="#"><img title="Жалюзи в детской" src="images/blinds.png" style="width:30%;"></a>
                                    <a class="lightcontrol" data-param='' style="position: absolute;left: 580px;top: 79px;" href="#"><img title="Жалюзи в зале" src="images/blinds.png" style="width:30%;"></a>
                                    <a class="lightcontrol" data-param='' style="position: absolute;left: 129px;top: 257px;" href="#"><img title="Жалюзи в спальне" src="images/blinds.png" style="width:30%;"></a>
                            </div>

                            <div id="controls_security" style="display: none;">
                                    <a class="lightcontrol" data-param='' style="position: absolute;left: 338px;top: 412px;" href="#"><img title="Охрана входной двери" src="images/security.png" style="width:30%;"></a>
                                    <a class="lightcontrol" data-param='' style="position: absolute;left: 29px;top: 428px;" href="#"><img title="Сигнализация на кухне"  src="images/security.png" style="width:30%;"></a>
                                    <a class="lightcontrol" data-param='' style="position: absolute;left: 130px;top: 79px;" href="#"><img title="Сигнализация в детской"  src="images/security.png" style="width:30%;"></a>
                                    <a class="lightcontrol" data-param='' style="position: absolute;left: 580px;top: 79px;" href="#"><img title="Сигнализация зале"  src="images/security.png" style="width:30%;"></a>
                            </div>
                            
                        </div>
                            
			</div>
                        <div class="grid_2">
                            <div class="control_unit_regulators_panel" style="margin-top:50px">
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
           var $this = $(this);
           var link = $this.data('param');
           $.get(link);
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