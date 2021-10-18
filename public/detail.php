<?php

require_once __DIR__ . '/../config/twig.php';

$title = "Héritier de layout";
echo $twig->render('detail.html.twig', ['title' => $title]);