<?php


/**
 * Skeleton subclass for performing query and update operations on the 'subscription' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Wed May 15 17:26:04 2013
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class SubscriptionPeer extends BaseSubscriptionPeer {

  const ITUNES_URL_SANDBOX = 'https://sandbox.itunes.apple.com/verifyReceipt';
  const ITUNES_URL_PRODUCTION = 'https://buy.itunes.apple.com/verifyReceipt';

  /*
    In App Purchase status codes:
      21000 The App Store could not read the JSON object you provided.
      21002 The data in the receipt-data property was malformed.
      21003 The receipt could not be authenticated.
      21004 The shared secret you provided does not match the shared secret on file for your account.
      21005 The receipt server is not currently available.
      21006 This receipt is valid but the subscription has expired. When this status code is returned to your server, the receipt data is also decoded and returned as part of the response.
      21007 This receipt is a sandbox receipt, but it was sent to the production service for verification.
      21008 This receipt is a production receipt, but it was sent to the sandbox service for verification.
   */
  const APPLE_STATUS_CANT_READ = 21000;
  const APPLE_STATUS_MALFORMED = 21002;
  const APPLE_STATUS_NOT_AUTH = 21003;
  const APPLE_STATUS_SECRET_FAIL = 21004;
  const APPLE_STATUS_SERVER_DOWN = 21005;
  const APPLE_STATUS_EXPIRED = 21006;
  const APPLE_STATUS_SANDBOX = 21007;
  const APPLE_STATUS_PRODUCTION = 21008;

  public static function retrieveByAppUser($app_id, $user_id)
  {
    $c = new Criteria();
    $c->add(SubscriptionPeer::APPLICATION_ID, $app_id);
    $c->add(SubscriptionPeer::USER_ID, $user_id);

    $subscription = SubscriptionPeer::doSelectOne($c);

    return $subscription;
  }

  public static function getITunesUrl($sandbox)
  {
    return $sandbox ? SubscriptionPeer::ITUNES_URL_SANDBOX : SubscriptionPeer::ITUNES_URL_PRODUCTION;
  }

} // SubscriptionPeer
