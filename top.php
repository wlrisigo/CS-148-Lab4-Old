<?php
$phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
$path_parts = pathinfo($phpSelf);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Vermont Trails</title>

        <meta charset="utf-8">
        <meta name="author" content="Billy Risigo">
        <meta name="description" content="Webstite for Vermont's hikers and trails">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/base.css" type="text/css" media="screen">
<?php
        $debug = false;
        // This if statement allows us in the classroom to see what our variables are
        // This is NEVER done on a live site
        if (isset($_GET["debug"])) {
            $debug = true;
        }
// %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// PATH SETUP
$domain = '//';
$server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, 'UTF-8');
$domain .= $server;
if ($debug) {
    print '<p>php Self: ' . $phpSelf;
    print '<pdomain: ' . $domain;
    print '<p>Path Parts<pre>';
    print_r($path_parts);
    print '</pre></p>';
}

// %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// inlcude all libraries.
//
print  PHP_EOL . '<!-- include libraries -->' . PHP_EOL;
require_once 'lib/security.php';
include_once 'lib/validation-functions.php';
include 'lib/constants.php';
include LIB_PATH . '/Connect-With-Database.php';
print  PHP_EOL . '<!-- finished including libraries -->' . PHP_EOL;
?>
    </head>
<!-- ######################       Body Section       #####################/# -->
<?php
print '<body id="' . $path_parts['filename'] . '">' . PHP_EOL;
include 'header.php';
print  PHP_EOL;
include 'nav.php';
print  PHP_EOL;
if ($debug) {
    print '<p>DEBUG MODE IS ON</p>';
}

print "<!-- End of top.php -->";
?>
