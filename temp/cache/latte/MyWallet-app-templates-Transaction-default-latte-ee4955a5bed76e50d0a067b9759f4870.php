<?php
// source: C:\xampp\htdocs\MyWallet\app/templates/Transaction/default.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('2641083278', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb93681be030_content')) { function _lb93681be030_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<a class="btn btn-primary" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Transaction:create"), ENT_COMPAT) ?>
"><span class="glyphicon glyphicon-plus"></span> &nbsp;Vytvořit transakci</a>
	<br><br>
	<table class="table table-bordered table-hover table-striped table-responsive">
		<tr><th>Datum</th><th>Částka</th><th>Popis</th><th>Akce</th><tr>
<?php $iterations = 0; foreach ($transactions as $transaction) { ?>
			<tr>
				<td><?php echo Latte\Runtime\Filters::escapeHtml($template->date($transaction->date, 'd. m. Y'), ENT_NOQUOTES) ?></td>
				<td><?php echo Latte\Runtime\Filters::escapeHtml($transaction->ammount, ENT_NOQUOTES) ?></td>
				<td><?php echo Latte\Runtime\Filters::escapeHtml($transaction->description, ENT_NOQUOTES) ?></td>
				<td>
					<a class="btn btn-default" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Transaction:edit", array($transaction->id)), ENT_COMPAT) ?>
"><span class="glyphicon glyphicon-pencil"></span> &nbsp;Upravit</a>&nbsp;
					<a class="btn btn-danger" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Transaction:delete", array($transaction->id)), ENT_COMPAT) ?>
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
if (!function_exists($_b->blocks['breadcrumbs'][] = '_lbb8f307b786_breadcrumbs')) { function _lbb8f307b786_breadcrumbs($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:default"), ENT_COMPAT) ?>
">Domů</a></li>
		<li class="active">Transakce</li>
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