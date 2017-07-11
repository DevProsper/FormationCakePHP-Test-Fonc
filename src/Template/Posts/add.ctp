<h1>Ajouts des Posts</h1>

<?= $this->Form->create($post)  ?>
<?= $this->Form->input('title') ?>
<?= $this->Form->input('description') ?>
<?= $this->Form->input('created') ?>
<?= $this->Form->input('modified') ?>
<?= $this->Form->button('Ajouter') ?>
<?= $this->Form->end() ?>
