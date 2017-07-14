<h1>Affichage des Posts</h1>

<table>
    <?= $this->Html->link('Ajouter', ['controller' => 'users', 'action' => 'add']) ?>
    <tr>
        <th>#</th>
        <th>Tittre</th>
        <th>Date de creation</th>
        <th>Action</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
          <td><?= $user->id ?></td>
          <td><?= $user->email ?></td>
          <td><?= $user->password ?></td>
          <td>
              <?= $this->Html->link('Editer', ['controller' => 'users', 'action' => 'edit', $user->id]) ?>
              <?= $this->Form->PostLink(__('Suprimer'),
                ['controller' => 'users', 'action' => 'delete', $user->id],
                ['confirm' => __('Etes vous sûre de vouloir suprimé ?', $user->id)]) ?>
              <?= $this->Html->link('Voir', ['controller' => 'users', 'action' => 'view', $user->id]) ?>
          </td>
        </tr>
    <?php endforeach; ?>
</table>
