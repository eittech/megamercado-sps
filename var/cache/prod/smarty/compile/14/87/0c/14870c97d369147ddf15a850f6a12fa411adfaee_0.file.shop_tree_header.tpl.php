<?php
/* Smarty version 3.1.33, created on 2019-05-28 16:52:30
  from '/home/sps/web/megamercado.io/public_html/admin860854syz/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced9f8e23fd50_26824909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14870c97d369147ddf15a850f6a12fa411adfaee' => 
    array (
      0 => '/home/sps/web/megamercado.io/public_html/admin860854syz/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl',
      1 => 1553548765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ced9f8e23fd50_26824909 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel-heading">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-sitemap"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<div class="pull-right">
		<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
	</div>
</div>
<?php }
}
