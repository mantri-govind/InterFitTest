<!doctype html>
<html>
<head>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/myscript.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/css/responsive.css" />
<meta charset="utf-8">
<title>FINAL DESIGN</title>
</head>
<body>
	<section id="container">
    	<header>
        	<div id="logo">
            	<div id="login">
                	<table>
                    	<tr>
                        	<td><input type="text"></td>
                        	<td><input type="text"></td>
                        	<td><input type="submit" value="Login"></td>
                    	</tr>
                    </table>
                </div>
            </div>
            <nav >
            	<ul id="list">
                	<li><a href="">HOME</a></li>
                	<li><a href="">ABOUT US</a></li>
                	<li><a href="">CONTACT US</a></li>
                	<li><a href="">MISSION & VISSION</a></li>
                	<li><a href="">SITE MAP</a></li>
                </ul>
            </nav>
        </header>		
		<?php echo $content; ?>
	</section>
		<div id="footer">
			<p>Copyright @ Company Name</p>        
        </div>
</body>
</html>