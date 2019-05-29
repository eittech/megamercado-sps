<?php
/* Smarty version 3.1.33, created on 2019-05-28 17:18:49
  from '/home/sps/web/megamercado.io/public_html/admin860854syz/themes/default/template/controllers/orders/_select_payment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ceda5b9851c70_94116894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83b09ae34e71dc65af6e02ef05925073de7c68f0' => 
    array (
      0 => '/home/sps/web/megamercado.io/public_html/admin860854syz/themes/default/template/controllers/orders/_select_payment.tpl',
      1 => 1553548766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ceda5b9851c70_94116894 (Smarty_Internal_Template $_smarty_tpl) {
?><select name="payment_module_name" id="payment_module_name">
  <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_modules']->value, 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" <?php if (isset($_POST['payment_module_name']) && $_smarty_tpl->tpl_vars['module']->value->name == $_POST['payment_module_name']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
</option>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php } else { ?>
      <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back office order','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back office order','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</option>
  <?php }?>
</select>
<?php }
}
