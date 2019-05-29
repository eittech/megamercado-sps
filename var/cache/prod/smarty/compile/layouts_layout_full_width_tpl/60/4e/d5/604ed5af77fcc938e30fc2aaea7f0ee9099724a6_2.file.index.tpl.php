<?php
/* Smarty version 3.1.33, created on 2019-05-28 16:57:07
  from '/home/sps/web/megamercado.io/public_html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ceda0a39de974_35414895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '604ed5af77fcc938e30fc2aaea7f0ee9099724a6' => 
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
function content_5ceda0a39de974_35414895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18651376915ceda0a39dc7d2_25918204', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_2667832085ceda0a39dcd13_87075529 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_7014513205ceda0a39dd856_85275471 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_19056058235ceda0a39dd4d0_75865871 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7014513205ceda0a39dd856_85275471', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18651376915ceda0a39dc7d2_25918204 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_18651376915ceda0a39dc7d2_25918204',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_2667832085ceda0a39dcd13_87075529',
  ),
  'page_content' => 
  array (
    0 => 'Block_19056058235ceda0a39dd4d0_75865871',
  ),
  'hook_home' => 
  array (
    0 => 'Block_7014513205ceda0a39dd856_85275471',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2667832085ceda0a39dcd13_87075529', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19056058235ceda0a39dd4d0_75865871', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
