<?php

function validateArticle($title, $content)
{
    if (empty($title)) {
        return 'Title is required';
    } elseif (strlen($title) < 3) {
        return 'Title must be at least 3 characters';
    } elseif (empty($content)) {
        return 'Content is required';
    } else {
        return 'valid';
    }
}
