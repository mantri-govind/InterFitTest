<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="/interfittest/index.php?r=User&view=index">INTERFIT <small></small></a>
          
			 <?php // CVarDumper::dump( Yii::app()->user->role,10,true);
			 //die;
			  ?>
          <div class="nav-collapse">
		  			 <?php //  CVarDumper::dump( Yii::app()->user->getState('role') ,10,true);
		 //	die; ?>
  			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
						array('label'=>'Home', 'url'=>array('/User/', 'view'=>'index')),

                        array('label'=>'Groups <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                           array('label'=>'Category1', 'url'=>array('#', 'view'=>'index')),
							array('label'=>'Category2', 'url'=>array('#', 'view'=>'index')),
						 
							 
                        )),
						 array('label'=>'About', 'url'=>array('#'), 'visible'=>Yii::app()->user->isGuest), 
                        array('label'=>'Login', 'url'=>array('/User/login'), 'visible'=>Yii::app()->user->isGuest),
					
					     array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/User/logout'), 'visible'=>!Yii::app()->user->isGuest),
						 
                    ),
                )); ?>

      	</div>
    </div>
	</div>
</div>
<?php if(!Yii::app()->user->isGuest)
{
?> 
<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
    	<div class="container">

            <form class="navbar-search pull-right" action="">
           	 
           <input type="text" class="search-query span2" placeholder="Search">
           
           </form>        
 			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
						array('label'=>'Dashboard', 'url'=>array('/User/', 'view'=>'index')),

                        array('label'=>'WOD <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                           array('label'=>'Category1', 'url'=>array('#', 'view'=>'index')),
							array('label'=>'Category2', 'url'=>array('#', 'view'=>'index')),
						 
							 
                        )),
						 array('label'=>'Profile', 'url'=>array('/User/profile')), 
                        array('label'=>'Groups', 'url'=>array('/User/login')),
					
					  	 
                    ),
                )); ?>

    	</div><!-- container -->
    </div><!-- navbar-inner -->
</div><!-- subnav -->
<?php }?>