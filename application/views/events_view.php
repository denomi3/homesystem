<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="page-header">
				<a href="/"><img src="images/arrow.png" style="width: 36px;margin-right: 6px;margin-top: 19px;"></a>
				<a href="/" style="text-decoration: none;"><h1 class="header_style"><strong>События</strong></h1></a>  	
			</div>	
		</div>
		<div class="col-md-4">
                        <?php include("partial/partial_login_header_view.php");?>
		</div>
	</div>
        <div class="row">
		<div class="col-md-12">
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
	</div>
</div>
