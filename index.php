<?php
//loads packages as determined by composer
require __DIR__ . '/vendor/autoload.php';
require_once('database.php');

$app = new \Slim\Slim();

//route for main page
$app->get('/', function() use($app){
	$app->render('landing.php');
});

//backup route for main page
$app->get('/main', function() use($app){
	$app->render('landing.php');
});

//route for archive
$app->get('/archive', function() use($app){
	$app->render('archive.php');
});

//route for about
$app->get('/about', function() use($app){
	$app->render('about.php');
});

//route for contact
$app->get('/contact', function() use($app){
	$app->render('contact.php');
});

//route for comic pages
$app->get('/comic', function() use($app){
	$app->render('comic.php');
});
	
		

$app->run();