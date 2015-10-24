<div class="container_12" style="min-width: 960px;">
    
    <style>
        .cnv{height: 527px;width: 717px; position: relative;background:url(/images/home_cheme_plan.png)  no-repeat;
            -moz-background-size: 100%; /* Firefox 3.6+ */
            -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
            -o-background-size: 100%; /* Opera 9.6+ */
            background-size: 100%; /* Современные браузеры */
            margin-top: 5px;}

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
	<?php include("partial/partial_login_header_view.php");?>
    </div>
    <div class="clear"></div>
    
		
			<div class="grid_9">                            
                            <div class="control_unit cnv">
                          
                            <div id="controls_temperature" style="display: block;">
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

                                
                            
                        </div>
                            
			</div>
                        <div class="grid_3">
                            
                            <?php include("partial/partial_periphery.php");?>
                            
			</div>
					
			<div class="clear"></div>
			
</div>

<script>
   /*
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

       
   })*/
</script>