<?php
//php-code from: Leo-notebook
//auther: Oberjukhtin I.A. 
/* --- */
//our code
class CrEngine {
	Private $Work_Status="normal";
	Private $Work_Errors='';
	Private $Work_Rezult='Хьюстон, у нас проблемы';
	public $Engine_Start_Parametrs,$system_moduls,$on_moduls,$CoreTemplater,$iniParser,
	$core_and_site_parameters,$secret_parameters,$head,$core_database_driver,$SystemRunner,$sistemUser,$sistemCacher;
	public Function _cunstruct(){
	    $this->Engine_Start_Parametrs=$_SESSION['Start_Parametrs'];
	}
	public function Run(){
		$Work_Rezult=$Engine_Start_Parametrs['mode'];
	}
	public function GetStatus(){
		return $Work_Status;
	}
	public function GetRezult(){
		return $Work_Rezult;
	}
	public function GetErrorMessage(){
		return "byaka";
	} 
}
?>