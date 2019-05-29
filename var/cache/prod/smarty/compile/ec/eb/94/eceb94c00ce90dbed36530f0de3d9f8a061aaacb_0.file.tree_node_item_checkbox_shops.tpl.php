<?php
/* Smarty version 3.1.33, created on 2019-05-28 17:23:53
  from '/home/sps/web/megamercado.io/public_html/admin860854syz/themes/default/template/helpers/tree/tree_node_item_checkbox_shops.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ceda6e9919b76_21728707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eceb94c00ce90dbed36530f0de3d9f8a061aaacb' => 
    array (
      0 => '/home/sps/web/megamercado.io/public_html/admin860854syz/themes/default/template/helpers/tree/tree_node_item_checkbox_shops.tpl',
      1 => 1553548766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ceda6e9919b76_21728707 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="checkbox" name="checkBoxShopAsso_<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['node']->value['id_shop'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_shop'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }
}
