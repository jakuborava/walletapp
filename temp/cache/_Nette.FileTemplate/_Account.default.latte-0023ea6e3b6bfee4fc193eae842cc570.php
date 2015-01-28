<?php //netteCache[01]000374a:2:{s:4:"time";s:21:"0.95434800 1415789368";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:60:"C:\xampp\htdocs\MyWallet\app\templates\Account\default.latte";i:2;i:1415789366;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: C:\xampp\htdocs\MyWallet\app\templates\Account\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'frejyc2hgu')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb11adcdffbd_content')) { function _lb11adcdffbd_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<a class="btn btn-primary" href="<?php echo htmlSpecialChars($_control->link("Account:create")) ?>
"><span class="glyphicon glyphicon-plus"></span> &nbsp;Vytvořit účet</a>
	<br><br>
	<table class="table table-bordered table-hover table-striped table-responsive">
		<tr><th>Název</th><th>Částka</th><th>Akce</th><tr>
<?php $iterations = 0; foreach ($accounts as $account) { ?>
			<tr>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($account->name, ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($account->avalaibleMoney, ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($account->currency->symbol, ENT_NOQUOTES) ?></td>
				<td>
					<a class="btn btn-primary" href="<?php echo htmlSpecialChars($_control->link("Account:detail", array($account->id))) ?>
"><span class="glyphicon glyphicon-th-list"></span> &nbsp;Detail</a>&nbsp;
					<a class="btn btn-default" href="<?php echo htmlSpecialChars($_control->link("Account:edit", array($account->id))) ?>
"><span class="glyphicon glyphicon-pencil"></span> &nbsp;Upravit</a>&nbsp;
					<a class="btn btn-danger" href="<?php echo htmlSpecialChars($_control->link("Account:delete", array($account->id))) ?>
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
if (!function_exists($_l->blocks['breadcrumbs'][] = '_lb7e39132f49_breadcrumbs')) { function _lb7e39132f49_breadcrumbs($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:")) ?>">Domů</a></li>
		<li class="active">Účty</li>
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