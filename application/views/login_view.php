<div class="container">
          
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<a href="/"><img src="images/arrow.png" style="width: 36px;margin-right: 6px;margin-top: 19px;"></a>
				<a href="/" style="text-decoration: none;"><h1 class="header_style"><strong>Авторизация</strong></h1></a>  	
			</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 row-devide">
                    
                    <form role="form" action="" method="post">
                        <div class="form-group">
                          <label for="login">Логин</label>
                          <input type="text" class="form-control" id="login" name="login" placeholder="Введите логин">
                        </div>
                        <div class="form-group">
                          <label for="password">Пароль</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="Введите пароль">
                        </div>
                        <button type="submit" class="btn btn-default">Войти</button>
                    </form>

                    <?php extract($data); ?>
                    <?php if($login_status=="access_granted") { ?>
                    <p style="color:green">Авторизация прошла успешно.</p>
                    <?php } elseif($login_status=="access_denied") { ?>
                    <p style="color:red">Логин и/или пароль введены неверно.</p>
                    <?php } ?>
                </div>
	</div>   
</div>



