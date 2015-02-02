<?php

namespace App;

use Nette,
	Model;


/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{
	public function actionDisable()
	{
		$request = $this->getHttpRequest();
		$response = $this->getHttpResponse();
		
		$cookieDisable = $request->getCookie('disableJumbotron');
		
		if($cookieDisable === NULL)
		{
			$response->setCookie('disabledJumbotron',true,'365days');
		}
		
		$this->redirect('Homepage:');
	}

	public function renderDefault()
	{
		$request = $this->getHttpRequest();
		
		$cookieDisable = $request->getCookie('disableJumbotron');
		if($cookieDisable === NULL)
		{
			$this->template->disableJumbotron = true;
		}
		else
		{
			$this->template->disableJumbotron = false;
		}
		if($this->user->loggedIn)
		{
			$accounts = $this->database->table('Accounts')->where('id_user',$this->getUser()->getIdentity()->user_id)->fetchAll();
			$this->template->accounts = $accounts;
			$this->template->totalSum = $this->getTotalSum($accounts);
		}		
	}

	public function getTotalSum($accounts)
	{
		$cashSum = 0;
		//$accounts = $this->database->table('Accounts')->where('id_user',$this->getUser()->getIdentity()->user_id)->where('inTotalSum',1);
		
		foreach ($accounts as $cash) {
			if($cash->inTotalSum == 1)
			{
				$cashSum += $this->countMoney($cash->avalaibleMoney,$cash->id_currency);
			}
		}
		
		return $cashSum;
	}
	
	public function countMoney($cash, $currencyId)
	{
		$currency = $this->database->table('currencies')->get($currencyId);
		$sum = $cash*$currency->course;
		return round($sum);
	}
}
