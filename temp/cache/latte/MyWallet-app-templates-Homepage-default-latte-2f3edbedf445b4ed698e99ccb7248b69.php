<?php
// source: C:\xampp\htdocs\MyWallet\app/templates/Homepage/default.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('5719534044', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb43305f51e9_content')) { function _lb43305f51e9_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($user->loggedIn) { ?>
	<div class="row row-offcanvas row-offcanvas-left">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <ul class="nav nav-pills nav-stacked">
<?php $iterations = 0; foreach ($accounts as $account) { ?>
				<li class=""><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Account:detail", array($account->id)), ENT_COMPAT) ?>
"><?php echo Latte\Runtime\Filters::escapeHtml($account->name, ENT_NOQUOTES) ?></a></li>
<?php $iterations++; } ?>
			<li><hr></li>
            <li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Transaction:create"), ENT_COMPAT) ?>
">Přidat transakci</a></li>
            <li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Category:create"), ENT_COMPAT) ?>
">Přidat kategorii</a></li>
            <li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Budget:create"), ENT_COMPAT) ?>
">Přidat rozpočet</a></li>
			<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Account:create"), ENT_COMPAT) ?>
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
			<p><a class="btn btn-primary btn-lg btn-success" role="button" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:about"), ENT_COMPAT) ?>
">Dozvědět se více</a>
				<a class="btn btn-primary btn-lg btn-default" role="button" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:disable"), ENT_COMPAT) ?>
">Příště již nezobrazovat</a></p>
          </div>
<?php } ?>
		  <div class="row">
			  <strong>Celková suma: <?php echo Latte\Runtime\Filters::escapeHtml($totalSum, ENT_NOQUOTES) ?> Kč</strong>
		  </div>
		  
		  <br> 
          <div class="row">
			  
<?php $i = 0 ;$iterations = 0; foreach ($accounts as $account) { ?>
				
				<div class="col-6 col-sm-6 col-lg-4">
					<div class="panel panel-info">
						<!--<img data-src="holder.js/300x300" alt="img">-->
						<div class="panel-heading"><h3 class="panel-title"><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Account:detail", array($account->id)), ENT_COMPAT) ?>
"><?php echo Latte\Runtime\Filters::escapeHtml($account->name, ENT_NOQUOTES) ?></a></h3></div>
						<div class="panel-body"><?php echo Latte\Runtime\Filters::escapeHtml($account->avalaibleMoney, ENT_NOQUOTES) ?>
 <?php echo Latte\Runtime\Filters::escapeHtml($account->currency->symbol, ENT_NOQUOTES) ?></div>
						<div class="panel-footer"><a class="btn btn-primary" role="button" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Account:edit", array($account->id)), ENT_COMPAT) ?>
">Upravit</a> <a class="btn btn-danger" role="button" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Account:delete", array($account->id)), ENT_COMPAT) ?>
">Smazat</a></div>
					</div>	
				</div>
<?php $i+=1 ?>
				
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
if (!function_exists($_b->blocks['breadcrumbs'][] = '_lb93c675b902_breadcrumbs')) { function _lb93c675b902_breadcrumbs($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li class="active">Domů</li>
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