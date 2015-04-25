<?php
// source: C:\xampp\htdocs\MyWallet\app/templates/Budget/detail.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('3744692843', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb5ca43a7889_content')) { function _lb5ca43a7889_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
 ?>
<div id="<?php echo $_control->getSnippetId('wholeList') ?>"><?php call_user_func(reset($_b->blocks['_wholeList']), $_b, $template->getParameters()) ?>
</div><a class="ajax" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("add!"), ENT_COMPAT) ?>
">Add</a>
<?php
}}

//
// block _wholeList
//
if (!function_exists($_b->blocks['_wholeList'][] = '_lbc96e9d603b__wholeList')) { function _lbc96e9d603b__wholeList($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('wholeList', FALSE)
?><ul<?php echo ' id="' . $_control->getSnippetId('itemsContainer') . '"' ?>>
<?php call_user_func(reset($_b->blocks['_itemsContainer']), $_b, $template->getParameters()) ?>
</ul>
<?php
}}

//
// block _itemsContainer
//
if (!function_exists($_b->blocks['_itemsContainer'][] = '_lb79db717cbb__itemsContainer')) { function _lb79db717cbb__itemsContainer($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('itemsContainer', FALSE)
;$iterations = 0; foreach ($list as $key => $item) { ?>
    <li<?php echo ' id="' . ($_l->dynSnippetId = $_control->getSnippetId("item-$key")) . '"' ?>
><?php ob_start() ;echo Latte\Runtime\Filters::escapeHtml($item, ENT_NOQUOTES) ?>
 <a class="ajax" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("update!", array($key)), ENT_COMPAT) ?>
">update</a><?php $_l->dynSnippets[$_l->dynSnippetId] = ob_get_flush() ?></li>
<?php $iterations++; } if (isset($_l->dynSnippets)) return $_l->dynSnippets; 
}}

//
// block breadcrumbs
//
if (!function_exists($_b->blocks['breadcrumbs'][] = '_lb059d92bdd9_breadcrumbs')) { function _lb059d92bdd9_breadcrumbs($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:"), ENT_COMPAT) ?>
">Domů</a></li>
		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Budget:"), ENT_COMPAT) ?>
">Rozpočty</a></li>
		<li class="active"><?php echo Latte\Runtime\Filters::escapeHtml($budget->name, ENT_NOQUOTES) ?></li>
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