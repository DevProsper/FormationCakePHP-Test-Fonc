<h1>Ajouts des Users</h1>

<?= $this->Form->create($user)  ?>
<?= $this->Form->input('name', ['label' => "Nom de l'utilisateur:"]) ?>
<?= $this->Form->input('email') ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->control('published', ['type' => 'checkbox']) ?>
<?php $size = ['s' => 'Small', 'm' => 'Medium', 'L' => 'Large']; ?>
<?= $this->Form->select('size' , $size, ['default' => 'm']) ?>
<!-- Value attribu l'element par defaut du champ close_time  -->
Value attribu l'element par defaut du champ close_time
<?= $this->Form->datetime('close_time', ['value' => '12:54:30']) ?>
<!-- Form d'un tableau de valeurs par defaut, on deifini true a multiple -->
Form d'un tableau de valeurs par defaut, on deifini true a multiple
<?= $this->Form->select('rooms', [
    'multiple' => true,
    'default'  => [1, 3]
  ]); ?>
<!-- empty est comme valeur par du champ -->
empty est comme valeur par du champ(Choisissez)
<?= $this->Form->select(
    'field',
    ['1','2','3','4','5'],
    ['empty' => 'Choisissez']
  ) ?>
<?= $this->Form->checkbox('published', ['value' => 'Y', 'hiddenField' => 'N']) ?>
<?= $this->Form->control('time', [
    'type' => 'time',
    'interval' => 15
  ]) ?>
<?= $this->Form->hidden('id') ?>
Créer des Textareas
<?= $this->Form->checkbox('done') ?>
Créer des bouton radio
<?= $this->Form->radio('favorite_color',[
    ['value' => 'r', 'text' => 'Red', 'style' => 'color:red;'],
    ['value' => 'u', 'text' => 'Blue', 'style' => 'color:blue;'],
    ['value' => 'g', 'text' => 'Green', 'style' => 'color:green;']
  ]) ?>
Création des Pickers
<?php
$options = ['M' => 'Male', 'F' => 'Femme'];
echo $this->Form->select('gender', $options, ['empty' => true]);

$option = [
  'Group 1' => [
     'value' => 'France',
     'value' => 'France',
     'value' => 'Allemagne'
  ],
  'Group 2' => [
      'value' => 'Congo B',
      'value' => 'Condo D'
  ]
];
echo $this->Form->select('field', $option);
 ?>

<?php $options = [
[ 'text' => 'Description 1', 'value' => 'value 1', 'attr_name' => 'attr_value 1'],
[ 'text' => 'Description 2', 'value' => 'value 2', 'attr_name' => 'attr_value 2'],
[ 'text' => 'Description 3', 'value' => 'value 3', 'other_attr_name' => 'other_attr_value' ],
];
echo $this->Form->select('field', $options); ?>


multiple checkbox
<?php $options = [
'Value 1' => 'Label 1',
'Value 2' => 'Label 2'
];
echo $this->Form->select('field', $options, [
'multiple' => 'checkbox'
]); ?>

checkbox desable
<?php $options = [
'Value 1' => 'Label 1',
'Value 2' => 'Label 2'
];
echo $this->Form->select('field', $options, [
'multiple' => 'checkbox',
'disabled' => ['Value 1']
]); ?>

Creation des Input type file
<?php
// echo $this->Form->create($document, ['type' => 'file']);
   echo $this->Form->file('submittedFile');
?>

Création des Input type Datetime

<?php echo $this->Form->dateTime('released', [
'year' => [
'class' => 'year-classname',
],
'month' => [
'class' => 'month-class',
'data-type' => 'month',
],
]); ?>

Creation des Inputs type Time
<?php echo $this->Form->time('released', [
'interval' => 15,
'hour' => [
'class' => 'foo-class',
],
'minute' => [
'class' => 'bar-class',
],
]); ?>


Input Year
<?php echo $this->Form->year('purchased', [
'minYear' => 2000,
'maxYear' => date('Y')
]); ?>

Input month
<?php echo $this->Form->month('mob');
 ?>
 Input month en chiffre
 <?php echo $this->Form->month('mob', ['monthNames' => false]); ?>

 Inupt type day
 <?php echo $this->Form->day('created'); ?>

 Input hour
 <?php echo $this->Form->hour('created', [
'format' => 12
]);
echo $this->Form->hour('created', [
'format' => 24
]); ?>
<?= $this->Form->button('Ajouter') ?>
<?= $this->Form->end() ?>
