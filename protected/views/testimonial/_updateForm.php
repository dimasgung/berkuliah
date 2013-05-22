<?php
/* @var $this TestimonialController */
/* @var $model Testimonial */
/* @var $form CActiveForm */

?>

<?php if (Yii::app()->user->hasFlash('message')): ?>
	<div class="alert alert-<?php echo Yii::app()->user->getFlash('messageType'); ?>">
		<?php echo Yii::app()->user->getFlash('message'); ?>
	</div>
<?php endif; ?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title' => '<i class="icon-gift"></i> <strong>SUNTING TESTIMONI</strong>'
)); ?>

	<?php $form = $this->beginWidget('CActiveForm', array(
		'enableClientValidation' => true,
		'clientOptions' => array(
			'validateOnSubmit' => true,
			'successCssClass' => '',
			'errorCssClass' => 'error',
		),
	)); ?>

	<table class='table table-hover'>

		<?php

			Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/tiny_mce/tiny_mce.js');
			Yii::app()->getClientScript()->registerScript('tiny_mce',
				'tinyMCE.init({
					theme: "advanced",
					mode: "exact",
					elements: "Testimonial[content]",
					width: "500",
					height: "400",
					relative_urls: false, 
			    	remove_script_host: false
				});'
			);

		?>

		<?php echo Yii::app()->format->formatInputField($form, 'textArea', $model, 'content', 'icon-file',
			array(
				'rows' => 20,
				'cols' => 140,
			)
		); ?>

		<tr>
			<td></td>
			<td>
				<?php echo CHtml::button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
				<?php echo CHtml::link('Batal', array('testimonial/view', 'id' => $model->id), array('class' => 'btn')); ?>
			</td>
		</tr>

	</table>

	<?php $this->endWidget();?>

<?php $this->endWidget();?>