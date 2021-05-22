<?php
/* Smarty version 3.1.30, created on 2021-05-15 21:29:21
  from "D:\xampp\htdocs\php_cw\debug\app\views\templates\messages.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60a02111d4b8d5_43660060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '048ff0608ca7ff717ed9baae15ea60358485e6c5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_cw\\debug\\app\\views\\templates\\messages.tpl',
      1 => 1621106909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a02111d4b8d5_43660060 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    <h4>Wystąpiły błędy: </h4>
    <ol style="margin: 5em auto; padding: 10px; border-radius: 5px; background-color: #f88; width:300px;text-align:center">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
    <h4>Informacje: </h4>
    <ol style="margin: 5em auto; padding: 10px; border-radius: 5px; background-color: #7EFA83; width:300px;text-align:center">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ol>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
    <div style="margin: auto; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
        <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

    </div>
<?php }?>
</div>
<?php }
}
