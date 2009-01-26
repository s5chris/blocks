<style>
div.fieldRow{ border-top: 1px solid #ccc; padding:8px; margin:8px; clear:left}
div.fieldRow div.fieldLabel{ float: left; width:60%; text-align:right; padding-top: 6px; padding-right:1px; clear:left;}
div.fieldRow div.fieldValues{ float: left; width:60%; clear:both;}
div#newQuestionBox{ border:1px solid #ccc; padding:8px; margin-top:24px }
div#miniSurvey{ border:1px solid #ccc; padding:8px; margin-top:24px; margin-bottom:8px;  clear:both; }
div#miniSurvey table{width:95%;}
div#miniSurvey td{ padding:2px; padding-left:0px; padding-right:4px; }
div#miniSurvey td.question{
	width: 262px; }
.spacer{ clear:both; font-size:1px; width: 262px; } 
#answerOptionsArea, #answerOptionsAreaEdit{display:none}
#editQuestionForm .formBlockSubmitButton{display:none}
.formBlockQuestionMsg{ padding:2px; margin:16px 0px; border:1px solid #ddd; display:none; }

#recipientEmailWrap{margin-top:8px}

#miniSurveyTableWrap { position:inherit; }
#miniSurveyTableWrap .miniSurveyTable{ width:100%; position:inherit; }
.miniSurveyQuestionRow{ position:inherit; clear:both; width:100%; margin-bottom:16px; font-family:Arial, Helvetica, sans-serif; font-size:11px; padding:0px }
.miniSurveyQuestionRowActive{}
.miniSurveyQuestionRowHelper{ z-index:500; background:#fafafa; border:1px dashed #999; width:auto }
.miniSurveyQuestionRow .miniSurveyQuestion{ float:left; width:70%}
.miniSurveyQuestionRow .miniSurveyResponse{ float:left; width:55%}
.miniSurveyQuestionRow .miniSurveyOptions{ float:left; width:28%; font-size:11px}
.miniSurveyQuestionRow .miniSurveyOptions a.moveUpLink{ display:block; background:url(<?=DIR_REL?>/split5/images/icons/arrow_up.png) no-repeat center; height:10px; width:16px; }
.miniSurveyQuestionRow .miniSurveyOptions a.moveDownLink{ display:block; background:url(<?=DIR_REL?>/split5/images/icons/arrow_down.png) no-repeat center; height:10px; width:16px; }
.miniSurveyQuestionRow .miniSurveyOptions a.moveUpLink:hover{background:url(<?=DIR_REL?>/split5/images/icons/arrow_up_black.png) no-repeat center;}
.miniSurveyQuestionRow .miniSurveyOptions a.moveDownLink:hover{background:url(<?=DIR_REL?>/split5/images/icons/arrow_down_black.png) no-repeat center;}
.miniSurveyQuestionRow .miniSurveySpacer{font-size:1px; line-height:1px; clear:both; }

#ccm-formblock-tabs{margin-bottom:16px}
.ccm-formBlockPane{ display:none; margin-bottom:16px }
.miniSurveyView table.formBlockSurveyTable td { width: 262px; clear:both;
}
.miniSurveyView td.question { width: 262px; }
</style>
