<?php
/* Smarty version 3.1.30, created on 2021-05-15 21:29:21
  from "D:\xampp\htdocs\php_cw\debug\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60a02111c3eba8_70877409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bb0c35d9478bb21147ece2bc75ee78bba3fff59' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_cw\\debug\\app\\views\\LoginView.tpl',
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
function content_60a02111c3eba8_70877409 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10236691760a02111c3e5f9_23132284', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_10236691760a02111c3e5f9_23132284 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="min-height:43.55em;padding:4em">
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
        <p><label for="id_login">Login: </label>
        <input id="id_login" type="text" name="login" /></p>
        <p><label for="id_pass">Hasło: </label>
        <input id="id_pass" type="password" name="pass" /></p>
        <p><input class="btn btn-default btn-md" type="submit" value="Zaloguj" /></p>
    </form>
    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
    
<?php
}
}
/* {/block 'content'} */
}
