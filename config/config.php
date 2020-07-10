<?php
/**
 * 
 * 	Presets file
 * 
 */

//> Shortcuts for accesing controllers
define('PATH_PREFIX', '../controllers/');
define('PATH_POSTFIX', 'Controller.php');
//<


//> Applied template
$template = 'default';
$templateAdmin = 'admin';

// Shortcuts to tepmlate files (*.tpl)
define('TEMPLATE_PREFIX', "../views/{$template}/");
define('TemplateAdminPrefix', "../views/{$templateAdmin}/");
define('TEMPLATE_POSTFIX', '.tpl');

// Shortcuts to web tepmlate files
define('TEMPLATE_WEB_PATH', "/templates/{$template}/");
define('TemplateAdminWebPath', "/templates/{$templateAdmin}/");
//<

//> Initialization of teplmate engine
// full path to Smarty.class.php 
require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

// init main properties
$smarty->setTemplateDir(TEMPLATE_PREFIX);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

//setting variable for the Samtry obj.
$smarty->assign('templateWebPath', TEMPLATE_WEB_PATH);


