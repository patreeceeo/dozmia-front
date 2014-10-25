<?php

ob_start();
if (@$_GET['page'] == 'test') {
  include "pages/test.php";
  echo ob_get_clean();
}
ob_end_clean();
?>
