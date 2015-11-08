    <style>
        .tempcontrol {position: relative;background:url(/images/temperature.png) no-repeat;
            -moz-background-size: 100%; /* Firefox 3.6+ */
            -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
            -o-background-size: 100%; /* Opera 9.6+ */
            background-size: 100%; /* Современные браузеры */
        }
        .humcontrol {position: relative;background:url(/images/hum.png) no-repeat;
            -moz-background-size: 100%; /* Firefox 3.6+ */
            -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
            -o-background-size: 100%; /* Opera 9.6+ */
            background-size: 100%; /* Современные браузеры */
        }
        .lightcontrol,.tempcontrol,.devcontrol,.securcontrol, .humcontrol {
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
     
    <div id="controls_temperature" style="display: block;">
    <? 
	foreach($data as $row_)
        {  
            if($row_['key_type']=="temp")
            {
                $val = '';
                if(!empty($row_['temp_value']))
                {
                   $val = round($row_['temp_value']).'&deg;';
                }
                $dmega_title = $row_['key_title'];
                list($dmega_l, $dmega_t) = explode(";", $row_['key_place']);
                echo '<a id="temp_'.$row_['key_addr'].'" title="'.$dmega_title.'" class="tempcontrol" style="position: absolute;left: '.$dmega_l.'px;top: '.$dmega_t.'px;" href="#">'
                      . '<span class="temp_pos">'
                      .$val
                      . '</span>'
                      . '</a>';
            }
            if($row_['key_type']=="hum_dht22")
            {
                $val = '';
                if(!empty($row_['temp_value']))
                {
                   $val = round($row_['temp_value']).'&#37;';
                }
                $dmega_title = $row_['key_title'];
                list($dmega_l, $dmega_t) = explode(";", $row_['key_place']);
                echo '<a id="temp_'.$row_['key_addr'].'" title="'.$dmega_title.'" class="humcontrol" style="position: absolute;left: '.$dmega_l.'px;top: '.$dmega_t.'px;" href="#">'
                      . '<span class="temp_pos">'
                      .$val
                      . '</span>'
                      . '</a>';
            }
        }
    ?>
    </div>

<script>
   
   $(document).ready(function(){
        function TempTimer() {
             $.get('/peripheryclim', function(data)
             {
                 $.('#tabs-container').html(data);
             });
        }
        setInterval(function(){ TempTimer() }, 300000);

   })
</script>             