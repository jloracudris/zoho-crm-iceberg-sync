<?php
namespace TestNamespace;

/**
 */
class AcademicRightStatusZohoDao extends \Wabel\Zoho\CRM\AbstractZohoDao {

	/**
	 */
	public function getBeanClassName() {
		return 'TestNamespace\\AcademicRightStatus';
	}

	/**
	 */
	public function getFields() {
		return array (
		  'CustomModule26 Information' => 
		  array (
		    'Academic Rights Code' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 255,
		      'label' => 'Academic Rights Code',
		      'dv' => 'Academic Rights Code',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getAcademicRightsCode',
		      'setter' => 'setAcademicRightsCode',
		      'name' => 'academicRightsCode',
		    ),
		    'CustomModule26 Owner' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'CustomModule26 Owner',
		      'dv' => 'Academic Rights Status Propietario',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getCustomModule26Owner',
		      'setter' => 'setCustomModule26Owner',
		      'name' => 'customModule26Owner',
		    ),
		    'CustomModule26 Name' => 
		    array (
		      'req' => true,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'CustomModule26 Name',
		      'dv' => 'Nombre de Academic Rights Status',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getCustomModule26Name',
		      'setter' => 'setCustomModule26Name',
		      'name' => 'customModule26Name',
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
		return 'CustomModule26';
	}

	/**
	 */
	public function getPluralModuleName() {
		return 'AcademicRightStatus';
	}

	/**
	 */
	public function getSingularModuleName() {
		return 'AcademicRightStatus';
	}
}
