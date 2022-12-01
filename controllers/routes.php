<?php 

//dd($_SERVER);


$uri = $_SERVER['REQUEST_URI'];
//dd($uri);

if ($uri == '/') {

require 'controllers/index.php';

} 

else if ( $uri == '/cases') {

    require ('controllers/cases.php');
}

else if ( $uri == '/seo') {

    require ('controllers/seo.php');
}

else if ($uri == '/blogs') {

    require('controllers/blogs.php');
}

else if ($uri == '/blog') {

    require('controllers/blog.php');
}

else if ($uri == '/contact') {

    require('controllers/contact.php');
}

else if ($uri == '/about') {

    require('controllers/about.php');
}

else {

    require ('controllers/not-found-404.php');

}