<?php
// source: C:\xampp\htdocs\MyWallet\app/templates/User/settings.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('4598043411', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbe93221593b_content')) { function _lbe93221593b_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<a class="btn btn-danger" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("User:delete"), ENT_COMPAT) ?>
">Smazat účet</a>
	<br><br>
	<h4>Změnit heslo</h4>
	<?php Nette\Bridges\FormsLatte\FormMacros::renderFormBegin($form = $_form = $_control["changePassword"], array('class' => 'form-inline')) ?>

		<div class="form-group">
			<?php if ($_label = $_form["password"]->getLabel()) echo $_label->addAttributes(array('class'=>'sr-only'))  ?>

			<?php echo $_form["password"]->getControl()->addAttributes(array('class'=>'form-control', 'placeholder' => 'Heslo')) ?>

		</div>&nbsp;
		<div class="form-group">
			<?php if ($_label = $_form["passwordVerify"]->getLabel()) echo $_label->addAttributes(array('class'=>'sr-only'))  ?>

			<?php echo $_form["passwordVerify"]->getControl()->addAttributes(array('class'=>'form-control', 'placeholder' => 'Heslo znova')) ?>

		</div>
			<?php echo $_form["edit"]->getControl()->addAttributes(array('class'=>'btn btn-primary')) ?>

	<?php Nette\Bridges\FormsLatte\FormMacros::renderFormEnd($_form) ?>

	<br>
	<h4>Změnit e-mail</h4>
	<?php Nette\Bridges\FormsLatte\FormMacros::renderFormBegin($form = $_form = $_control["changeEmail"], array('class' => 'form-inline')) ?>

		<div class="form-group">
			<?php if ($_label = $_form["email"]->getLabel()) echo $_label->addAttributes(array('class'=>'sr-only'))  ?>

			<?php echo $_form["email"]->getControl()->addAttributes(array('class'=>'form-control', 'placeholder' => 'john.doe@example.com')) ?>

		</div>
		<?php echo $_form["edit"]->getControl()->addAttributes(array('class'=>'btn btn-primary')) ?>

	<?php Nette\Bridges\FormsLatte\FormMacros::renderFormEnd($_form) ?>

	<br>
	<h4>Změnit výchozí měnu</h4>
	<?php Nette\Bridges\FormsLatte\FormMacros::renderFormBegin($form = $_form = $_control["defaultCurrency"], array('class' => 'form-inline')) ?>

		<div class="form-group">
			<?php if ($_label = $_form["default_currency"]->getLabel()) echo $_label->addAttributes(array('class' => 'sr-only'))  ?>

			<?php echo $_form["default_currency"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

		</div>
		<?php echo $_form["edit"]->getControl()->addAttributes(array('class'=>'btn btn-primary')) ?>

	<?php Nette\Bridges\FormsLatte\FormMacros::renderFormEnd($_form) ?>

<?php
}}

//
// block breadcrumbs
//
if (!function_exists($_b->blocks['breadcrumbs'][] = '_lbec6c48cd08_breadcrumbs')) { function _lbec6c48cd08_breadcrumbs($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:"), ENT_COMPAT) ?>
">Domů</a></li>
		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("User:"), ENT_COMPAT) ?>
">Můj účet</a></li>
		<li class="active">Nastavení</li>
<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIMacros::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars())  ?>

<?php call_user_func(reset($_b->blocks['breadcrumbs']), $_b, get_defined_vars()) ; 