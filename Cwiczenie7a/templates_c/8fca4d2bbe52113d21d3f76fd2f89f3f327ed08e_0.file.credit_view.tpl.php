<?php
/* Smarty version 3.1.39, created on 2021-05-04 14:52:15
  from 'D:\xampp\htdocs\php_cw\Cwiczenie7\app\views\credit_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6091437f10e384_62921490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fca4d2bbe52113d21d3f76fd2f89f3f327ed08e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_cw\\Cwiczenie7\\app\\views\\credit_view.tpl',
      1 => 1620132733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6091437f10e384_62921490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9752683966091437f106054_22027557', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20692975576091437f10a612_78789283', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_9752683966091437f106054_22027557 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_9752683966091437f106054_22027557',
  ),
);
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
class Block_20692975576091437f10a612_78789283 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20692975576091437f10a612_78789283',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
    
<div style="min-height:43.55em;padding:4em">
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post">
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
    
    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php
}
}
/* {/block 'content'} */
}
