<?php

class Model_Weather extends Model 
{
    private function get_weather(
            $city, //код города
            $col = 10, //количество дней, для которых получить погоду 
            $day_of_the_week_array = array(1 => 'пн', 2 => 'вт', 3 => 'ср', 4 => 'чт', 5 => 'пт', 6 => 'сб', 7 => 'вс'), // массив дней недели
            $time_of_day = array(0 => 'утро', 1 => 'день', 2 => 'вечер', 3 => 'ночь') //массив времени суток
    ) {
        //setlocale ("LC_TIME", "ru_RU");
        
        $data_file = 'http://export.yandex.ru/weather-ng/forecasts/' . $city . '.xml';   // Загружаем файл прогноза погоды для выбранного города
        $xml = simplexml_load_file($data_file); // загружаем xml файл через simple_xml

        $out = array(); // Массив вывода прогноза
        $counter = 0; // Счетчик количества дней, для которых доступен прогноз


        foreach ($xml->day as $day) {
            if ($counter == $col) {
                break;
            }

            $get_date = explode("-", $day['date']);
            $day_of_week = date("N", mktime(0, 0, 0, $get_date[1], $get_date[2], $get_date[0]));

            $out[$counter]['day'] = $get_date[2];
            $out[$counter]['month'] = $get_date[1];
            $out[$counter]['year'] = $get_date[0];
            $out[$counter]['day_of_week'] = $day_of_the_week_array[$day_of_week];

            for ($i = 0; $i <= 3; $i++) {
                $get_temp_from = 0;
                $get_temp_to = 0;
                $get_temp_avg = 0;
                if ($day->day_part[$i]->temperature == '') {
                    $get_temp_from = $day->day_part[$i]->temperature_from;
                    $get_temp_to = $day->day_part[$i]->temperature_to;
                    $get_temp_avg = $day->day_part[$i]->{'temperature-data'}->avg;
                } 
                else {
                    $get_temp_from = (integer)$day->day_part[$i]->temperature-1 ;
                    $get_temp_to = (integer)$day->day_part[$i]->temperature+1 ;
                }

                if ($get_temp_from > 0) {
                    $get_temp_from = '+' . $get_temp_from.'&deg;';
                }
                else {
                    $get_temp_from = $get_temp_from.'&deg;';
                }
                
                if ($get_temp_to > 0) {
                    $get_temp_to = '+' . $get_temp_to.'&deg;';
                }
                else {
                    $get_temp_to = $get_temp_to.'&deg;';
                }
                
                if ($get_temp_avg > 0) {
                    $get_temp_avg = '+' . $get_temp_avg.'&deg;';
                }
                else {
                    $get_temp_avg = $get_temp_avg.'&deg;';
                }

                $out[$counter]['weather'][$i]['temp_avg'] = $get_temp_avg;
                $out[$counter]['weather'][$i]['temp_from'] = $get_temp_from;
                $out[$counter]['weather'][$i]['temp_to'] = $get_temp_to;
                $out[$counter]['weather'][$i]['image'] = $day->day_part[$i]->{'image-v3'};
                $out[$counter]['weather'][$i]['time_of_day'] = $time_of_day[$i];
                $out[$counter]['weather'][$i]['weather_type'] = $day->day_part[$i]->weather_type;
                $out[$counter]['weather'][$i]['humidity'] = $day->day_part[$i]->humidity;
                $out[$counter]['weather'][$i]['pressure'] = $day->day_part[$i]->pressure;
                $out[$counter]['weather'][$i]['wind_speed'] = $day->day_part[$i]->wind_speed;
                $out[$counter]['weather'][$i]['wind_direction'] = $day->day_part[$i]->wind_direction;
            }
            $counter++;
        }
        return $out;
    }

    public function get_data() {
        $w_city_id = 27612;
        // Идентификатор города (в нашем случае Москва)  - можно узнать по адресу http://weather.yandex.ru/static/cities.xml

        $col = 7;
        // количество дней, на сколько нужен прогноз

        $day_of_the_week_array = array(
            1 => 'ПН',
            2 => 'ВТ',
            3 => 'СР',
            4 => 'ЧТ',
            5 => 'ПТ',
            6 => 'СБ',
            7 => 'ВС'
        ); // Массив дней недели (для вывода)

        $time_of_day = array(
            0 => 'утро',
            1 => 'день',
            2 => 'вечер',
            3 => 'ночь'
        ); // Массив времени суток (для вывода)

        $weather_data = $this->get_weather($w_city_id, $col, $day_of_the_week_array, $time_of_day);
        /*
          заполняем масив при помощи функции, первый параметр обязательный - индентификатор города
          другие параметры необязательны - в этом случае используется значения по умолчанию
         */
        return $weather_data;
    }

}
