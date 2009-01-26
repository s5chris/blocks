<?  
$survey=$controller;  
//echo $survey->surveyName.'<br>';
$miniSurvey=new MiniSurvey($b);
$miniSurvey->frontEndMode=true;
?>


<form id="miniSurveyView<?=intval($survey->questionSetId)?>" class="miniSurveyView" method="post" action="<?=$this->action('submit_form')?>">
	<div style="margin-bottom:8px"><strong><?=$survey->surveyName?></strong></div>
	<? if( $_GET['surveySuccess'] && $_GET['qsid']==intval($survey->questionSetId) ){ ?>
		<div id="msg">Form Submission Was Successful.</div> 
	<? } ?>
	<input name="qsID" type="hidden" value="<?=intval($survey->questionSetId)?>" />
	<input name="pURI" type="hidden" value="<?=$_SERVER['REQUEST_URI']?>" />
	<? $miniSurvey->loadSurvey( $survey->questionSetId ); ?>
</form>