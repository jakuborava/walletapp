<?php //netteCache[01]000379a:2:{s:4:"time";s:21:"0.05214100 1421342239";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:65:"C:\xampp\htdocs\MyWallet\app\templates\User\defaultCurrency.latte";i:2;i:1421342232;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: C:\xampp\htdocs\MyWallet\app\templates\User\defaultCurrency.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'co4utey1s4')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb4dfd1962a0_content')) { function _lb4dfd1962a0_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;$_ctrl = $_control->getComponent("defaultCurrency"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->redrawControl(NULL, FALSE); $_ctrl->render() ;
}}

//
// block breadcrumbs
//
if (!function_exists($_l->blocks['breadcrumbs'][] = '_lba91555942b_breadcrumbs')) { function _lba91555942b_breadcrumbs($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:")) ?>">Domů</a></li>
		<li><a href="<?php echo htmlSpecialChars($_control->link("User:")) ?>">Můj účet</a></li>
		<li><a href="<?php echo htmlSpecialChars($_control->link("User:settings")) ?>">Nastavení</a></li>
		<li class="active">Změna měny</li>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; call_user_func(reset($_l->blocks['breadcrumbs']), $_l, get_defined_vars()) ; 