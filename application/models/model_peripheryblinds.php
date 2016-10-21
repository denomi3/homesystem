<?php

class Model_Peripheryblinds extends Model
{
	
	public function get_data()
	{	
                global $dbconnection;            
                
                $common_sql = "SELECT `keyID` , `key_addr` , `key_title` , `key_label` , `key_pio` , `key_level` , `key_type` , `key_place`
                               FROM `dev_list` where key_type='key'";
                
                if (!$common_result = $dbconnection->query($common_sql))
                {
                    echo "Ошибка Model_Peripheryblinds->get_data";
                } 
                else 
                {
                    $common_data = array();
                    $common_result->data_seek(0);
                    while ($row = $common_result->fetch_assoc()) 
                    {
                        $common_data[] = $row;
                    }
                }                
               
                return $common_data;
	}

}
