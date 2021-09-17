<?php
// Silence is golden.

/*
Plugin Name: I3Media Plugin
Plugin URI:
Description: Keeps track of all changes within this site.
Author: Juan Perez
Version: 0.1
*/

add_action("admin_menu", "addMenu");
function addMenu() {
    add_menu_page("Plug-In History", "Plug-In History", 4, "plugin-history", "pluginHistory");
}

function pluginHistory() {
echo "Insert cool stuff here";
echo "<h2>Add a table like design here with the changes listed from user, date added, date removed/if still active, date removed and by who</h2>";
echo "im assuming i can use the mySQl database? need to read on that more";
}
?>