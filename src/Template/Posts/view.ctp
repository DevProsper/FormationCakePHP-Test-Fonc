<?php
$this->extend('/Comment/index');
$this->extend('/Comment/view');

$this->assign('title', h($post->title));
?>

<?php $this->start('sidebar') ?>
<h4><?= h($post->created) ?></h4>
<h4><?= h($post->modified) ?></h4>
<h4><?= h($post->description) ?></h4>
<?php $this->end() ?>

<?php $this->assign('title_i', $post->title);
?>
