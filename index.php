<?php

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';
usort($articles, 'sortByDate');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Plain News</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <h1>PLAIN NEWS.</h1>
    </header>


    <div class="container">
        <?php foreach ($articles as $article) : ?>
            <article>
                <h2> <?php echo $article['title']; ?> </h2>
                <img src= <?php echo $article['imgURL']; ?> loading=“lazy” alt=““>
                <p> <?php echo $article['content']; ?> </p>
                <hr/>
                <div class="byLine">
                    <p> By: <?php echo $article['author']; ?> </p>
                    <p> 🖤 <?php echo $article['likeCounter']; ?> </p>
                    <p> <?php echo $article['publishDate']; ?> </p>
                </div>
            </article>
        <?php endforeach; ?>
    </div>

</body>

</html>
