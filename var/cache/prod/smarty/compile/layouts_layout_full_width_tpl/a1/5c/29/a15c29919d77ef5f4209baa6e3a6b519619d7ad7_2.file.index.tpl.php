<?php
/* Smarty version 3.1.33, created on 2019-05-29 08:51:26
  from '/home/sps/web/megamercado.io/public_html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cee804e2ffdb9_28215052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a15c29919d77ef5f4209baa6e3a6b519619d7ad7' => 
    array (
      0 => '/home/sps/web/megamercado.io/public_html/themes/classic/templates/index.tpl',
      1 => 1553548768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cee804e2ffdb9_28215052 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7213632305cee804e2fdc54_88774227', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_17703791775cee804e2fe180_26412545 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_19040830885cee804e2febe5_99460828 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_13913966565cee804e2fe859_77526542 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19040830885cee804e2febe5_99460828', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_7213632305cee804e2fdc54_88774227 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_7213632305cee804e2fdc54_88774227',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17703791775cee804e2fe180_26412545',
  ),
  'page_content' => 
  array (
    0 => 'Block_13913966565cee804e2fe859_77526542',
  ),
  'hook_home' => 
  array (
    0 => 'Block_19040830885cee804e2febe5_99460828',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17703791775cee804e2fe180_26412545', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13913966565cee804e2fe859_77526542', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
