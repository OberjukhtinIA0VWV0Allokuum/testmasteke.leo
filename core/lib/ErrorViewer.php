<?
class CrCoreErrorViewer{
	private $ErrorFilePath;
	private $ErrorHtmlCode;
	public Function _cunstruct(){
		 	$ErrorFilePath=$_SERVER['DOCUMENT_ROOT']."/core/errorsFile/";
			$ErrorHtmlCode="";	 
	}
	Public Function SetErrorFilePath($ErrorFilePath){
		
	}
	public function error500(){
		header("Status: 500 bad syntax");
		echo "<center><h1>500</h1><hr>Sorry, in the script, caused by you, there are a few errors of syntax. Maybe the module or the CrisCMS engine on the domain, broke down in consequence of the interference in the code. If you are the administrator or owner of this domain, we recommend you to check the log file.<br>Perhaps the Website will answer by another query.</center>";
		
	}
}
?>