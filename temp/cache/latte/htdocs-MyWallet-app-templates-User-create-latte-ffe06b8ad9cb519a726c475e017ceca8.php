<?php
// source: C:\xampp\htdocs\MyWallet\app/templates/User/create.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('2656257355', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb7d47f8760b_content')) { function _lb7d47f8760b_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Bridges\FormsLatte\FormMacros::renderFormBegin($form = $_form = $_control["registerForm"], array('class' => 'form-horizontal')) ?>

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
<?php Nette\Bridges\FormsLatte\FormMacros::renderFormEnd($_form) ?>

<?php
}}

//
// block breadcrumbs
//
if (!function_exists($_b->blocks['breadcrumbs'][] = '_lb6a6c9fcaee_breadcrumbs')) { function _lb6a6c9fcaee_breadcrumbs($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:"), ENT_COMPAT) ?>
">Domů</a></li>
		<li class="active">Registrovat</li>
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
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; call_user_func(reset($_b->blocks['breadcrumbs']), $_b, get_defined_vars()) ; 