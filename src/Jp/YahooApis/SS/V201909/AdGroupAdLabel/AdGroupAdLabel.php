<?php

namespace Jp\YahooApis\SS\V201909\AdGroupAdLabel;

class AdGroupAdLabel
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var int $adGroupId
     */
    protected $adGroupId = null;

    /**
     * @var int $adId
     */
    protected $adId = null;

    /**
     * @var int $labelId
     */
    protected $labelId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return \Jp\YahooApis\SS\V201909\AdGroupAdLabel\AdGroupAdLabel
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
      return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return \Jp\YahooApis\SS\V201909\AdGroupAdLabel\AdGroupAdLabel
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
      return $this->adGroupId;
    }

    /**
     * @param int $adGroupId
     * @return \Jp\YahooApis\SS\V201909\AdGroupAdLabel\AdGroupAdLabel
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = $adGroupId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdId()
    {
      return $this->adId;
    }

    /**
     * @param int $adId
     * @return \Jp\YahooApis\SS\V201909\AdGroupAdLabel\AdGroupAdLabel
     */
    public function setAdId($adId)
    {
      $this->adId = $adId;
      return $this;
    }

    /**
     * @return int
     */
    public function getLabelId()
    {
      return $this->labelId;
    }

    /**
     * @param int $labelId
     * @return \Jp\YahooApis\SS\V201909\AdGroupAdLabel\AdGroupAdLabel
     */
    public function setLabelId($labelId)
    {
      $this->labelId = $labelId;
      return $this;
    }

}
