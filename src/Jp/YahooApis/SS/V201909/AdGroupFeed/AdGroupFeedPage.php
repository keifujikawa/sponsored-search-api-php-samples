<?php

namespace Jp\YahooApis\SS\V201909\AdGroupFeed;

class AdGroupFeedPage extends \Jp\YahooApis\SS\V201909\Page
{

    /**
     * @var AdGroupFeedValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AdGroupFeedValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param AdGroupFeedValues[] $values
     * @return \Jp\YahooApis\SS\V201909\AdGroupFeed\AdGroupFeedPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
