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
<div class="container">
       <style>
            body{
                background: #019de7;
            }
        </style>
    
	<div class="row">
		<div class="col-md-8">
			<div class="page-header">
				<a href="/"><img src="images/arrow.png" style="width: 36px;margin-right: 6px;margin-top: 19px;"></a>
				<a href="/" style="text-decoration: none;"><h1 class="header_style"><strong>Погода</strong></h1></a>  	
			</div>	
		</div>
		<div class="col-md-4">
                        <?php include("partial/partial_login_header_view.php");?>
		</div>
	</div>
	<div class="row">
            <div class="col-md-8 row-devide">
                    <div class="parent control_unit_container_weather_page main_div_unit">
                <?php
                    $first = array_shift($data);
                    $today = $first['weather'][1];
                ?>
                
                <div class="child">
                <br />
                    <div class="weather_header">
                        <?php
                            echo 'Сегодня: '. $first['day'].' '.$monthAr[(int)date('m')][1].', '.$first['day_of_week'];
                        ?>
                    </div>
		</div>
                <br />
                        <div class="grid_2 alpha">
                            <?php
                                echo '<img src="images/weather/'.$today['image'].'.png "width="130" height="130"/>';
                                echo '<p class="weather_text3" style="">'.$today['weather_type'].'</p>';
                            ?>
                        </div>
                        <div class="grid_2">
                            <?php
                                echo '<p class="weather_text">'.$today['temp_avg'].'</p>';
                            ?>
                        </div>
                        <div class="grid_4 omega">
                            <?php
                                echo '<br /><br />';
                                echo '<p class="weather_text3" style="text-align: left;">Скорость ветра: '.$today['wind_speed'].' м/с</p>';
                                echo '<p class="weather_text3" style="text-align: left;">Влажность: '.$today['humidity'].' %</p>';
                                echo '<p class="weather_text3" style="text-align: left;">Давление: '.$today['pressure'].' мм рт. с.</p>';
                                echo '<p class="weather_text3" style="text-align: left;">Ночь: '.$first['weather'][3]['temp_from'].'...'.$first['weather'][3]['temp_to'].'</p>';
                            ?>
                        </div> 
                <div class="clear"></div>
		</div>
            </div>
            <div class="col-md-4 row-devide">
            </div>
	</div>
        <?php
                foreach ($data as $key => $value) 
                { 
                    echo '<div class="grid_2">';
                    echo '<div class="parent control_unit_container_weather_page main_div_unit">';
                    echo '<br />';
                    echo '<div class="weather_header2">';
                    echo $value['day'].' '.$monthAr[(int)$value['month']][1].', '.$value['day_of_week'].'</div>';
                    echo '<br />';

                    foreach ($value['weather'] as $key1 => $value1)
                    { 
                        //$value1 = $value['weather'][1]
                        if($value1['time_of_day'] == 'день' || $value1['time_of_day'] == 'ночь')
                        {
                            echo '<img src="images/weather/'.$value1['image'].'.png"width="78" height="78" style="float:left;" />';
                            echo '<p class="weather_text2">'.$value1['time_of_day'].'</p>';
                            echo '<p class="weather_text2" style="width: 130px">'.$value1['temp_from'].'...'.$value1['temp_to'].'</p>';
                            echo '<p style="clear:both;"></p>';
                            echo "<br />";
                        }
                    }
                    echo '</div>';
                    echo '</div>';
                }
        ?>
    
    
 </div>


