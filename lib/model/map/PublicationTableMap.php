<?php


/**
 * This class defines the structure of the 'publication' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Tue May  5 16:41:51 2015
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class PublicationTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.PublicationTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('publication');
		$this->setPhpName('Publication');
		$this->setClassname('Publication');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('APPLICATION_ID', 'ApplicationId', 'VARCHAR', true, 255, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 100, null);
		$this->addColumn('DEVELOPMENT_MODE', 'DevelopmentMode', 'BOOLEAN', false, null, true);
		$this->addColumn('SUBSCRIPTION_BEHAVIOR', 'SubscriptionBehavior', 'VARCHAR', false, 255, null);
		$this->addColumn('ISSUE_DOWNLOAD_SECURITY', 'IssueDownloadSecurity', 'BOOLEAN', false, null, false);
		$this->addColumn('ITUNES_REVALIDATION_DURATION', 'ItunesRevalidationDuration', 'INTEGER', false, null, 12);
		$this->addColumn('ITUNES_PRODUCTION_LEVEL', 'ItunesProductionLevel', 'VARCHAR', false, 255, null);
		$this->addColumn('ITUNES_SHARED_SECRET', 'ItunesSharedSecret', 'VARCHAR', false, 255, null);
		$this->addColumn('ITUNES_UPDATED', 'ItunesUpdated', 'TIMESTAMP', false, null, null);
		$this->addColumn('SANDBOX_PEM', 'SandboxPem', 'VARCHAR', false, 256, null);
		$this->addColumn('SANDBOX_PASSWORD', 'SandboxPassword', 'VARCHAR', false, 32, null);
		$this->addColumn('PRODUCTION_PEM', 'ProductionPem', 'VARCHAR', false, 256, null);
		$this->addColumn('PRODUCTION_PASSWORD', 'ProductionPassword', 'VARCHAR', false, 32, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Issue', 'Issue', RelationMap::ONE_TO_MANY, array('id' => 'publication_id', ), null, null);
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
			'symfony_timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', ),
		);
	} // getBehaviors()

} // PublicationTableMap
