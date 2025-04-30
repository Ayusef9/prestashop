<?php
/* Smarty version 4.3.4, created on 2025-04-30 15:34:11
  from 'C:\xampp\htdocs\prestashop\admin\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6811e083b48bf8_00111934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3675c4684fec7dd69488f205d4752d98dbaee9ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\new-theme\\template\\content.tpl',
      1 => 1739192952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6811e083b48bf8_00111934 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
