<?php
// source: C:\xampp\htdocs\MyWallet\app/templates/User/password.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('8051703284', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb1a339ca149_content')) { function _lb1a339ca149_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<?php Nette\Bridges\FormsLatte\FormMacros::renderFormBegin($form = $_form = $_control["changePassword1"], array('class' => 'form-inline')) ?>

		<div class="form-group">
			<?php if ($_label = $_form["password"]->getLabel()) echo $_label->addAttributes(array('class'=>'sr-only'))  ?>

			<?php echo $_form["password"]->getControl()->addAttributes(array('class'=>'form-control', 'placeholder' => 'Heslo')) ?>

		</div>
		<div class="form-group">
			<?php if ($_label = $_form["passwordVerify"]->getLabel()) echo $_label->addAttributes(array('class'=>'sr-only'))  ?>

			<?php echo $_form["passwordVerify"]->getControl()->addAttributes(array('class'=>'form-control', 'placeholder' => 'Heslo znova')) ?>

		</div>
			<?php echo $_form["edit"]->getControl()->addAttributes(array('class'=>'btn btn-primary')) ?>

	<?php Nette\Bridges\FormsLatte\FormMacros::renderFormEnd($_form) ?>

<?php
}}

//
// block breadcrumbs
//
if (!function_exists($_b->blocks['breadcrumbs'][] = '_lbeae07a4970_breadcrumbs')) { function _lbeae07a4970_breadcrumbs($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:"), ENT_COMPAT) ?>
">Domů</a></li>
		<li class="active">Zapomenuté heslo</li>
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