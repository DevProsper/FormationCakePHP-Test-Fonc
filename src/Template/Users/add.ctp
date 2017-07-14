<h1>Ajouts des Users</h1>

<?= $this->Form->create($user)  ?>
<?= $this->Form->input('name') ?>
<?= $this->Form->input('email') ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->button('Ajouter') ?>
<?= $this->Form->end() ?>
