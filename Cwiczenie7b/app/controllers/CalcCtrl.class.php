<?php
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {
  
	private $form;
	private $result; 

	public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	public function getParams(){
		$this->form->x = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
		$this->form->y = isset($_REQUEST ['y']) ? $_REQUEST ['y'] : null;
		$this->form->p = isset($_REQUEST ['p']) ? $_REQUEST ['p'] : null;
	}

	public function validate() {
		if (! (isset ( $this->form->x ) && isset ( $this->form->y ) && isset ( $this->form->p ))) {
			return false;
		}
	
		if ($this->form->x == "") {
			getMessages()->addError('Nie podano kwoty');
		}
		if ($this->form->y == "") {
			getMessages()->addError('Nie podano ilości lat');
		}
                
                if ($this->form->p == "") {
			getMessages()->addError('Nie podano oprocentowania');
		}
		
		if (!getMessages()->isError()) {
			
			if (!is_numeric ( $this->form->x )) {
				getMessages()->addError('Kwota musi być liczbą');
			}
			
			if (!is_numeric ( $this->form->y )) {
				getMessages()->addError('Lata muszą być liczbą');
			}
                        
                        if (!is_numeric ( $this->form->p )) {
				getMessages()->addError('Oprecentowanie musi być liczbą, używaj ".", nie wpisuj %');
			}
		}
		
		return !getMessages()->isError();
	}
	
	public function action_process(){

		$this->getParams();
		
		if ($this->validate()) {
				
			$this->form->x = intval($this->form->x);
			$this->form->y = intval($this->form->y);
                        $this->form->p = floatval($this->form->p);
			getMessages()->addInfo('Podano poprawne parametry');
				
			$this->result->result = $this->form->x * ((100+$this->form->p)/100)/($this->form->y * 12);
			
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
        
        public function action_calcShow(){
		$this->generateView();
	}
	
	
	public function generateView(){
                getSmarty()->assign('user', unserialize($_SESSION['user']));

                getSmarty()->assign('form',$this->form);
                getSmarty()->assign('res',$this->result);
                
                getSmarty()->display('credit_view.tpl');
	}
}
