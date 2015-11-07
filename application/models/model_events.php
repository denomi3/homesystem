<?php

class Model_Events extends Model
{
	
	public function get_data()
	{	
                global $dbconnection;            
                $events_data = array();
                
                //2 - common---------------------------------------------------------
                $common_sql = "SELECT 
                    event_name,
                    DATE_FORMAT(event_date, '%d.%m') as 'event_date'
                FROM events 
                WHERE
                        id_event_type = 2
                        AND
                        DATE_FORMAT(event_date, '%m.%d') >= DATE_FORMAT(now(), '%m.%d')
                        ORDER BY
                                DATE_FORMAT(event_date, '%m%d')
                        LIMIT 5";
                
                if (!$common_result = $dbconnection->query($common_sql))
                {
                    echo "Ошибка Model_Events->get_data";
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
		$events_data['common'] = $common_data;
                
                //1 - family---------------------------------------------------------
                $family_sql = "SELECT  
                                    DATE_FORMAT(event_date, '%d.%m.%Y'),
                                    event_name,
                                    DAYOFYEAR(event_date) - DAYOFYEAR(NOW()) +  
                                        IF (DAYOFYEAR(event_date) > DAYOFYEAR(NOW()),   
                                          0,  
                                          DAYOFYEAR(CONCAT(YEAR(NOW())+1, '-12-31'))) AS 'осталось дней',

                                   DATE_FORMAT(now(), '%Y') - DATE_FORMAT(event_date, '%Y') + 
                                       IF (DAYOFYEAR(event_date) > DAYOFYEAR(NOW()),   
                                           0, 1) as 'возраст',

                                    DATE_FORMAT(event_date, '%m')
                                FROM events  
                                  WHERE
                                                                id_event_type = 1
                                  ORDER BY
                                DATE_FORMAT(event_date, '%m%d')
                            LIMIT 5";
                        
                $family_data = array();
                if(!$family_result = $dbconnection->query($family_sql))
                {
                    echo "Ошибка Model_Events->get_data";
                } 
                else 
                {
                    $family_result->data_seek(0);
                    while ($row = $family_result->fetch_row()) 
                    {
                        $family_data[] = $row;
                    }
                }
		$events_data['family'] = $family_data;
                
                //return $events_data;
                
                return $events_data;
	}

}
