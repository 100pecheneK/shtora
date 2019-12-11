<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <?php wp_head() ?>
    <title>Шторки</title>
    <style>
        .banner {
            background: url(<?= get_template_directory_uri() . '/img/top.png' ?>) no-repeat;
            background-size: cover;
            background-position: bottom;
            color: white;
        }
    </style>
</head>

<body>