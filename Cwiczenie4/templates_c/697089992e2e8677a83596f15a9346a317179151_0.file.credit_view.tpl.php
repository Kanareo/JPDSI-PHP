<?php
/* Smarty version 3.1.39, created on 2021-03-23 11:57:42
  from 'D:\xampp\htdocs\php_cw\Cwiczenie4\app\credit_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6059c9a6a28f46_54766049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '697089992e2e8677a83596f15a9346a317179151' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_cw\\Cwiczenie4\\app\\credit_view.tpl',
      1 => 1616497054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6059c9a6a28f46_54766049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7063992196059c9a6a1aa13_26079200', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_7063992196059c9a6a1aa13_26079200 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7063992196059c9a6a1aa13_26079200',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="min-height:40.7em;padding:4em">
    <form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/credit_calc.php" method="post">
        <p><label for="id_x">Kwota kredytu: </label>
        <input id="id_x" type="text" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['x'];?>
" /></p>
        <p><label for="id_y">Ilość lat: </label>
        <input id="id_y" type="text" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['y'];?>
" /></p>
        <p><label for="id_y">Oprocentowanie roczne: </label>
        <input id="id_y" type="text" name="p" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['p'];?>
" /></p>
        <p><input class="btn btn-default btn-md" type="submit" value="Oblicz" /></p>
    </form>	
    
    <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">
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
	<?php }?>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<div style="margin: auto; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</div>
    <?php }?>
</div>
<div>
    <a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/logout.php" class="btn btn-action">Wyloguj</a>
</div>
<?php
}
}
/* {/block 'content'} */
}
