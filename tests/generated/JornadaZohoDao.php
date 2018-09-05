<?php
namespace TestNamespace;

/**
 */
class JornadaZohoDao extends \Wabel\Zoho\CRM\AbstractZohoDao {

	/**
	 */
	public function getBeanClassName() {
		return 'TestNamespace\\Jornada';
	}

	/**
	 */
	public function getFields() {
		return array (
		  'CustomModule19 Information' => 
		  array (
		    'CustomModule19 Name' => 
		    array (
		      'req' => true,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'CustomModule19 Name',
		      'dv' => 'Jornada Code',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getCustomModule19Name',
		      'setter' => 'setCustomModule19Name',
		      'name' => 'customModule19Name',
		    ),
		    'CustomModule19 Owner' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'CustomModule19 Owner',
		      'dv' => 'Jornada Propietario',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getCustomModule19Owner',
		      'setter' => 'setCustomModule19Owner',
		      'name' => 'customModule19Owner',
		    ),
		    'Jornada Name' => 
		    array (
		      'req' => true,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 255,
		      'label' => 'Jornada Name',
		      'dv' => 'Jornada Name',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getJornadaName',
		      'setter' => 'setJornadaName',
		      'name' => 'jornadaName',
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
		return 'CustomModule19';
	}

	/**
	 */
	public function getPluralModuleName() {
		return 'Jornadas';
	}

	/**
	 */
	public function getSingularModuleName() {
		return 'Jornada';
	}
}
