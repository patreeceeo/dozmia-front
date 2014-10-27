<?php

error_reporting(-1);
ini_set('display_errors', 'On');

ob_start();
switch(@$_GET['page'])
{
case 'test':
  include "pages/test.php";
  echo ob_get_clean();
  break;
case 'account-settings':
  include "pages/account-settings.php";
  echo ob_get_clean();
  break;
case 'collection':
  include "pages/collection.php";
  echo ob_get_clean();
  break;
case 'playlist':
  include "pages/playlist.php";
  echo ob_get_clean();
  break;
case 'playlist-empty':
  include "pages/playlist-empty.php";
  echo ob_get_clean();
  break;
default:
  echo "Error: The page ".@$_GET['page']." doesn't exist";
  echo ob_get_clean();
  break;
}
ob_end_clean();
?>
