<?php
/**
 * Vacancies (vacancies)
 * @var $this AdminController
 * @var $model Vacancies
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @created date 2 March 2017, 07:23 WIB
 * @link https://github.com/ommu/mod-vacancy
 *
 */

	$this->breadcrumbs=array(
		'Vacancies'=>array('manage'),
		Yii::t('phrase', 'Publish'),
	);
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vacancies-form',
	'enableAjaxValidation'=>true,
)); ?>

	<div class="dialog-content">
		<?php echo $model->publish == 1 ? Yii::t('phrase', 'Are you sure you want to unpublish this item?') : Yii::t('phrase', 'Are you sure you want to publish this item?')?>
		<?php //echo $model->actived == 1 ? Yii::t('phrase', 'Are you sure you want to deactived this item?') : Yii::t('phrase', 'Are you sure you want to actived this item?')?>
		<?php //echo $model->enabled == 1 ? Yii::t('phrase', 'Are you sure you want to disabled this item?') : Yii::t('phrase', 'Are you sure you want to enabled this item?')?>
		<?php //echo $model->status == 1 ? Yii::t('phrase', 'Are you sure you want to unresolved this item?') : Yii::t('phrase', 'Are you sure you want to resolved this item?')?>
	</div>
	<div class="dialog-submit">
		<?php echo CHtml::submitButton($title, array('onclick' => 'setEnableSave()')); ?>
		<?php echo CHtml::button(Yii::t('phrase', 'Cancel'), array('id'=>'closed')); ?>
	</div>
	
<?php $this->endWidget(); ?>
