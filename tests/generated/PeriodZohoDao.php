<?php
namespace TestNamespace;

/**
 */
class PeriodZohoDao extends \Wabel\Zoho\CRM\AbstractZohoDao {

	/**
	 */
	public function getBeanClassName() {
		return 'TestNamespace\\Period';
	}

	/**
	 */
	public function getFields() {
		return array (
		  'CustomModule16 Information' => 
		  array (
		    'CustomModule16 Name' => 
		    array (
		      'req' => true,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'CustomModule16 Name',
		      'dv' => 'Academic Period Code',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getCustomModule16Name',
		      'setter' => 'setCustomModule16Name',
		      'name' => 'customModule16Name',
		    ),
		    'CustomModule16 Owner' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'CustomModule16 Owner',
		      'dv' => 'Academic Period Propietario',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getCustomModule16Owner',
		      'setter' => 'setCustomModule16Owner',
		      'name' => 'customModule16Owner',
		    ),
		    'Academic Period Name' => 
		    array (
		      'req' => true,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 255,
		      'label' => 'Academic Period Name',
		      'dv' => 'Academic Period Name',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getAcademicPeriodName',
		      'setter' => 'setAcademicPeriodName',
		      'name' => 'academicPeriodName',
		    ),
		    'Year' => 
		    array (
		      'req' => false,
		      'type' => 'Integer',
		      'isreadonly' => false,
		      'maxlength' => 9,
		      'label' => 'Year',
		      'dv' => 'Year',
		      'customfield' => true,
		      'phpType' => 'int',
		      'getter' => 'getYear',
		      'setter' => 'setYear',
		      'name' => 'year',
		    ),
		    'Start At' => 
		    array (
		      'req' => false,
		      'type' => 'Date',
		      'isreadonly' => false,
		      'maxlength' => 20,
		      'label' => 'Start At',
		      'dv' => 'Start At',
		      'customfield' => true,
		      'phpType' => '\\DateTime',
		      'getter' => 'getStartAt',
		      'setter' => 'setStartAt',
		      'name' => 'startAt',
		    ),
		    'Created By' => 
		    array (
		      'req' => false,
		      'type' => 'OwnerLookup',
		      'isreadonly' => false,
		      'maxlength' => 25,
		      'label' => 'Created By',
		      'dv' => 'Creado por',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getCreatedBy',
		      'setter' => 'setCreatedBy',
		      'name' => 'createdBy',
		    ),
		    'End At' => 
		    array (
		      'req' => false,
		      'type' => 'Date',
		      'isreadonly' => false,
		      'maxlength' => 20,
		      'label' => 'End At',
		      'dv' => 'End At',
		      'customfield' => true,
		      'phpType' => '\\DateTime',
		      'getter' => 'getEndAt',
		      'setter' => 'setEndAt',
		      'name' => 'endAt',
		    ),
		    'Modified By' => 
		    array (
		      'req' => false,
		      'type' => 'OwnerLookup',
		      'isreadonly' => false,
		      'maxlength' => 25,
		      'label' => 'Modified By',
		      'dv' => 'Modificado por',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getModifiedBy',
		      'setter' => 'setModifiedBy',
		      'name' => 'modifiedBy',
		    ),
		    'Last Activity Time' => 
		    array (
		      'req' => false,
		      'type' => 'DateTime',
		      'isreadonly' => false,
		      'maxlength' => 25,
		      'label' => 'Last Activity Time',
		      'dv' => 'Hora de la última actividad',
		      'customfield' => false,
		      'phpType' => '\\DateTime',
		      'getter' => 'getLastActivityTime',
		      'setter' => 'setLastActivityTime',
		      'name' => 'lastActivityTime',
		    ),
		    'Currency' => 
		    array (
		      'req' => false,
		      'type' => 'Pick List',
		      'isreadonly' => false,
		      'maxlength' => 5,
		      'label' => 'Currency',
		      'dv' => 'Moneda',
		      'customfield' => false,
		      'values' => 
		      array (
		        0 => 'COP',
		      ),
		      'phpType' => 'string',
		      'getter' => 'getCurrency',
		      'setter' => 'setCurrency',
		      'name' => 'currency',
		    ),
		    'Tag' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 2000,
		      'label' => 'Tag',
		      'dv' => 'Etiqueta',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getTag',
		      'setter' => 'setTag',
		      'name' => 'tag',
		    ),
		    'createdTime' => 
		    array (
		      'req' => false,
		      'type' => 'DateTime',
		      'isreadonly' => false,
		      'maxlength' => 20,
		      'label' => 'createdTime',
		      'dv' => 'createdTime',
		      'customfield' => true,
		      'phpType' => '\\DateTime',
		      'getter' => 'getCreatedTime',
		      'setter' => 'setCreatedTime',
		      'name' => 'createdTime',
		    ),
		    'modifiedTime' => 
		    array (
		      'req' => false,
		      'type' => 'DateTime',
		      'isreadonly' => false,
		      'maxlength' => 20,
		      'label' => 'modifiedTime',
		      'dv' => 'modifiedTime',
		      'customfield' => true,
		      'phpType' => '\\DateTime',
		      'getter' => 'getModifiedTime',
		      'setter' => 'setModifiedTime',
		      'name' => 'modifiedTime',
		    ),
		  ),
		);
	}

	/**
	 */
	public function getModule() {
		return 'CustomModule16';
	}

	/**
	 */
	public function getPluralModuleName() {
		return 'Periods';
	}

	/**
	 */
	public function getSingularModuleName() {
		return 'Period';
	}
}
