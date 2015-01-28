<?php //netteCache[01]000370a:2:{s:4:"time";s:21:"0.54404500 1422354101";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:56:"C:\xampp\htdocs\MyWallet\app\templates\User\create.latte";i:2;i:1422354077;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: C:\xampp\htdocs\MyWallet\app\templates\User\create.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'byebl3u5l9')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb423bdd3b10_content')) { function _lb423bdd3b10_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["registerForm"], array('class' => 'form-horizontal')) ?>
	<div class="form-group">
		<?php if ($_label = $_form["username"]->getLabel()) echo $_label->addAttributes(array('class'=>'col-sm-1 control-label'))  ?>

		<div class="col-sm-3">
			<?php echo $_form["username"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

		</div>
	</div>

	<div class="form-group">
		<?php if ($_label = $_form["password"]->getLabel()) echo $_label->addAttributes(array('class'=>'col-sm-1 control-label'))  ?>

		<div class="col-sm-3">
			<?php echo $_form["password"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

		</div>
	</div>
		
	<div class="form-group">
		<?php if ($_label = $_form["firstname"]->getLabel()) echo $_label->addAttributes(array('class'=>'col-sm-1 control-label'))  ?>

		<div class="col-sm-3">
			<?php echo $_form["firstname"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

		</div>
	</div>
		
	<div class="form-group">
		<?php if ($_label = $_form["surename"]->getLabel()) echo $_label->addAttributes(array('class'=>'col-sm-1 control-label'))  ?>

		<div class="col-sm-3">
			<?php echo $_form["surename"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

		</div>
	</div>
	
	<div class="form-group">
		<?php if ($_label = $_form["email"]->getLabel()) echo $_label->addAttributes(array('class'=>'col-sm-1 control-label'))  ?>

		<div class="col-sm-3">
			<?php echo $_form["email"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

		</div>
	</div>
		
	<div class="form-group">
		<div class="col-sm-offset-1 col-sm-10">
			<?php echo $_form["register"]->getControl()->addAttributes(array('class'=>'btn btn-primary', 'data-loading-text' => 'Vytvářím kategorii.', 'autocomplete' => 'off')) ?>

		</div>
	</div>
<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ;
}}

//
// block breadcrumbs
//
if (!function_exists($_l->blocks['breadcrumbs'][] = '_lb56d581626f_breadcrumbs')) { function _lb56d581626f_breadcrumbs($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:")) ?>">Domů</a></li>
		<li class="active">Registrovat</li>
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