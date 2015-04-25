<?php
// source: C:\xampp\htdocs\MyWallet\app/templates/Budget/default.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('4964307882', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb6b5594a13e_content')) { function _lb6b5594a13e_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<a class="btn btn-primary" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Budget:create"), ENT_COMPAT) ?>
"><span class="glyphicon glyphicon-plus"></span> &nbsp;Vytvořit rozpočet</a>
	<br><br>
	<table class="table table-bordered table-hover table-striped table-responsive">
		<tr><th>Název</th><th>Kategorie</th><th>Částka</th><th>Typ</th><th>Akce</th><tr>
<?php $iterations = 0; foreach ($budgets as $budget) { ?>
			<tr><td><?php echo Latte\Runtime\Filters::escapeHtml($budget->name, ENT_NOQUOTES) ?></td>
				<td><?php echo Latte\Runtime\Filters::escapeHtml($budget->category->name, ENT_NOQUOTES) ?></td>
				<td><?php echo Latte\Runtime\Filters::escapeHtml($budget->how_much, ENT_NOQUOTES) ?></td>
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
					<a class="btn btn-primary" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Budget:detail", array($budget->id)), ENT_COMPAT) ?>
"><span class="glyphicon glyphicon-th-list"></span> &nbsp;Detail</a>&nbsp;
					<a class="btn btn-default" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Budget:edit", array($budget->id)), ENT_COMPAT) ?>
"><span class="glyphicon glyphicon-pencil"></span> &nbsp;Upravit</a>&nbsp;
					<a class="btn btn-danger" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Budget:delete", array($budget->id)), ENT_COMPAT) ?>
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
if (!function_exists($_b->blocks['breadcrumbs'][] = '_lb9a1664c011_breadcrumbs')) { function _lb9a1664c011_breadcrumbs($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:"), ENT_COMPAT) ?>
">Domů</a></li>
		<li class="active">Rozpočty</li>
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