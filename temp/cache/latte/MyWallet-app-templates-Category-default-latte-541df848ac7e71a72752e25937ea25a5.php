<?php
// source: C:\xampp\htdocs\MyWallet\app/templates/Category/default.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('8592327252', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb61455d1bdb_content')) { function _lb61455d1bdb_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><a class="btn btn-primary" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Category:create"), ENT_COMPAT) ?>
"><span class="glyphicon glyphicon-plus"></span> &nbsp;Vytvořit kategorii</a>
<br><br>
<table class="table table-bordered table-hover table-striped table-responsive">
	<tr><th>Název</th><th>Typ</th><th>Akce</th><tr>
<?php $iterations = 0; foreach ($categories as $category) { ?>
		<tr>
			<td><?php echo Latte\Runtime\Filters::escapeHtml($category->name, ENT_NOQUOTES) ?></td>
			<td><?php if ($category->type == 'e') { ?>Výdajová<?php } elseif ($category->type == 'i') { ?>
Příjmová<?php } ?></td>
			<td>
				<a class="btn btn-default" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Category:edit", array($category->id)), ENT_COMPAT) ?>
"><span class="glyphicon glyphicon-pencil"></span> &nbsp;Upravit</a>&nbsp;
				<a class="btn btn-danger" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Category:delete", array($category->id)), ENT_COMPAT) ?>
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
if (!function_exists($_b->blocks['breadcrumbs'][] = '_lb99f8552b78_breadcrumbs')) { function _lb99f8552b78_breadcrumbs($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:"), ENT_COMPAT) ?>
">Domů</a></li>
		<li class="active">Kategorie</li>
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