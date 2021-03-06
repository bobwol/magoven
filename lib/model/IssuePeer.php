<?php


/**
 * Skeleton subclass for performing query and update operations on the 'issue' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Wed May 15 17:24:39 2013
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class IssuePeer extends BaseIssuePeer {

  const ZIP_HPUB_FILENAME = 'uploaded.zpub';

  const UPLOAD_TYPE_URL = 'u';
  const UPLOAD_TYPE_HPUB = 'h';
  const UPLOAD_TYPE_ZIP = 'z';

  static protected $uploadType = array(
    'h' => 'Uploaded .hpub',
    'u' => 'External URL',
//    'z' => 'Uploaded .zip'
  );

  static public function getUploadTypes() {
    return self::$uploadType;
  }

} // IssuePeer
