<?php
//php-code from: Leo-notebook
//auther: Oberjukhtin I.A. 
/* --- */
//our code
class CrEngine {
	var $Work_Status="normal";
	var $Work_Errors='';
	var $Work_Rezult='Хьюстон, у нас проблемы';
	var $system_moduls,$on_moduls,$CoreTemplater,$iniParser,$core_and_site_parameters,
	$secret_parameters,$head,$core_database_driver,$Start_Parametrs,
	$SystemRunner,$sistemUser,$sistemCacher,$CoreSystemEroorViewer;
	public Function __construct($global){
		$this->Start_Parametrs=$global['Start_Parametrs'];
		$this->CoreSystemEroorViewer=$global['CoreSystemEroorViewer'];
		$this->core_database_driver=$global['core_database_driver'];
		$this->head=$global['head'];
		$this->secret_parameters=$global['secret_parameters'];
		$this->iniParser=$global['iniParser'];
 		$this->core_and_site_parameters=$global['core_and_site_parameters'];
		$this->CoreTemplater=$global['CoreTemplater'];
		$this->on_modulson_moduls=$global['on_moduls'];
		$this->system_moduls=$global['system_moduls'];
		$this->SystemRunner=$global['SystemRunner'];
		$this->SystemUser=$global['sistemUser'];
 		$this->sistemCacher=$global['sistemCacher'];
	}
	public function Run(){
		$this->Work_Rezult=$Start_Parametrs['mode'];
	}
	public function GetStatus(){
		return $this->Work_Status;
	}
	public function GetRezult(){
		return $this->Work_Rezult;
	}
	public function GetErrorMessage(){
		return "byaka";
	} 
}
?>