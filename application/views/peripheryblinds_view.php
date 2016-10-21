
    <style>
        .lightcontrol.ON {
            position: relative;
            background:url(/images/blinds_up.png) no-repeat;
            -moz-background-size: 100%; /* Firefox 3.6+ */
            -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
            -o-background-size: 100%; /* Opera 9.6+ */
            background-size: 100%; /* Современные браузеры */
            box-shadow: 0px 0px 13px 16px rgba(255, 191, 0, 0.3)
        }
        .lightcontrol.OFF {position: relative;background:url(/images/blinds.png) no-repeat;
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
    </style>
    <div id="controls_light" style="display: block;">
        <? 
            foreach($data as $row_)
            {
                list($dmega_id, $dmega_port) = explode(":", $row_['key_addr']);
                list($dmega_l, $dmega_t) = explode(";", $row_['key_place']);
                $dmega_addr = 'http://'.$dmega_id.'/sec/';
                $dmega_addr = preg_replace("/\,$/", "", $dmega_addr);                                              
                $dmega_title = $row_['key_title'];
                $state = file_get_contents($dmega_addr.'?pt='.$dmega_port.'&cmd=get');
                echo '<a id="'.$row_['key_addr'].'" title="'.$dmega_title.'" class="lightcontrol '.$state.'" style="position: absolute;left: '.$dmega_l.'px;top: '.$dmega_t.'px;" href="#"></a>';
            }
        ?>
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
   })
</script>