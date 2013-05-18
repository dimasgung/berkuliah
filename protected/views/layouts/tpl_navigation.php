<div class="navbar navbar-inverse navbar-fixed-top">
  <div id="header">
    <?php echo CHtml::image(Yii::app()->baseUrl . '/images/header.png',' '); ?>
  </div>
  <div class="navbar-inner"> 
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="nav-collapse">
      <?php $this->beginWidget('zii.widgets.CMenu',array(
        'htmlOptions'=>array('class'=>'pull-right nav'),
        'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
        'itemCssClass'=>'item-test',
        'encodeLabel'=>false,
        'items'=>array(
          array(
            'visible'=>!Yii::app()->user->isGuest,
            'label'=>'<i class="icon icon-user icon-white"></i> '. Yii::app()->user->name,
            'url'=>'#',
            'itemOptions'=>array(
              'class'=>'dropdown',
              'tabindex'=>"-1",
            ),
            'linkOptions'=>array(
              'class'=>'dropdown-toggle',
              'data-toggle'=>"dropdown",
            ), 
            'items'=>array(
              array(
                'label'=>'<i class="icon icon-picture"></i> Pengaturan',
                'url'=>array('student/update', 'id'=>Yii::app()->user->id),
              ),
              array(
                'label'=>'<i class="icon icon-user icon-off"></i> Logout',
                'url'=>array('site/logout'),
                'visible'=>!Yii::app()->user->isGuest,
              ),
            ),
          ),
          array(
            'label'=>'<i class="icon icon-user icon-user icon-white"></i> Login',
            'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest,
          ), 
        ),
      )); ?>

      <?php $this->endWidget('zii.widgets.CMenu'); ?>

      </div><!-- nav-collapse -->

    </div><!-- container -->
  </div><!-- navbar-inner -->

  <div class="style-switcher pull-right">
   <a href="javascript:chooseStyle('none', 60)" checked="checked"><span class="style" style="background-color:#4e4e4e;"></span></a>
   <a href="javascript:chooseStyle('style2', 60)"><span class="style" style="background-color:#f5352e;"></span></a>
   <a href="javascript:chooseStyle('style3', 60)"><span class="style" style="background-color:#A0F80C;"></span></a>
   <a href="javascript:chooseStyle('style4', 60)"><span class="style" style="background-color:#0578ED;"></span></a>
   <a href="javascript:chooseStyle('style5', 60)"><span class="style" style="background-color:#d85515;"></span></a>
   <a href="javascript:chooseStyle('style6', 60)"><span class="style" style="background-color:#a00a69;"></span></a>
   <a href="javascript:chooseStyle('style7', 60)"><span class="style" style="background-color:#a30c22;"></span></a>
  </div><!-- style-switcher pull-right -->

</div><!-- navbar navbar-inverse navbar-fixed-top -->