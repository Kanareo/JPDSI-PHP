<?php
/* Smarty version 3.1.39, created on 2021-05-04 14:45:17
  from 'D:\xampp\htdocs\php_cw\Cwiczenie7\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609141dd6e9769_86379228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab47da709ebf225e575c622cf4276015e7908c86' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_cw\\Cwiczenie7\\app\\views\\templates\\main.tpl',
      1 => 1620132316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609141dd6e9769_86379228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	
	<title>Kalkulator kredytowy</title>

	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main.css">

</head>

<body class="home" >
    <header id="head">
        <div class="container">
            <div class="row">Kalkulator kredytowy</div>
        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1101159364609141dd6e8453_56195111', 'header');
?>

    </header>

	<div class="container text-center">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128723683609141dd6e8eb3_25617488', 'content');
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
/* {block 'header'} */
class Block_1101159364609141dd6e8453_56195111 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1101159364609141dd6e8453_56195111',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_128723683609141dd6e8eb3_25617488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_128723683609141dd6e8eb3_25617488',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
