<?php
foreach ($posts as $post) {
    unset($post->generated_html);
}
json_encode(compact('posts'));
