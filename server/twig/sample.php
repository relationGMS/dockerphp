<?php

require_once '../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('./view');

$twig = new \Twig\Environment($loader);

$template = $twig->load('sample.html.twig');


$data2 = array(
    'title' => 'sample2',
    'message'  => 'My Webpage2!',
);

$data = array(
    'title' => 'sample',
    'message'  => 'My Webpage!',
    'data' => $data2
);
echo $template->render($data);
