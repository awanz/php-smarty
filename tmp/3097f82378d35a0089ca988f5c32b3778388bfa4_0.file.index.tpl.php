<?php
/* Smarty version 4.1.1, created on 2022-05-29 04:10:08
  from 'D:\laragon\www\phpjsonread\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6292f22068a0d1_60319779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3097f82378d35a0089ca988f5c32b3778388bfa4' => 
    array (
      0 => 'D:\\laragon\\www\\phpjsonread\\views\\index.tpl',
      1 => 1653797407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6292f22068a0d1_60319779 (Smarty_Internal_Template $_smarty_tpl) {
?>Hello ini menggunakan tpl dari smarty

<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 : <?php echo $_smarty_tpl->tpl_vars['item']->value->object_created;?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value->object_owner;?>
 </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
