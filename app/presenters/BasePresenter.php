<?php

namespace App;

use Nette,
	Model;


/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
	public $database;
	
	public function __construct(\Nette\Database\Context $database) {
		$this->database = $database;
	}
	
	public function beforeRender() {
		if($this->user->isLoggedIn())
		{
			$this->template->userStats = $this->database->table('users')->where('id',$this->user->getIdentity()->user_id)->fetch();
		}
	}
}
