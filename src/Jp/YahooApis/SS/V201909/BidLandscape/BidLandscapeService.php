<?php

namespace Jp\YahooApis\SS\V201909\BidLandscape;

class BidLandscapeService extends \Jp\YahooApis\SS\AdApiSample\Util\Service
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'SoapHeader' => 'Jp\\YahooApis\\SS\\V201909\\SoapHeader',
      'SoapResponseHeader' => 'Jp\\YahooApis\\SS\\V201909\\SoapResponseHeader',
      'Paging' => 'Jp\\YahooApis\\SS\\V201909\\Paging',
      'Error' => 'Jp\\YahooApis\\SS\\V201909\\Error',
      'ErrorDetail' => 'Jp\\YahooApis\\SS\\V201909\\ErrorDetail',
      'Page' => 'Jp\\YahooApis\\SS\\V201909\\Page',
      'ReturnValue' => 'Jp\\YahooApis\\SS\\V201909\\ReturnValue',
      'ListReturnValue' => 'Jp\\YahooApis\\SS\\V201909\\ListReturnValue',
      'BidLandscapeSelector' => 'Jp\\YahooApis\\SS\\V201909\\BidLandscape\\BidLandscapeSelector',
      'BidLandscapePage' => 'Jp\\YahooApis\\SS\\V201909\\BidLandscape\\BidLandscapePage',
      'BidLandscapeValues' => 'Jp\\YahooApis\\SS\\V201909\\BidLandscape\\BidLandscapeValues',
      'BidLandscape' => 'Jp\\YahooApis\\SS\\V201909\\BidLandscape\\BidLandscape',
      'AdGroupBidLandscape' => 'Jp\\YahooApis\\SS\\V201909\\BidLandscape\\AdGroupBidLandscape',
      'CriterionBidLandscape' => 'Jp\\YahooApis\\SS\\V201909\\BidLandscape\\CriterionBidLandscape',
      'LandscapePoints' => 'Jp\\YahooApis\\SS\\V201909\\BidLandscape\\LandscapePoints',
      'get' => 'Jp\\YahooApis\\SS\\V201909\\BidLandscape\\get',
      'getResponse' => 'Jp\\YahooApis\\SS\\V201909\\BidLandscape\\getResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $endpoint Service Endpont URL
     * @param string $wsdl The wsdl file to use
     */
    public function __construct($wsdl = null, $endpoint = null, array $options = array())
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://ss.yahooapis.jp/services/V201909/BidLandscapeService?wsdl';
      }
      parent::__construct($wsdl, $endpoint, $options);
    }

    /**
     * @param get $parameters
     * @return getResponse
     */
    public function get(get $parameters)
    {
      return parent::invoke('get', $parameters);
    }

}
