<?php

namespace App;

use Nette,
	Model,
	Nette\Forms\Form,
	Nette\Mail\Message,
	Nette\Mail\SendmailMailer;


/**
 * Homepage presenter.
 */
class UserPresenter extends BasePresenter
{
	public function __construct(\Nette\Database\Context $database) {
		$this->database = $database;
	}

	public function renderDefault()
	{
		$this->template->us = $this->database->table('users')->where('id',$this->getUser()->getIdentity()->user_id)->fetch();
	}
	
	public function renderSettings()
	{	
	}
	
	public function actionEdit()
	{
		$user = $this->database->table('Users')->get($this->getUser()->getIdentity()->user_id);
		$this['changeEmail']->setDefaults($user->toArray());
	}
	
	protected function createComponentRegisterForm()
	{
		$form = new Nette\Application\UI\Form;
		$form->addText('username', 'Uživatelské jméno:')
			->setRequired('Prosím vyplňte uživatelské jméno.');
		
		$form->addPassword('password', 'Heslo:')
			->setRequired('Prosím vyplňte heslo.');

		$form->addText('firstname', 'Jméno');
		$form->addText('surename', 'Příjmení');
		
		$form->addText('email', 'Email:')
			->addRule(FORM::EMAIL, 'Zadejte prosím e-mail ve správném tvaru.')
			->setRequired('Prosím vyplňte email.');
		
		$form->addSubmit('register', 'Registrovat');

		$form->onSuccess[] = $this->registerFormSucceeded;
		
		return $form;
	}

	public function registerFormSucceeded($form)
	{
		$values = $form->getValues();
		$values['password'] = sha1($values['password']);
		$this->database->table('users')->insert($values);
		$mail = new Message;
		$code = sha1($values['username']);
		$mail->setFrom('accounts@mywal.com')
			->addTo($values['email'])
			->setSubject('Aktivujte si svůj účet')
			->setBody("Dobrý den, \n Děkujeme za Vaši registraci. \n"
					. "Pro dokončení registrace klikněte na tento odkaz: "
					//."http://mywallet.eu/user/activate?=".$code
					. "http://localhost/MyWallet/www/user/activate?code=".$code
					. ". Přejeme mnoho bezstarostných výdajů.\n\n Váš MyWallet tým.");
		
		$mailer = new SendmailMailer;
		$mailer->send($mail);
		$this->redirect('Sign:in');
	}
	
	public function renderActivate()
	{
		$this->database->query('UPDATE users SET active = 1 WHERE SHA1(username) = "'.$this->getHttpRequest()->getQuery('code').'"');
	}
	
	public function actionDelete()
	{
		$user = $this->user->getIdentity()->getId();
		$this->database->table('transactions')->where('id_user',$this->user->getIdentity()->user_id)->delete();
		$this->database->table('budgets')->where('id_user',$this->user->getIdentity()->user_id)->delete();
		$this->database->table('categories')->where('id_user',$this->user->getIdentity()->user_id)->delete();
		$this->database->table('accounts')->where('id_user',$this->user->getIdentity()->user_id)->delete();
		$this->database->table('users')->where('username',$user)->delete();
		$this->getUser()->logout();
		$this->getSession()->destroy();
		$this->redirect('Homepage:');
	}
	
	protected function createComponentChangeEmail()
	{
		$form = new Nette\Application\UI\Form;
		$form->addText('email', 'Email:')
			->addRule(FORM::EMAIL, 'Zadejte prosím e-mail ve správném tvaru.')
			->setRequired('Prosím vyplňte email.');
		
		$form->addSubmit('edit', 'Upravit');

		$form->onSuccess[] = $this->changeEmailFormSucceeded;
		return $form;
	}
	
	public function changeEmailFormSucceeded($form)
	{
		$values = $form->getValues();
		$user = $this->user->getIdentity()->getId();
		$this->database->table('users')->where('username',$user)->update($values);
	}
	
	protected function createComponentChangePassword()
	{
		$form = new Nette\Application\UI\Form;
		$form->addPassword('password', 'Heslo:')
			->setRequired('Prosím vyplňte heslo.');
		
		$form->addPassword('passwordVerify', 'Heslo znovu:')
			->setRequired('Zadejte prosím heslo ještě jednou pro kontrolu')
			->addRule(Form::EQUAL, 'Hesla se neshodují', $form['password']);
		
		$form->addSubmit('edit', 'Upravit');

		$form->onSuccess[] = $this->changePasswordFormSucceeded;
		return $form;
	}
	
	public function changePasswordFormSucceeded($form)
	{
		$values = $form->getValues();
		$user = $this->user->getIdentity()->getId();
		$values['password'] = sha1($values['password']);
		unset($values['passwordVerify']);
		$this->database->table('users')->where('username',$user)->update($values);
	}
	
	protected function createComponentDefaultCurrency()
	{
		$form = new Nette\Application\UI\Form;
		$currencies = $this->database->table('currencies')->select('id, CONCAT(country," (", currency,")") AS mena')->fetchPairs('id','mena');
		$form->addSelect('default_currency', 'Výchozí měna:')
				->setPrompt('Vyberte měnu')
				->setItems($currencies)
				->setRequired('Prosím vyberte měnu.');
		
		$form->addSubmit('edit', 'Upravit');

		$form->onSuccess[] = $this->defaultCurrencyFormSucceeded;
		return $form;
	}
	
	public function defaultCurrencyFormSucceeded($form)
	{
		$values = $form->getValues();
		$user = $this->user->getIdentity()->getId();
		$this->database->table('users')->where('username',$user)->update($values);
	}
}