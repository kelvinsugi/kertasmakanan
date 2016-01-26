<?php /* Smarty version Smarty-3.1.19, created on 2016-01-24 14:37:43
         compiled from "C:\xampp\htdocs\kertasmakanan\admin\themes\default\template\controllers\logs\employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1636956a4d3a7d52d83-90822883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9761826432c25f9adffef99d539cdd8399ffee27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kertasmakanan\\admin\\themes\\default\\template\\controllers\\logs\\employee_field.tpl',
      1 => 1452073828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1636956a4d3a7d52d83-90822883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56a4d3a7d57216_45756457',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a4d3a7d57216_45756457')) {function content_56a4d3a7d57216_45756457($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
