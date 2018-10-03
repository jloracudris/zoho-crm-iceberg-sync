<?php
namespace TestNamespace;

/**
 */
class LoanZohoDao extends \Wabel\Zoho\CRM\AbstractZohoDao {

	/**
	 */
	public function getBeanClassName() {
		return 'TestNamespace\\Loan';
	}

	/**
	 */
	public function getFields() {
		return array (
		  'CustomModule5 Information' => 
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
		    'CustomModule5 Owner' => 
		    array (
		      'req' => false,
		      'type' => 'Lookup',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'CustomModule5 Owner',
		      'dv' => 'Loan Propietario',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getCustomModule5Owner',
		      'setter' => 'setCustomModule5Owner',
		      'name' => 'customModule5Owner',
		    ),
		    'CustomModule5 Name' => 
		    array (
		      'req' => true,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 120,
		      'label' => 'CustomModule5 Name',
		      'dv' => 'Nombre de Loan',
		      'customfield' => false,
		      'phpType' => 'string',
		      'getter' => 'getCustomModule5Name',
		      'setter' => 'setCustomModule5Name',
		      'name' => 'customModule5Name',
		    ),
		    'Loan Amount' => 
		    array (
		      'req' => false,
		      'type' => 'Currency',
		      'isreadonly' => false,
		      'maxlength' => 16,
		      'label' => 'Loan Amount',
		      'dv' => 'Loan Amount',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getLoanAmount',
		      'setter' => 'setLoanAmount',
		      'name' => 'loanAmount',
		    ),
		    'Document' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 255,
		      'label' => 'Document',
		      'dv' => 'Document',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getDocument',
		      'setter' => 'setDocument',
		      'name' => 'document',
		    ),
		    'Down Payment' => 
		    array (
		      'req' => false,
		      'type' => 'Currency',
		      'isreadonly' => false,
		      'maxlength' => 16,
		      'label' => 'Down Payment',
		      'dv' => 'Down Payment',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getDownPayment',
		      'setter' => 'setDownPayment',
		      'name' => 'downPayment',
		    ),
		    'Academic Period' => 
		    array (
		      'req' => true,
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
		    'Term' => 
		    array (
		      'req' => false,
		      'type' => 'Integer',
		      'isreadonly' => false,
		      'maxlength' => 9,
		      'label' => 'Term',
		      'dv' => 'Term',
		      'customfield' => true,
		      'phpType' => 'int',
		      'getter' => 'getTerm',
		      'setter' => 'setTerm',
		      'name' => 'term',
		    ),
		    'Application Date' => 
		    array (
		      'req' => false,
		      'type' => 'Date',
		      'isreadonly' => false,
		      'maxlength' => 20,
		      'label' => 'Application Date',
		      'dv' => 'Application Date',
		      'customfield' => true,
		      'phpType' => '\\DateTime',
		      'getter' => 'getApplicationDate',
		      'setter' => 'setApplicationDate',
		      'name' => 'applicationDate',
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
		    'Amount of Fees' => 
		    array (
		      'req' => false,
		      'type' => 'Currency',
		      'isreadonly' => false,
		      'maxlength' => 16,
		      'label' => 'Amount of Fees',
		      'dv' => 'Amount of Fees',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getAmountOfFees',
		      'setter' => 'setAmountOfFees',
		      'name' => 'amountOfFees',
		    ),
		    'Approval Date' => 
		    array (
		      'req' => false,
		      'type' => 'Date',
		      'isreadonly' => false,
		      'maxlength' => 20,
		      'label' => 'Approval Date',
		      'dv' => 'Approval Date',
		      'customfield' => true,
		      'phpType' => '\\DateTime',
		      'getter' => 'getApprovalDate',
		      'setter' => 'setApprovalDate',
		      'name' => 'approvalDate',
		    ),
		    'Fee Amount' => 
		    array (
		      'req' => false,
		      'type' => 'Currency',
		      'isreadonly' => false,
		      'maxlength' => 16,
		      'label' => 'Fee Amount',
		      'dv' => 'Fee Amount',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getFeeAmount',
		      'setter' => 'setFeeAmount',
		      'name' => 'feeAmount',
		    ),
		    'Status' => 
		    array (
		      'req' => false,
		      'type' => 'Text',
		      'isreadonly' => false,
		      'maxlength' => 255,
		      'label' => 'Status',
		      'dv' => 'Status',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getStatus',
		      'setter' => 'setStatus',
		      'name' => 'status',
		    ),
		    'Paid Amount' => 
		    array (
		      'req' => false,
		      'type' => 'Currency',
		      'isreadonly' => false,
		      'maxlength' => 16,
		      'label' => 'Paid Amount',
		      'dv' => 'Paid Amount',
		      'customfield' => true,
		      'phpType' => 'string',
		      'getter' => 'getPaidAmount',
		      'setter' => 'setPaidAmount',
		      'name' => 'paidAmount',
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
		return 'CustomModule5';
	}

	/**
	 */
	public function getPluralModuleName() {
		return 'Loans';
	}

	/**
	 */
	public function getSingularModuleName() {
		return 'Loan';
	}
}
