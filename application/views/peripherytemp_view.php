    <style>

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
     
    

                            <div id="controls_temperature" style="display: block;">
                                <? 
				foreach($data as $row_)
                                {
                                         
                                            $dmega_title = $row_['key_title'];
                                            list($dmega_l, $dmega_t) = explode(";", $row_['key_place']);
                                            echo '<a id="temp_'.$row_['key_addr'].'" title="'.$dmega_title.'" class="tempcontrol" style="position: absolute;left: '.$dmega_l.'px;top: '.$dmega_t.'px;" href="#">'
                                                    . '<span class="temp_pos">'
                                                         .round($row_['temp_value']).'&deg;'
                                                    . '</span>'
                                               . '</a>';
                                }
                                ?>
                            </div>

                     