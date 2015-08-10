<?php

require 'vendor/autoload.php';

// Create new Plates instance
$templates = new League\Plates\Engine('./templates');

// Render a template
echo $templates->render('profile', ['name' => 'Jonathan']);