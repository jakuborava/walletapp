<?php
// source: C:\xampp\htdocs\MyWallet\app/templates/Account/create.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('9551580524', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb7e0b5b1461_content')) { function _lb7e0b5b1461_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Bridges\FormsLatte\FormMacros::renderFormBegin($form = $_form = $_control["accountForm"], array('class' => 'form-horizontal')) ?>

	<div class="form-group">
		<?php if ($_label = $_form["name"]->getLabel()) echo $_label->addAttributes(array('class'=>'col-sm-1 control-label'))  ?>

		<div class="col-sm-3">
		  <?php echo $_form["name"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

		</div>
	</div>
	<div class="form-group">
		<?php if ($_label = $_form["avalaibleMoney"]->getLabel()) echo $_label->addAttributes(array('class'=>'col-sm-1 control-label'))  ?>

		<div class="col-sm-3">
		  <?php echo $_form["avalaibleMoney"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-1 col-sm-10">
			<div class="checkbox">
			  <label>
				<?php echo $_form["inTotalSum"]->getControl() ?>

			  </label>
			</div>
		  </div>
		</div>
	<div class="form-group">
		<?php if ($_label = $_form["id_currency"]->getLabel()) echo $_label->addAttributes(array('class'=>'col-sm-1 control-label'))  ?>

		<div class="col-sm-3">
		  <?php echo $_form["id_currency"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

		</div>
	</div>
	  <div class="form-group">
		<div class="col-sm-offset-1 col-sm-10">
		  <?php echo $_form["send"]->getControl()->addAttributes(array('class'=>'btn btn-primary', 'data-loading-text' => 'Vytvářím účet.', 'autocomplete' => 'off')) ?>

		</div>
	  </div>
<?php Nette\Bridges\FormsLatte\FormMacros::renderFormEnd($_form) ?>

<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lb6f16039704_scripts')) { function _lb6f16039704_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Latte\Macros\BlockMacros::callBlockParent($_b, 'scripts', get_defined_vars()) ?>
<script>
$(document).ready(function(){
	$('#frm-accountForm-send').on('click', function () {
    $(this).button('loading');    
	});
});
</script>
<?php
}}

//
// block breadcrumbs
//
if (!function_exists($_b->blocks['breadcrumbs'][] = '_lbf055cb8d45_breadcrumbs')) { function _lbf055cb8d45_breadcrumbs($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:"), ENT_COMPAT) ?>
">Domů</a></li>
		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Account:"), ENT_COMPAT) ?>
">Účty</a></li>
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