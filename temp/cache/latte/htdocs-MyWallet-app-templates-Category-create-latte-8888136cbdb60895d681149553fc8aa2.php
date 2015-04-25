<?php
// source: C:\xampp\htdocs\MyWallet\app/templates/Category/create.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('5756873901', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb53c1952b44_content')) { function _lb53c1952b44_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Bridges\FormsLatte\FormMacros::renderFormBegin($form = $_form = $_control["categoryForm"], array('class'=> 'form-horizontal')) ?>

	<div class="form-group">
		<?php if ($_label = $_form["name"]->getLabel()) echo $_label->addAttributes(array('class'=>'col-sm-1 control-label'))  ?>

		<div class="col-sm-3">
		  <?php echo $_form["name"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

		</div>
	</div>

		<div class="form-group">
		<?php if ($_label = $_form["type"]->getLabel()) echo $_label->addAttributes(array('class'=>'col-sm-1 control-label'))  ?>

		<div class="col-sm-3">
		  <?php echo $_form["type"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

		</div>
		</div>
		
	  <div class="form-group">
		<div class="col-sm-offset-1 col-sm-10">
		  <?php echo $_form["send"]->getControl()->addAttributes(array('class'=>'btn btn-primary', 'data-loading-text' => 'Vytvářím kategorii.', 'autocomplete' => 'off')) ?>

		</div>
	  </div>
<?php Nette\Bridges\FormsLatte\FormMacros::renderFormEnd($_form) ?>

<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lbea54caf945_scripts')) { function _lbea54caf945_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Latte\Macros\BlockMacros::callBlockParent($_b, 'scripts', get_defined_vars()) ?>
<script>
$(document).ready(function(){
	$('#frm-categoryForm-send').on('click', function () {
    $(this).button('loading');    
	});
});
</script>
<?php
}}

//
// block breadcrumbs
//
if (!function_exists($_b->blocks['breadcrumbs'][] = '_lb756453b8c7_breadcrumbs')) { function _lb756453b8c7_breadcrumbs($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:"), ENT_COMPAT) ?>
">Domů</a></li>
		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Category:"), ENT_COMPAT) ?>
">Kategorie</a></li>
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