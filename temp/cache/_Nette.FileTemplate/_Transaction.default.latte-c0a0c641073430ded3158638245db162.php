<?php //netteCache[01]000378a:2:{s:4:"time";s:21:"0.77935200 1421256730";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:64:"C:\xampp\htdocs\MyWallet\app\templates\Transaction\default.latte";i:2;i:1421256728;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: C:\xampp\htdocs\MyWallet\app\templates\Transaction\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'upirwyhote')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbc29295d216_content')) { function _lbc29295d216_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<a class="btn btn-primary" href="<?php echo htmlSpecialChars($_control->link("Transaction:create")) ?>
"><span class="glyphicon glyphicon-plus"></span> &nbsp;Vytvořit transakci</a>
	<br><br>
	<table class="table table-bordered table-hover table-striped table-responsive">
		<tr><th>Datum</th><th>Částka</th><th>Popis</th><th>Akce</th><tr>
<?php $iterations = 0; foreach ($transactions as $transaction) { ?>
			<tr>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($transaction->date, 'd. m. Y'), ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($transaction->ammount, ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($transaction->description, ENT_NOQUOTES) ?></td>
				<td>
					<a class="btn btn-default" href="<?php echo htmlSpecialChars($_control->link("Transaction:edit", array($transaction->id))) ?>
"><span class="glyphicon glyphicon-pencil"></span> &nbsp;Upravit</a>&nbsp;
					<a class="btn btn-danger" href="<?php echo htmlSpecialChars($_control->link("Transaction:delete", array($transaction->id))) ?>
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
if (!function_exists($_l->blocks['breadcrumbs'][] = '_lbf35f7b13ff_breadcrumbs')) { function _lbf35f7b13ff_breadcrumbs($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>
">Domů</a></li>
		<li class="active">Transakce</li>
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