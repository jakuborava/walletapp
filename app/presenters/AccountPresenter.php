<?php

namespace App;

use Nette,
	Model,
   Nette\Forms\Form;


/**
 * Homepage presenter.
 */
class AccountPresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->accounts = $this->database->table('Accounts')->where('id_user',$this->getUser()->getIdentity()->user_id);
	}
	
	public function renderDetail($id)
	{
		$this->template->transactions = $this->database->table('Transactions')->where('id_user',$this->getUser()->getIdentity()->user_id)->where('id_account', $id);
		$this->template->account = $this->database->table('Accounts')->get($id);
	}
	
	public function actionDelete($id)
	{
		$this->database->table('Accounts')->get($id)->delete();
		$this->redirect('Account:');
	}
	
	public function actionEdit($id)
	{
		$account = $this->database->table('Accounts')->get($id);
		if (!$account) {
	        $this->error('Kategorie nebyla nalezena');
	    }
	    $this['accountForm']->setDefaults($account->toArray());
	}


	protected function createComponentAccountForm()
	{
		$form = new Nette\Application\UI\Form;

		$form->addText('name', 'Název:')
			->setRequired('Pole "Název" je povinné.')
				->setAttribute('autofocus');
		
		$form->addText('avalaibleMoney', 'Počáteční částka:')
			->setRequired('Pole "Počáteční částka" je povinné.')
				->addRule(FORM::FLOAT, 'Musí jít o číslo')
				->setAttribute('autofocus');
		
		$currencies = $this->database->table('currencies')->select('id, CONCAT(country," (", currency,")") AS mena')->fetchPairs('id','mena');
		$form->addSelect('id_currency', 'Výchozí měna:')
				->setItems($currencies)
				->setRequired()
				->setPrompt('Zvolte prosím měnu');
		
		$form->addCheckbox('inTotalSum', 'Zahrnout do celkové sumy')
				->setDefaultValue('checked');
		
		$form->addSubmit('send', 'Přidat');
		$form->onSuccess[] = $this->accountFormSucceeded;

		$form->addProtection('Vypršel časový limit, odešlete formulář znovu');
		
		return $form;
	}

	public function accountFormSucceeded($form)
	{
		$values = $form->getValues();
		$accountId = $this->getParameter('id');
		$values['id_user'] = $this->getUser()->getIdentity()->user_id;
		
		if ($accountId) {
			$account = $this->database->table('Accounts')->get($accountId);
			$account->update($values);
			$this->flashMessage("Účet byl upraven.", 'success');
			$this->redirect('Account:');
		} else {
			$this->database->table('Accounts')->insert($values);
			$this->flashMessage("Účet byl úspěšně vytvořen.", 'success');
			$this->redirect('Account:');
		}
	}

}
