<?php 

//dd($_SERVER);


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
//dd(parse_url($uri));


if ( $uri == '/') {

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

    //require('views/not-found-404.view.php');
    // END SLASH / bug not fixed, thats why we use below version
abort();

}