<?php

namespace App;

use Nette,
	Model;


/**
 * Homepage presenter.
 */
class CategoryPresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->categories = $this->database->table('categories')->where('id_user',$this->getUser()->getIdentity()->user_id);
	}
	
	public function actionDelete($id)
	{
		/*$this->database->table('budgets')->where('id_category',$id)->delete();
		$this->database->table('transactions')->where('id_category',$id)->delete();
		$this->database->table('Categories')->get($id)->delete();*/
		$this->database->query('CALL deleteCategory('.$id.');');
		$this->user->getIdentity()->user_stats['cat'] = $this->user->getIdentity()->user_stats['cat']-1;
		$this->redirect('Category:');
	}
	
	public function actionEdit($id)
	{
		$category = $this->database->table('categories')->get($id);
		if (!$category) {
	        $this->error('Kategorie nebyla nalezena');
	    }
	    $this['categoryForm']->setDefaults($category->toArray());
	}


	protected function createComponentCategoryForm()
	{
		$form = new Nette\Application\UI\Form;

		$form->addText('name', 'Název:')
			->setRequired('Pole "Název" je povinné.')
				->setAttribute('autofocus');

		$items = array('e' => 'Výdajová', 'i' => 'Příjmová' );
		
		$form->addSelect('type', 'Typ:')
			->setItems($items)
			->setRequired('Pole "Název" je povinné.')
			->setPrompt('Zvolte typ');		
		
		$form->addSubmit('send', 'Přidat');
		$form->onSuccess[] = $this->categoryFormSucceeded;

		$form->addProtection('Vypršel časový limit, odešlete formulář znovu');
		
		return $form;
	}

	public function categoryFormSucceeded($form)
	{
		$values = $form->getValues();
		$categoryId = $this->getParameter('id');
		$values['id_user'] = $this->getUser()->getIdentity()->user_id;
		
		if ($categoryId) {
			$category = $this->database->table('Categories')->get($categoryId);
			$category->update($values);
			$this->flashMessage("Kategorie byla upravena.", 'success');
			$this->redirect('Category:');
		} else {
			$this->database->table('Categories')->insert($values);
			$this->flashMessage("Kategorie byla úspěšně vložena.", 'success');
			$this->user->getIdentity()->user_stats['cat'] = $this->user->getIdentity()->user_stats['cat']+1;
			$this->redirect('Category:');
		}
	}

}
