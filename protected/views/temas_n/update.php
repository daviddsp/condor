<?php
$this->breadcrumbs=array(
	'Temases'=>array('index'),
	$model->id_tema=>array('view','id'=>$model->id_tema),
	'Update',
);

$this->menu=array(
	array('label'=>'List Temas','url'=>array('index')),
	array('label'=>'Create Temas','url'=>array('create')),
	array('label'=>'View Temas','url'=>array('view','id'=>$model->id_tema)),
	array('label'=>'Manage Temas','url'=>array('admin')),
);
?>

<h1>Update Temas <?php echo $model->id_tema; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>