<?php //netteCache[01]000366a:2:{s:4:"time";s:21:"0.06251400 1423155265";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:52:"C:\xampp\htdocs\MyWallet\app\templates\@layout.latte";i:2;i:1422874343;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: C:\xampp\htdocs\MyWallet\app\templates\@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '2aykv442ok')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb0d89a90bdb_title')) { function _lb0d89a90bdb_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>MyWallet<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lbd553c31eb3_head')) { function _lbd553c31eb3_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lb6b07c1482c_scripts')) { function _lb6b07c1482c_scripts($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>		<script src="<?php echo htmlSpecialChars($template->safeurl($basePath)) ?>/js/jquery.js"></script>
		<script src="<?php echo htmlSpecialChars($template->safeurl($basePath)) ?>/js/netteForms.js"></script>
		<script src="<?php echo htmlSpecialChars($template->safeurl($basePath)) ?>/js/main.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		 <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
		 <script src="https://raw.githubusercontent.com/jquery/jquery-ui/master/ui/i18n/datepicker-cs.js"></script>
		<script src="<?php echo htmlSpecialChars($template->safeurl($basePath)) ?>/js/bootstrap.js"></script>
		<script src="<?php echo htmlSpecialChars($template->safeurl($basePath)) ?>/js/ie10-viewport-bug-workaround.js"></script>
		<script src="<?php echo htmlSpecialChars($template->safeurl($basePath)) ?>/js/offcanvas.js"></script>
		
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
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<?php if (isset($robots)) { ?>	<meta name="robots" content="<?php echo htmlSpecialChars($robots) ?>">
<?php } ?>

    <title><?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
ob_start(); call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()); echo $template->upper($template->striptags(ob_get_clean()))  ?></title>

	<link rel="stylesheet" media="screen,projection,tv" href="<?php echo htmlSpecialChars($template->safeurl($basePath)) ?>/css/screen.css">
	<link rel="stylesheet" media="print" href="<?php echo htmlSpecialChars($template->safeurl($basePath)) ?>/css/print.css">
	<link rel="shortcut icon" href="<?php echo htmlSpecialChars($template->safeurl($basePath)) ?>/favicon.ico">
	
    <link href="<?php echo htmlSpecialChars($template->safeurl($basePath)) ?>/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo htmlSpecialChars($template->safeurl($basePath)) ?>/css/normalize.css" rel="stylesheet">
    <link href="<?php echo htmlSpecialChars($template->safeurl($basePath)) ?>/css/offcanvas.css" rel="stylesheet">
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
    <script src="<?php echo htmlSpecialChars($template->safeurl($basePath)) ?>/js/ie-emulation-modes-warning.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars())  ?>

  </head>

  <body>
	<script> document.documentElement.className+=' js' </script>

<?php $iterations = 0; foreach ($flashes as $flash) { ?>	<div class="alert alert-<?php echo htmlSpecialChars($flash->type) ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		<?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?>

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
          <a class="navbar-brand" href="<?php echo htmlSpecialChars($_control->link("Homepage:")) ?>
">MyWallet</a>
        </div>
        <div class="collapse navbar-collapse">
          
		<ul class="nav navbar-nav">
			<li <?php try { $_presenter->link("Homepage:default"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>
"><span class="glyphicon glyphicon-home"></span> &nbsp;Domů</a></li>
<?php if ($user->loggedIn) { ?>
            
			<li <?php try { $_presenter->link("Transaction:default"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo htmlSpecialChars($_control->link("Transaction:default")) ?>
">Transakce <span class="badge"><?php echo Nette\Templating\Helpers::escapeHtml($userStats->count_of_tra, ENT_NOQUOTES) ?></span></a></li>
			<li <?php try { $_presenter->link("Category:default"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo htmlSpecialChars($_control->link("Category:default")) ?>
">Kategorie <span class="badge"><?php echo Nette\Templating\Helpers::escapeHtml($userStats->count_of_cat, ENT_NOQUOTES) ?></span></a></li>
			<li <?php try { $_presenter->link("Budget:default"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo htmlSpecialChars($_control->link("Budget:default")) ?>
">Rozpočty <span class="badge"><?php echo Nette\Templating\Helpers::escapeHtml($userStats->count_of_bud, ENT_NOQUOTES) ?></span></a></li>
			<li <?php try { $_presenter->link("Account:default"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo htmlSpecialChars($_control->link("Account:default")) ?>
">Účty <span class="badge"><?php echo Nette\Templating\Helpers::escapeHtml($userStats->count_of_acc, ENT_NOQUOTES) ?></span></a></li>
<?php } else { ?>
				
				<li <?php try { $_presenter->link("Homepage:about"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo htmlSpecialChars($_control->link("Homepage:about")) ?>
">O programu</a></li>
				<li <?php try { $_presenter->link("Homepage:help"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo htmlSpecialChars($_control->link("Homepage:help")) ?>
">Nápověda</a></li>
<?php } ?>
          </ul>
			<ul class="nav navbar-nav navbar-right">
<?php if ($user->loggedIn) { ?>
				<li class="dropdown right">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<span class="glyphicon glyphicon-user"></span> &nbsp;<?php echo Nette\Templating\Helpers::escapeHtml($user->identity->id, ENT_NOQUOTES) ?> <span class="caret"></span>
				</a>
				<ul class="dropdown-menu" role="menu">
					<li <?php try { $_presenter->link("User:default"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo htmlSpecialChars($_control->link("User:default")) ?>
">Můj účet</a></li>
					<li <?php try { $_presenter->link("User:settings"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo htmlSpecialChars($_control->link("User:settings")) ?>
"><span class="glyphicon glyphicon-cog"></span> &nbsp;Nastavení</a></li>
					<li><a href="<?php echo htmlSpecialChars($_control->link("Sign:out")) ?>"><span class="glyphicon glyphicon-log-out"></span> &nbsp;Odhlásit</a></li>
				</ul>
				</li>
<?php } else { ?>
					<li <?php try { $_presenter->link("User:create"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo htmlSpecialChars($_control->link("User:create")) ?>
">Registrace</a></li>
					<li <?php try { $_presenter->link("Sign:in"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
class="active"<?php } ?>><a href="<?php echo htmlSpecialChars($_control->link("Sign:in")) ?>
"><span class="glyphicon glyphicon-log-in"></span> &nbsp;Přihlásit se</a></li>
<?php } ?>
			</ul>
        </div>
      </div>
    </div>
	<div class="container">
<?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'content', $template->getParameters()) ?>
		
	</div>
	<div class="container">
      <footer>
			<ol class="breadcrumb col-lg-4">
<?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'breadcrumbs', $template->getParameters()) ?>
			</ol>	
			<ul class="list-inline col-lg-8 text-right">
				<li class="vcenter">&copy; MyWallet 2014</li>
			</ul>
      </footer>
    </div>

<?php call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars())  ?>
  </body>
</html>

