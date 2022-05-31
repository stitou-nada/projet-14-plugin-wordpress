<?php

/*
plugin name: hello word 
plugin URI: github.com
author: nada stitou
author URI: https://stitou-nada.github.io/
version: 0.1
*/
add_action('the_content', 'sey_Hello');

function sey_Hello($content){
   return $content ="<h1>hello word</h1>";
}