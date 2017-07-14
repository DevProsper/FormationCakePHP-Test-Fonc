<h4>Listing des Utilisateurs</h4>
<table>
  <tr>
    <th>#</th>
    <th>Email</th>
    <th>Pass</th>
  </tr>
  <?php foreach ($users as $user): ?>
    <tr>
      <td><?= $user->id ?></td>
      <td><?= $user->email ?></td>
      <td><?= $user->password ?></td>
    </tr>
  <?php endforeach; ?>
</table>
