<?php
namespace TestNamespace;

/**
 */
class AccountZohoDao extends \Wabel\Zoho\CRM\AbstractZohoDao {

	/**
	 */
	public function getBeanClassName() {
		return 'TestNamespace\\Account';
	}

	/**
	 */
	public function getFields() {
		return array (
		  'Account Information' => 
		  array (
		    'Account Owner' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Account Owner',
		      'dv' => 'Propietario de Cuenta',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getAccountOwner',
		      'setter' => 'setAccountOwner',
		      'name' => 'accountOwner',
		    ),
		    'Rating' => 
		    array (
		      'req' => false,
		      'type' => 'Pick List',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Rating',
		      'dv' => 'Calificación',
		      'customfield' => false,
		      'values' => 
		      array (
		        0 => '-None-',
		        1 => 'Adquirido',
		        2 => 'Activo',
		        3 => 'Fallo de mercado',
		        4 => 'Proyecto cancelado',
		        5 => 'Apagar',
		      ),
		      'phpType' => 'string',
		      'getter' => 'getRating',
		      'setter' => 'setRating',
		      'name' => 'rating',
		    ),
		    'Account Name' => 
		    array (
		      'req' => true,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 200,
		      'label' => 'Account Name',
		      'dv' => 'Nombre de Cuenta',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getAccountName',
		      'setter' => 'setAccountName',
		      'name' => 'accountName',
		    ),
		    'Phone' => 
		    array (
		      'req' => false,
		      'type' => 'Phone',
		      'isreadonly' => false,
		      'maxlength' => 30,
		      'label' => 'Phone',
		      'dv' => 'Teléfono',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getPhone',
		      'setter' => 'setPhone',
		      'name' => 'phone',
		    ),
		    'Account Code' => 
		    array (
		      'req' => true,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 255,
		      'label' => 'Account Code',
		      'dv' => 'Account Code',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getAccountCode',
		      'setter' => 'setAccountCode',
		      'name' => 'accountCode',
		    ),
		    'Fax' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 30,
		      'label' => 'Fax',
		      'dv' => 'Fax',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getFax',
		      'setter' => 'setFax',
		      'name' => 'fax',
		    ),
		    'Account Site' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 100,
		      'label' => 'Account Site',
		      'dv' => 'Sitio de Cuenta',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getAccountSite',
		      'setter' => 'setAccountSite',
		      'name' => 'accountSite',
		    ),
		    'Website' => 
		    array (
		      'req' => false,
		      'type' => 'Website',
		      'isreadonly' => false,
		      'maxlength' => 255,
		      'label' => 'Website',
		      'dv' => 'Sitio web',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getWebsite',
		      'setter' => 'setWebsite',
		      'name' => 'website',
		    ),
		    'Parent Account' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup',
		      'isreadonly' => false,
		      'maxlength' => 100,
		      'label' => 'Parent Account',
		      'dv' => 'Cuenta principal',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getParentAccount',
		      'setter' => 'setParentAccount',
		      'name' => 'parentAccount',
		    ),
		    'Ticker Symbol' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 30,
		      'label' => 'Ticker Symbol',
		      'dv' => 'Símbolo del valor',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getTickerSymbol',
		      'setter' => 'setTickerSymbol',
		      'name' => 'tickerSymbol',
		    ),
		    'Account Number' => 
		    array (
		      'req' => false,
		      'type' => 'BigInt',
		      'isreadonly' => false,
		      'maxlength' => 18,
		      'label' => 'Account Number',
		      'dv' => 'Número de Cuenta',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getAccountNumber',
		      'setter' => 'setAccountNumber',
		      'name' => 'accountNumber',
		    ),
		    'Ownership' => 
		    array (
		      'req' => false,
		      'type' => 'Pick List',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Ownership',
		      'dv' => 'Propietario',
		      'customfield' => false,
		      'values' => 
		      array (
		        0 => '-None-',
		        1 => 'Otro',
		        2 => 'Privado',
		        3 => 'Público',
		        4 => 'Subsidiario',
		      ),
		      'phpType' => 'string',
		      'getter' => 'getOwnership',
		      'setter' => 'setOwnership',
		      'name' => 'ownership',
		    ),
		    'Account Type' => 
		    array (
		      'req' => false,
		      'type' => 'Pick List',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Account Type',
		      'dv' => 'Tipo de Cuenta',
		      'customfield' => false,
		      'values' => 
		      array (
		        0 => '-None-',
		        1 => 'Analista',
		        2 => 'Competidor',
		        3 => 'Cliente',
		        4 => 'Distribuidor',
		        5 => 'Integrador',
		        6 => 'Inversor',
		        7 => 'Otro',
		        8 => 'Socio',
		        9 => 'Prensa',
		        10 => 'Posible',
		        11 => 'Revendedor',
		        12 => 'Proveedor',
		      ),
		      'phpType' => 'string',
		      'getter' => 'getAccountType',
		      'setter' => 'setAccountType',
		      'name' => 'accountType',
		    ),
		    'Employees' => 
		    array (
		      'req' => false,
		      'type' => 'Integer',
		      'isreadonly' => false,
		      'maxlength' => 9,
		      'label' => 'Employees',
		      'dv' => 'Empleados',
		      'customfield' => false,
		      'phpType' => 'int',
		      'getter' => 'getEmployees',
		      'setter' => 'setEmployees',
		      'name' => 'employees',
		    ),
		    'Industry' => 
		    array (
		      'req' => false,
		      'type' => 'Pick List',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Industry',
		      'dv' => 'Sector',
		      'customfield' => false,
		      'values' => 
		      array (
		        0 => '-None-',
		        1 => 'ASP (Proveedor de servicios de aplicaciones)',
		        2 => 'OEM de datos/telecom.',
		        3 => 'ERP (Planificación de recursos de empresa)',
		        4 => 'Gobierno/Ejército',
		        5 => 'Empresa grande',
		        6 => 'ISV de gestión',
		        7 => 'MSP (proveedor de servicios de gestión)',
		        8 => 'Equipos de redes empresa',
		        9 => 'ISV de no gestión',
		        10 => 'Gestión de redes ópticas',
		        11 => 'Proveedor de servicios',
		        12 => 'Empresa pequeña/mediana',
		        13 => 'Equipo de almacenamiento',
		        14 => 'Proveedor de servicios de almacenamiento',
		        15 => 'Integrador de sistemas',
		        16 => 'Sector de servicios inalámbricos',
		      ),
		      'phpType' => 'string',
		      'getter' => 'getIndustry',
		      'setter' => 'setIndustry',
		      'name' => 'industry',
		    ),
		    'SIC Code' => 
		    array (
		      'req' => false,
		      'type' => 'Integer',
		      'isreadonly' => false,
		      'maxlength' => 9,
		      'label' => 'SIC Code',
		      'dv' => 'Código SIC',
		      'customfield' => false,
		      'phpType' => 'int',
		      'getter' => 'getSICCode',
		      'setter' => 'setSICCode',
		      'name' => 'sICCode',
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
		    'Annual Revenue' => 
		    array (
		      'req' => false,
		      'type' => 'Currency',
		      'isreadonly' => false,
		      'maxlength' => 16,
		      'label' => 'Annual Revenue',
		      'dv' => 'Ingresos anuales',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getAnnualRevenue',
		      'setter' => 'setAnnualRevenue',
		      'name' => 'annualRevenue',
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
		    'Box Folder ID' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 255,
		      'label' => 'Box Folder ID',
		      'dv' => 'Box Folder ID',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getBoxFolderID',
		      'setter' => 'setBoxFolderID',
		      'name' => 'boxFolderID',
		    ),
		    'SMOWNERID' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup ID',
		      'isreadonly' => true,
		      'maxlength' => 100,
		      'label' => 'SMOWNERID',
		      'dv' => 'SMOWNERID',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getSMOWNERID',
		      'setter' => 'setSMOWNERID',
		      'name' => 'sMOWNERID',
		    ),
		    'PARENTACCOUNTID' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup ID',
		      'isreadonly' => true,
		      'maxlength' => 100,
		      'label' => 'PARENTACCOUNTID',
		      'dv' => 'PARENTACCOUNTID',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getPARENTACCOUNTID',
		      'setter' => 'setPARENTACCOUNTID',
		      'name' => 'pARENTACCOUNTID',
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
		  ),
		  'Address Information' => 
		  array (
		    'Billing Street' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 250,
		      'label' => 'Billing Street',
		      'dv' => 'Domicilio de facturación',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getBillingStreet',
		      'setter' => 'setBillingStreet',
		      'name' => 'billingStreet',
		    ),
		    'Shipping Street' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 250,
		      'label' => 'Shipping Street',
		      'dv' => 'Domicilio de envío',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getShippingStreet',
		      'setter' => 'setShippingStreet',
		      'name' => 'shippingStreet',
		    ),
		    'Billing City' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 30,
		      'label' => 'Billing City',
		      'dv' => 'Ciudad de facturación',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getBillingCity',
		      'setter' => 'setBillingCity',
		      'name' => 'billingCity',
		    ),
		    'Shipping City' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 30,
		      'label' => 'Shipping City',
		      'dv' => 'Ciudad de envío',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getShippingCity',
		      'setter' => 'setShippingCity',
		      'name' => 'shippingCity',
		    ),
		    'Billing State' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 30,
		      'label' => 'Billing State',
		      'dv' => 'Estado de facturación',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getBillingState',
		      'setter' => 'setBillingState',
		      'name' => 'billingState',
		    ),
		    'Shipping State' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 30,
		      'label' => 'Shipping State',
		      'dv' => 'Estado de envío',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getShippingState',
		      'setter' => 'setShippingState',
		      'name' => 'shippingState',
		    ),
		    'Billing Code' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 30,
		      'label' => 'Billing Code',
		      'dv' => 'Código de facturación',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getBillingCode',
		      'setter' => 'setBillingCode',
		      'name' => 'billingCode',
		    ),
		    'Shipping Code' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 30,
		      'label' => 'Shipping Code',
		      'dv' => 'Código de envío',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getShippingCode',
		      'setter' => 'setShippingCode',
		      'name' => 'shippingCode',
		    ),
		    'Billing Country' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 30,
		      'label' => 'Billing Country',
		      'dv' => 'País de facturación',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getBillingCountry',
		      'setter' => 'setBillingCountry',
		      'name' => 'billingCountry',
		    ),
		    'Shipping Country' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 30,
		      'label' => 'Shipping Country',
		      'dv' => 'País de envío',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getShippingCountry',
		      'setter' => 'setShippingCountry',
		      'name' => 'shippingCountry',
		    ),
		  ),
		  'Description Information' => 
		  array (
		    'Description' => 
		    array (
		      'req' => false,
		      'type' => 'TextArea',
		      'isreadonly' => false,
		      'maxlength' => 32000,
		      'label' => 'Description',
		      'dv' => 'Descripción',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getDescription',
		      'setter' => 'setDescription',
		      'name' => 'description',
		    ),
		  ),
		);
	}

	/**
	 */
	public function getModule() {
		return 'Accounts';
	}

	/**
	 */
	public function getPluralModuleName() {
		return 'Accounts';
	}

	/**
	 */
	public function getSingularModuleName() {
		return 'Account';
	}
}
