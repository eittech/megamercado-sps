<?php
/* Smarty version 3.1.33, created on 2019-05-28 17:24:58
  from '/home/sps/web/megamercado.io/public_html/pdf/invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ceda72a9fedf1_33265513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2e1dddec8bfa5ffd9658cd4492ae4f657334f6f' => 
    array (
      0 => '/home/sps/web/megamercado.io/public_html/pdf/invoice.shipping-tab.tpl',
      1 => 1553548766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ceda72a9fedf1_33265513 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
