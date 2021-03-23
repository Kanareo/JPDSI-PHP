<?php
/* Smarty version 3.1.39, created on 2021-03-23 11:57:58
  from 'D:\xampp\htdocs\php_cw\Cwiczenie4\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6059c9b65ca386_27946531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '970054b27cdd239317fb27d6cb55e0a32fd2c46f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_cw\\Cwiczenie4\\templates\\main.tpl',
      1 => 1616495414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6059c9b65ca386_27946531 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10341966366059c9b65c9a09_56723071', 'content');
?>

        </div>
    <footer id="footer" class="top-space">
        <div class="footer1">
            <div>
                <div class="row" style="margin-left: 0;margin-right: 0">
                    <div class="col-md-8 widget">
                        <div>
                            <p class="text-right">
                                Copyright &copy; 2021, Michał Jagieła. Website css based on <a href="https://www.gettemplate.com/demo/progressus/" rel="designer">Progressus</a> 
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
class Block_10341966366059c9b65c9a09_56723071 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10341966366059c9b65c9a09_56723071',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
