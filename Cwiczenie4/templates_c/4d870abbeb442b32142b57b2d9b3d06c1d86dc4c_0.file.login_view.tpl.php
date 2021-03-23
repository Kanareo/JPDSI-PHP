<?php
/* Smarty version 3.1.39, created on 2021-03-23 12:10:59
  from 'D:\xampp\htdocs\php_cw\Cwiczenie4\app\security\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6059ccc3ccba05_19334075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d870abbeb442b32142b57b2d9b3d06c1d86dc4c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_cw\\Cwiczenie4\\app\\security\\login_view.tpl',
      1 => 1616497858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6059ccc3ccba05_19334075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8607568986059ccc3cbe529_55490360', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../templates/main.tpl");
}
/* {block 'content'} */
class Block_8607568986059ccc3cbe529_55490360 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8607568986059ccc3cbe529_55490360',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="min-height:43.55em">
<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/login.php" method="post">
	<legend>Logowanie</legend>
	<fieldset>
            <p><label for="id_login">login: </label>
            <input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['login'];?>
" />
            <label for="id_pass">pass: </label>
            <input id="id_pass" type="password" name="pass" /></p>
	</fieldset>
	<input type="submit" value="zaloguj" class="btn btn-default btn-md"/>
</form>	

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
    <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
	<ol style="margin: auto; padding: 10px; border-radius: 5px; background-color: #f88; width:300px;text-align:center">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
    <?php }
}?>

</div>
<?php
}
}
/* {/block 'content'} */
}
