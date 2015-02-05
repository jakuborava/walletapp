<?php
// source: C:\xampp\htdocs\MyWallet\app/templates/Transaction/create.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('4598465542', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb290ff21b66_content')) { function _lb290ff21b66_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Bridges\FormsLatte\FormMacros::renderFormBegin($form = $_form = $_control["transactionForm"], array('class' => 'form-horizontal')) ?>

	<div class="form-group">
		<?php if ($_label = $_form["ammount"]->getLabel()) echo $_label->addAttributes(array('class'=>'col-sm-1 control-label'))  ?>

		<div class="col-sm-3">
		  <?php echo $_form["ammount"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

		</div>
	</div>
	<div class="form-group">
		<?php if ($_label = $_form["date"]->getLabel()) echo $_label->addAttributes(array('class'=>'col-sm-1 control-label'))  ?>

		<div class="col-sm-3">
		  <?php echo $_form["date"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

		</div>
	</div>
	<div class="form-group">
		<?php if ($_label = $_form["description"]->getLabel()) echo $_label->addAttributes(array('class'=>'col-sm-1 control-label'))  ?>

		<div class="col-sm-3">
		  <?php echo $_form["description"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

		</div>
	</div>
	<div class="form-group">
		<?php if ($_label = $_form["id_account"]->getLabel()) echo $_label->addAttributes(array('class'=>'col-sm-1 control-label'))  ?>

		<div class="col-sm-3">
		  <?php echo $_form["id_account"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

		</div>
	</div>
	<div class="form-group">
		<?php if ($_label = $_form["id_category"]->getLabel()) echo $_label->addAttributes(array('class'=>'col-sm-1 control-label'))  ?>

		<div class="col-sm-3">
		  <?php echo $_form["id_category"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

		</div>
	</div>

	  <div class="form-group">
		<div class="col-sm-offset-1 col-sm-10">
		  <?php echo $_form["send"]->getControl()->addAttributes(array('class'=>'btn btn-primary', 'data-loading-text' => 'Přidávám transakci...', 'autocomplete' => 'off')) ?>

		</div>
	  </div>
<?php Nette\Bridges\FormsLatte\FormMacros::renderFormEnd($_form) ?>

<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lb67047821e3_scripts')) { function _lb67047821e3_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Latte\Macros\BlockMacros::callBlockParent($_b, 'scripts', get_defined_vars()) ?>
<script>
$(document).ready(function(){
	$('#frm-transactionForm-send').on('click', function () {
    $(this).button('loading');    
	});
});
</script>
<?php
}}

//
// block breadcrumbs
//
if (!function_exists($_b->blocks['breadcrumbs'][] = '_lb4a357269c6_breadcrumbs')) { function _lb4a357269c6_breadcrumbs($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:"), ENT_COMPAT) ?>
">Domů</a></li>
		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Transaction:"), ENT_COMPAT) ?>
">Transakce</a></li>
		<li class="active">Vytvořit</li>
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

<?php call_user_func(reset($_b->blocks['scripts']), $_b, get_defined_vars())  ?>

<?php call_user_func(reset($_b->blocks['breadcrumbs']), $_b, get_defined_vars()) ; 