<?php
/* Smarty version 4.1.0, created on 2022-03-28 08:02:26
  from 'B:\Documents K\xampp\htdocs\php_06_cred_nowastruktura_namespaces\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62414f72efde71_74809611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88680f7430c9c2c1fd610f8775414bba8575565a' => 
    array (
      0 => 'B:\\Documents K\\xampp\\htdocs\\php_06_cred_nowastruktura_namespaces\\app\\views\\templates\\main.tpl',
      1 => 1647966021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62414f72efde71_74809611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
        Alpha by HTML5 UP
        html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
    <head>
        <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
">
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
               <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/style.css">

            <!-- Scripts -->
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/browser.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/breakpoints.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/util.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/main.js"><?php echo '</script'; ?>
>

    </head>

    <body class="is-preload">
        <div id="page-wrapper">

            <!-- Main -->
            <section id="main" class="container">

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73777885762414f72efbf70_65205480', 'content');
?>


            </section>

            <!-- Footer -->
            <footer id="footer">

                <ul class="copyright">
                    <p>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80566912962414f72efd1d4_70426632', 'footer');
?>

                    </p>
                </ul>
            </footer>

        </div>


    </body>
</html><?php }
/* {block 'content'} */
class Block_73777885762414f72efbf70_65205480 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_73777885762414f72efbf70_65205480',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_80566912962414f72efd1d4_70426632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_80566912962414f72efd1d4_70426632',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
