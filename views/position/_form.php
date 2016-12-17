<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use andahrm\structure\models\PersonType;
use andahrm\structure\models\Section;
use andahrm\structure\models\PositionLine;
use andahrm\structure\models\PositionType;
use andahrm\structure\models\PositionLevel;

/* @var $this yii\web\View */
/* @var $model andahrm\structure\models\Position */
/* @var $form yii\widgets\ActiveForm */
?>

  <div class="position-form">

    <?php $form = ActiveForm::begin(); ?>


    <div class="row">
      <div class="col-sm-2">
        <?= $form->field($model, 'person_type_id')->dropDownList(PersonType::getList(),['prompt'=>Yii::t('app','Select')]) ?>
      </div>
      <div class="col-sm-4">
        <?= $form->field($model, 'section_id')->dropDownList(Section::getList(),['prompt'=>Yii::t('app','Select')]) ?>
      </div>
      <div class="col-sm-3">
        <?= $form->field($model, 'position_line_id')->dropDownList(PositionLine::getList(),['prompt'=>Yii::t('app','Select')]) ?>
      </div>
      <div class="col-sm-3">
        <?= $form->field($model, 'number')->textInput() ?>
      </div>
    </div>




    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

      <div class="row">
        <div class="col-sm-6">
          <?= $form->field($model, 'position_type_id')->dropDownList(PositionType::getList(),['prompt'=>Yii::t('app','Select')]) ?>
        </div>
        <div class="col-sm-6">
          <?= $form->field($model, 'position_level_id')->dropDownList(PositionLevel::getList(),['prompt'=>Yii::t('app','Select')]) ?>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-6">
          <?= $form->field($model, 'min_salary')->textInput() ?>
        </div>
        <div class="col-sm-6">
          <?= $form->field($model, 'max_salary')->textInput() ?>
        </div>
      </div>
    
    
      <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>



        <div class="form-group">
          <?= Html::submitButton($model->isNewRecord ? Yii::t('andahrm/structure', 'Create') : Yii::t('andahrm/structure', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

  </div>