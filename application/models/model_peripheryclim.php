<?php

class Model_Peripheryclim extends Model
{
	
	public function get_data()
	{	
                global $dbconnection;            
                
                $common_sql = "SELECT `keyID` , `key_addr` , `key_title` , `key_label` , `key_pio` , `key_level` , `key_type` , `key_place`
                               FROM `dev_list` where key_type='temp' or key_type='hum_dht22'";
                
                if (!$common_result = $dbconnection->query($common_sql))
                {
                    echo "Ошибка Model_Peripheryclim->get_data";
                } 
                else 
                {
                    $common_data = array();
                    $common_result->data_seek(0);
                    while ($row = $common_result->fetch_assoc()) 
                    {
                            $row['temp_value'] = 0;
                            
                            $temp = "SELECT temp_date, temp_value FROM temp_data WHERE id_dev ='".$row['key_addr']."' ORDER BY temp_date DESC LIMIT 1";
                            $temp_result = $dbconnection->query($temp);
                            $temp_result->data_seek(0);
                            $temp_row = $temp_result->fetch_assoc();
                            $row['temp_value'] = $temp_row['temp_value']; 
                            
                            $current_date = time();
                            $lastdate = strtotime($temp_row['temp_date']);
                            $raz = $current_date - $lastdate;
                            if($raz>600)
                            {
                                $row['temp_value'] = '';
                            }
                            $common_data[] = $row;
                    }
                }                
               
                return $common_data;
	}

}
