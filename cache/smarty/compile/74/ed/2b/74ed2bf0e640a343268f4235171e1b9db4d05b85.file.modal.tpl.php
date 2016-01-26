<?php /* Smarty version Smarty-3.1.19, created on 2016-01-24 21:18:16
         compiled from "C:\xampp\htdocs\kertasmakanan\admin998z35yqg\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:554656a4dd283ac3d1-97262734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74ed2bf0e640a343268f4235171e1b9db4d05b85' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kertasmakanan\\admin998z35yqg\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1452073828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '554656a4dd283ac3d1-97262734',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56a4dd283aef86_64960434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a4dd283aef86_64960434')) {function content_56a4dd283aef86_64960434($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
