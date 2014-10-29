<?php

error_reporting(-1);
ini_set('display_errors', 'On');

$root = $_SERVER['DOCUMENT_ROOT']."/dozmia";

switch(@$_GET['page'])
{
case 'test':
  include $root."/pages/test.php";
  break;
case 'account-settings':
  include $root."/pages/account-settings.php";
  break;
case 'collection':
  include $root."/pages/collection.php";
  break;
case 'playlist':
  include $root."/pages/playlist.php";
  break;
case 'playlist-empty':
  include $root."/pages/playlist-empty.php";
  break;
case 'album-details':
  include $root."/pages/album-details.php";
  break;
case 'artist-details':
  include $root."/pages/artist-details.php";
  break;
case 'search-results':
  include $root."/pages/search-results.php";
  break;
default:
  echo "Error: The page ".@$_GET['page']." doesn't exist";
  break;
}
?>
