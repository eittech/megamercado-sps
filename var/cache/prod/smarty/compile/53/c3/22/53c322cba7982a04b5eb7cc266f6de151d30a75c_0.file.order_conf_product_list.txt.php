<?php
/* Smarty version 3.1.33, created on 2019-05-28 17:24:52
  from '/home/sps/web/megamercado.io/public_html/mails/en/order_conf_product_list.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ceda724084d02_98252236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53c322cba7982a04b5eb7cc266f6de151d30a75c' => 
    array (
      0 => '/home/sps/web/megamercado.io/public_html/mails/en/order_conf_product_list.txt',
      1 => 1553548763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ceda724084d02_98252236 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
						<?php echo $_smarty_tpl->tpl_vars['product']->value['reference'];?>


						<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>


						<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>

						<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "productPriceBlock", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'productPriceBlock')));?>


						<?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>


						<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>


	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customization'], 'customization');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
?>
							<?php echo $_smarty_tpl->tpl_vars['customization']->value['customization_text'];?>


							<?php if (count($_smarty_tpl->tpl_vars['product']->value['customization']) > 1) {?>
								<?php echo $_smarty_tpl->tpl_vars['product']->value['customization_quantity'];?>

							<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
