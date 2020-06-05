<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php if ($page->isHomePage()): ?>
    <title><?= $site->title()->html() ?> | Technology for crisis situations</title>
    <?php else: ?>
    <title><?= $page->title()->html() ?> | <?= $site->title()->html() ?></title>
    <?php endif ?>
    <meta name="description" content="<?= $site->description()->html() ?>">
    <meta name="author" content="Niklas Jordan">
    <link rel="stylesheet" href="/assets/style.css">

    <meta property="og:title" content="<?= $site->title()->html() ?> | <?= $page->title()->html() ?>">
    <meta property="og:description" content="<?= $site->description()->html() ?>">
    <meta property="og:image" content="https://www.disaster-tech.org/media/og-image.png">
    <meta property="og:url" content="https://www.disaster-tech.org">

    <meta name="twitter:title" content="<?= $site->title()->html() ?> | <?= $page->title()->html() ?>">
    <meta name="twitter:description" content="<?= $site->description()->html() ?>">
    <meta name="twitter:image" content="https://www.disaster-tech.org/media/og-image.png">
    <meta name="twitter:card" content="summary_large_image">

    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>

<?php snippet('header') ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php if ($page->isHomePage()): ?>
    <title><?= $site->title()->html() ?> | Technology for crisis situations</title>
    <?php else: ?>
    <title><?= $page->title()->html() ?> | <?= $site->title()->html() ?></title>
    <?php endif ?>
    <meta name="description" content="<?= $site->description()->html() ?>">
    <meta name="author" content="Niklas Jordan">
    <link rel="stylesheet" href="/assets/style.css">

    <meta property="og:title" content="<?= $site->title()->html() ?> | <?= $page->title()->html() ?>">
    <meta property="og:description" content="<?= $site->description()->html() ?>">
    <meta property="og:image" content="https://www.disaster-tech.org/media/og-image.png">
    <meta property="og:url" content="https://www.disaster-tech.org">

    <meta name="twitter:title" content="<?= $site->title()->html() ?> | <?= $page->title()->html() ?>">
    <meta name="twitter:description" content="<?= $site->description()->html() ?>">
    <meta name="twitter:image" content="https://www.disaster-tech.org/media/og-image.png">
    <meta name="twitter:card" content="summary_large_image">

    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>

<?php snippet('header') ?>

<div class="container" >
  <h1><?= $page->title()->html() ?></h1>
  <p class="subline"><?= $page->text()->text() ?></p>
</div>

<?php foreach($page->children()->listed()->flip() as $article): ?>

<article class="container blogpost">
    <a href="<?= $article->url() ?>"><h2><?= $article->title()->html() ?></h2></a>
    <span class="article-meta"><time datetime="<?= $article->date()->toDate('c') ?>" pubdate="pubdate"><?= $article->date()->toDate('F d, Y') ?></time> – <?php if($author = $article->author()->toUser()): ?><?= $author->name() ?><?php endif ?></span>
    <p><?= $article->intro()->html() ?> <a href="<?= $article->url() ?>">Read more</a></p>
</article>

<?php endforeach ?>

<?php snippet('nl_form') ?>

<?php snippet('footer') ?>

</body>
</html>