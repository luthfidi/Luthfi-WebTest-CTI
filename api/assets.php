<?php
/**
 * https://github.com/juicyfx/vercel-examples/commit/1fcbe3ff98ae34830cfd779224433cca16bb4f93
 * // "src": "/(css|js)/(.*)$", 
 * // "dest": "/api/assets.php?assets=$1"
 */
$file = $_GET['assets'];
if (str_ends_with($file, '.css')) {
    header("Content-type: text/css; charset: UTF-8");
    return require '/../css/' . basename($file);
    echo require __DIR__ . '/../assets/' . basename($file);
} 