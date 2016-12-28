<?php
use yii\bootstrap\Html;
//use yii\widgets\Menu;
use yii\bootstrap\Nav;
use dmstr\widgets\Menu;
use mdm\admin\components\Helper;

use andahrm\structure\models\PersonType;
 
 $this->beginContent('@andahrm/structure/views/layouts/main.php'); 
 $module = $this->context->module->id;
?>
<div class="row hidden-print">
    <div class="col-md-12"> 
      
      <?php
                    $menuItems = [];
      
       $menuItems[] =  [
                            'label' => '<i class="fa fa-sitemap"></i> ' . Yii::t('andahrm/structure', 'ทั้งหมด'),
                            'url' => ["/{$module}/base-salary/index"],
                        ];
      
      foreach(PersonType::getList() as $key => $type){
        $menuItems[] =  [
                            'label' => '<i class="fa fa-user"></i> ' . Yii::t('andahrm/structure', $type),
                            'url' => ["/{$module}/base-salary/person-type{$key}"],
                        ];
      }
                       
                    
                    //$nav = new Navigate();
                    echo Menu::widget([
                        'options' => ['class' => 'nav nav-tabs'],
                        'encodeLabels' => false,
                        //'activateParents' => true,
                        //'linkTemplate' =>'<a href="{url}">{icon} {label} {badge}</a>',
                        'items' => $menuItems,
                    ]);
                    ?>
      
      
     
      
    </div>
</div>
<div class="row">
    <div class="col-md-12">
      
        <div class="x_panel tile">
            <div class="x_title">
                <h2><?= $this->title; ?></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <?php echo $content; ?>
                <div class="clearfix"></div>
            </div>
        </div>
      
    </div>
</div>

<?php $this->endContent(); ?>