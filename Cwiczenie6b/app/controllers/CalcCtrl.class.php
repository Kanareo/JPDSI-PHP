<?php
require_once 'CalcForm.class.php';
require_once 'CalcResult.class.php';

class CalcCtrl {

	private $msgs;   
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	public function __construct(){
		$this->msgs = new Messages();
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
	
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->x == "") {
			$this->msgs->addError('Nie podano kwoty');
		}
		if ($this->form->y == "") {
			$this->msgs->addError('Nie podano ilości lat');
		}
                
                if ($this->form->p == "") {
			$this->msgs->addError('Nie podano oprocentowania');
		}
		
		if (!$this->msgs->isError()) {
			
			if (!is_numeric ( $this->form->x )) {
				$this->msgs->addError('Kwota musi być liczbą');
			}
			
			if (!is_numeric ( $this->form->y )) {
				$this->msgs->addError('Lata muszą być liczbą');
			}
                        
                        if (!is_numeric ( $this->form->p )) {
				$this->msgs->addError('Oprecentowanie musi być liczbą, używaj ".", nie wpisuj %');
			}
		}
		
		return !$this->msgs->isError();
	}
	
	public function process(){

		$this->getParams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->x = intval($this->form->x);
			$this->form->y = intval($this->form->y);
                        $this->form->p = floatval($this->form->p);
			$this->msgs->addInfo('Podano poprawne parametry');
				
			$this->result->result = $this->form->x * ((100+$this->form->p)/100)/($this->form->y * 12);
			
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	
	public function generateView(){

                getSmarty()->assign('form',$this->form);
                getSmarty()->assign('res',$this->result);
                getSmarty()->assign('msgs',$this->msgs);
                
                getSmarty()->display('credit_view.tpl');
	}
}
