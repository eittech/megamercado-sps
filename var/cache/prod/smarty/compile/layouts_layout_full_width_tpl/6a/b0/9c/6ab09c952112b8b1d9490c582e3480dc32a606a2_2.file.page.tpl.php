<?php
/* Smarty version 3.1.33, created on 2019-05-28 16:46:13
  from '/home/sps/web/megamercado.io/public_html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced9e15792955_44339477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ab09c952112b8b1d9490c582e3480dc32a606a2' => 
    array (
      0 => '/home/sps/web/megamercado.io/public_html/themes/classic/templates/page.tpl',
      1 => 1553548768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ced9e15792955_44339477 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13199855055ced9e1578ed35_48955253', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1132947365ced9e1578f7a1_53198547 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_13335163585ced9e1578f1a8_09030699 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1132947365ced9e1578f7a1_53198547', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1352959865ced9e15790fb8_31551013 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_7427768615ced9e157914d9_30794602 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12391576985ced9e15790c24_06038690 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1352959865ced9e15790fb8_31551013', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7427768615ced9e157914d9_30794602', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_20082507815ced9e15791fb2_30507127 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1387342525ced9e15791c62_97198639 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20082507815ced9e15791fb2_30507127', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_13199855055ced9e1578ed35_48955253 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13199855055ced9e1578ed35_48955253',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_13335163585ced9e1578f1a8_09030699',
  ),
  'page_title' => 
  array (
    0 => 'Block_1132947365ced9e1578f7a1_53198547',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_12391576985ced9e15790c24_06038690',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1352959865ced9e15790fb8_31551013',
  ),
  'page_content' => 
  array (
    0 => 'Block_7427768615ced9e157914d9_30794602',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1387342525ced9e15791c62_97198639',
  ),
  'page_footer' => 
  array (
    0 => 'Block_20082507815ced9e15791fb2_30507127',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13335163585ced9e1578f1a8_09030699', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12391576985ced9e15790c24_06038690', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1387342525ced9e15791c62_97198639', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
