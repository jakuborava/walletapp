<?php
// source: C:\xampp\htdocs\MyWallet\app/templates/Account/detail.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('5833440134', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb312cf48404_content')) { function _lb312cf48404_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><h2>Detail účtu <?php echo Latte\Runtime\Filters::escapeHtml($account->name, ENT_NOQUOTES) ?></h2>
<br>
<h3>Transakce:</h3>
	<table class="table table-bordered table-hover table-striped table-responsive">
		<tr><th>Kategorie</th><th>Částka</th><th>Datum a čas</th><th>Akce</th><tr>
<?php $iterations = 0; foreach ($transactions as $transaction) { ?>
			<tr><td><?php echo Latte\Runtime\Filters::escapeHtml($transaction->id_category, ENT_NOQUOTES) ?>
</td><td><?php echo Latte\Runtime\Filters::escapeHtml($transaction->ammount, ENT_NOQUOTES) ?>
</td><td><?php echo Latte\Runtime\Filters::escapeHtml($template->date($transaction->date_time, 'd. m. Y'), ENT_NOQUOTES) ?>
&nbsp;&nbsp;1<?php echo Latte\Runtime\Filters::escapeHtml($template->date($transaction->date_time, 'H:i'), ENT_NOQUOTES) ?>
</td><td><a class="btn btn-default" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Transaction:edit", array($transaction->id)), ENT_COMPAT) ?>
">Upravit</a>&nbsp;<a class="btn btn-danger" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Transaction:delete", array($transaction->id)), ENT_COMPAT) ?>
">Smazat</a></td></tr>
<?php $iterations++; } ?>
	</table>
	
<?php
}}

//
// block breadcrumbs
//
if (!function_exists($_b->blocks['breadcrumbs'][] = '_lba9c2c1c1cf_breadcrumbs')) { function _lba9c2c1c1cf_breadcrumbs($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:"), ENT_COMPAT) ?>
">Domů</a></li>
		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Account:"), ENT_COMPAT) ?>
">Účty</a></li>
		<li class="active"><?php echo Latte\Runtime\Filters::escapeHtml($account->name, ENT_NOQUOTES) ?></li>
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
?>

<?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars())  ?>

<?php call_user_func(reset($_b->blocks['breadcrumbs']), $_b, get_defined_vars()) ; 