<?php
foreach ($users as $user) {
    unset($user->generated_html);
}
echo json_encode(compact('users'));
