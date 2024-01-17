<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li>Overview</li>
            <li></li>
        </ul>
    </nav>
</header>
<main>
<h1>Goodcard - Track your collection of Pokémon cards</h1>

<ul>
    <?php foreach ($cardsData as $card) : ?>
        <li>
            <h2><?= $card['Name'] ?></h2>
            <p><?= $card['Rarity'] ?></p>
            <p><?= $card['Set_name'] ?></p>
            <p><?= $card['Card_type'] ?></p>
            <p><?= $card['Release_year'] ?></p>
            <p><?= $card['Card_condition'] ?></p>
            <p><?= $card['Notes'] ?></p>
            <img src="<?php      ?>" alt="Image of the pokémon" width="100" height="100">
        </li>
    <?php endforeach; ?>
</ul>
</main>
</body>
</html>