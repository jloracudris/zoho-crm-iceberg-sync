<?php
namespace TestNamespace;

/**
 */
class ProgramZohoDao extends \Wabel\Zoho\CRM\AbstractZohoDao {

	/**
	 */
	public function getBeanClassName() {
		return 'TestNamespace\\Program';
	}

	/**
	 */
	public function getFields() {
		return array (
		  'Product Information' => 
		  array (
		    'Product Owner' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Product Owner',
		      'dv' => 'Propietario de Degree',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getProductOwner',
		      'setter' => 'setProductOwner',
		      'name' => 'productOwner',
		    ),
		    'Product Name' => 
		    array (
		      'req' => true,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Product Name',
		      'dv' => 'Nombre de Degree',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getProductName',
		      'setter' => 'setProductName',
		      'name' => 'productName',
		    ),
		    'Product Code' => 
		    array (
		      'req' => true,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Product Code',
		      'dv' => 'Código de Degree',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getProductCode',
		      'setter' => 'setProductCode',
		      'name' => 'productCode',
		    ),
		    'Vendor Name' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Vendor Name',
		      'dv' => 'Nombre de Proveedor',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getVendorName',
		      'setter' => 'setVendorName',
		      'name' => 'vendorName',
		    ),
		    'Product Active' => 
		    array (
		      'req' => false,
		      'type' => 'Boolean',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Product Active',
		      'dv' => 'Degree Activo',
		      'customfield' => false,
		      'phpType' => 'bool',
		      'getter' => 'getProductActive',
		      'setter' => 'setProductActive',
		      'name' => 'productActive',
		    ),
		    'Manufacturer' => 
		    array (
		      'req' => false,
		      'type' => 'Pick List',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Manufacturer',
		      'dv' => 'Fabricante',
		      'customfield' => false,
		      'values' => 
		      array (
		        0 => '-None-',
		        1 => 'AltvetPet Inc.',
		        2 => 'LexPon Inc.',
		        3 => 'MetBeat Corp.',
		      ),
		      'phpType' => 'string',
		      'getter' => 'getManufacturer',
		      'setter' => 'setManufacturer',
		      'name' => 'manufacturer',
		    ),
		    'Product Category' => 
		    array (
		      'req' => false,
		      'type' => 'Pick List',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Product Category',
		      'dv' => 'Categoría de Degree',
		      'customfield' => false,
		      'values' => 
		      array (
		        0 => '-None-',
		        1 => 'Hardware',
		        2 => 'Software',
		        3 => 'Aplicaciones CRM',
		      ),
		      'phpType' => 'string',
		      'getter' => 'getProductCategory',
		      'setter' => 'setProductCategory',
		      'name' => 'productCategory',
		    ),
		    'Sales Start Date' => 
		    array (
		      'req' => false,
		      'type' => 'Date',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Sales Start Date',
		      'dv' => 'Fecha de inicio de las ventas',
		      'customfield' => false,
		      'phpType' => '\\DateTime',
		      'getter' => 'getSalesStartDate',
		      'setter' => 'setSalesStartDate',
		      'name' => 'salesStartDate',
		    ),
		    'Faculty' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Faculty',
		      'dv' => 'Faculty',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getFaculty',
		      'setter' => 'setFaculty',
		      'name' => 'faculty',
		    ),
		    'Support Start Date' => 
		    array (
		      'req' => false,
		      'type' => 'Date',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Support Start Date',
		      'dv' => 'Fecha de inicio de asistencia',
		      'customfield' => false,
		      'phpType' => '\\DateTime',
		      'getter' => 'getSupportStartDate',
		      'setter' => 'setSupportStartDate',
		      'name' => 'supportStartDate',
		    ),
		    'Sales End Date' => 
		    array (
		      'req' => false,
		      'type' => 'Date',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Sales End Date',
		      'dv' => 'Fecha de finalización de las ventas',
		      'customfield' => false,
		      'phpType' => '\\DateTime',
		      'getter' => 'getSalesEndDate',
		      'setter' => 'setSalesEndDate',
		      'name' => 'salesEndDate',
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
		    'Support Expiry Date' => 
		    array (
		      'req' => false,
		      'type' => 'Date',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Support Expiry Date',
		      'dv' => 'Fecha de finalización de asistencia',
		      'customfield' => false,
		      'phpType' => '\\DateTime',
		      'getter' => 'getSupportExpiryDate',
		      'setter' => 'setSupportExpiryDate',
		      'name' => 'supportExpiryDate',
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
		    'Faculty_ID' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup ID',
		      'isreadonly' => true,
		      'maxlength' => 100,
		      'label' => 'Faculty_ID',
		      'dv' => 'Faculty_ID',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getFacultyID',
		      'setter' => 'setFacultyID',
		      'name' => 'facultyID',
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
		  'Price Information' => 
		  array (
		    'Unit Price' => 
		    array (
		      'req' => false,
		      'type' => 'Currency',
		      'isreadonly' => false,
		      'maxlength' => 16,
		      'label' => 'Unit Price',
		      'dv' => 'Precio por unidad',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getUnitPrice',
		      'setter' => 'setUnitPrice',
		      'name' => 'unitPrice',
		    ),
		    'Commission Rate' => 
		    array (
		      'req' => false,
		      'type' => 'Currency',
		      'isreadonly' => false,
		      'maxlength' => 16,
		      'label' => 'Commission Rate',
		      'dv' => 'Comisión',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getCommissionRate',
		      'setter' => 'setCommissionRate',
		      'name' => 'commissionRate',
		    ),
		    'Tax' => 
		    array (
		      'req' => false,
		      'type' => 'Multiselect Pick List',
		      'isreadonly' => false,
		      'maxlength' => 1000,
		      'label' => 'Tax',
		      'dv' => 'Impuesto',
		      'customfield' => false,
		      'values' => 
		      array (
		        0 => 'Impuesto de ventas',
		        1 => 'IVA',
		      ),
		      'phpType' => 'string',
		      'getter' => 'getTax',
		      'setter' => 'setTax',
		      'name' => 'tax',
		    ),
		    'Taxable' => 
		    array (
		      'req' => false,
		      'type' => 'Boolean',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Taxable',
		      'dv' => 'Gravable',
		      'customfield' => false,
		      'phpType' => 'bool',
		      'getter' => 'getTaxable',
		      'setter' => 'setTaxable',
		      'name' => 'taxable',
		    ),
		  ),
		  'Stock Information' => 
		  array (
		    'Usage Unit' => 
		    array (
		      'req' => false,
		      'type' => 'Pick List',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'Usage Unit',
		      'dv' => 'Unidad de uso',
		      'customfield' => false,
		      'values' => 
		      array (
		        0 => 'Caja',
		        1 => 'Cartón',
		        2 => 'Docena',
		        3 => 'Cada',
		        4 => 'Hora(s)',
		        5 => 'Impresiones',
		        6 => 'Lb',
		        7 => 'Lun',
		        8 => 'Paquete',
		        9 => 'Páginas',
		        10 => 'Piezas',
		        11 => 'Cantidad',
		        12 => 'Resmas',
		        13 => 'Hoja',
		        14 => 'Cuaderno en espiral',
		        15 => 'Pies cuadrados',
		      ),
		      'phpType' => 'string',
		      'getter' => 'getUsageUnit',
		      'setter' => 'setUsageUnit',
		      'name' => 'usageUnit',
		    ),
		    'Qty Ordered' => 
		    array (
		      'req' => false,
		      'type' => 'Double',
		      'isreadonly' => false,
		      'maxlength' => 9,
		      'label' => 'Qty Ordered',
		      'dv' => 'Cant. pedida',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getQtyOrdered',
		      'setter' => 'setQtyOrdered',
		      'name' => 'qtyOrdered',
		    ),
		    'Qty in Stock' => 
		    array (
		      'req' => false,
		      'type' => 'Double',
		      'isreadonly' => false,
		      'maxlength' => 9,
		      'label' => 'Qty in Stock',
		      'dv' => 'Cantidad en existencias',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getQtyInStock',
		      'setter' => 'setQtyInStock',
		      'name' => 'qtyInStock',
		    ),
		    'Reorder Level' => 
		    array (
		      'req' => false,
		      'type' => 'Double',
		      'isreadonly' => false,
		      'maxlength' => 9,
		      'label' => 'Reorder Level',
		      'dv' => 'Nivel de reposición',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getReorderLevel',
		      'setter' => 'setReorderLevel',
		      'name' => 'reorderLevel',
		    ),
		    'Handler' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup',
		      'isreadonly' => false,
		      'maxlength' => 19,
		      'label' => 'Handler',
		      'dv' => 'Responsable',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getHandler',
		      'setter' => 'setHandler',
		      'name' => 'handler',
		    ),
		    'Qty in Demand' => 
		    array (
		      'req' => false,
		      'type' => 'Double',
		      'isreadonly' => false,
		      'maxlength' => 9,
		      'label' => 'Qty in Demand',
		      'dv' => 'Cantidad en demanda',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getQtyInDemand',
		      'setter' => 'setQtyInDemand',
		      'name' => 'qtyInDemand',
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
		return 'Products';
	}

	/**
	 */
	public function getPluralModuleName() {
		return 'Programs';
	}

	/**
	 */
	public function getSingularModuleName() {
		return 'Program';
	}
}
