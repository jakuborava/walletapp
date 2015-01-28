<?php //netteCache[01]000372a:2:{s:4:"time";s:21:"0.66992900 1414672773";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:58:"C:\xampp\htdocs\MyWallet\app\templates\Homepage\help.latte";i:2;i:1414672499;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: C:\xampp\htdocs\MyWallet\app\templates\Homepage\help.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'jpwrsguedr')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb286cb0ad13_content')) { function _lb286cb0ad13_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($user->loggedIn) { ?>
	<div class="row row-offcanvas row-offcanvas-left">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <ul class="nav nav-pills nav-stacked">
			  <li class="active"><a href="#">Účet 1</a></li>
            <li><a href="#">Účet 2</a></li>
            <li><a href="#">Účet 3</a></li>
            <li><a href="#">Účet 4</a></li>
            <li><a href="#">Účet 5</a></li>
            <li><a href="<?php echo htmlSpecialChars($_control->link("Transaction:create")) ?>
">Přidat transakci</a></li>
            <li><a href="<?php echo htmlSpecialChars($_control->link("Category:create")) ?>
">Přidat kategorii</a></li>
            <li><a href="<?php echo htmlSpecialChars($_control->link("Budget:create")) ?>
">Přidat rozpočet</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-9">
          <p class="pull-left visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Vítejte v aplikaci MyWallet!</h1>
            <p>Aplikace MyWallet umožňuje spravovat vaše finanční výdaje.</p>
			<p><a class="btn btn-primary btn-lg btn-success" role="button">Dozvědět se více</a>
			<a class="btn btn-primary btn-lg btn-default" role="button">Příště již nezobrazovat</a></p>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6 col-lg-4">
              <div class="thumbnail">
				<img data-src="holder.js/300x300" alt="img">
				<div class="caption">
					<h3>Thumbnail label</h3>
					<p>Detail o účtě</p>
					<p><a href="#" class="btn btn-primary" role="button">Upravit</a> <a href="#" class="btn btn-danger" role="button">Smazat</a></p>
				</div>
			</div>	
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <div class="thumbnail">
				<img data-src="holder.js/300x300" alt="img">
				<div class="caption">
					<h3>Bankovní účet</h3>
					<p>Detail o účtě</p>
					<p><a href="#" class="btn btn-primary" role="button">Upravit</a> <a href="#" class="btn btn-danger" role="button">Smazat</a></p>
				</div>
			</div>	
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <div class="thumbnail">
				<img data-src="holder.js/300x300" alt="img">
				<div class="caption">
					<h3>Účet - Kajmany</h3>
					<p>Detail o účtě</p>
					<p><a href="#" class="btn btn-primary" role="button">Upravit</a> <a href="#" class="btn btn-danger" role="button">Smazat</a></p>
				</div>
			</div>	
				<br>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <div class="thumbnail">
				<img data-src="holder.js/300x300" alt="img">
				<div class="caption">
					<h3>Eura</h3>
					<p>Detail o účtě</p>
					<p><a href="#" class="btn btn-primary" role="button">Upravit</a> <a href="#" class="btn btn-danger" role="button">Smazat</a></p>
				</div>
			</div>	
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <div class="thumbnail">
				<img data-src="holder.js/300x300" alt="img">
				<div class="caption">
					<h3>Stavební spoření</h3>
					<p>Detail o účtě</p>
					<p><a href="#" class="btn btn-primary" role="button">Upravit</a> <a href="#" class="btn btn-danger" role="button">Smazat</a></p>
				</div>
			</div>	
            </div>
          </div>
        </div>
      </div>

      <hr>
	</div>
<?php } else { ?>
	
<?php } ?>

<?php
}}

//
// block breadcrumbs
//
if (!function_exists($_l->blocks['breadcrumbs'][] = '_lbd76fb0e957_breadcrumbs')) { function _lbd76fb0e957_breadcrumbs($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:")) ?>">Domů</a></li>
		<li class="active">Nápověda</li>
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