<?php //netteCache[01]000375a:2:{s:4:"time";s:21:"0.18541200 1422352815";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:61:"C:\xampp\htdocs\MyWallet\app\templates\Homepage\default.latte";i:2;i:1422352479;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: C:\xampp\htdocs\MyWallet\app\templates\Homepage\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'w35vdtfvnh')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb7b9ef7b8d4_content')) { function _lb7b9ef7b8d4_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($user->loggedIn) { ?>
	<div class="row row-offcanvas row-offcanvas-left">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <ul class="nav nav-pills nav-stacked">
<?php $iterations = 0; foreach ($accounts as $account) { ?>
				<li class=""><a href="<?php echo htmlSpecialChars($_control->link("Account:detail", array($account->id))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($account->name, ENT_NOQUOTES) ?></a></li>
<?php $iterations++; } ?>
			<li><hr></li>
            <li><a href="<?php echo htmlSpecialChars($_control->link("Transaction:create")) ?>
">Přidat transakci</a></li>
            <li><a href="<?php echo htmlSpecialChars($_control->link("Category:create")) ?>
">Přidat kategorii</a></li>
            <li><a href="<?php echo htmlSpecialChars($_control->link("Budget:create")) ?>
">Přidat rozpočet</a></li>
			<li><a href="<?php echo htmlSpecialChars($_control->link("Account:create")) ?>
">Přidat účet</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-9">
          <p class="pull-left visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
<?php if (!$disableJumbotron) { ?>
          <div class="jumbotron">
            <h1>Vítejte v aplikaci MyWallet!</h1>
            <p>Aplikace MyWallet umožňuje spravovat vaše finanční výdaje.</p>
			<p><a class="btn btn-primary btn-lg btn-success" role="button" href="<?php echo htmlSpecialChars($_control->link("Homepage:about")) ?>
">Dozvědět se více</a>
				<a class="btn btn-primary btn-lg btn-default" role="button" href="<?php echo htmlSpecialChars($_control->link("Homepage:disable")) ?>
">Příště již nezobrazovat</a></p>
          </div>
<?php } ?>
		  <div class="row">
			  <strong>Celková suma: <?php echo Nette\Templating\Helpers::escapeHtml($totalSum, ENT_NOQUOTES) ?> Kč</strong>
		  </div>
		  
		  <br> 
          <div class="row">
			  
<?php $i = 0 ;$iterations = 0; foreach ($accounts as $account) { ?>
				
				<div class="col-6 col-sm-6 col-lg-4">
					<div class="panel panel-info">
						<!--<img data-src="holder.js/300x300" alt="img">-->
						<div class="panel-heading"><h3 class="panel-title"><a href="<?php echo htmlSpecialChars($_control->link("Account:detail", array($account->id))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($account->name, ENT_NOQUOTES) ?></a></h3></div>
						<div class="panel-body"><?php echo Nette\Templating\Helpers::escapeHtml($account->avalaibleMoney, ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($account->currency->symbol, ENT_NOQUOTES) ?></div>
						<div class="panel-footer"><a class="btn btn-primary" role="button" href="<?php echo htmlSpecialChars($_control->link("Account:edit", array($account->id))) ?>
">Upravit</a> <a class="btn btn-danger" role="button" href="<?php echo htmlSpecialChars($_control->link("Account:delete", array($account->id))) ?>
">Smazat</a></div>
					</div>	
				</div>
<?php $i++ ?>
				
<?php if ($i%3 == 0) { ?>
				</div><br>
					<div class="row">
<?php } $iterations++; } ?>
            </div>
        </div>
    </div>
    <hr>
<?php } else { ?>
	
<?php } 
}}

//
// block breadcrumbs
//
if (!function_exists($_l->blocks['breadcrumbs'][] = '_lb638be4e8c0_breadcrumbs')) { function _lb638be4e8c0_breadcrumbs($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li class="active">Domů</li>
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