<?php
namespace TestNamespace;

/**
 */
class Program implements \Wabel\Zoho\CRM\ZohoBeanInterface {

	/**
	 * Zoho field Commission Rate
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $commissionRate;

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
	 * Zoho field Description
	 * Type: TextArea
	 * Read only: false
	 * Max length: 32000
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * Whether 'commissionRate' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyCommissionRate = false;

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
	 * Whether 'description' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyDescription = false;

	/**
	 * Whether 'faculty' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyFaculty = false;

	/**
	 * Whether 'facultyID' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyFacultyID = false;

	/**
	 * Whether 'handler' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyHandler = false;

	/**
	 * Whether 'layout' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyLayout = false;

	/**
	 * Whether 'manufacturer' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyManufacturer = false;

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
	 * Whether 'productActive' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyProductActive = false;

	/**
	 * Whether 'productCategory' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyProductCategory = false;

	/**
	 * Whether 'productCode' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyProductCode = false;

	/**
	 * Whether 'productName' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyProductName = false;

	/**
	 * Whether 'productOwner' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyProductOwner = false;

	/**
	 * Whether 'qtyInDemand' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyQtyInDemand = false;

	/**
	 * Whether 'qtyInStock' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyQtyInStock = false;

	/**
	 * Whether 'qtyOrdered' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyQtyOrdered = false;

	/**
	 * Whether 'reorderLevel' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyReorderLevel = false;

	/**
	 * Whether 'salesEndDate' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtySalesEndDate = false;

	/**
	 * Whether 'salesStartDate' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtySalesStartDate = false;

	/**
	 * Whether 'supportExpiryDate' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtySupportExpiryDate = false;

	/**
	 * Whether 'supportStartDate' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtySupportStartDate = false;

	/**
	 * Whether 'tag' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyTag = false;

	/**
	 * Whether 'tax' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyTax = false;

	/**
	 * Whether 'taxable' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyTaxable = false;

	/**
	 * Whether 'unitPrice' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyUnitPrice = false;

	/**
	 * Whether 'usageUnit' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyUsageUnit = false;

	/**
	 * Whether 'vendorName' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyVendorName = false;

	/**
	 * Whether 'zohoId' has been changed or not.
	 *
	 * @var bool
	 */
	protected $dirtyZohoId = false;

	/**
	 * Zoho field Faculty
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $faculty;

	/**
	 * Zoho field Faculty_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @var string
	 */
	protected $facultyID;

	/**
	 * Zoho field Handler
	 * Type: Lookup
	 * Read only: false
	 * Max length: 19
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $handler;

	/**
	 * The Layout of this record in Zoho
	 * Type: string
	 *
	 * @var string
	 */
	protected $layout;

	/**
	 * Zoho field Manufacturer
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $manufacturer;

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
	 * Zoho field Product Active
	 * Type: Boolean
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var bool
	 */
	protected $productActive;

	/**
	 * Zoho field Product Category
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $productCategory;

	/**
	 * Zoho field Product Code
	 * Type: Text
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $productCode;

	/**
	 * Zoho field Product Name
	 * Type: Text
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $productName;

	/**
	 * Zoho field Product Owner
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $productOwner;

	/**
	 * Zoho field Qty in Demand
	 * Type: Double
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $qtyInDemand;

	/**
	 * Zoho field Qty in Stock
	 * Type: Double
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $qtyInStock;

	/**
	 * Zoho field Qty Ordered
	 * Type: Double
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $qtyOrdered;

	/**
	 * Zoho field Reorder Level
	 * Type: Double
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $reorderLevel;

	/**
	 * Zoho field Sales End Date
	 * Type: Date
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var \DateTimeInterface
	 */
	protected $salesEndDate;

	/**
	 * Zoho field Sales Start Date
	 * Type: Date
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var \DateTimeInterface
	 */
	protected $salesStartDate;

	/**
	 * Zoho field Support Expiry Date
	 * Type: Date
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var \DateTimeInterface
	 */
	protected $supportExpiryDate;

	/**
	 * Zoho field Support Start Date
	 * Type: Date
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var \DateTimeInterface
	 */
	protected $supportStartDate;

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
	 * Zoho field Tax
	 * Type: Multiselect Pick List
	 * Read only: false
	 * Max length: 1000
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $tax;

	/**
	 * Zoho field Taxable
	 * Type: Boolean
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var bool
	 */
	protected $taxable;

	/**
	 * Zoho field Unit Price
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $unitPrice;

	/**
	 * Zoho field Usage Unit
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $usageUnit;

	/**
	 * Zoho field Vendor Name
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @var string
	 */
	protected $vendorName;

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
	 * Get zoho field Commission Rate
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: false
	 */
	public function getCommissionRate() {
		return $this->commissionRate;
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
	 * Get zoho field Description
	 * Type: TextArea
	 * Read only: false
	 * Max length: 32000
	 * Custom field: false
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Get zoho field Faculty
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 */
	public function getFaculty() {
		return $this->faculty;
	}

	/**
	 * Get zoho field Faculty_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 */
	public function getFacultyID() {
		return $this->facultyID;
	}

	/**
	 * Get zoho field Handler
	 * Type: Lookup
	 * Read only: false
	 * Max length: 19
	 * Custom field: false
	 */
	public function getHandler() {
		return $this->handler;
	}

	/**
	 * Get the Layout of this record in Zoho
	 * Type: string
	 */
	public function getLayout() {
		return $this->layout;
	}

	/**
	 * Get zoho field Manufacturer
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getManufacturer() {
		return $this->manufacturer;
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
	 * Get zoho field Product Active
	 * Type: Boolean
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getProductActive() {
		return $this->productActive;
	}

	/**
	 * Get zoho field Product Category
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getProductCategory() {
		return $this->productCategory;
	}

	/**
	 * Get zoho field Product Code
	 * Type: Text
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getProductCode() {
		return $this->productCode;
	}

	/**
	 * Get zoho field Product Name
	 * Type: Text
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getProductName() {
		return $this->productName;
	}

	/**
	 * Get zoho field Product Owner
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getProductOwner() {
		return $this->productOwner;
	}

	/**
	 * Get zoho field Qty in Demand
	 * Type: Double
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 */
	public function getQtyInDemand() {
		return $this->qtyInDemand;
	}

	/**
	 * Get zoho field Qty in Stock
	 * Type: Double
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 */
	public function getQtyInStock() {
		return $this->qtyInStock;
	}

	/**
	 * Get zoho field Qty Ordered
	 * Type: Double
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 */
	public function getQtyOrdered() {
		return $this->qtyOrdered;
	}

	/**
	 * Get zoho field Reorder Level
	 * Type: Double
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 */
	public function getReorderLevel() {
		return $this->reorderLevel;
	}

	/**
	 * Get zoho field Sales End Date
	 * Type: Date
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getSalesEndDate() {
		return $this->salesEndDate;
	}

	/**
	 * Get zoho field Sales Start Date
	 * Type: Date
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getSalesStartDate() {
		return $this->salesStartDate;
	}

	/**
	 * Get zoho field Support Expiry Date
	 * Type: Date
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getSupportExpiryDate() {
		return $this->supportExpiryDate;
	}

	/**
	 * Get zoho field Support Start Date
	 * Type: Date
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getSupportStartDate() {
		return $this->supportStartDate;
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
	 * Get zoho field Tax
	 * Type: Multiselect Pick List
	 * Read only: false
	 * Max length: 1000
	 * Custom field: false
	 */
	public function getTax() {
		return $this->tax;
	}

	/**
	 * Get zoho field Taxable
	 * Type: Boolean
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getTaxable() {
		return $this->taxable;
	}

	/**
	 * Get zoho field Unit Price
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: false
	 */
	public function getUnitPrice() {
		return $this->unitPrice;
	}

	/**
	 * Get zoho field Usage Unit
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getUsageUnit() {
		return $this->usageUnit;
	}

	/**
	 * Get zoho field Vendor Name
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 */
	public function getVendorName() {
		return $this->vendorName;
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
	 * Set zoho field Commission Rate
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: false
	 *
	 * @param string $commissionRate
	 */
	public function setCommissionRate($commissionRate) {
		$this->commissionRate = $commissionRate;
		$this->dirtyCommissionRate = true;
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
	 * Set zoho field Description
	 * Type: TextArea
	 * Read only: false
	 * Max length: 32000
	 * Custom field: false
	 *
	 * @param string $description
	 */
	public function setDescription($description) {
		$this->description = $description;
		$this->dirtyDescription = true;
		return $this;
	}

	/**
	 * Set zoho field Faculty
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $faculty
	 */
	public function setFaculty($faculty) {
		$this->faculty = $faculty;
		$this->dirtyFaculty = true;
		return $this;
	}

	/**
	 * Set zoho field Faculty_ID
	 * Type: Lookup ID
	 * Read only: true
	 * Max length: 120
	 * Custom field: true
	 *
	 * @param string $facultyID
	 */
	public function setFacultyID($facultyID) {
		$this->facultyID = $facultyID;
		$this->dirtyFacultyID = true;
		return $this;
	}

	/**
	 * Set zoho field Handler
	 * Type: Lookup
	 * Read only: false
	 * Max length: 19
	 * Custom field: false
	 *
	 * @param string $handler
	 */
	public function setHandler($handler) {
		$this->handler = $handler;
		$this->dirtyHandler = true;
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
	 * Set zoho field Manufacturer
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $manufacturer
	 */
	public function setManufacturer($manufacturer) {
		$this->manufacturer = $manufacturer;
		$this->dirtyManufacturer = true;
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
	 * Set zoho field Product Active
	 * Type: Boolean
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param bool $productActive
	 */
	public function setProductActive($productActive) {
		$this->productActive = $productActive;
		$this->dirtyProductActive = true;
		return $this;
	}

	/**
	 * Set zoho field Product Category
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $productCategory
	 */
	public function setProductCategory($productCategory) {
		$this->productCategory = $productCategory;
		$this->dirtyProductCategory = true;
		return $this;
	}

	/**
	 * Set zoho field Product Code
	 * Type: Text
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $productCode
	 */
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->dirtyProductCode = true;
		return $this;
	}

	/**
	 * Set zoho field Product Name
	 * Type: Text
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $productName
	 */
	public function setProductName($productName) {
		$this->productName = $productName;
		$this->dirtyProductName = true;
		return $this;
	}

	/**
	 * Set zoho field Product Owner
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $productOwner
	 */
	public function setProductOwner($productOwner) {
		$this->productOwner = $productOwner;
		$this->dirtyProductOwner = true;
		return $this;
	}

	/**
	 * Set zoho field Qty in Demand
	 * Type: Double
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 *
	 * @param string $qtyInDemand
	 */
	public function setQtyInDemand($qtyInDemand) {
		$this->qtyInDemand = $qtyInDemand;
		$this->dirtyQtyInDemand = true;
		return $this;
	}

	/**
	 * Set zoho field Qty in Stock
	 * Type: Double
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 *
	 * @param string $qtyInStock
	 */
	public function setQtyInStock($qtyInStock) {
		$this->qtyInStock = $qtyInStock;
		$this->dirtyQtyInStock = true;
		return $this;
	}

	/**
	 * Set zoho field Qty Ordered
	 * Type: Double
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 *
	 * @param string $qtyOrdered
	 */
	public function setQtyOrdered($qtyOrdered) {
		$this->qtyOrdered = $qtyOrdered;
		$this->dirtyQtyOrdered = true;
		return $this;
	}

	/**
	 * Set zoho field Reorder Level
	 * Type: Double
	 * Read only: false
	 * Max length: 9
	 * Custom field: false
	 *
	 * @param string $reorderLevel
	 */
	public function setReorderLevel($reorderLevel) {
		$this->reorderLevel = $reorderLevel;
		$this->dirtyReorderLevel = true;
		return $this;
	}

	/**
	 * Set zoho field Sales End Date
	 * Type: Date
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param \DateTimeInterface $salesEndDate
	 */
	public function setSalesEndDate(\DateTimeInterface $salesEndDate = null) {
		$this->salesEndDate = $salesEndDate;
		$this->dirtySalesEndDate = true;
		return $this;
	}

	/**
	 * Set zoho field Sales Start Date
	 * Type: Date
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param \DateTimeInterface $salesStartDate
	 */
	public function setSalesStartDate(\DateTimeInterface $salesStartDate = null) {
		$this->salesStartDate = $salesStartDate;
		$this->dirtySalesStartDate = true;
		return $this;
	}

	/**
	 * Set zoho field Support Expiry Date
	 * Type: Date
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param \DateTimeInterface $supportExpiryDate
	 */
	public function setSupportExpiryDate(\DateTimeInterface $supportExpiryDate = null) {
		$this->supportExpiryDate = $supportExpiryDate;
		$this->dirtySupportExpiryDate = true;
		return $this;
	}

	/**
	 * Set zoho field Support Start Date
	 * Type: Date
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param \DateTimeInterface $supportStartDate
	 */
	public function setSupportStartDate(\DateTimeInterface $supportStartDate = null) {
		$this->supportStartDate = $supportStartDate;
		$this->dirtySupportStartDate = true;
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
	 * Set zoho field Tax
	 * Type: Multiselect Pick List
	 * Read only: false
	 * Max length: 1000
	 * Custom field: false
	 *
	 * @param string $tax
	 */
	public function setTax($tax) {
		$this->tax = $tax;
		$this->dirtyTax = true;
		return $this;
	}

	/**
	 * Set zoho field Taxable
	 * Type: Boolean
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param bool $taxable
	 */
	public function setTaxable($taxable) {
		$this->taxable = $taxable;
		$this->dirtyTaxable = true;
		return $this;
	}

	/**
	 * Set zoho field Unit Price
	 * Type: Currency
	 * Read only: false
	 * Max length: 16
	 * Custom field: false
	 *
	 * @param string $unitPrice
	 */
	public function setUnitPrice($unitPrice) {
		$this->unitPrice = $unitPrice;
		$this->dirtyUnitPrice = true;
		return $this;
	}

	/**
	 * Set zoho field Usage Unit
	 * Type: Pick List
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $usageUnit
	 */
	public function setUsageUnit($usageUnit) {
		$this->usageUnit = $usageUnit;
		$this->dirtyUsageUnit = true;
		return $this;
	}

	/**
	 * Set zoho field Vendor Name
	 * Type: Lookup
	 * Read only: false
	 * Max length: 120
	 * Custom field: false
	 *
	 * @param string $vendorName
	 */
	public function setVendorName($vendorName) {
		$this->vendorName = $vendorName;
		$this->dirtyVendorName = true;
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
