<?php
namespace TestNamespace;

/**
 */
class Loan implements \Wabel\Zoho\CRM\ZohoBeanInterface {

	/**
	 * Zoho field Academic Period
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $academicPeriod;

	/**
	 * Zoho field Academic Period_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $academicPeriodID;

	/**
	 * Zoho field Amount of Fees
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $amountOfFees;

	/**
	 * Zoho field Application Date
	 * Type: Date
	 * Read only: false
	 * Max length: 20
	 * Custom field: true
	 *
	 * @var \DateTimeInterface
	 */
	protected $applicationDate;

	/**
	 * Zoho field Approval Date
	 * Type: Date
	 * Read only: false
	 * Max length: 20
	 * Custom field: true
	 *
	 * @var \DateTimeInterface
	 */
	protected $approvalDate;

	/**
	 * Zoho field Created By
	 * Type: OwnerLookup
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $createdBy;

	/**
	 * The time the record was created in Zoho
	 * Type: DateTime
	 *
	 * @var \DateTime
	 */
	protected $createdTime;

	/**
	 * Zoho field Currency
	 * Type: Pick List
	 * Read only: false
	 * Max length: 5
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $currency;

	/**
	 * Zoho field CustomModule5 Name
	 * Type: Text
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $customModule5Name;

	/**
	 * Zoho field CustomModule5 Owner
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $customModule5Owner;

	/**
	 * Whether 'academicPeriod' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyAcademicPeriod = false;

	/**
	 * Whether 'academicPeriodID' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyAcademicPeriodID = false;

	/**
	 * Whether 'amountOfFees' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyAmountOfFees = false;

	/**
	 * Whether 'applicationDate' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyApplicationDate = false;

	/**
	 * Whether 'approvalDate' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyApprovalDate = false;

	/**
	 * Whether 'createdBy' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCreatedBy = false;

	/**
	 * Whether 'createdTime' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCreatedTime = false;

	/**
	 * Whether 'currency' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCurrency = false;

	/**
	 * Whether 'customModule5Name' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCustomModule5Name = false;

	/**
	 * Whether 'customModule5Owner' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCustomModule5Owner = false;

	/**
	 * Whether 'document' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyDocument = false;

	/**
	 * Whether 'downPayment' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyDownPayment = false;

	/**
	 * Whether 'feeAmount' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyFeeAmount = false;

	/**
	 * Whether 'lastActivityTime' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyLastActivityTime = false;

	/**
	 * Whether 'layout' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyLayout = false;

	/**
	 * Whether 'loanAmount' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyLoanAmount = false;

	/**
	 * Whether 'modifiedBy' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyModifiedBy = false;

	/**
	 * Whether 'modifiedTime' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyModifiedTime = false;

	/**
	 * Whether 'paidAmount' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyPaidAmount = false;

	/**
	 * Whether 'status' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyStatus = false;

	/**
	 * Whether 'student' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyStudent = false;

	/**
	 * Whether 'studentID' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyStudentID = false;

	/**
	 * Whether 'tag' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyTag = false;

	/**
	 * Whether 'term' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyTerm = false;

	/**
	 * Whether 'zohoId' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyZohoId = false;

	/**
	 * Zoho field Document
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $document;

	/**
	 * Zoho field Down Payment
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $downPayment;

	/**
	 * Zoho field Fee Amount
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $feeAmount;

	/**
	 * Zoho field Last Activity Time
	 * Type: DateTime
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 *
	 * @var \DateTimeInterface
	 */
	protected $lastActivityTime;

	/**
	 * The Layout of this record in Zoho
	 * Type: string
	 *
	 * @var string
	 */
	protected $layout;

	/**
	 * Zoho field Loan Amount
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $loanAmount;

	/**
	 * Zoho field Modified By
	 * Type: OwnerLookup
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $modifiedBy;

	/**
	 * The last time the record was modified in Zoho
	 * Type: DateTime
	 *
	 * @var \DateTime
	 */
	protected $modifiedTime;

	/**
	 * Zoho field Paid Amount
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $paidAmount;

	/**
	 * Zoho field Status
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $status;

	/**
	 * Zoho field Student
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $student;

	/**
	 * Zoho field Student_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $studentID;

	/**
	 * Zoho field Tag
	 * Type: Text
	 * Read only: false
	 * Max length: 2000
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $tag;

	/**
	 * Zoho field Term
	 * Type: Integer
	 * Read only: false
	 * Max length: 9
	 * Custom field: true
	 *
	 * @var int
	 */
	protected $term;

	/**
	 * The ID of this record in Zoho
	 * Type: string
	 *
	 * @var string
	 */
	protected $zohoId;

	/**
	 */
	public function __construct() {
	}

	/**
	 * Get zoho field Academic Period
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 */
	public function getAcademicPeriod() {
		return $this->academicPeriod;
	}

	/**
	 * Get zoho field Academic Period_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 */
	public function getAcademicPeriodID() {
		return $this->academicPeriodID;
	}

	/**
	 * Get zoho field Amount of Fees
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: true
	 */
	public function getAmountOfFees() {
		return $this->amountOfFees;
	}

	/**
	 * Get zoho field Application Date
	 * Type: Date
	 * Read only: false
	 * Max length: 20
	 * Custom field: true
	 */
	public function getApplicationDate() {
		return $this->applicationDate;
	}

	/**
	 * Get zoho field Approval Date
	 * Type: Date
	 * Read only: false
	 * Max length: 20
	 * Custom field: true
	 */
	public function getApprovalDate() {
		return $this->approvalDate;
	}

	/**
	 * Get zoho field Created By
	 * Type: OwnerLookup
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}

	/**
	 * Get the time the record was created in Zoho
	 * Type: DateTime
	 */
	public function getCreatedTime() {
		return $this->createdTime;
	}

	/**
	 * Get zoho field Currency
	 * Type: Pick List
	 * Read only: false
	 * Max length: 5
	 * Custom field: false
	 */
	public function getCurrency() {
		return $this->currency;
	}

	/**
	 * Get zoho field CustomModule5 Name
	 * Type: Text
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getCustomModule5Name() {
		return $this->customModule5Name;
	}

	/**
	 * Get zoho field CustomModule5 Owner
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getCustomModule5Owner() {
		return $this->customModule5Owner;
	}

	/**
	 * Get zoho field Document
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 */
	public function getDocument() {
		return $this->document;
	}

	/**
	 * Get zoho field Down Payment
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: true
	 */
	public function getDownPayment() {
		return $this->downPayment;
	}

	/**
	 * Get zoho field Fee Amount
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: true
	 */
	public function getFeeAmount() {
		return $this->feeAmount;
	}

	/**
	 * Get zoho field Last Activity Time
	 * Type: DateTime
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 */
	public function getLastActivityTime() {
		return $this->lastActivityTime;
	}

	/**
	 * Get the Layout of this record in Zoho
	 * Type: string
	 */
	public function getLayout() {
		return $this->layout;
	}

	/**
	 * Get zoho field Loan Amount
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: true
	 */
	public function getLoanAmount() {
		return $this->loanAmount;
	}

	/**
	 * Get zoho field Modified By
	 * Type: OwnerLookup
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 */
	public function getModifiedBy() {
		return $this->modifiedBy;
	}

	/**
	 * Get the last time the record was modified in Zoho
	 * Type: DateTime
	 */
	public function getModifiedTime() {
		return $this->modifiedTime;
	}

	/**
	 * Get zoho field Paid Amount
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: true
	 */
	public function getPaidAmount() {
		return $this->paidAmount;
	}

	/**
	 * Get zoho field Status
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * Get zoho field Student
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 */
	public function getStudent() {
		return $this->student;
	}

	/**
	 * Get zoho field Student_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 */
	public function getStudentID() {
		return $this->studentID;
	}

	/**
	 * Get zoho field Tag
	 * Type: Text
	 * Read only: false
	 * Max length: 2000
	 * Custom field: false
	 */
	public function getTag() {
		return $this->tag;
	}

	/**
	 * Get zoho field Term
	 * Type: Integer
	 * Read only: false
	 * Max length: 9
	 * Custom field: true
	 */
	public function getTerm() {
		return $this->term;
	}

	/**
	 * Get the ID of this record in Zoho
	 * Type: string
	 */
	public function getZohoId() {
		return $this->zohoId;
	}

	/**
	 * Returns whether a property is changed or not.
	 *
	 * @param $name
	 * @return bool
	 */
	public function isDirty($name) {
		$propertyName = 'dirty'.ucfirst($name);
		return $this->$propertyName;
	}

	/**
	 * Set zoho field Academic Period
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $academicPeriod
	 */
	public function setAcademicPeriod($academicPeriod) {
		$this->academicPeriod = $academicPeriod;
		$this->dirtyAcademicPeriod = true;
		return $this;
	}

	/**
	 * Set zoho field Academic Period_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $academicPeriodID
	 */
	public function setAcademicPeriodID($academicPeriodID) {
		$this->academicPeriodID = $academicPeriodID;
		$this->dirtyAcademicPeriodID = true;
		return $this;
	}

	/**
	 * Set zoho field Amount of Fees
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: true
	 *
	 * @param string $amountOfFees
	 */
	public function setAmountOfFees($amountOfFees) {
		$this->amountOfFees = $amountOfFees;
		$this->dirtyAmountOfFees = true;
		return $this;
	}

	/**
	 * Set zoho field Application Date
	 * Type: Date
	 * Read only: false
	 * Max length: 20
	 * Custom field: true
	 *
	 * @param \DateTimeInterface $applicationDate
	 */
	public function setApplicationDate(\DateTimeInterface $applicationDate = null) {
		$this->applicationDate = $applicationDate;
		$this->dirtyApplicationDate = true;
		return $this;
	}

	/**
	 * Set zoho field Approval Date
	 * Type: Date
	 * Read only: false
	 * Max length: 20
	 * Custom field: true
	 *
	 * @param \DateTimeInterface $approvalDate
	 */
	public function setApprovalDate(\DateTimeInterface $approvalDate = null) {
		$this->approvalDate = $approvalDate;
		$this->dirtyApprovalDate = true;
		return $this;
	}

	/**
	 * Set zoho field Created By
	 * Type: OwnerLookup
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 *
	 * @param string $createdBy
	 */
	public function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;
		$this->dirtyCreatedBy = true;
		return $this;
	}

	/**
	 * Set the time the record was created in Zoho
	 * Type: DateTime
	 *
	 * @param \DateTime $createdTime
	 */
	public function setCreatedTime(\DateTime $createdTime) {
		$this->createdTime = $createdTime;
		$this->dirtyCreatedTime = true;
		return $this;
	}

	/**
	 * Set zoho field Currency
	 * Type: Pick List
	 * Read only: false
	 * Max length: 5
	 * Custom field: false
	 *
	 * @param string $currency
	 */
	public function setCurrency($currency) {
		$this->currency = $currency;
		$this->dirtyCurrency = true;
		return $this;
	}

	/**
	 * Set zoho field CustomModule5 Name
	 * Type: Text
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $customModule5Name
	 */
	public function setCustomModule5Name($customModule5Name) {
		$this->customModule5Name = $customModule5Name;
		$this->dirtyCustomModule5Name = true;
		return $this;
	}

	/**
	 * Set zoho field CustomModule5 Owner
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $customModule5Owner
	 */
	public function setCustomModule5Owner($customModule5Owner) {
		$this->customModule5Owner = $customModule5Owner;
		$this->dirtyCustomModule5Owner = true;
		return $this;
	}

	/**
	 * Set zoho field Document
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 *
	 * @param string $document
	 */
	public function setDocument($document) {
		$this->document = $document;
		$this->dirtyDocument = true;
		return $this;
	}

	/**
	 * Set zoho field Down Payment
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: true
	 *
	 * @param string $downPayment
	 */
	public function setDownPayment($downPayment) {
		$this->downPayment = $downPayment;
		$this->dirtyDownPayment = true;
		return $this;
	}

	/**
	 * Set zoho field Fee Amount
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: true
	 *
	 * @param string $feeAmount
	 */
	public function setFeeAmount($feeAmount) {
		$this->feeAmount = $feeAmount;
		$this->dirtyFeeAmount = true;
		return $this;
	}

	/**
	 * Set zoho field Last Activity Time
	 * Type: DateTime
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 *
	 * @param \DateTimeInterface $lastActivityTime
	 */
	public function setLastActivityTime(\DateTimeInterface $lastActivityTime = null) {
		$this->lastActivityTime = $lastActivityTime;
		$this->dirtyLastActivityTime = true;
		return $this;
	}

	/**
	 * Set the Layout of this record in Zoho
	 * Type: string
	 *
	 * @param string $layout
	 */
	public function setLayout($layout) {
		$this->layout = $layout;
		$this->dirtyLayout = true;
		return $this;
	}

	/**
	 * Set zoho field Loan Amount
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: true
	 *
	 * @param string $loanAmount
	 */
	public function setLoanAmount($loanAmount) {
		$this->loanAmount = $loanAmount;
		$this->dirtyLoanAmount = true;
		return $this;
	}

	/**
	 * Set zoho field Modified By
	 * Type: OwnerLookup
	 * Read only: false
	 * Max length: 25
	 * Custom field: false
	 *
	 * @param string $modifiedBy
	 */
	public function setModifiedBy($modifiedBy) {
		$this->modifiedBy = $modifiedBy;
		$this->dirtyModifiedBy = true;
		return $this;
	}

	/**
	 * Set the last time the record was modified in Zoho
	 * Type: DateTime
	 *
	 * @param \DateTime $modifiedTime
	 */
	public function setModifiedTime(\DateTime $modifiedTime) {
		$this->modifiedTime = $modifiedTime;
		$this->dirtyModifiedTime = true;
		return $this;
	}

	/**
	 * Set zoho field Paid Amount
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: true
	 *
	 * @param string $paidAmount
	 */
	public function setPaidAmount($paidAmount) {
		$this->paidAmount = $paidAmount;
		$this->dirtyPaidAmount = true;
		return $this;
	}

	/**
	 * Set zoho field Status
	 * Type: Text
	 * Read only: false
	 * Max length: 255
	 * Custom field: true
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->status = $status;
		$this->dirtyStatus = true;
		return $this;
	}

	/**
	 * Set zoho field Student
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $student
	 */
	public function setStudent($student) {
		$this->student = $student;
		$this->dirtyStudent = true;
		return $this;
	}

	/**
	 * Set zoho field Student_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $studentID
	 */
	public function setStudentID($studentID) {
		$this->studentID = $studentID;
		$this->dirtyStudentID = true;
		return $this;
	}

	/**
	 * Set zoho field Tag
	 * Type: Text
	 * Read only: false
	 * Max length: 2000
	 * Custom field: false
	 *
	 * @param string $tag
	 */
	public function setTag($tag) {
		$this->tag = $tag;
		$this->dirtyTag = true;
		return $this;
	}

	/**
	 * Set zoho field Term
	 * Type: Integer
	 * Read only: false
	 * Max length: 9
	 * Custom field: true
	 *
	 * @param int $term
	 */
	public function setTerm($term) {
		$this->term = $term;
		$this->dirtyTerm = true;
		return $this;
	}

	/**
	 * Set the ID of this record in Zoho
	 * Type: string
	 *
	 * @param string $zohoId
	 */
	public function setZohoId($zohoId) {
		$this->zohoId = $zohoId;
		$this->dirtyZohoId = true;
		return $this;
	}
}
