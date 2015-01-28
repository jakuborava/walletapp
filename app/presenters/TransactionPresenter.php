<?php

namespace App;

use Nette,
	Model,
   Nette\Forms\Form;

/**
 * Homepage presenter.
 */
class TransactionPresenter extends BasePresenter
{

	
	public function renderDefault()
	{
		$this->template->transactions = $this->database->table('Transactions')->where('id_user',$this->getUser()->getIdentity()->user_id);
	}
	
	public function actionDelete($id)
	{
		$this->database->table('Transactions')->get($id)->delete();
		$this->redirect('Transaction:');
	}
	
	public function actionEdit($id)
	{
		$transaction = $this->database->table('Transactions')->get($id);
		if (!$transaction) {
	        $this->error('Transakce nebyla nalezena');
	    }
		$transaction_1 = $transaction->toArray();
		$dateTimeArray = explode(' ',$transaction_1['date']);
		$dateArray = explode('-', $dateTimeArray[0]);
		unset($transaction_1['date']);
		$transaction_1['date'] = $dateArray[2].'. '.$dateArray[1].'. '.$dateArray[0];
	    $this['transactionForm']->setDefaults($transaction_1);
	}


	protected function createComponentTransactionForm()
	{
		//date_default_timezone_set('UTC');
		
		$form = new Nette\Application\UI\Form;

		$form->addText('ammount', 'Částka:')
			->setRequired('Pole "Částka" je povinné.')
				->addRule(FORM::FLOAT, 'Musí jít o číslo')
				->setAttribute('autofocus');
		
		$form->addText('date','Datum:')
				->setRequired()
				->setAttribute('id','datepicker');
		
		$form->addText('description','Popis:');
		
		$accounts = $this->database->table('Accounts')->where('id_user',$this->getUser()->getIdentity()->user_id)->fetchPairs('id','name');
	
		$form->addSelect('id_account', 'Účet')
			->setRequired()
			->setItems($accounts)
			->setPrompt('Zvolte účet');
		
		$categories = $this->database->table('Categories')->where('id_user',$this->getUser()->getIdentity()->user_id)->fetchPairs('id','name');
		$form->addSelect('id_category', 'Kategorie')
			->setItems($categories)
			->setPrompt('Zvolte kategorii');
		
		$form->addSubmit('send', 'Přidat');
		$form->onSuccess[] = $this->transactionFormSucceeded;

		$form->addProtection('Vypršel časový limit, odešlete formulář znovu');
		
		return $form;
	}

	public function transactionFormSucceeded($form)
	{
		$values = $form->getValues();
		$transactionId = $this->getParameter('id');
		$values['id_user'] = $this->getUser()->getIdentity()->user_id;
		$dateArray = explode('.', $values['date']);
		$values['date'] = $dateArray[2].'-'.$dateArray[1].'-'.$dateArray[0];
		if ($transactionId) {
			$transaction = $this->database->table('Transactions')->get($transactionId);
			$transaction->update($values);
			$this->flashMessage("Transakce byla upravena.", 'success');
			$this->redirect('Transaction:');
		} else {
			$this->database->table('Transactions')->insert($values);
			$this->flashMessage("Transakce byla úspěšně vytvořena.", 'success');
			$this->redirect('Transaction:');
		}
	}

}
