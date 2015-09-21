<div class="container_12" style="min-width: 960px;">
    <div class="grid_12">
	<div style="margin-top: 3%;">
            <a href="/" style="text-decoration: none;">
		<img src="images/arrow.png" style="width: 46px;float: left;margin-right: 15px;">
		<span class="header_style" style="font-size: 2.5em;font-family: ARIAL;">Авторизация</span>
            </a>
	</div>
    </div>
					
    <div class="clear"></div>
    <div class="grid_4"></div>
    <div class="grid_4">
        <br>
        <form action="" method="post">
            <table class="login">
                    <tr>
                            <td>Логин</td>
                            <td><input style="font-size: 0.8em;" type="text" name="login"></td>
                    </tr>
                    <tr>
                            <td>Пароль</td>
                            <td><input style="font-size: 0.8em;" type="password" name="password"></td>
                    </tr>
                    <td></td>
                    <td style="padding: 0 3px;">
                        
                    <input type="submit" value="Войти" name="btn"
                    style="width: 100%;height: 26px;">
                    </td>
            </table>
        </form>
        
        <?php extract($data); ?>
        <?php if($login_status=="access_granted") { ?>
        <p style="color:green">Авторизация прошла успешно.</p>
        <?php } elseif($login_status=="access_denied") { ?>
        <p style="color:red">Логин и/или пароль введены неверно.</p>
        <?php } ?>
        
    </div>
    <div class="grid_4"></div>
    <div class="clear"></div>
    
</div>



