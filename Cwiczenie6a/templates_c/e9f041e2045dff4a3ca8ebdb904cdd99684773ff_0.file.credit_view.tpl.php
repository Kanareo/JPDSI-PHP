<?php
/* Smarty version 3.1.39, created on 2021-04-30 15:24:09
  from 'D:\xampp\htdocs\php_cw\Cwiczenie6a\app\views\credit_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_608c04f96d5847_69340753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9f041e2045dff4a3ca8ebdb904cdd99684773ff' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_cw\\Cwiczenie6a\\app\\views\\credit_view.tpl',
      1 => 1619789042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608c04f96d5847_69340753 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1596708870608c04f96c7266_33473849', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1596708870608c04f96c7266_33473849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1596708870608c04f96c7266_33473849',
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
    
 
    
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol style="margin: 5em auto; padding: 10px; border-radius: 5px; background-color: #f88; width:300px;text-align:center">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol style="margin: 5em auto; padding: 10px; border-radius: 5px; background-color: #7EFA83; width:300px;text-align:center">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<div style="margin: auto; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</div>
    <?php }?>
</div>
<?php
}
}
/* {/block 'content'} */
}
