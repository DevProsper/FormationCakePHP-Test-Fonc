<h1>Ajouts des Users</h1>

<?= $this->Form->create($user)  ?>
<?= $this->Form->input('name', ['label' => "Nom de l'utilisateur:"]) ?>
<?= $this->Form->input('email') ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->control('published', ['type' => 'checkbox']) ?>
<?php $size = ['s' => 'Small', 'm' => 'Medium', 'L' => 'Large']; ?>
<?= $this->Form->select('size' , $size, ['default' => 'm']) ?>
<?= $this->Form->button('Ajouter') ?>
<?= $this->Form->end() ?>
