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
		
		//$user_query = $this->database->table('Users')->where('username = ?',$this->user->id);
		//$this->getUser()->getIdentity()->user_id = 1;
		//$this->user->user_id = $user->id;
		
	}
	
	public function beforeRender() {
		if($this->user->isLoggedIn())
		{
			/*$counts = $this->database->query("SELECT COUNT(categories.id) as pocet_kategorii,
													(SELECT COUNT(budgets.id) FROM budgets WHERE id_user = ".$this->user->getIdentity()->user_id.") as pocet_rozpoctu,
													(SELECT COUNT(transactions.id) FROM transactions WHERE id_user = ".$this->user->getIdentity()->user_id.") as pocet_transakci,
													(SELECT COUNT(accounts.id) FROM accounts WHERE id_user = ".$this->user->getIdentity()->user_id.") as pocet_uctu
													FROM categories
													WHERE id_user = ".$this->user->getIdentity()->user_id)->fetch();
			*/
			$this->template->countOfCat = $this->getUser()->getIdentity()->user_stats['cat'];
			$this->template->countOfBud = $this->getUser()->getIdentity()->user_stats['bud'];
			$this->template->countOfTra = $this->getUser()->getIdentity()->user_stats['tra'];
			$this->template->countOfAcc = $this->getUser()->getIdentity()->user_stats['acc'];
			//$this->template->userStats = $this->getUser()->getIdentity()->user_stats;
			//$this->template->userStats = $this->database->table('users')->where('id',$this->user->getIdentity()->user_id)->fetch();
		}
	}
}
