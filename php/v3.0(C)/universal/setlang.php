<?php
header('content-type: text/html; charset=utf-8');
define('JTBC', 'common/incfiles/jtbc.php');
function require_jtbc($path){ if (is_file($path)){ require_once($path); return true; } }
if (require_jtbc(JTBC) || require_jtbc('../' . JTBC) || require_jtbc('../../' . JTBC) || require_jtbc('../../../' . JTBC))
{
  require_inc(__FILE__);
  header('location: ' . jtbc\ui::getRedirect());
}
?>
