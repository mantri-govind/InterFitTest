<html>
	<head>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript">
		var interval=setInterval(hideNow,2000);
			var a=0;
		function hideNow()	
			{
				a++;
				if(a==1)
				{
					$("#slide1").show();
					$("#slide2").hide(2000);
					$("#slide3").hide(2000);
		
				}
		else if(a==2)
		{
			$("#slide1").hide(2000);
			$("#slide2").show();
			$("#slide3").hide(2000);
			
		}
		else if(a==3)
		{
			$("#slide1").hide(2000);
			$("#slide2").hide(2000);
			$("#slide3").show();
			a=0;
		}
		else
		{
			
		}

}

		</script>	 
		<style type="text/css">
		#container
		{
			background:#e7ebf2;
			float:left;
			width:100%;
			height:100%;
			
		}
		#navbar
		{
			width:100%;
			height:10%;
			background:#000066;
			float:left;
		}
		#logo
		{
			height:100%;
			width:15%;
			float:left;
		}
		#menu
		{
			height:100%;
			float:left;
			margin-left:5%;
		}
		
    .myButton {
        
        -moz-box-shadow:inset -2px 1px 16px -50px #7a8eb9;
        -webkit-box-shadow:inset -2px 1px 16px -50px #7a8eb9;
        box-shadow:inset -2px 1px 16px -50px #7a8eb9;
        
        background-color:transparent;
		float:left;
        
        -moz-border-radius:9px;
        -webkit-border-radius:9px;
        border-radius:9px;
        
        display:inline-block;
        color:#ffffff;
        font-family:arial;
        font-size:18px;
        font-weight:bold;
		margin-top:15px;
        padding:10px 20px;
        text-decoration:none;
        
    }
    .myButton:hover {
        
        background-color:#A0A0A4;
    }
    .myButton:active {
        position:relative;
        top:1px;
    }

		body
		{
			margin:00px;
			background-color:#e7ebf2;
		}
		#search
		{
			height:100%;
			width:20%;
			float:left;
			margin:2%;
		}
	.searchbox 
	{
     background-color: #FFFFFF;
     border: Defaultpx dotted ;
     color:#000000 ;
     font-size: 14;
     font-family: arial;
     font-style: normal;
	 border-radius:15px;
	 width:100%;
	 height:60%;
	 margin-top:-5%;
     font-weight: ;
     padding: 1px;
     }
	 
    .searchbtn {
        
        -moz-box-shadow:inset 0px 1px 0px 0px #ffe0b5;
        -webkit-box-shadow:inset 0px 1px 0px 0px #ffe0b5;
        box-shadow:inset 0px 1px 0px 0px #ffe0b5;
        
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fbb450), color-stop(1, #f89306));
        background:-moz-linear-gradient(top, #fbb450 5%, #f89306 100%);
        background:-webkit-linear-gradient(top, #fbb450 5%, #f89306 100%);
        background:-o-linear-gradient(top, #fbb450 5%, #f89306 100%);
        background:-ms-linear-gradient(top, #fbb450 5%, #f89306 100%);
        background:linear-gradient(to bottom, #fbb450 5%, #f89306 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fbb450', endColorstr='#f89306',GradientType=0);
        
        background-color:#fbb450;
        
        -moz-border-radius:42px;
        -webkit-border-radius:42px;
        border-radius:42px;
        
        border:1px solid #c97e1c;
        float:left;
        display:inline-block;
        color:#ffffff;
        font-family:Trebuchet MS;
        font-size:25px;
        font-weight:bold;
        padding:6px 11px;
        text-decoration:none;
        
        text-shadow:0px 1px 0px #805e2e;
        
    }
    .searchbtn:hover {
        
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f89306), color-stop(1, #fbb450));
        background:-moz-linear-gradient(top, #f89306 5%, #fbb450 100%);
        background:-webkit-linear-gradient(top, #f89306 5%, #fbb450 100%);
        background:-o-linear-gradient(top, #f89306 5%, #fbb450 100%);
        background:-ms-linear-gradient(top, #f89306 5%, #fbb450 100%);
        background:linear-gradient(to bottom, #f89306 5%, #fbb450 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f89306', endColorstr='#fbb450',GradientType=0);
        
        background-color:#f89306;
    }
    .searchbtn:active {
        position:relative;
        top:1px;
    }

#btnsearch
{
	float:left;
	margin-left:105%;
	margin-top:-15%;
	 
}
#leftslider
{
 	 /* IE10 */
	background-image: -ms-radial-gradient(top left, #CCCCCC  22%,#e7ebf2 92%);
	/* Mozilla Firefox */
	background-image: -moz-radial-gradient(top left, #CCCCCC 22%, #e7ebf2  92%);
	/* Opera */
	background-image: -o-radial-gradient(top left, #CCCCCC 22%, #e7ebf2   92%);
	/* Webkit (Safari/Chrome 10) */
	background-image: -webkit-gradient(linear, left top, right bottom, color-stop(0, #FFFFFF), color-stop(1, #00A3EF));
	/* Webkit (Chrome 11+) */
	background-image: -webkit-radial-gradient(top left, #CCCCCC  22%, #e7ebf2 92%);
	/* Proposed W3C Markup */
	background-image: radial-gradient(top left, #CCCCCC 22%,  #e7ebf2 92%);
	 
	width:60%;
	margin:1%;
 
	height:85%;
	float:left;
	border-radius:5%;
}
 .imgs
{
	background:#CCCCCC;
	border-radius:50%;
	height:25%;
	width:20%;
	margin:1%;
	margin-top:4%;
	float:left;
}
.bubble 
{
position: relative;
width: 68%;
height: 20%;
padding: 16px;
margin-left:25%;
margin-top:5%;
background: transparent;
-webkit-border-radius: 30px;
-moz-border-radius: 30px;
border-radius: 30px;
 }


#rightslide
{
	
	 background:rgba(55,0,0,0.5);
	 height:85%;
	 border-radius:5%;
	 width:35%;
	 margin:1%;
	 float:left;
}
#slidenav
{
	 
	 
	width:100%;
	height:15%;
	float:left;
	overflow:auto;
	 position:relative;
	border-radius:25px;
	 
}
<!--- -->

    .sign {
        
        -moz-box-shadow:inset 0px 1px 0px 0px #f7c5c0;
        -webkit-box-shadow:inset 0px 1px 0px 0px #f7c5c0;
        box-shadow:inset 0px 1px 0px 0px #f7c5c0;
        
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fc8d83), color-stop(1, #e4685d));
        background:-moz-linear-gradient(top, #fc8d83 5%, #e4685d 100%);
        background:-webkit-linear-gradient(top, #fc8d83 5%, #e4685d 100%);
        background:-o-linear-gradient(top, #fc8d83 5%, #e4685d 100%);
        background:-ms-linear-gradient(top, #fc8d83 5%, #e4685d 100%);
        background:linear-gradient(to bottom, #fc8d83 5%, #e4685d 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fc8d83', endColorstr='#e4685d',GradientType=0);
        
        background-color:#CCCC66;
        
        -moz-border-radius:17px;
        -webkit-border-radius:17px;
        border-radius:17px;
        
        border:1px solid #d83526;
        
        display:inline-block;
        color:#ffffff;
        font-family:arial;
        font-size:28px;
		margin:1%;
        font-weight:bold;
        padding:6px 24px;
        text-decoration:none;
        
        text-shadow:0px 1px 0px #b23e35;
        
    }
    .sign:hover {
        
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #e4685d), color-stop(1, #fc8d83));
        background:-moz-linear-gradient(top, #e4685d 5%, #fc8d83 100%);
        background:-webkit-linear-gradient(top, #e4685d 5%, #fc8d83 100%);
        background:-o-linear-gradient(top, #e4685d 5%, #fc8d83 100%);
        background:-ms-linear-gradient(top, #e4685d 5%, #fc8d83 100%);
        background:linear-gradient(to bottom, #e4685d 5%, #fc8d83 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e4685d', endColorstr='#fc8d83',GradientType=0);
        
        background-color:#e4685d;
    }
    .sign:active {
        position:relative;
        top:1px;
    }
	.bubble p
	{
		font-family:"Arial";
		font-size:16px;
		font-weight:600;
		color:#0f0f0f;
	}
	 
	 #newuser
{
	margin-top:1%;
	float:left;
	width:100%;
	
}
#newuser p
{
	text-align:left;
	font-family:"Arial";
	font-weight:700;
	font-size:25px;
}
 #usrsignup {
        
        -moz-box-shadow:inset 0px 1px 0px 0px #ffe0b5;
        -webkit-box-shadow:inset 0px 1px 0px 0px #ffe0b5;
        box-shadow:inset 0px 1px 0px 0px #ffe0b5;
        text-align:center;
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fbb450), color-stop(1, #f89306));
        background:-moz-linear-gradient(top, #fbb450 5%, #f89306 100%);
        background:-webkit-linear-gradient(top, #fbb450 5%, #f89306 100%);
        background:-o-linear-gradient(top, #fbb450 5%, #f89306 100%);
        background:-ms-linear-gradient(top, #fbb450 5%, #f89306 100%);
        background:linear-gradient(to bottom, #fbb450 5%, #f89306 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fbb450', endColorstr='#f89306',GradientType=0);
        
        background-color:#fbb450;
        
        -moz-border-radius:7px;
        -webkit-border-radius:7px;
        border-radius:7px;
        
        border:1px solid #c97e1c;
		width:80%;
        
        display:inline-block;
        color:#ffffff;
        font-family:Trebuchet MS;
        font-size:20px;
        font-weight:bold;
        padding:6px 11px;
        text-decoration:none;
         margin-top:0%;
		 margin-left:5%;
        text-shadow:0px 1px 0px #8f7f24;
        
    }
    #usrsignup:hover {
        
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f89306), color-stop(1, #fbb450));
        background:-moz-linear-gradient(top, #f89306 5%, #fbb450 100%);
        background:-webkit-linear-gradient(top, #f89306 5%, #fbb450 100%);
        background:-o-linear-gradient(top, #f89306 5%, #fbb450 100%);
        background:-ms-linear-gradient(top, #f89306 5%, #fbb450 100%);
        background:linear-gradient(to bottom, #f89306 5%, #fbb450 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f89306', endColorstr='#fbb450',GradientType=0);
        
        background-color:#f89306;
    }
    #usrsignup:active {
        position:relative;
        top:1px;
    }
	#login
	{
		width:100%;
		height:auto;
		float:left;
		margin-top:5%;
		
	}
	 .myButton1 {
        
        -moz-box-shadow:inset 0px 1px 0px 0px #7a8eb9;
        -webkit-box-shadow:inset 0px 1px 0px 0px #7a8eb9;
         
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #637aad), color-stop(1, #5972a7));
        background:-moz-linear-gradient(top, #637aad 5%, #5972a7 100%);
        background:-webkit-linear-gradient(top, #637aad 5%, #5972a7 100%);
        background:-o-linear-gradient(top, #637aad 5%, #5972a7 100%);
        background:-ms-linear-gradient(top, #637aad 5%, #5972a7 100%);
        background:linear-gradient(to bottom, #637aad 5%, #5972a7 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#637aad', endColorstr='#5972a7',GradientType=0);
        
        background-color:#dbe6cF;
        border:thin #999999;
 
        
        display:inline-block;
        color:#ffffff;
        font-family:arial;
        font-size:13px;
        font-weight:bold;
        padding:6px 12px;
        text-decoration:none;
        margin-top:3%;
    }
	.log
{
  
  padding: 0 10px;
   width:80%;
   margin-top:3%;
   margin-left:5%;
  height: 34px;
  color: #404040;
  background: white;
  border: 1px;
  border-color: #c4c4c4 #d1d1d1 #d4d4d4;
  border-radius: 10px;
  
   
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.12);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.12);

}
 #usrsignin {
        
        -moz-box-shadow:inset 0px 1px 0px 0px #ffe0b5;
        -webkit-box-shadow:inset 0px 1px 0px 0px #ffe0b5;
        box-shadow:inset 0px 1px 0px 0px #ffe0b5;
        text-align:center;
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fbb450), color-stop(1, #f89306));
        background:-moz-linear-gradient(top, #fbb450 5%, #f89306 100%);
        background:-webkit-linear-gradient(top, #fbb450 5%, #f89306 100%);
        background:-o-linear-gradient(top, #fbb450 5%, #f89306 100%);
        background:-ms-linear-gradient(top, #fbb450 5%, #f89306 100%);
        background:linear-gradient(to bottom, #fbb450 5%, #f89306 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fbb450', endColorstr='#f89306',GradientType=0);
        
        background-color:#fbb450;
        
        -moz-border-radius:7px;
        -webkit-border-radius:7px;
        border-radius:7px;
        
        border:1px solid #c97e1c;
		width:20%;
        
        display:inline-block;
        color:#ffffff;
        font-family:Trebuchet MS;
        font-size:17px;
        font-weight:bold;
        padding:6px 11px;
        text-decoration:none;
         margin-top:-15px;
		 margin-left:5%;
        text-shadow:0px 1px 0px #8f7f24;
        
    }
    #usrsignin:hover {
        
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f89306), color-stop(1, #fbb450));
        background:-moz-linear-gradient(top, #f89306 5%, #fbb450 100%);
        background:-webkit-linear-gradient(top, #f89306 5%, #fbb450 100%);
        background:-o-linear-gradient(top, #f89306 5%, #fbb450 100%);
        background:-ms-linear-gradient(top, #f89306 5%, #fbb450 100%);
        background:linear-gradient(to bottom, #f89306 5%, #fbb450 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f89306', endColorstr='#fbb450',GradientType=0);
        
        background-color:#f89306;
    }
    #usrsigin:active {
        position:relative;
        top:1px;
    }
	
   p
 {
	 
	 
	font-family:"Georgia",Times New Roman, Times, serif;
	font-size:18px;
	margin-left:5%;
	margin-top:2%;
	color:#FFFFFF; 
}
 		</style>
	</head>
	<body>
		<div id="container">
				<div id="navbar">
					<div id="logo"> <img src="images/interfit.png" alt="logoInterfit" width="100%" height=100%/></div>
					<div id="menu"><?php echo CHtml::link('HOME',array('site/index'),array('class'=>'myButton'));?>
					<?php echo CHtml::link('WOD',array('site/WOD'),array('class'=>'myButton'));?>
					<?php echo CHtml::link('MEMBERS',array('site/members'),array('class'=>'myButton'));?>
					<?php echo CHtml::link('GROUPS',array('site/index'),array('class'=>'myButton'));?>
						
						<a class="myButton" href="#">ABOUT US</a>
					</div>
					<div id="search">
						<div id="boxsearch"><input type="text" class="searchbox" name="txtsearch" placeholder="Search Here"/></div>
						<div id="btnsearch"><input type="button" class="searchbtn" value="Go"/></div>
						 
					</div>
				</div>
		
		<div><?php echo $content;?></div>
	
	 	</div>
	<div id="messages">
	
	</div>	
	</div>
	
	</body>
</html>