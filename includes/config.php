<?php
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');



//Here are the keys for the server: jojiwebdesigns.com
$siteKey = "6LcFKZ4UAAAAAHCU97__6k0Ag7EXiD2lOoI4ZoKV";
$secretKey = "6LcFKZ4UAAAAAPkEpkUvGudZ505k--FJcKxC4pNM";


define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE)
{
    case 'index.php':
    $title = "Top Pot Doughnuts";
    $class = "home";
    Break;

    case 'contact.php':
    $title = "Contact Us";
    $class = "contact";
    Break;

    case 'coffee.php':
    $title = "Coffee Info";
    $class = "menu";
    Break;

    case 'classicmenu.php':
    $title = "Classic Doughnuts";
    $class = "menu";
    Break;

    case 'seasonalmenu.php':
    $title = "Seasonal Doughnuts";
    $class = "menu";
    Break;

    case 'locations.php':
    $title = "Cafe Locations";
    $class = "locationclass";
    Break;

    case 'careers.php':
    $title = "Careers";
    $class = "careers";
    Break;

    case 'merch.php':
    $title = "Merchandise";
    $class = "merchandise";
    Break;

    default:     
    $title = '';
}