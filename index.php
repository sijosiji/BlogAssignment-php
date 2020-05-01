<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include './includes/PhpBlog.Class.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Blog Assignment</title>
</head>
<body>
    <h1>PHP Blog Assignment</h1>
    <?php
        $phpblog = new PhpBlog(dirname(__FILE__) . '/data/articles.json');
        $phpblog->output();
    ?>
</body>
</html>