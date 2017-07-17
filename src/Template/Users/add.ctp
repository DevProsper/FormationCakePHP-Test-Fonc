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
<?= $this->Form->button('Ajouter') ?>
<?= $this->Form->end() ?>
