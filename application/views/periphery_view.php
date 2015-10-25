<div class="container_12" style="min-width: 960px;">
    
    <style>
         body{background-color: dimgray;}
        
         .scenario_window {height: 50px; background-color: #808080;}
         .scenario_text{color: white;font-size: 1.1em;font-family: arial;}
         .scenario_text2{color: white;font-size: 1.1em;font-family: arial; margin-top: 25px;}
         .img_style{height: 40px;}
         .text_style {color: white;font-size: 19px;font-family: arial;}
         .child {display: inline-block;vertical-align: middle;margin: 0 0.5em 0 0.5em;margin-top: 5px;}
         .parent {word-wrap: break-word;text-align: left;}
         
         .cnv{height: 527px;width: 717px; position: relative;background:url(/images/home_cheme_plan.png)  no-repeat;
            -moz-background-size: 100%; /* Firefox 3.6+ */
            -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
            -o-background-size: 100%; /* Opera 9.6+ */
            background-size: 100%; /* Современные браузеры */
            margin-top: 5px;}
         
         
         ul#tabs li.current a div{
                background: darkslateblue;
           }
           
           ul#tabs{
               list-style: none;
               margin-left: -40px;
           }
    </style>
    
    <div class="grid_8">
	<div style="margin-top: 3%;">
            <a href="/" style="text-decoration: none;">
		<img src="images/arrow.png" style="width: 46px;float: left;margin-right: 15px;">
		<span class="header_style" style="font-size: 2.5em;font-family: ARIAL;">Переферия</span>
            </a>
	</div>
    </div>
    <div class="grid_4">
	<?php include("partial/partial_login_header_view.php");?>
    </div>
    <div class="clear"></div>
    
		
			<div class="grid_9">    
                            
                            <div id="tabs-container" class="control_unit cnv">
                            </div>
                            
			</div>
                        <div class="grid_3">
                            <ul id="tabs">
                                <li class="current">
                                    <a href="/peripherylight" style="text-decoration: none;">
                                        <div class="parent control_unit_container_scenarios ui-state-highlight main_div_unit scenario_window">
                                                <div class="child">
                                                        <img class="img_style" src="images/light.png">
                                                </div>
                                                <div class="child">
                                                        <div class="text_style">
                                                                Освещение
                                                        </div>
                                                </div>
                                        </div>
                                </a>
                                </li>
                                <li>
                                    <a href="/peripherytemp" style="text-decoration: none;">
                                        <div class="parent control_unit_container_scenarios ui-state-highlight main_div_unit scenario_window">
                                                <div class="child">
                                                        <img class="img_style" src="images/temp.png">
                                                </div>
                                                <div class="child">
                                                        <div class="text_style">
                                                                Климат
                                                        </div>
                                                </div>
                                        </div>
                                </a>
                                </li>
                            </ul>
			</div>
					
			<div class="clear"></div>
			
</div>

<script>
   
var containerId = '#tabs-container';
var tabsId = '#tabs';

$(document).ready(function(){
	// Preload tab on page load
	if($(tabsId + ' LI.current A').length > 0){
		loadTab($(tabsId + ' LI.current A'));
	}
	
    $(tabsId + ' A').click(function(){
    	if($(this).parent().hasClass('current')){ return false; }
    	
    	$(tabsId + ' LI.current').removeClass('current');
    	$(this).parent().addClass('current');
    	
    	loadTab($(this));    	
        return false;
    });
});

function loadTab(tabObj){
    if(!tabObj || !tabObj.length){ return; }
    //$(containerId).addClass('loading');
    //$(containerId).fadeOut('fast');
    
    $(containerId).load(tabObj.attr('href'), function(){
        $(containerId).removeClass('loading');
        $(containerId).fadeIn('fast');
    });
}
    
</script>