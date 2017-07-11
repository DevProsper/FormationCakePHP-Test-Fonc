<h1>Affichage des Posts</h1>

<table>
    <?= $this->Html->link('Ajouter', ['controller' => 'posts', 'action' => 'add']) ?>
    <tr>
        <th>#</th>
        <th>Tittre</th>
        <th>Date de creation</th>
        <th>Action</th>
    </tr>
    <?php foreach ($posts as $post): ?>
        <tr>
          <td><?= $post->id ?></td>
          <td><?= $post->title ?></td>
          <td><?= $post->created ?></td>
          <td>
              <?= $this->Html->link('Editer', ['controller' => 'posts', 'action' => 'edit', $post->id]) ?>
              <?= $this->Form->PostLink(__('Suprimer'),
                ['controller' => 'posts', 'action' => 'delete', $post->id],
                ['confirm' => __('Etes vous sûre de vouloir suprimé ?', $post->id)]) ?>
              <?= $this->Html->link('Voir', ['controller' => 'posts', 'action' => 'view', $post->id]) ?>
          </td>
        </tr>
    <?php endforeach; ?>
</table>
