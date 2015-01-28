<?php //netteCache[01]000366a:2:{s:4:"time";s:21:"0.03388100 1422365913";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:52:"C:\xampp\htdocs\MyWallet\app\templates\Sign\in.latte";i:2;i:1422365911;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: C:\xampp\htdocs\MyWallet\app\templates\Sign\in.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'oli17hx6bf')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb9ca4d33ea2_content')) { function _lb9ca4d33ea2_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>

<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["signInForm"], array('class' =>'form-horizontal')) ?>
	<br>
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
		<div class="col-sm-offset-1 col-sm-10">
		  <div class="checkbox">
			<label>
			  <?php echo $_form["remember"]->getControl() ?>

			</label>
		  </div>
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-offset-1 col-sm-10">
		  <?php echo $_form["send"]->getControl()->addAttributes(array('class'=>'btn btn-primary')) ?>

		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-offset-1 col-sm-10">
		  <a href="<?php echo htmlSpecialChars($_control->link("User:reactive")) ?>">Zaslat aktivační kód</a><br>
		  <a href="<?php echo htmlSpecialChars($_control->link("User:forgotPassword")) ?>
">Zapomenuté heslo</a>
		</div>
	  </div>
<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ?>

<?php
}}

//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb144e80f19a_title')) { function _lb144e80f19a_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><h1>Přihlásit se</h1>
<?php
}}

//
// block breadcrumbs
//
if (!function_exists($_l->blocks['breadcrumbs'][] = '_lb1fdc9147c9_breadcrumbs')) { function _lb1fdc9147c9_breadcrumbs($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:")) ?>">Domů</a></li>
		<li class="active">Přihlásit se</li>
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