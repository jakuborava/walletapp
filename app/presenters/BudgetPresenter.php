<?php

namespace App;

use Nette,
	Model,
   Nette\Forms\Form;


/**
 * Homepage presenter.
 */
class BudgetPresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->budgets = $this->database->table('Budgets')->where('id_user',$this->getUser()->getIdentity()->user_id);
	}
	
	public function renderDetail($id)
	{
		$budget = $this->database->table('Budgets')->get($id);
		$this->template->budget  = $budget;
		if($budget->type == 'm')
		{
			$this->template->spend = $this->database->query('SELECT SUM(ammount) as pocet FROM Budgets
				JOIN categories on categories.id = budgets.id_category
				JOIN transactions on transactions.id_category = categories.id
				WHERE budgets.id = '.$id.' AND YEAR(date_time) = YEAR(NOW()) AND MONTH(date_time) = MONTH(NOW())')->fetchField();
		}
		elseif($budget->type == 'y')
		{
			$this->template->spend = $this->database->query('SELECT SUM(ammount) as pocet FROM Budgets
				JOIN categories on categories.id = budgets.id_category
				JOIN transactions on transactions.id_category = categories.id
				WHERE budgets.id = '.$id.' AND YEAR(date_time) = YEAR(NOW())')->fetchField();
		}
		elseif($budget->type == 'w')
		{
			$this->template->spend = $this->database->query('SELECT SUM(ammount) as pocet FROM Budgets
			JOIN categories on categories.id = budgets.id_category
			JOIN transactions on transactions.id_category = categories.id
			WHERE budgets.id = '.$id.' AND YEAR(date_time) = YEAR(NOW()) AND WEEK(date_time) = WEEK(NOW())')->fetchField();
		}
		
	}
	
	public function actionDelete($id)
	{
		$this->database->table('Budgets')->get($id)->delete();
		$this->user->getIdentity()->user_stats['bud'] = $this->user->getIdentity()->user_stats['bud']-1;
		$this->redirect('Budget:');
	}
	
	public function actionEdit($id)
	{
		$account = $this->database->table('Budgets')->get($id);
		if (!$account) {
	        $this->error('Kategorie nebyla nalezena');
	    }
	    $this['budgetForm']->setDefaults($account->toArray());
	}


	protected function createComponentBudgetForm()
	{
		$form = new Nette\Application\UI\Form;

		$form->addText('name', 'Název:')
			->setRequired('Pole "Název" je povinné.')
				->setAttribute('autofocus');
		
		$categories = $this->database->table('Categories')->where('id_user',$this->getUser()->getIdentity()->user_id)->fetchPairs('id','name');
		$form->addSelect('id_category', 'Kategorie')
			->setItems($categories)
			->setRequired()
			->setPrompt('Zvolte kategorii');
		
		$types = array("w" => "Týdenní", "m" => "Měsíční", "y" => "Roční");
		$form->addSelect('type', 'Typ rozpočtu')
			->setItems($types)
			->setRequired()
			->setPrompt('Zvolte typ rozpočtu');
		
		$form->addText('how_much', 'Částka:')
			->setRequired('Pole "Počáteční částka" je povinné.')
				->addRule(FORM::FLOAT, 'Musí jít o číslo')
				->setAttribute('autofocus');
		
		$form->addSubmit('send', 'Přidat');
		$form->onSuccess[] = $this->budgetFormSucceeded;

		$form->addProtection('Vypršel časový limit, odešlete formulář znovu');
		
		return $form;
	}

	public function budgetFormSucceeded($form)
	{
		$values = $form->getValues();
		$accountId = $this->getParameter('id');
		$values['id_user'] = $this->getUser()->getIdentity()->user_id;
		
		if ($accountId) {
			$account = $this->database->table('Budgets')->get($accountId);
			$account->update($values);
			$this->flashMessage("Účet byl upraven.", 'success');
			$this->redirect('Budget:');
		} else {
			$this->database->table('Budgets')->insert($values);
			$this->flashMessage("Účet byl úspěšně vytvořen.", 'success');
			$this->user->getIdentity()->user_stats['bud'] = $this->user->getIdentity()->user_stats['bud']+1;
			$this->redirect('Budget:');
		}
	}
}
