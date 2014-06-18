<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Create',
);\n";
?>

$this->menu=array(
	array('label'=>Yii::t('label','List').' <?php echo $this->modelClass; ?>', 'url'=>array('index')),
	array('label'=>Yii::t('label','Manage').' <?php echo $this->modelClass; ?>', 'url'=>array('admin')),
);
?>

<h1>Create <?php echo $this->modelClass; ?></h1>

<?php $descrip = $this->getDescriptions($this->modelClass);
if(empty($descrip)){echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; }
else{ echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model, 'description'=>\$description)); ?>"; }
?>