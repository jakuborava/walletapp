<?php
// source: C:\xampp\htdocs\MyWallet\app/templates/Sign/in.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('7111364061', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb744272af44_content')) { function _lb744272af44_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?>

<?php Nette\Bridges\FormsLatte\FormMacros::renderFormBegin($form = $_form = $_control["signInForm"], array('class' =>'form-horizontal')) ?>

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
		  <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("User:activateCode"), ENT_COMPAT) ?>
">Zaslat aktivační kód</a><br>
		  <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("User:forgotPassword"), ENT_COMPAT) ?>
">Zapomenuté heslo</a>
		</div>
	  </div>
<?php Nette\Bridges\FormsLatte\FormMacros::renderFormEnd($_form) ?>


<?php
}}

//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lb050fa7ba99_title')) { function _lb050fa7ba99_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><h1>Přihlásit se</h1>
<?php
}}

//
// block breadcrumbs
//
if (!function_exists($_b->blocks['breadcrumbs'][] = '_lb9684bc961a_breadcrumbs')) { function _lb9684bc961a_breadcrumbs($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:"), ENT_COMPAT) ?>
">Domů</a></li>
		<li class="active">Přihlásit se</li>
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