<?php
/* Smarty version 3.1.39, created on 2021-05-13 16:34:47
  from 'D:\xampp\htdocs\php_cw\Cwiczenie7a\app\views\credit_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609d39075e8c33_12144938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0924afa4e447ff9f43ea4b834f47b81c16584d87' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_cw\\Cwiczenie7a\\app\\views\\credit_view.tpl',
      1 => 1620914785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_609d39075e8c33_12144938 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_831864917609d39075deb93_56425357', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_736751778609d39075e3819_01861424', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_831864917609d39075deb93_56425357 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_831864917609d39075deb93_56425357',
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
class Block_736751778609d39075e3819_01861424 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_736751778609d39075e3819_01861424',
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
