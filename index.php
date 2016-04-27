<?php
require_once("includes/site.php");

$site = new site();

$site->gen_opening();

print "Please choose the version of the docs you need:\r\n";

print "<ul>\r\n";

foreach(glob('./*', GLOB_ONLYDIR) as $dir) {
    $dir = str_replace('./', '', $dir);
    if ($dir == "includes" || $dir=="vendor") {continue;}
    echo "<li><a href='$dir'>$dir</a></li>";
}

print "</ul>\r\n";

$site->gen_closing();
