 <?php
 $users = UserMaster::model()->findAll();
$recod=array();
/*foreach($users as $user){
	$dataArray = array();
	$dataArray['email']=$user->email;
	$dataArray['date_of_birth']=$user->date_of_birth;
	$dataArray['date_time']=$user->date_time;
	$dataArray['status']=$user->status;
	$recod[]=$dataArray;
}
print_r($recod);
die;
 */
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 
?>
<?php
$users = UserMaster::model()->findAll();
$recod=array();
foreach($users as $user){
	$dataArray = array();
	$dataArray['email']=$user->email;
	$dataArray['id']=$user->user_id;
 	$dataArray['date_time']=$user->date_time;
	$dataArray['status']=$user->status;
	$recod[]=$dataArray;
}
//print_r($recod);
//die;
$gridDataProvider = new CArrayDataProvider($recod);
?>

  <!--<div class="row-fluid">
 <div class="span3 ">
	<div class="stat-block">
	  <ul>
		<li class="stat-graph inlinebar" id="weekly-visit">8,4,6,5,9,10</li>
		<li class="stat-count"><span>$23,000</span><span>Weekly Sales</span></li>
		<li class="stat-percent"><span class="text-success stat-percent">20%</span></li>
	  </ul>
	</div>
  </div>
 <div class="span3 ">
	<div class="stat-block">
	  <ul>
		<li class="stat-graph inlinebar" id="new-visits">2,4,9,1,5,7,6</li>
		<li class="stat-count"><span>$123,780</span><span>Monthly Sales</span></li>
		<li class="stat-percent"><span class="text-error stat-percent">-15%</span></li>
	  </ul>
	</div>
  </div>
  <div class="span3 ">
	<div class="stat-block">
	  <ul>
		<li class="stat-graph inlinebar" id="unique-visits">200,300,500,200,300,500,1000</li>
		<li class="stat-count"><span>$12,456</span><span>Open Invoices</span></li>
		<li class="stat-percent"><span class="text-success stat-percent">10%</span></li>
	  </ul>
	</div>
  </div>
  <div class="span3 ">
	<div class="stat-block">
	  <ul>
		<li class="stat-graph inlinebar" id="">1000,3000,6000,8000,3000,8000,10000</li>
		<li class="stat-count"><span>$25,000</span><span>Overdue</span></li>
		<li class="stat-percent"><span><span class="text-success stat-percent">20%</span></li>
	  </ul>
	</div>
  </div>-->
</div>

<div class="row-fluid">

    
	<div class="span9">
      <?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'<span class="icon-picture"></span>Operations Chart',
			'titleCssClass'=>''
		));
		?>
        
        <div class="auto-update-chart" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
    
        <?php $this->endWidget(); ?>
	
	</div>
	<div style="float:left; width:23%; margin-left:2%;">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'<span class="icon-picture"></span>Welcome '.Yii::app()->user->name,
			'titleCssClass'=>''
		));
		?>
		<p>Your last activity:<?php  $mm=null; $mm=Yii::app()->user->getState('date_time'); echo $mm; ?></p> 
        <?php $this->endWidget(); ?>
	</div>
<!--<div class="span3">
		<div class="summary">
          <ul>
          	<li>
          		<span class="summary-icon">
                	<img src="<?php echo $baseUrl ;?>/img/credit.png" width="36" height="36" alt="Monthly Income">
                </span>
                <span class="summary-number">$78,245</span>
                <span class="summary-title"> Monthly Income</span>
            </li>
            <li>
            	<span class="summary-icon">
                	<img src="<?php echo $baseUrl ;?>/img/page_white_edit.png" width="36" height="36" alt="Open Invoices">
                </span>
                <span class="summary-number">125</span>
                <span class="summary-title"> Open Invoices</span>
            </li>
            <li>
            	<span class="summary-icon">
                	<img src="<?php echo $baseUrl ;?>/img/page_white_excel.png" width="36" height="36" alt="Open Quotes<">
                </span>
                <span class="summary-number">53</span>
                <span class="summary-title"> Open Quotes</span>
            </li>
            <li>
            	<span class="summary-icon">
                	<img src="<?php echo $baseUrl ;?>/img/group.png" width="36" height="36" alt="Active Members">
                </span>
                <span class="summary-number">654,321</span>
                <span class="summary-title"> Active Members</span>
            </li>
            <li>
            	<span class="summary-icon">
                	<img src="<?php echo $baseUrl ;?>/img/folder_page.png" width="36" height="36" alt="Recent Conversions">
                </span>
                <span class="summary-number">630</span>
                <span class="summary-title"> Recent Conversions</span></li>
        
          </ul>
        </div>

	</div>
</div>
-->
<div class="row-fluid">
	    
	<div class="span6">
	     <?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'<span class="icon-picture"></span>Last Admin Activities',
			'titleCssClass'=>''
		));
		?>
	  <?php $this->widget('zii.widgets.grid.CGridView', array(
			/*'type'=>'striped bordered condensed',*/
			'htmlOptions'=>array('class'=>'table table-striped table-bordered table-condensed'),
			'dataProvider'=>$gridDataProvider,
			'template'=>"{items}",
			'columns'=>array(
				array('name'=>'id', 'header'=>'#'),
				array('name'=>'email', 'header'=>'Email'),
				array('name'=>'date_time', 'header'=>'Last Activity'),
				array('name'=>'status', 'header'=>'Status', 'type'=>'raw'),
				
			),
		));?><?php $this->endWidget(); ?></div>
	
	<div style="float:left; width:23%; margin-left:2%; height:100%;">
	      <?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'<span class="icon-picture"></span>Sever Statics',
			'titleCssClass'=>''
		));
		?>  <table class="table table-striped table-bordered">
          <tbody>
            <tr>
              <td width="50%">Bandwith Usage</td>
              <td>
              	<div class="progress progress-danger">
                  <div class="bar" style="width: 80%"></div>
                </div>
              </td>
            </tr>
            <tr>
              <td>Disk Spage</td>
              <td>
             	<div class="progress progress-warning">
                  <div class="bar" style="width: 60%"></div>
                </div>
              </td>
            </tr>
            <tr>
              <td>Conversion Rate</td>
              <td>
             	<div class="progress progress-success">
                  <div class="bar" style="width: 40%"></div>
                </div>
              </td>
            </tr>
             
          </tbody>
        </table>    
        <?php $this->endWidget(); ?></div>
	</div><!--/span-->
         <div class="span6">
		 <?php /*$this->widget('zii.widgets.grid.CGridView', array(
			/*'type'=>'striped bordered condensed',*/
			/*'htmlOptions'=>array('class'=>'table table-striped table-bordered table-condensed'),
			'dataProvider'=>$gridDataProvider,
			'template'=>"{items}",
			'columns'=>array(
				array('name'=>'id', 'header'=>'#'),
				array('name'=>'firstName', 'header'=>'First name'),
				array('name'=>'lastName', 'header'=>'Last name'),
				array('name'=>'language', 'header'=>'Language'),
				array('name'=>'usage', 'header'=>'Usage', 'type'=>'raw'),
				
			),
		)); */?>
        	
	</div><!--/span-->
</div><!--/row-->

<div class="row-fluid">
	<div class="span6">
	  <?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'<span class="icon-th-large"></span>Income Chart',
			'titleCssClass'=>''
		));
		?>
        
        <div class="visitors-chart" style="height: 230px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
        
        <?php $this->endWidget(); ?>
	</div><!--/span-->
    <div class="span6">
    	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'<span class="icon-th-list"></span> Visitors Chart',
			'titleCssClass'=>''
		));
		?>
        
        <div class="pieStats" style="height: 230px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
        
        <?php $this->endWidget(); ?>
    </div>
	<!--<div class="span2">
    	<input class="knob" data-width="100" data-displayInput=false data-fgColor="#5EB95E" value="35">
    </div>
	<div class="span2">
     	<input class="knob" data-width="100" data-cursor=true data-fgColor="#B94A48" data-thickness=.3 value="29">
    </div>
	<div class="span2">
         <input class="knob" data-width="100" data-min="-100" data-fgColor="#F89406" data-displayPrevious=true value="44">     	
	</div><!--/span-->
</div><!--/row-->

          


<script>
            $(function() {

                $(".knob").knob({
                    /*change : function (value) {
                        //console.log("change : " + value);
                    },
                    release : function (value) {
                        console.log("release : " + value);
                    },
                    cancel : function () {
                        console.log("cancel : " + this.value);
                    },*/
                    draw : function () {

                        // "tron" case
                        if(this.$.data('skin') == 'tron') {

                            var a = this.angle(this.cv)  // Angle
                                , sa = this.startAngle          // Previous start angle
                                , sat = this.startAngle         // Start angle
                                , ea                            // Previous end angle
                                , eat = sat + a                 // End angle
                                , r = 1;

                            this.g.lineWidth = this.lineWidth;

                            this.o.cursor
                                && (sat = eat - 0.3)
                                && (eat = eat + 0.3);

                            if (this.o.displayPrevious) {
                                ea = this.startAngle + this.angle(this.v);
                                this.o.cursor
                                    && (sa = ea - 0.3)
                                    && (ea = ea + 0.3);
                                this.g.beginPath();
                                this.g.strokeStyle = this.pColor;
                                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                                this.g.stroke();
                            }

                            this.g.beginPath();
                            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor ;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                            this.g.stroke();

                            this.g.lineWidth = 2;
                            this.g.beginPath();
                            this.g.strokeStyle = this.o.fgColor;
                            this.g.arc( this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                            this.g.stroke();

                            return false;
                        }
                    }
                });

                // Example of infinite knob, iPod click wheel
                var v, up=0,down=0,i=0
                    ,$idir = $("div.idir")
                    ,$ival = $("div.ival")
                    ,incr = function() { i++; $idir.show().html("+").fadeOut(); $ival.html(i); }
                    ,decr = function() { i--; $idir.show().html("-").fadeOut(); $ival.html(i); };
                $("input.infinite").knob(
                                    {
                                    min : 0
                                    , max : 20
                                    , stopper : false
                                    , change : function () {
                                                    if(v > this.cv){
                                                        if(up){
                                                            decr();
                                                            up=0;
                                                        }else{up=1;down=0;}
                                                    } else {
                                                        if(v < this.cv){
                                                            if(down){
                                                                incr();
                                                                down=0;
                                                            }else{down=1;up=0;}
                                                        }
                                                    }
                                                    v = this.cv;
                                                }
                                    });
            });
        </script>