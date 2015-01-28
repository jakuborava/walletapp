<?php //netteCache[01]000373a:2:{s:4:"time";s:21:"0.09955600 1414678279";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:59:"C:\xampp\htdocs\MyWallet\app\templates\Budget\default.latte";i:2;i:1414678276;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: C:\xampp\htdocs\MyWallet\app\templates\Budget\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '2y5gqaiwfc')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbe7563cfdca_content')) { function _lbe7563cfdca_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<a class="btn btn-primary" href="<?php echo htmlSpecialChars($_control->link("Budget:create")) ?>
"><span class="glyphicon glyphicon-plus"></span> &nbsp;Vytvořit rozpočet</a>
	<br><br>
	<table class="table table-bordered table-hover table-striped table-responsive">
		<tr><th>Název</th><th>Kategorie</th><th>Částka</th><th>Typ</th><th>Akce</th><tr>
<?php $iterations = 0; foreach ($budgets as $budget) { ?>
			<tr><td><?php echo Nette\Templating\Helpers::escapeHtml($budget->name, ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($budget->category->name, ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($budget->how_much, ENT_NOQUOTES) ?></td>
				<td>
<?php if ($budget->type == 'w') { ?>
					Týdenní
<?php } elseif ($budget->type == 'm') { ?>
					Měsíční
<?php } elseif ($budget->type == 'y') { ?>
					Roční
<?php } ?>
				</td>
				<td>
					<a class="btn btn-primary" href="<?php echo htmlSpecialChars($_control->link("Budget:detail", array($budget->id))) ?>
"><span class="glyphicon glyphicon-th-list"></span> &nbsp;Detail</a>&nbsp;
					<a class="btn btn-default" href="<?php echo htmlSpecialChars($_control->link("Budget:edit", array($budget->id))) ?>
"><span class="glyphicon glyphicon-pencil"></span> &nbsp;Upravit</a>&nbsp;
					<a class="btn btn-danger" href="<?php echo htmlSpecialChars($_control->link("Budget:delete", array($budget->id))) ?>
"><span class="glyphicon glyphicon-trash"></span> &nbsp;Smazat</a>
				</td>
			</tr>
<?php $iterations++; } ?>
	</table>
<?php
}}

//
// block breadcrumbs
//
if (!function_exists($_l->blocks['breadcrumbs'][] = '_lb28a8aaf199_breadcrumbs')) { function _lb28a8aaf199_breadcrumbs($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:")) ?>">Domů</a></li>
		<li class="active">Rozpočty</li>
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