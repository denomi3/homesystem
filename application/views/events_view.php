<div class="container_12" style="min-width: 960px;">
    
    
    <div class="grid_8">
	<div style="margin-top: 3%;">
            <a href="/" style="text-decoration: none;">
		<img src="images/arrow.png" style="width: 46px;float: left;margin-right: 15px;">
		<span class="header_style" style="font-size: 2.5em;font-family: ARIAL;">События</span>
            </a>
	</div>
    </div>
    <div class="grid_4">
	<?php include("partial_login_header_view.php");?>
    </div>
    <div class="clear"></div>
			
    <div class="grid_12">
        <?php
            if(isset($data['family']))
            {
                echo "<p style=\"font-size: 2.0em;font-family: ARIAL;color: white;vertical-align: top;\">Ближайший семейные праздники:</p>";
            }
        ?>
        <table cellpadding="5">
                <?php
                    foreach($data['family'] as $row_)
                    {
                        if (date('d.m', strtotime($row_[0])) == date('d.m') )
                        {
                            echo '<tr>'
                                    . '<td class="td_date" style="color:brown;">'.$row_[0].'</td>'
                                    . '<td style="color:brown";>Ура! Ура! '.$row_[1].'! Исполняется лет:'.$row_[3].' Поздравляем!</td>'
                                . '</tr>';
                        }
			else
                        {
                            echo '<tr>'
                                    . '<td class="td_date">'.$row_[0].'</td>'
                                    . '<td>'.$row_[1].' через '.$row_[2].' дн., исполняется лет: '.$row_[3].' </td>'
                                . '</tr>'; 
                        }
                    }
                ?>
        </table>
        <?php
            if(isset($data['common']))
            {
                echo "<p style=\"font-size: 2.0em;font-family: ARIAL;color: white;vertical-align: top;\">Праздники:</p>";
            }
        ?>
         <table cellpadding="5">
                <?php
                    foreach($data['common'] as $row_)
                    {
                        if ( $row_['event_date'] == date('d.m') )
                            echo '<tr><td class="td_date" style="color:brown;">'.$row_['event_date'].'.'.date('Y').'</td><td style="color:brown;">'.$row_['event_name'].'</td></tr>';
                        else
                            echo '<tr><td class="td_date">'.$row_['event_date'].'.'.date('Y').'</td><td>'.$row_['event_name'].'</td></tr>';
                    }
                ?>
        </table>
    </div>
			
    <div class="clear"></div>        
    
 </div>