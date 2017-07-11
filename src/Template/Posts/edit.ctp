<h1>Edition de l'article</h1>

<?= $this->Form->create($post)  ?>
<?= $this->Form->input('title') ?>
<?= $this->Form->input('description') ?>
<?= $this->Form->input('created') ?>
<?= $this->Form->input('modified') ?>
<?= $this->Form->button('Modifier') ?>
<?= $this->Form->end() ?>
