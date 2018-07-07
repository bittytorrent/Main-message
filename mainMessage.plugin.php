<?php

/*
Plugin Name: Main message 
Plugin URI: http://bittytorrent.com/
Description: Main message home page
Version: 1.0
Author: Atmoner
Author URI: http://bittytorrent.com/
*/


//set plugin id as file name of plugin
$plugin_id = basename(__FILE__);

//some plugin data
$data['name'] = "Main message on all site";
$data['author'] = "Atmoner";
$data['url'] = "http://bittytorrent.com/";

//register plugin data
register_plugin($plugin_id, $data);

function MainMessage() {
        global $hook,$conf; 
        $hook->add_block('MainMessageBlock', 'Demo website', 'This is a demo website! Visit <a href="http://forum.bittytorrent.com/">forum</a> or <a href="http://forum.bittytorrent.com/viewforum.php?f=2">download</a> bittytorrent',740,10); 
}

add_hook('action','MainMessage');
 
