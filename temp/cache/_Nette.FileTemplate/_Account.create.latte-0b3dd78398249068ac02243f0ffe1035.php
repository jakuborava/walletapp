<?php //netteCache[01]000373a:2:{s:4:"time";s:21:"0.09192800 1415785265";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:59:"C:\xampp\htdocs\MyWallet\app\templates\Account\create.latte";i:2;i:1415785262;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: C:\xampp\htdocs\MyWallet\app\templates\Account\create.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'htauktw78u')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbf4834cc9bc_content')) { function _lbf4834cc9bc_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["accountForm"], array('class' => 'form-horizontal')) ?>
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
<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ;
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lb5f8948ffdb_scripts')) { function _lb5f8948ffdb_scripts($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'scripts', get_defined_vars()) ?>
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
if (!function_exists($_l->blocks['breadcrumbs'][] = '_lb94eb6149d3_breadcrumbs')) { function _lb94eb6149d3_breadcrumbs($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:")) ?>">Domů</a></li>
		<li><a href="<?php echo htmlSpecialChars($_control->link("Account:")) ?>">Účty</a></li>
		<li class="active">Vytvořit</li>
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

<?php call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars())  ?>

<?php call_user_func(reset($_l->blocks['breadcrumbs']), $_l, get_defined_vars()) ; 