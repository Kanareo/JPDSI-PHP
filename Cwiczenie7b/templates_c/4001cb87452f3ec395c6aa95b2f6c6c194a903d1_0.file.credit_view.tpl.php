<?php
/* Smarty version 3.1.30, created on 2021-05-15 21:34:52
  from "D:\xampp\htdocs\php_cw\Cwiczenie7b\app\views\credit_view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60a0225c39a901_41734833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4001cb87452f3ec395c6aa95b2f6c6c194a903d1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_cw\\Cwiczenie7b\\app\\views\\credit_view.tpl',
      1 => 1621106909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_60a0225c39a901_41734833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194317793160a0225c398545_48346424', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44756003060a0225c39a4d8_35267026', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'header'} */
class Block_194317793160a0225c398545_48346424 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="margin-top: 5.5em; margin-right: 1em; text-align: right">
        <p>Użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</p>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="btn btn-primary btn-sm">Wyloguj</a></p>
    </div>
<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_44756003060a0225c39a4d8_35267026 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
    
<div style="min-height:43.55em;padding:4em">
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
process" method="post">
        <p><label for="id_x">Kwota kredytu: </label>
        <input id="id_x" type="text" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
" /></p>
        <p><label for="id_y">Ilość lat: </label>
        <input id="id_y" type="text" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
" /></p>
        <p><label for="id_y">Oprocentowanie roczne: </label>
        <input id="id_y" type="text" name="p" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->p;?>
" /></p>
        <p><input class="btn btn-default btn-md" type="submit" value="Oblicz" /></p>
    </form>	
    
    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php
}
}
/* {/block 'content'} */
}
