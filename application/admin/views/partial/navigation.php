<?php
?>
 <div class="nav-collapse collapse">
    <ul class="nav pull-left">
        <li>
            <a href="/">Перейти к терминалу</a>
        </li>
    </ul>
    <ul class="nav pull-right">
        <li>
            <a href="#">
                <?php
                    echo $user_login;
                ?>       
            </a>
        </li>
        <li>
            <a href="#">|</a>
        </li>
        <li>
            <a href="/login/logout">Выход</a>
        </li>
    </ul>
</div>

