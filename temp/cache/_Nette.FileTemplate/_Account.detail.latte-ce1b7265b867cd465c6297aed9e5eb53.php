<?php //netteCache[01]000373a:2:{s:4:"time";s:21:"0.09738100 1414672222";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:59:"C:\xampp\htdocs\MyWallet\app\templates\Account\detail.latte";i:2;i:1414672216;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: C:\xampp\htdocs\MyWallet\app\templates\Account\detail.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'rlq3nnlwrt')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb9e730ac98d_content')) { function _lb9e730ac98d_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><h2>Detail účtu <?php echo Nette\Templating\Helpers::escapeHtml($account->name, ENT_NOQUOTES) ?></h2>
<br>
<h3>Transakce:</h3>
	<table class="table table-bordered table-hover table-striped table-responsive">
		<tr><th>Kategorie</th><th>Částka</th><th>Datum a čas</th><th>Akce</th><tr>
<?php $iterations = 0; foreach ($transactions as $transaction) { ?>
			<tr><td><?php echo Nette\Templating\Helpers::escapeHtml($transaction->id_category, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($transaction->ammount, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($transaction->date_time, 'd. m. Y'), ENT_NOQUOTES) ?>
&nbsp;&nbsp;1<?php echo Nette\Templating\Helpers::escapeHtml($template->date($transaction->date_time, 'H:i'), ENT_NOQUOTES) ?>
</td><td><a class="btn btn-default" href="<?php echo htmlSpecialChars($_control->link("Transaction:edit", array($transaction->id))) ?>
">Upravit</a>&nbsp;<a class="btn btn-danger" href="<?php echo htmlSpecialChars($_control->link("Transaction:delete", array($transaction->id))) ?>
">Smazat</a></td></tr>
<?php $iterations++; } ?>
	</table>
	
<?php
}}

//
// block breadcrumbs
//
if (!function_exists($_l->blocks['breadcrumbs'][] = '_lb4212a7f98a_breadcrumbs')) { function _lb4212a7f98a_breadcrumbs($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:")) ?>">Domů</a></li>
		<li><a href="<?php echo htmlSpecialChars($_control->link("Account:")) ?>">Účty</a></li>
		<li class="active"><?php echo Nette\Templating\Helpers::escapeHtml($account->name, ENT_NOQUOTES) ?></li>
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
?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>

<?php call_user_func(reset($_l->blocks['breadcrumbs']), $_l, get_defined_vars()) ; 