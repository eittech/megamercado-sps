<?php
/* Smarty version 3.1.33, created on 2019-05-29 08:51:26
  from '/home/sps/web/megamercado.io/public_html/themes/classic/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cee804e748685_27408164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b243831131f7e25a42728052df698cb8c7a7c3e' => 
    array (
      0 => '/home/sps/web/megamercado.io/public_html/themes/classic/templates/_partials/footer.tpl',
      1 => 1554932966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cee804e748685_27408164 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container">
  <div class="row">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4212053375cee804e7436d8_87448170', 'hook_footer_before');
?>

  </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8432754765cee804e7443a8_75155981', 'hook_footer');
?>

    </div>
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11812443115cee804e744e09_96244818', 'hook_footer_after');
?>

    </div>
    <div class="row">
      <div class="col-md-12">
        <p class="text-sm-center">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18650422045cee804e745928_09326004', 'copyright_link');
?>

        </p>
      </div>
    </div>
  </div>
</div>
<?php }
/* {block 'hook_footer_before'} */
class Block_4212053375cee804e7436d8_87448170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_4212053375cee804e7436d8_87448170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_8432754765cee804e7443a8_75155981 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_8432754765cee804e7443a8_75155981',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_11812443115cee804e744e09_96244818 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_11812443115cee804e744e09_96244818',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_18650422045cee804e745928_09326004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_18650422045cee804e745928_09326004',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <a class="_blank" href="http://www.eittech.net" target="_blank">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'eittech™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

            </a>
          <?php
}
}
/* {/block 'copyright_link'} */
}
