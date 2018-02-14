<?php
require 'helpers.php';
require 'logic.php';
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Foobooks0</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">

    <link rel='stylesheet' href='style.css'>
</head>
<body>

<h1>Foobooks0</h1>

<?php foreach ($books as $title => $book): ?>
    <div class='book'>
        <div class='title'><?= $title ?></div>
        <div class='author'>by <?= $book['author'] ?> </div>
        <img src='<?= $book['cover_url'] ?>' alt='Cover photo for book <?= $title ?>'>
    </div>
<?php endforeach ?>

</body>
</html>