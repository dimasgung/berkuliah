<?php
/* @var $this NoteController */
/* @var $model Note */
/* @var $form CActiveForm */
?>

<?php echo Yii::app()->user->getNotification(); ?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title' => '<i class="icon icon-pencil"></i> <strong>SUNTING BERKAS</strong>'
)); ?>

	<label>Isian dengan tanda * harus diisi.</label>
	
	<?php $form = $this->beginWidget('CActiveForm', array(
		'enableClientValidation' => true,
		'clientOptions' => array(
			'validateOnSubmit' => true,
			'successCssClass' => '',
			'errorCssClass' => 'error',
		),
	)); ?>

	<table class='table table-hover'>

		<?php echo Yii::app()->format->formatInputField($form, 'textField', $model, 'title', 'icon-tag',
			array(
				'maxlength' => 128,
			)
		); ?>
		<?php echo Yii::app()->format->formatInputField($form, 'textArea', $model, 'description', 'icon-zoom-in',
			array(
				'rows' => 6,
				'cols' => 50,
			)
		); ?>

		<?php echo 	Yii::app()->format->formatInputField($form, 'radioButtonList', $model, 'flag_privacy', 'icon-lock',
			array(
				"1" => "Pribadi",
				"0" => "Publik"
			),
			array(
			)
		); ?>
		
		<tr>
			<td></td>
			<td>
				<?php echo CHtml::tag('button', array('type' => 'submit', 'class' => 'btn btn-primary'), '<i class="icon icon-hdd icon-white"></i> Simpan'); ?>
				<?php echo CHtml::link('Batal', array('view', 'id' => $model->id), array('class' => 'btn')); ?>
			</td>
		</tr>


		</table>
	<?php $this->endWidget();?>

<?php $this->endWidget();?>