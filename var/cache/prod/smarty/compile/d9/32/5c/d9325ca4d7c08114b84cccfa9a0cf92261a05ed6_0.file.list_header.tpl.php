<?php
/* Smarty version 3.1.33, created on 2019-05-28 16:52:37
  from '/home/sps/web/megamercado.io/public_html/admin860854syz/themes/default/template/controllers/shop/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced9f9557f6a3_81938585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9325ca4d7c08114b84cccfa9a0cf92261a05ed6' => 
    array (
      0 => '/home/sps/web/megamercado.io/public_html/admin860854syz/themes/default/template/controllers/shop/helpers/list/list_header.tpl',
      1 => 1553548765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ced9f9557f6a3_81938585 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7791323865ced9f95579c82_99211158', "startForm");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block "startForm"} */
class Block_7791323865ced9f95579c82_99211158 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'startForm' => 
  array (
    0 => 'Block_7791323865ced9f95579c82_99211158',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/sps/web/megamercado.io/public_html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php $_smarty_tpl->_assignInScope('action', smarty_modifier_replace($_smarty_tpl->tpl_vars['action']->value,'id_shop','shop_id'));?>
	<form method="post" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="form-horizontal clearfix" id="form-<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
">
<?php
}
}
/* {/block "startForm"} */
}
