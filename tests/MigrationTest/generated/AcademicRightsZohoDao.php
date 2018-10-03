<?php
namespace TestNamespace;

/**
 */
class AcademicRightsZohoDao extends \Wabel\Zoho\CRM\AbstractZohoDao {

	/**
	 */
	public function getBeanClassName() {
		return 'TestNamespace\\AcademicRights';
	}

	/**
	 */
	public function getFields() {
		return array (
		  'CustomModule23 Information' => 
		  array (
		    'Student' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Student',
		      'dv' => 'Student',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getStudent',
		      'setter' => 'setStudent',
		      'name' => 'student',
		    ),
		    'CustomModule23 Owner' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'CustomModule23 Owner',
		      'dv' => 'Academic Right Propietario',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getCustomModule23Owner',
		      'setter' => 'setCustomModule23Owner',
		      'name' => 'customModule23Owner',
		    ),
		    'CustomModule23 Name' => 
		    array (
		      'req' => true,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'CustomModule23 Name',
		      'dv' => 'Receipt Number',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getCustomModule23Name',
		      'setter' => 'setCustomModule23Name',
		      'name' => 'customModule23Name',
		    ),
		    'Recharge' => 
		    array (
		      'req' => false,
		      'type' => 'Double',
		      'isreadonly' => false,
		      'maxlength' => 5,
		      'label' => 'Recharge',
		      'dv' => 'Recharge',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getRecharge',
		      'setter' => 'setRecharge',
		      'name' => 'recharge',
		    ),
		    'Description' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 255,
		      'label' => 'Description',
		      'dv' => 'Description',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getDescription',
		      'setter' => 'setDescription',
		      'name' => 'description',
		    ),
		    'Current Amount' => 
		    array (
		      'req' => false,
		      'type' => 'Currency',
		      'isreadonly' => false,
		      'maxlength' => 16,
		      'label' => 'Current Amount',
		      'dv' => 'Current Amount',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getCurrentAmount',
		      'setter' => 'setCurrentAmount',
		      'name' => 'currentAmount',
		    ),
		    'Due Date' => 
		    array (
		      'req' => false,
		      'type' => 'Date',
		      'isreadonly' => false,
		      'maxlength' => 20,
		      'label' => 'Due Date',
		      'dv' => 'Due Date',
		      'customfield' => true,
		      'phpType' => '\\DateTime',
		      'getter' => 'getDueDate',
		      'setter' => 'setDueDate',
		      'name' => 'dueDate',
		    ),
		    'Academic Period' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Academic Period',
		      'dv' => 'Academic Period',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getAcademicPeriod',
		      'setter' => 'setAcademicPeriod',
		      'name' => 'academicPeriod',
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
		    'Academic Right Status' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Academic Right Status',
		      'dv' => 'Academic Right Status',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getAcademicRightStatus',
		      'setter' => 'setAcademicRightStatus',
		      'name' => 'academicRightStatus',
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
		    'Student_ID' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup ID',
		      'isreadonly' => true,
		      'maxlength' => 100,
		      'label' => 'Student_ID',
		      'dv' => 'Student_ID',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getStudentID',
		      'setter' => 'setStudentID',
		      'name' => 'studentID',
		    ),
		    'Academic Period_ID' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup ID',
		      'isreadonly' => true,
		      'maxlength' => 100,
		      'label' => 'Academic Period_ID',
		      'dv' => 'Academic Period_ID',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getAcademicPeriodID',
		      'setter' => 'setAcademicPeriodID',
		      'name' => 'academicPeriodID',
		    ),
		    'Academic Right Status_ID' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup ID',
		      'isreadonly' => true,
		      'maxlength' => 100,
		      'label' => 'Academic Right Status_ID',
		      'dv' => 'Academic Right Status_ID',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getAcademicRightStatusID',
		      'setter' => 'setAcademicRightStatusID',
		      'name' => 'academicRightStatusID',
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
		return 'CustomModule23';
	}

	/**
	 */
	public function getPluralModuleName() {
		return 'AcademicRights';
	}

	/**
	 */
	public function getSingularModuleName() {
		return 'AcademicRights';
	}
}
