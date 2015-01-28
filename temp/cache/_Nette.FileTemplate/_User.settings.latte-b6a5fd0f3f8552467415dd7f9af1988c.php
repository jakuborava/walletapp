<?php //netteCache[01]000372a:2:{s:4:"time";s:21:"0.88975600 1422270704";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:58:"C:\xampp\htdocs\MyWallet\app\templates\User\settings.latte";i:2;i:1422270703;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: C:\xampp\htdocs\MyWallet\app\templates\User\settings.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '8fk9bxb211')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb6d2e7097e6_content')) { function _lb6d2e7097e6_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<a class="btn btn-danger" href="<?php echo htmlSpecialChars($_control->link("User:delete")) ?>
">Smazat účet</a>
	<br><br>
	<h4>Změnit heslo</h4>
<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["changePassword"], array('class' => 'form-inline')) ?>
		<div class="form-group">
			<?php if ($_label = $_form["password"]->getLabel()) echo $_label->addAttributes(array('class'=>'sr-only'))  ?>

			<?php echo $_form["password"]->getControl()->addAttributes(array('class'=>'form-control', 'placeholder' => 'Heslo')) ?>

		</div>
		<div class="form-group">
			<?php if ($_label = $_form["passwordVerify"]->getLabel()) echo $_label->addAttributes(array('class'=>'sr-only'))  ?>

			<?php echo $_form["passwordVerify"]->getControl()->addAttributes(array('class'=>'form-control', 'placeholder' => 'Heslo znova')) ?>

		</div>
			<?php echo $_form["edit"]->getControl()->addAttributes(array('class'=>'btn btn-primary')) ?>

<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ?>
	<br>
	<h4>Změnit e-mail</h4>
<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["changeEmail"], array('class' => 'form-inline')) ?>
		<div class="form-group">
			<?php if ($_label = $_form["email"]->getLabel()) echo $_label->addAttributes(array('class'=>'sr-only'))  ?>

			<?php echo $_form["email"]->getControl()->addAttributes(array('class'=>'form-control', 'placeholder' => 'john.doe@example.com')) ?>

		</div>
		<?php echo $_form["edit"]->getControl()->addAttributes(array('class'=>'btn btn-primary')) ?>

<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ?>
	<br>
	<h4>Změnit výchozí měnu</h4>
<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["defaultCurrency"], array('class' => 'form-inline')) ?>
		<div class="form-group">
			<?php if ($_label = $_form["default_currency"]->getLabel()) echo $_label->addAttributes(array('class' => 'sr-only'))  ?>

			<?php echo $_form["default_currency"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

		</div>
		<?php echo $_form["edit"]->getControl()->addAttributes(array('class'=>'btn btn-primary')) ?>

<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ;
}}

//
// block breadcrumbs
//
if (!function_exists($_l->blocks['breadcrumbs'][] = '_lb6335c34316_breadcrumbs')) { function _lb6335c34316_breadcrumbs($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:")) ?>">Domů</a></li>
		<li><a href="<?php echo htmlSpecialChars($_control->link("User:")) ?>">Můj účet</a></li>
		<li class="active">Nastavení</li>
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
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>

<?php call_user_func(reset($_l->blocks['breadcrumbs']), $_l, get_defined_vars()) ; 