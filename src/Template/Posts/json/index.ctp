<?php
foreach ($posts as $post) {
    unset($article->generated_html);
}
json_encode(compact('posts'));
