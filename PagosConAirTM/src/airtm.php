<?php

return array(
// set your airtm credential
'client_id' => '7d9e3d6e-41b6-4569-955d-17ef3051a1df',
'secret' => 'Q8G4WCPkxrqE9MHXFYv6J7W8fKxcOcD9Sc2VrTsbx6q9X1Kog0v9Q6nFWYtNdJcF',

/**
 * SDK configuration
 */
'settings' => array(
/**
 * Available option 'sandbox' or 'live'
 */
'mode' => 'sandbox',

/**
 * Specify the max request time in seconds
 */

 'http.ConnectionTiemOut' => 30,

 /**
  * Whether want to log to a file
  */
  'log.LogEnabled' => true,

  /**
   * Specify the file that want to write on
   */
  'log.FileName' => storage_path() . 'arcanedev/log-viewer/^5.0',

  /**
   * Available option 'FINE', 'WARN', or 'ERROR'
   * 
   * Logging is most verbose in the 'FINE' level and decreases as you
   * proceed towards ERROR
   */
    'log.LogLevel' => 'FINE'
),
);