<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="/interfittest/index.php?r=site&view=dashboard">INTERFIT <small>Admin Panel</small></a>
          
			 <?php // CVarDumper::dump( Yii::app()->user->role,10,true);
			 //die; ?>
          <div class="nav-collapse">
		  			 <?php   //CVarDumper::dump( Yii::app()->user->isGuest ,10,true);
		 	//die; ?>
	<?php if(!Yii::app()->user->isGuest){?>
 			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
						array('label'=>'Dashboard', 'url'=>array('/site/', 'view'=>'index')),

                        array('label'=>'Users Mgmt<span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                           array('label'=>'UserMaster', 'url'=>array('/mantrig/usermaster', 'view'=>'index')),
							array('label'=>'Roles', 'url'=>array('/mantrig/roles', 'view'=>'index'),'visible'=>(isset(Yii::app()->user->role ))?(Yii::app()->user->getState('role') =='Admin'):0),
						 
							array('label'=>'Profile','url'=>array('/mantrig/profile', 'view'=>'index')),
							array('label'=>'City', 'url'=>array('/mantrig/city', 'view'=>'index')),
							array('label'=>'Country', 'url'=>array('/mantrig/country', 'view'=>'index')),
							array('label'=>'Messages', 'url'=>array('/mantrig/message', 'view'=>'index')),
							array('label'=>'CategoryMaster', 'url'=>array('/mantrig/categorymaster', 'view'=>'index')),
                        )),
						   array('label'=>'WOD Mgmt<span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                     
				        array('label'=>'WODMaster', 'url'=>array('/mantrig/wodmaster', 'view'=>'index')),
                        array('label'=>'WODFeed', 'url'=>array('/mantrig/wodfeed', 'view'=>'index')),
						array('label'=>'WODFeedComments', 'url'=>array('/mantrig/wodfeedcomments', 'view'=>'index')),
                        array('label'=>'Activity', 'url'=>array('/mantrig/activity', 'view'=>'index')),
						)),
						 array('label'=>'Group Mgmt<span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                     
				        array('label'=>'GroupMaster', 'url'=>array('/mantrig/groupmaster', 'view'=>'index')),
                        array('label'=>'GroupMessage', 'url'=>array('/mantrig/groupmessage', 'view'=>'index')),
						)),
						 array('label'=>'Blog Mgmt<span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                     
				        array('label'=>'BlogMaster', 'url'=>array('/mantrig/blogmaster', 'view'=>'index')),
                        array('label'=>'BlogComment', 'url'=>array('/mantrig/blogcomments', 'view'=>'index')),
						 )),
						array('label'=>'Gear Mgmt', 'url'=>array('/mantrig/gearmaster', 'view'=>'index')),
						array('label'=>'Media Mgmt', 'url'=>array('/mantrig/videos', 'view'=>'index')),
						
                        /*array('label'=>'Gii generated', 'url'=>array('customer/index')),*/
                        array('label'=>'My Account <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                            array('label'=>'My Messages', 'url'=>'#'),
							array('label'=>'My Profile ', 'url'=>'#'),
					 		array('label'=>'Separated link', 'url'=>'#'),
					 
                        )),
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),

                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),

                    ),
                )); ?>
			 <?php // CVarDumper::dump(isset(Yii::app()->user ),10,true);
			 //die;
			 } ?>

 
			<?php /*$this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
					 	array('label'=>'My Account <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),
                        array('label'=>'Dashboard', 'url'=>array('/site/dashboard')),
                        array('label'=>'Graphs & Charts', 'url'=>array('/site/page', 'view'=>'graphs')),
						
                        /* array('label'=>'WebHome', 'url'=>array('/site/index', 'view'=>'forms')),
                       array('label'=>'Tables', 'url'=>array('/site/page', 'view'=>'tables')),
						array('label'=>'Interface', 'url'=>array('/site/page', 'view'=>'interface')),
                        array('label'=>'Typography', 'url'=>array('/site/page', 'view'=>'typography')),
                        array('label'=>'Gii generated', 'url'=>array('customer/index')),*//*
                        
                        'items'=>array(
                            array('label'=>'My Messages <span class="badge badge-warning pull-right">26</span>', 'url'=>'#'),
							array('label'=>'My Tasks <span class="badge badge-important pull-right">112</span>', 'url'=>'#'),
						//	array('label'=>'My Invoices <span class="badge badge-info pull-right">12</span>', 'url'=>'#'),
						//	array('label'=>'Separated link', 'url'=>'#'),
						//	array('label'=>'One more separated link', 'url'=>'#'),
                        )),
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                    ),
                )); */?>
    	</div>
    </div>
	</div>
</div>

<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
    	<div class="container">
        
        	<div class="style-switcher pull-left">
                <a href="javascript:chooseStyle('none', 60)" checked="checked"><span class="style" style="background-color:#0088CC;"></span></a>
                <a href="javascript:chooseStyle('style2', 60)"><span class="style" style="background-color:#7c5706;"></span></a>
                <a href="javascript:chooseStyle('style3', 60)"><span class="style" style="background-color:#468847;"></span></a>
                <a href="javascript:chooseStyle('style4', 60)"><span class="style" style="background-color:#4e4e4e;"></span></a>
                <a href="javascript:chooseStyle('style5', 60)"><span class="style" style="background-color:#d85515;"></span></a>
                <a href="javascript:chooseStyle('style6', 60)"><span class="style" style="background-color:#a00a69;"></span></a>
                <a href="javascript:chooseStyle('style7', 60)"><span class="style" style="background-color:#a30c22;"></span></a>
          	</div>
           <form class="navbar-search pull-right" action="">
           	 
           <input type="text" class="search-query span2" placeholder="Search">
           
           </form>
    	</div><!-- container -->
    </div><!-- navbar-inner -->
</div><!-- subnav -->