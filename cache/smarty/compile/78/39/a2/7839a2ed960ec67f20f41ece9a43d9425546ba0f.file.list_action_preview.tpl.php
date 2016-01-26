<?php /* Smarty version Smarty-3.1.19, created on 2016-01-26 22:05:00
         compiled from "C:\xampp\htdocs\kertasmakanan\admin998z35yqg\themes\default\template\helpers\list\list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2294056a78b1c3390e3-80282258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7839a2ed960ec67f20f41ece9a43d9425546ba0f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kertasmakanan\\admin998z35yqg\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1452073828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2294056a78b1c3390e3-80282258',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56a78b1c381e89_50404599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a78b1c381e89_50404599')) {function content_56a78b1c381e89_50404599($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
