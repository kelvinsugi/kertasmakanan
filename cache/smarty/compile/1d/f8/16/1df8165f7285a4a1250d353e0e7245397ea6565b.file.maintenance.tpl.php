<?php /* Smarty version Smarty-3.1.19, created on 2016-01-24 14:37:44
         compiled from "C:\xampp\htdocs\kertasmakanan\themes\default-bootstrap\maintenance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:404156a4d3a8169a38-07061457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1df8165f7285a4a1250d353e0e7245397ea6565b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kertasmakanan\\themes\\default-bootstrap\\maintenance.tpl',
      1 => 1452073828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '404156a4d3a8169a38-07061457',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_code' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'nobots' => 0,
    'favicon_url' => 0,
    'css_dir' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
    'HOOK_MAINTENANCE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56a4d3a8190377_98529724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a4d3a8190377_98529724')) {function content_56a4d3a8190377_98529724($_smarty_tpl) {?>

<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
">
<head>
	<meta charset="utf-8">
	<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)) {?>
	<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)) {?>
	<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
">
<?php }?>
	<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)) {?>no<?php }?>index,follow">
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
">
       	<link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
maintenance.css" rel="stylesheet">
       	<link href='//fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet'>
</head>
<body>
    	<div class="container">
			<div id="maintenance">
				<div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['logo_image_width']->value) {?>width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['logo_image_height']->value) {?>height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?> alt="logo" /></div>
	        		<?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

	        		<div id="message">
	             			<h1 class="maintenance-heading"><?php echo smartyTranslate(array('s'=>'We\'ll be back soon.'),$_smarty_tpl);?>
</h1>
							<?php echo smartyTranslate(array('s'=>'We are currently updating our shop and will be back really soon.'),$_smarty_tpl);?>

							<br />
							<?php echo smartyTranslate(array('s'=>'Thanks for your patience.'),$_smarty_tpl);?>

					</div>
				</div>
	        </div>
		</div>
</body>
</html>
<?php }} ?>
