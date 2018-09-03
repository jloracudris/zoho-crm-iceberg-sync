<?php
namespace TestNamespace;

/**
 */
class OnGoingProgramZohoDao extends \Wabel\Zoho\CRM\AbstractZohoDao {

	/**
	 */
	public function getBeanClassName() {
		return 'TestNamespace\\OnGoingProgram';
	}

	/**
	 */
	public function getFields() {
		return array (
		  'CustomModule4 Information' => 
		  array (
		    'Student' => 
		    array (
		      'req' => true,
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
		    'CustomModule4 Owner' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'CustomModule4 Owner',
		      'dv' => 'Ongoing Program Propietario',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getCustomModule4Owner',
		      'setter' => 'setCustomModule4Owner',
		      'name' => 'customModule4Owner',
		    ),
		    'Degree' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Degree',
		      'dv' => 'Degree',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getDegree',
		      'setter' => 'setDegree',
		      'name' => 'degree',
		    ),
		    'Current Academic Period' => 
		    array (
		      'req' => true,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 6,
		      'label' => 'Current Academic Period',
		      'dv' => 'Current Academic Period',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getCurrentAcademicPeriod',
		      'setter' => 'setCurrentAcademicPeriod',
		      'name' => 'currentAcademicPeriod',
		    ),
		    'CustomModule4 Name' => 
		    array (
		      'req' => true,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'CustomModule4 Name',
		      'dv' => 'Banner Student ID',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getCustomModule4Name',
		      'setter' => 'setCustomModule4Name',
		      'name' => 'customModule4Name',
		    ),
		    'Jornada' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 255,
		      'label' => 'Jornada',
		      'dv' => 'Jornada',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getJornada',
		      'setter' => 'setJornada',
		      'name' => 'jornada',
		    ),
		    'Type' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 255,
		      'label' => 'Type',
		      'dv' => 'Type',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getType',
		      'setter' => 'setType',
		      'name' => 'type',
		    ),
		    'Location' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 255,
		      'label' => 'Location',
		      'dv' => 'Location',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getLocation',
		      'setter' => 'setLocation',
		      'name' => 'location',
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
		    'Degree_ID' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup ID',
		      'isreadonly' => true,
		      'maxlength' => 100,
		      'label' => 'Degree_ID',
		      'dv' => 'Degree_ID',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getDegreeID',
		      'setter' => 'setDegreeID',
		      'name' => 'degreeID',
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
		return 'CustomModule4';
	}

	/**
	 */
	public function getPluralModuleName() {
		return 'OngoingPrograms';
	}

	/**
	 */
	public function getSingularModuleName() {
		return 'OnGoingProgram';
	}
}
