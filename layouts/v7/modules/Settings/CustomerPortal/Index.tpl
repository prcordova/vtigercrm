{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*************************************************************************************}
 


{strip}




{literal} <style>

 body.dark{
	 background-color: #292c35;
	 color:#fff;
	 text-color:#fff;
 }
 .label.dark {
	 color:#fff;
 }
.cp-modules-home{
	border-top-right-radius: 10px ! important;
    border-top-left-radius: 10px ! important;
	 
}
 

	.portal-annoucement-widget-container, 
	.portal-record-widget-container, 
	.portal-shortcuts-container, 
	.portal-helpdesk-widget-container, 
	.portal-helpdesk-widget-container{

		border-radius: 10px;
		text-align: center;
		font-family: Poppins,sans-serif;
	}

	.portal-annoucement-widget, 
	.portal-record-widget-content, 
	.portal-shortcuts-header, 
	.portal-helpdesk-widget-header, 
	.portal-helpdesk-widget-header{
		background-color: #3978fe;
		border-radius:10px;
	}
	.portalMenuHeader{
		border-bottom: 1px solid #3978fe!important;
		border-right: 1px solid #3978fe!important;
	}
	.portal-dashboard{
		border-top: 1px solid #3978fe!important;
		 
	}
	.portalModuleRow{
		border-left: 4px solid #3978fe !important;
	}
	.coloredBorderTop{
		border-top: 1px solid #3978fe!important;
	
	}
	.portalModuleRow {
		margin-top:10px;
		background-color :#3978fe;
		color: #fff!important;
		border-radius: 10px;
		height:60px;
	
	}
	.portalModuleRow:hover{
		margin-left: -10px;
		margin-right: -10px;
		color: #fff!important;
		border-radius:10px !important;
		height:60px;
		background-color:#3978fe;
		 

	}

	h4{
		font-size: 25px
	}
	.portal-dashboard{
		border-right: 1px  solid #3978fe!important;
	}
 
a.cp-modules:hover{
	 background-color:transparent!important;
	 
	 padding:2px;
	 border-radius:20px;

 }
#portalModulesTable > li.portalModuleRow.active > a:hover{
	 background-color:transparent!important;
 }
 a:focus{
	 backgroud-color:transparent!important;

 }
 #portalModulesTable > li.portalModuleRow.active > a:focus{
	  backgroud-color:transparent!important;
 }
 
 .nav>li>a:hover, .nav>li>a:focus{
	  backgroud-color:#3978fe!important;
 }
 .nav>li.disabled>a{
	 color:#3978fe;
 }
 label, .fieldLabel{
	 color:#3978fe;
 }
 input, button, select, textarea{
	 color:#3978fe;
 }
 
 


	.label{
		background-color:#111;
		display:flex;
		align-items:center;
		justify-content:space-between;
		border-radius:50px;
		position:relative;
		padding:5px;
		height:26px;
		width: 50px;
		
	}
	 
	 
	.fa-moon{
		color:#f1c40f;
	}
	.fa-sun{
		color:#f39c12;
	}
	.ball{
		background-color:#fff;
		border-radius:50%;
		position:absolute;
		height:22px;
		width:22px;
		top:2px;
		left:2px;
		transition:transform 0.2s linear;

	}
	.checkboxSwitch, .checkboxSwitch:checked{
		opacity:0;
		position:absolute;
	}
	.checkboxSwitch:checked + .label .ball{
		transform:translateX(24px);

	}

	

 </style>{/literal}

 
 

	<div class="listViewPageDiv" id="listViewContent">
	
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<br>
			<form id="customerPortalForm" name="customerPortalForm" action="index.php" method="POST" class="form-horizontal">
				<input type="hidden" name="portalModulesInfo" value="" />
				<div class="col-sm-12 col-xs-12 input-group">					
					<div class="form-group">
						<label for="defaultAssignee" class="col-sm-4 control-label fieldLabel"><span>{vtranslate('LBL_DEFAULT_ASSIGNEE', $QUALIFIED_MODULE)}</span></label>
						<div class="fieldValue col-lg-3 col-md-3 col-sm-3 input-group">
							<select name="defaultAssignee" class="select2 inputElement">
								<optgroup label="{vtranslate('LBL_USERS', $QUALIFIED_MODULE)}" >
									{foreach item=USER_MODEL from=$USER_MODELS}
										{assign var=USER_ID value=$USER_MODEL->getId()}
										<option value="{$USER_ID}" {if $CURRENT_DEFAULT_ASSIGNEE eq $USER_ID} selected {/if}>{$USER_MODEL->getName()}</option>
									{/foreach}
								</optgroup>
								<optgroup label="{vtranslate('LBL_GROUPS', $QUALIFIED_MODULE)}">
									{foreach item=GROUP_MODEL from=$GROUP_MODELS}
										{assign var=GROUP_ID value=$GROUP_MODEL->getId()}
										<option value="{$GROUP_ID}" {if $CURRENT_DEFAULT_ASSIGNEE eq $GROUP_ID} selected {/if}>{$GROUP_MODEL->getName()}</option>
									{/foreach}
								</optgroup>
							</select>
							<div class="input-group-addon input-select-addon">
								<a href="#" rel="tooltip" title="{vtranslate('LBL_DEFAULT_ASSIGNEE_MESSAGE', $QUALIFIED_MODULE)}"><i class="fa fa-info-circle"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12 input-group">
					<div class="form-group">
						<label for="portal-url" class="col-sm-4 control-label fieldLabel">{vtranslate('LBL_PORTAL_URL', $QUALIFIED_MODULE)}</label>
						<div class="col-sm-5">
							<a target="_blank" href="{$PORTAL_URL}" class="help-inline" style="width: 300px;color:blue;">{$PORTAL_URL}</a>
							<div class="pull-left input-group-addon input-select-addon">
								<a href="#" rel="tooltip" title="{vtranslate('LBL_PORTAL_URL_MESSAGE', $QUALIFIED_MODULE)}"><i class="fa fa-info-circle"></i></a>
							</div>
						</div>
					</div>
				</div>
				<br><br>
				<div class="row" style="margin-bottom: 100px;">
					<div class="col-sm-3 paddingRight0">
						<ul class="nav nav-tabs nav-stacked cp-nav-header-wrapper" >
							<li class="disabled unsortable portalMenuHeader" data-sequence="1" data-module="Dashboard">
								<a class="cp-nav-header">
									{vtranslate('LBL_LAYOUT_HEADER',$QUALIFIED_MODULE)}
								</a>
							</li>
						</ul>
						<ul class="nav nav-tab nav-stacked" id="portalModulesTable">
							<li class="portalModuleRow active unsortable cp-modules-home" data-id="" data-sequence="1" data-module="Dashboard">
								<a href="javascript:void(0);">
									<strong class="portal-home-module">{vtranslate('LBL_HOME',$QUALIFIED_MODULE)}</strong>
								</a>
							</li>
							{foreach key=TAB_ID item=MODEL from=$MODULES_MODELS name=moduleModels}
								{assign var=MODULE_NAME value=$MODEL->get('name')}
								<li class="portalModuleRow bgColor cp-tabs" {if $smarty.foreach.moduleModels.last} style="border-color: #ddd; border-image: none; border-style: solid; border-width: 0 0 1px 1px;"{/if}
									data-id="{$TAB_ID}" data-sequence="{$MODEL->get('sequence')}"
									data-module="{$MODULE_NAME}">
									<input type="hidden" name="portalModulesInfo[{$TAB_ID}][sequence]" value="{$MODEL->get('sequence')}" />
									<a href="javascript:void(0);" class="cp-modules" style="width:100%;">
										<span class="checkbox">
											<img class="drag-portal-module" src="layouts/v7/resources/Images/drag.png" border="0" title="Drag And Drop To Reorder Portal Menu In Customer Portal"/>&nbsp;&nbsp;
											<input class="enabledModules portal-module-name" name='{$TAB_ID}' type="checkbox" value="{$MODEL->get('visible')}" {if $MODEL->get('visible')}checked{/if} />
											&nbsp;&nbsp;{vtranslate($MODULE_NAME, $MODULE_NAME)}
										</span>
									</a>
								</li>
							{/foreach}
						</ul>
					</div>

					<div class="col-sm-9 portal-dashboard">
						<div id="dashboardContent" class="show" >
							<h4>{vtranslate('LBL_HOME_LAYOUT',$QUALIFIED_MODULE)}</h4>
							<hr class="hrHeader">
							<input type="hidden" name="defaultWidgets" value='{Vtiger_Functions::jsonEncode($WIDGETS,true)}'/>
							{include file='CustomerPortalDashboard.tpl'|@vtemplate_path:$QUALIFIED_MODULE}
						</div>
						{foreach key=TAB_ID item=MODEL from=$MODULES_MODELS}
							<div id="fieldContent_{$MODEL->get('name')}" class="hide">
								{$MODEL->get('name')}
							</div>
						{/foreach}
					</div>
					<div class="textAlignCenter col-lg-12 col-md-12 col-sm-12">
						<button type="submit" class="btn btn-success saveButton pull-right" id="savePortalInfo" name="savePortalInfo" type="submit" disabled>{vtranslate('LBL_SAVE', $MODULE)}</button>&nbsp;&nbsp;
					</div>

				</div>
			</form>
		</div>
	</div>

{literal}
	<script language=javascript>
	 
		const checkboxSwitch = document.querySelector("#checkboxSwitch");

		checkboxSwitch.addEventListener('change', () => {
			//change the theme of website
			console.log('teste')
		document.body.classList.toggle('dark');
		document.body.textarea.style.color="#000"
		document.body.p.style.color="#000"
		});
	</script>
 {/literal}
{/strip}
