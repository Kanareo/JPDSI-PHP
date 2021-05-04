<?php
/* Smarty version 3.1.39, created on 2021-05-04 14:40:16
  from 'D:\xampp\htdocs\php_cw\Cwiczenie7\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609140b04e61a4_08268289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b09a62849e8e2beb9c702cdaba0f3a452c7be6d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_cw\\Cwiczenie7\\app\\views\\LoginView.tpl',
      1 => 1620132011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_609140b04e61a4_08268289 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_333629862609140b04df943_38628504', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_333629862609140b04df943_38628504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_333629862609140b04df943_38628504',
  ),
);
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
    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
    
<?php
}
}
/* {/block 'content'} */
}
