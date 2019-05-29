<?php
/* Smarty version 3.1.33, created on 2019-05-29 08:51:26
  from '/home/sps/web/megamercado.io/public_html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cee804e314ad1_32630621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f92e7e6117eebfff8e535b3b5fe7d6650299868' => 
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
function content_5cee804e314ad1_32630621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13366772745cee804e30a3e5_56983149', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_11771128115cee804e30b237_77630022 extends Smarty_Internal_Block
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
class Block_5411925945cee804e30aab7_65074029 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11771128115cee804e30b237_77630022', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_246343665cee804e312fe0_47657632 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1855044595cee804e3135a0_93642646 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2124972855cee804e312b75_35662216 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_246343665cee804e312fe0_47657632', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1855044595cee804e3135a0_93642646', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_15656597605cee804e3140c7_26174121 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_18663552955cee804e313d69_57021715 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15656597605cee804e3140c7_26174121', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_13366772745cee804e30a3e5_56983149 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13366772745cee804e30a3e5_56983149',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_5411925945cee804e30aab7_65074029',
  ),
  'page_title' => 
  array (
    0 => 'Block_11771128115cee804e30b237_77630022',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_2124972855cee804e312b75_35662216',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_246343665cee804e312fe0_47657632',
  ),
  'page_content' => 
  array (
    0 => 'Block_1855044595cee804e3135a0_93642646',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_18663552955cee804e313d69_57021715',
  ),
  'page_footer' => 
  array (
    0 => 'Block_15656597605cee804e3140c7_26174121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5411925945cee804e30aab7_65074029', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2124972855cee804e312b75_35662216', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18663552955cee804e313d69_57021715', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
