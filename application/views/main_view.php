    <div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="page-header">
				<a href="/"><img src="images/dom_white.png" style="width:51px;margin-right: -5px;"></a>
				<a href="/" style="text-decoration: none;"><h1 class="header_style"><strong>omeSystem<strong></h1></a>  
				
				<h1 id="demo" class="header_style" style="margin-left: 50px;"><strong>14:21:32</strong></h1>		
			</div>	
		</div>
		<div class="col-md-4">
                        <?php include("partial/partial_login_header_view.php");?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 row-devide">
			 
		<a href="/weather" role="button" class="btn btn-lg btn-block btn-darkblue">
				<div class="parent control_unit_container_weather ui-state-highlight main_div_unit">
					<div class="child">
						<img class="img_style" src="images/weather_white.png">
					</div>
					<div class="child">
						<div class="text_style">
							Погода
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 row-devide">
			 
			<a href="/periphery" role="button" class="btn btn-block btn-lg btn-dimgray">
				<div class="parent control_unit_container_control ui-state-highlight main_div_unit">
                                    <div class="child">
						<img class="img_style" src="images/control_white.png">
					</div>
					<div class="child">
						<div class="text_style">
							Регуляторы
                                                </div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 row-devide">
			 
			<a href="/cameras" role="button"  class="btn btn-lg btn-block btn-chocolate">
				<div class="parent control_unit_container_camera ui-state-highlight main_div_unit">
					<div class="child">
						<img class="img_style" src="images/camera_white_1.png">
					</div>
					<div class="child">
						<div class="text_style">
							Камеры
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 row-devide">
			 
			<a href="/events" role="button"  class="btn btn-block btn-lg btn-yellowgreen">
				<div class="parent control_unit_container_events ui-state-highlight main_div_unit">
					<div class="child">
						<img class="img_style" src="images/events_white.png">
					</div>
					<div class="child">
						<div class="text_style">
							События
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 row-devide">
			 
		<a href="/scenarios" role="button"  class="btn btn-block btn-lg btn-scenarios">
				<div class="parent control_unit_container_scenarios ui-state-highlight main_div_unit">
					<div class="child">
						<img class="img_style" src="images/scenarios_white.png">
					</div>
					<div class="child">
						<div class="text_style">
							Сценарии
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 row-devide">
			 
			<a href="/system_log" role="button"  class="btn btn-block btn-lg btn-darkslategrey">
				<div class="parent control_unit_container_system_log ui-state-highlight main_div_unit">
					<div class="child">
						<img class="img_style" src="images/system_log_white.png">
					</div>
					<div class="child">
						<div class="text_style">
							Журнал
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 row-devide">
			 
			<a href="#" role="button"  class="btn btn-block btn-lg btn-brown">
				<div class="parent control_unit_container_media ui-state-highlight main_div_unit">
					<div class="child">
						<img class="img_style" src="images/media_white.png">
					</div>
					<div class="child">
						<div class="text_style">
							Медиа
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 row-devide">
			 
			<a href="/security" role="button"  class="btn btn-block btn-lg btn-teal">
				<div class="parent control_unit_container_security ui-state-highlight main_div_unit">
					<div class="child">
						<img class="img_style" src="images/security_white.png">
					</div>
					<div class="child">
						<div class="text_style">
							Охрана
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 row-devide">
			 
		<a href="#" role="button"  class="btn btn-block btn-lg btn-blue">
				<div class="parent control_unit_container_locations ui-state-highlight main_div_unit">
					<div class="child">
						<img class="img_style" src="images/locations_white.png">
					</div>
					<div class="child">
						<div class="text_style">
							Геолокации
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>
<script>
   
            $(document).ready(function(){
                
                function myTimer() {
                    var timeNow = function () {
                            var d = new Date()
                            return ((d.getHours() < 10)?"0":"") + d.getHours() +":"+ ((d.getMinutes() < 10)?"0":"") + d.getMinutes() +":"+ ((d.getSeconds() < 10)?"0":"") + d.getSeconds();
                    }
                    document.getElementById("demo").innerHTML = timeNow();
                }
                myTimer();
                var myVar = setInterval(function(){ myTimer() }, 1000);

                
            });
</script>