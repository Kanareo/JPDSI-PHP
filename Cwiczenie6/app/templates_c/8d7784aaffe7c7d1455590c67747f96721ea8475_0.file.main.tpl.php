<?php
/* Smarty version 3.1.39, created on 2021-04-30 14:53:27
  from 'D:\xampp\htdocs\php_cw\Cwiczenie6\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_608bfdc7cd2373_82614447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d7784aaffe7c7d1455590c67747f96721ea8475' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_cw\\Cwiczenie6\\templates\\main.tpl',
      1 => 1619785390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608bfdc7cd2373_82614447 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	
	<title>Kalkulator kredytowy</title>

	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/main.css">

</head>

<body class="home" >
    <header id="head">
        <div class="container">
            <div class="row">Kalkulator kredytowy</div>
        </div>
    </header>

	<div class="container text-center">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183155179608bfdc7cd1c14_72845963', 'content');
?>

        </div>
    <footer id="footer" class="top-space">
        <div class="footer1">
            <div>
                <div class="row" style="margin-left: 0;margin-right: 0">
                    <div class="col-md-8 widget">
                        <div>
                            <p class="text-right">
                                Copyright &copy; 2021, Micha?? Jagie??a. Website css based on <a href="https://www.gettemplate.com/demo/progressus/" rel="designer">Progressus</a> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<?php }
/* {block 'content'} */
class Block_183155179608bfdc7cd1c14_72845963 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_183155179608bfdc7cd1c14_72845963',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domy??lna tre???? zawarto??ci .... <?php
}
}
/* {/block 'content'} */
}
