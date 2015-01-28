<?php //netteCache[01]000372a:2:{s:4:"time";s:21:"0.24457300 1414686916";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:58:"C:\xampp\htdocs\MyWallet\app\templates\Budget\detail.latte";i:2;i:1414686914;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: C:\xampp\htdocs\MyWallet\app\templates\Budget\detail.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '8lj11tmv0m')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbc58e74c4b4_content')) { function _lbc58e74c4b4_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><h2><?php echo Nette\Templating\Helpers::escapeHtml($budget->name, ENT_NOQUOTES) ?></h2>
<div class="row-offcanvas col-lg-6">
<table class="table table-bordered">
	<tr><td>Limit</td><td><?php echo Nette\Templating\Helpers::escapeHtml($budget->how_much, ENT_NOQUOTES) ?> Kč</td></tr>
	<tr><td>Utraceno</td><td><?php echo Nette\Templating\Helpers::escapeHtml($spend, ENT_NOQUOTES) ?> Kč</td></tr>
	<tr><td><strong>+/-</strong></td><td><strong><?php echo Nette\Templating\Helpers::escapeHtml($budget->how_much-$spend, ENT_NOQUOTES) ?> Kč</strong></td></tr>
</table>
<div class="progress">
<?php if ($budget->how_much - $spend < 0) { $over = (($spend / $budget->how_much)-1)*100 ?>
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
			Přečerpáno o <?php echo Nette\Templating\Helpers::escapeHtml($template->number($over), ENT_NOQUOTES) ?>%
		</div>
<?php } else { $avalaible = ($spend / $budget->how_much)*100 ?>
		<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $template->number($avalaible) ?>%;">
			<?php echo Nette\Templating\Helpers::escapeHtml($template->number($avalaible), ENT_NOQUOTES) ?>% Vyčerpáno
		</div>
<?php } ?>
</div>
</div>
</div>
<?php
}}

//
// block breadcrumbs
//
if (!function_exists($_l->blocks['breadcrumbs'][] = '_lb68b1353de0_breadcrumbs')) { function _lb68b1353de0_breadcrumbs($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:")) ?>">Domů</a></li>
		<li><a href="<?php echo htmlSpecialChars($_control->link("Budget:")) ?>">Rozpočty</a></li>
		<li class="active"><?php echo Nette\Templating\Helpers::escapeHtml($budget->name, ENT_NOQUOTES) ?></li>
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