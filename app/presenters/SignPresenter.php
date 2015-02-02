<?php

namespace App;

use Nette,
	Model;


/**
 * Sign in/out presenters.
 */
class SignPresenter extends BasePresenter
{	
	/** @var \Nette\Database\Context @inject */
	//public $database;
	
	/** @persistent */
	public $backlink = '';

	/*
	public function __construct(Nette\Database\Context $database) 
	{
		$this->database = $database;
	}*/
	
	protected function createComponentSignInForm()
	{
		$form = new Nette\Application\UI\Form;
		$form->addText('username', 'Uživatel:')
			->setRequired('Prosím vyplňte uživatelské jméno.');

		$form->addPassword('password', 'Heslo:')
			->setRequired('Prosím vyplňte heslo.');

		$form->addCheckbox('remember', 'Nechat mě přihlášeného.');

		$form->addSubmit('send', 'Přihlásit se');

		$form->onSuccess[] = $this->signInFormSucceeded;
		return $form;
	}

	public function signInFormSucceeded($form)
	{
		$userlist = $this->database->table('users')->fetchPairs('username','password');
		
		$authenticator = new Nette\Security\SimpleAuthenticator($userlist);
		$this->getUser()->setAuthenticator($authenticator);
		
		$values = $form->getValues();

		if ($values->remember) 
		{
			$this->getUser()->setExpiration('14 days', FALSE);
		} 
		else 
		{
			$this->getUser()->setExpiration('20 minutes', TRUE);
		}

		try {
			$where_user = 'SELECT * FROM users WHERE username = "'.$values->username.'"';
			$userdata = $this->database->query($where_user)->fetch();
			
			if($userdata->active == 1)
			{
				$this->getUser()->login($values->username, sha1($values->password));		
				$this->getUser()->getIdentity()->user_id = $userdata->id;
				$this->getUser()->getIdentity()->user_currency = $userdata->default_currency;
				$this->getUser()->getIdentity()->user_stats = array('acc' => $userdata->count_of_acc, 'bud' => $userdata->count_of_bud, 'cat' => $userdata->count_of_cat,'tra' => $userdata->count_of_tra);
				$this->flashMessage('Byl jste úspěšně přihlášen	.', 'success');
				$this->restoreRequest($this->backlink);
				$this->redirect('Homepage:default');
			}
			else
			{
				$this->flashMessage('Váš účet ještě nebyl aktivován.', 'alert');
			}
		} catch (Nette\Security\AuthenticationException $e) {
			$this->flashMessage('Špatně zadané uživatelské jméno nebo heslo.', 'alert');
			$form->addError('Chyba: '.$e->getMessage());
		}
	}

	public function actionOut()
	{
		$this->getUser()->logout();
		$this->flashMessage('Odhlášení proběhlo v pořádku.', 'success');
		$this->getSession()->destroy();
		$this->redirect('in');
	}

}