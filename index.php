<?php
require 'vendor/autoload.php';
//rooting
$page="home";
if(isset($_GET['p'])){
    $page=$_GET['p'];
}
//rendu du template
$loader=new \Twig\Loader\FilesystemLoader(__DIR__.'/template');
$twig=new\Twig\Environment($loader,[
    'cache'=>false,
]);
echo $twig->render('index.html', ['name' => 'Fabien']);
?>
//hello