<?php
// source: C:\xampp\htdocs\MyWallet\app/templates/Account/default.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('1737484546', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbf673718dcc_content')) { function _lbf673718dcc_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<a class="btn btn-primary" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Account:create"), ENT_COMPAT) ?>
"><span class="glyphicon glyphicon-plus"></span> &nbsp;Vytvořit účet</a>
	<br><br>
	<table class="table table-bordered table-hover table-striped table-responsive">
		<tr><th>Název</th><th>Částka</th><th>Akce</th><tr>
<?php $iterations = 0; foreach ($accounts as $account) { ?>
			<tr>
				<td><?php echo Latte\Runtime\Filters::escapeHtml($account->name, ENT_NOQUOTES) ?></td>
				<td><?php echo Latte\Runtime\Filters::escapeHtml($account->avalaibleMoney, ENT_NOQUOTES) ?>
 <?php echo Latte\Runtime\Filters::escapeHtml($account->currency->symbol, ENT_NOQUOTES) ?></td>
				<td>
					<a class="btn btn-primary" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Account:detail", array($account->id)), ENT_COMPAT) ?>
"><span class="glyphicon glyphicon-th-list"></span> &nbsp;Detail</a>&nbsp;
					<a class="btn btn-default" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Account:edit", array($account->id)), ENT_COMPAT) ?>
"><span class="glyphicon glyphicon-pencil"></span> &nbsp;Upravit</a>&nbsp;
					<a class="btn btn-danger" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Account:delete", array($account->id)), ENT_COMPAT) ?>
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
if (!function_exists($_b->blocks['breadcrumbs'][] = '_lb615a5ac251_breadcrumbs')) { function _lb615a5ac251_breadcrumbs($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:"), ENT_COMPAT) ?>
">Domů</a></li>
		<li class="active">Účty</li>
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