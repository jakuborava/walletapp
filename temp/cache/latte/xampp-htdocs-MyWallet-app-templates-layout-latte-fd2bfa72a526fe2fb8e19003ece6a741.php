<?php
// source: C:\xampp\htdocs\MyWallet\app/templates/@layout.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('0911824434', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lbd5f429b260_title')) { function _lbd5f429b260_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>MyWallet<?php
}}

//
// block head
//
if (!function_exists($_b->blocks['head'][] = '_lb0c24ee196e_head')) { function _lb0c24ee196e_head($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lb1448915240_scripts')) { function _lb1448915240_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/jquery.js"></script>
		<script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/netteForms.js"></script>
		<script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/main.js"></script>
		<script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/live-form-validation.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		 <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
		 <script src="https://raw.githubusercontent.com/jquery/jquery-ui/master/ui/i18n/datepicker-cs.js"></script>
		<script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/bootstrap.js"></script>
		<script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/ie10-viewport-bug-workaround.js"></script>
		<script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/offcanvas.js"></script>
		
		 <script>
$(function() {
	$( "#datepicker" ).datepicker( $.datepicker.regional[ "cs" ] );
});
</script>
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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<?php if (isset($robots)) { ?>	<meta name="robots" content="<?php echo Latte\Runtime\Filters::escapeHtml($robots, ENT_COMPAT) ?>">
<?php } ?>

    <title><?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
ob_start(); call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars()); echo $template->upper($template->striptags(ob_get_clean()))  ?></title>

	<link rel="stylesheet" media="screen,projection,tv" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/screen.css">
	<link rel="stylesheet" media="print" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/print.css">
	<link rel="shortcut icon" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/favicon.ico">
	
    <link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/normalize.css" rel="stylesheet">
    <link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/offcanvas.css" rel="stylesheet">
	 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">

	 <style>
		.vcenter {
			display: inline-block;
			vertical-align: middle;
			float: none;
			padding-top: 1%;
		}
	 </style>
	 
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/ie-emulation-modes-warning.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<?php call_user_func(reset($_b->blocks['head']), $_b, get_defined_vars())  ?>

  </head>

  <body>
	<script> document.documentElement.className+=' js' </script>

<?php $iterations = 0; foreach ($flashes as $flash) { ?>	<div class="alert alert-<?php echo Latte\Runtime\Filters::escapeHtml($flash->type, ENT_COMPAT) ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		<?php echo Latte\Runtime\Filters::escapeHtml($flash->message, ENT_NOQUOTES) ?>

	</div>
<?php $iterations++; } ?>
	
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:"), ENT_COMPAT) ?>
">MyWallet</a>
        </div>
        <div class="collapse navbar-collapse">
          
		<ul class="nav navbar-nav">
			<li <?php try { $_presenter->link("Homepage:default"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:default"), ENT_COMPAT) ?>
"><span class="glyphicon glyphicon-home"></span> &nbsp;Domů</a></li>
<?php if ($user->loggedIn) { ?>
            
			<li <?php try { $_presenter->link("Transaction:default"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Transaction:default"), ENT_COMPAT) ?>
">Transakce <span class="badge"><?php echo Latte\Runtime\Filters::escapeHtml($userStats->count_of_tra, ENT_NOQUOTES) ?></span></a></li>
			<li <?php try { $_presenter->link("Category:default"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Category:default"), ENT_COMPAT) ?>
">Kategorie <span class="badge"><?php echo Latte\Runtime\Filters::escapeHtml($userStats->count_of_cat, ENT_NOQUOTES) ?></span></a></li>
			<li <?php try { $_presenter->link("Budget:default"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Budget:default"), ENT_COMPAT) ?>
">Rozpočty <span class="badge"><?php echo Latte\Runtime\Filters::escapeHtml($userStats->count_of_bud, ENT_NOQUOTES) ?></span></a></li>
			<li <?php try { $_presenter->link("Account:default"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Account:default"), ENT_COMPAT) ?>
">Účty <span class="badge"><?php echo Latte\Runtime\Filters::escapeHtml($userStats->count_of_acc, ENT_NOQUOTES) ?></span></a></li>
<?php } else { ?>
				
				<li <?php try { $_presenter->link("Homepage:about"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:about"), ENT_COMPAT) ?>
">O programu</a></li>
				<li <?php try { $_presenter->link("Homepage:help"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:help"), ENT_COMPAT) ?>
">Nápověda</a></li>
<?php } ?>
          </ul>
			<ul class="nav navbar-nav navbar-right">
<?php if ($user->loggedIn) { ?>
				<li class="dropdown right">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<span class="glyphicon glyphicon-user"></span> &nbsp;<?php echo Latte\Runtime\Filters::escapeHtml($user->identity->id, ENT_NOQUOTES) ?> <span class="caret"></span>
				</a>
				<ul class="dropdown-menu" role="menu">
					<li <?php try { $_presenter->link("User:default"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("User:default"), ENT_COMPAT) ?>
">Můj účet</a></li>
					<li <?php try { $_presenter->link("User:settings"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("User:settings"), ENT_COMPAT) ?>
"><span class="glyphicon glyphicon-cog"></span> &nbsp;Nastavení</a></li>
					<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Sign:out"), ENT_COMPAT) ?>
"><span class="glyphicon glyphicon-log-out"></span> &nbsp;Odhlásit</a></li>
				</ul>
				</li>
<?php } else { ?>
					<li <?php try { $_presenter->link("User:create"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("User:create"), ENT_COMPAT) ?>
">Registrace</a></li>
					<li <?php try { $_presenter->link("Sign:in"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Sign:in"), ENT_COMPAT) ?>
"><span class="glyphicon glyphicon-log-in"></span> &nbsp;Přihlásit se</a></li>
<?php } ?>
			</ul>
        </div>
      </div>
    </div>
	<div class="container">
<?php Latte\Macros\BlockMacros::callBlock($_b, 'content', $template->getParameters()) ?>
		
	</div>
	<div class="container">
      <footer>
			<ol class="breadcrumb col-lg-4">
<?php Latte\Macros\BlockMacros::callBlock($_b, 'breadcrumbs', $template->getParameters()) ?>
			</ol>	
			<ul class="list-inline col-lg-8 text-right">
				<li class="vcenter">&copy; MyWallet 2014</li>
			</ul>
      </footer>
    </div>

<?php call_user_func(reset($_b->blocks['scripts']), $_b, get_defined_vars())  ?>
  </body>
</html>

