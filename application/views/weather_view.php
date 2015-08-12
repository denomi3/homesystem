<style>
    body{
        background: #019de7;
    }
</style>

<?php
     $monthAr = array(
        1 => array('Январь', 'Января'),
        2 => array('Февраль', 'Февраля'),
        3 => array('Март', 'Марта'),
        4 => array('Апрель', 'Апреля'),
        5 => array('Май', 'Мая'),
        6 => array('Июнь', 'Июня'),
        7 => array('Июль', 'Июля'),
        8 => array('Август', 'Августа'),
        9 => array('Сентябрь', 'Сентября'),
        10=> array('Октябрь', 'Октября'),
        11=> array('Ноябрь', 'Ноября'),
        12=> array('Декабрь', 'Декабря')
  );
?>

<div class="container_12" style="min-width: 940px;">
    <div class="grid_12">
	<div style="margin-top: 1%;">
            <a href="/" style="text-decoration: none;">
		<img src="images/arrow.png" style="width: 65px;float: left;margin-right: 15px;">
		<span class="header_style" style="font-size: 3.5em;font-family: ARIAL;">Погода</span>
            </a>
	</div>
    </div>
					
    <div class="clear"></div>
	
    
        <div class="grid_6">
            <div class="parent control_unit_container_weather_page main_div_unit">
                <?php
                
                $first = array_shift($data);
                
                echo '<div class="child">';
				//<img class="img_style" src="images/weather_white.png">
		echo '</div>';
                echo '<div class="child">';
                echo '<br />';
                    echo '<div class="weather_header">';
			echo 'Сегодня: '. $first['day'].' '.$monthAr[(int)date('m')][1].', '.$first['day_of_week'];
                    echo '</div>';
		echo '</div>';
                echo '<br />';
                $today = $first['weather'][1];

                        echo "<br /><br />";
                        echo '<table>';
                        echo '<tr>';
                            echo '<td>';
                                //echo '<img src="http://yandex.st/weather/1.1.78/i/icons/48x48/'.$today['image'].'.png "width="200" height="200"/>';
                                echo '<img src="images/weather/'.$today['image'].'.png "width="200" height="200" style="margin-top:-50px;"/>';
                                echo '<p class="" style="font-size: 0.8em;margin-bottom: 20px;">'.$today['weather_type'].'</p>';
                            echo '</td>';

                            echo '<td>';
                                echo '<p class="weather_text" style="margin-left: 25px;">'.$today['temp_avg'].'</p>';
                                
                            echo '</td>';

                            echo '<td style="text-align: left;">';
                                echo '<p class="" style="margin-bottom: 3%;margin-left: 25px;font-size: 0.8em; font-family: arial;">Скорость ветра: '.$today['wind_speed'].' м/с</p>';
                                echo '<p class="" style="margin-bottom: 3%;margin-left: 25px;font-size: 0.8em; font-family: arial;">Влажность: '.$today['humidity'].' %</p>';
                                echo '<p class="" style="margin-bottom: 3%;margin-left: 25px;font-size: 0.8em; font-family: arial;">Давление: '.$today['pressure'].' мм рт. с.</p>';
                                echo '<p class="" style="margin-bottom: 3%;margin-left: 25px;font-size: 0.8em; font-family: arial;">Ночь: '.$first['weather'][3]['temp_from'].'...'.$first['weather'][3]['temp_to'].'</p>';
                            echo '</td>';
                        echo '</tr>';
                        echo '</table>';

                ?>
			
			
		</div>
	</div>
    
        <div class="grid_6"></div>
    
        <div class="clear"></div>
        <br>
       
        <?php
                foreach ($data as $key => $value) 
                { 
                    echo '<div class="grid_2">';
                    echo '<div class="parent control_unit_container_weather_page main_div_unit">';
                    echo '<br />';
                    echo '<div class="weather_header2">';
                    echo $value['day'].' '.$monthAr[(int)$value['month']][1].', '.$value['day_of_week'].'</div>';
                    echo '<br /><br />';

                    foreach ($value['weather'] as $key1 => $value1)
                    { 
                        //$value1 = $value['weather'][1]
                        if($value1['time_of_day'] == 'день' || $value1['time_of_day'] == 'ночь')
                        {
                            //echo '<img src="http://yandex.st/weather/1.1.78/i/icons/48x48/'.$value1['image'].'.png"width="78" height="78" style="float:left;" />';
                            echo '<img src="images/weather/'.$value1['image'].'.png"width="78" height="78" style="float:left;" />';
                            echo '<p class="weather_text2">'.$value1['time_of_day'].'</p>';
                            echo '<p class="weather_text2">'.$value1['temp_from'].'...'.$value1['temp_to'].'</p>';
                            echo '<p style="clear:both;"></p>';
                            echo "<br />";
                        }
                    }
                    echo '</div>';
                    echo '</div>';
                }
        ?>

     
        
			
    <div class="clear"></div>        
    
 </div>


