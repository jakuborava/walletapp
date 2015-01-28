<?php //netteCache[01]000373a:2:{s:4:"time";s:21:"0.66010600 1414687362";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:59:"C:\xampp\htdocs\MyWallet\app\templates\Homepage\about.latte";i:2;i:1414683489;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: C:\xampp\htdocs\MyWallet\app\templates\Homepage\about.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'y5e2kh2ils')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb2f6fcb3750_content')) { function _lb2f6fcb3750_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><h2>O programu Wallet</h2>
<h3>Verze systému</h3>
<ul>
	<li>Verze 0.2
		<ul>
			<li>CRUD pro všechny položky (transakce, účet, rozpočet,...)</li>
			<li>Design</li>
			<li>Uživatelské účty - registrace, přihlášení a oddělení jednotlivých účtů</li>
		</ul>
	</li>
	<br>
	<li>Verze 0.4
		<ul>
			<li>Nové prvky design</li>
			<li>Různé typy rozpočtů - týdenní, měsíční, roční</li>
			<li>Nastavení uživatelského účtu</li>
			<li>Přehled účtů na úvodní stránce aplikace</li>
		</ul>
	</li>
	<li>Verze 0.6
		<ul>
			<li>Nové prvky design</li>
			<li>Možnost mít účty pro různé měny</li>
			<li>Možnost procházení rozpočtů - po měsící, po letech, po týdnech</li>
		</ul>
	</li>
	<br>
</ul>
<?php
}}

//
// block breadcrumbs
//
if (!function_exists($_l->blocks['breadcrumbs'][] = '_lbae937193b8_breadcrumbs')) { function _lbae937193b8_breadcrumbs($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:")) ?>">Domů</a></li>
		<li class="active">O programu</li>
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