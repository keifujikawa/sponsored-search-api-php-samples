<?php

namespace Jp\YahooApis\SS\V201901\CampaignLabel;

class mutateResponse
{

    /**
     * @var CampaignLabelReturnValue $rval
     */
    protected $rval = null;

    /**
     * @var \Jp\YahooApis\SS\V201901\Error $error
     */
    protected $error = null;

    /**
     * @param CampaignLabelReturnValue $rval
     * @param \Jp\YahooApis\SS\V201901\Error $error
     */
    public function __construct($rval, $error)
    {
      $this->rval = $rval;
      $this->error = $error;
    }

    /**
     * @return CampaignLabelReturnValue
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param CampaignLabelReturnValue $rval
     * @return \Jp\YahooApis\SS\V201901\CampaignLabel\mutateResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

    /**
     * @return \Jp\YahooApis\SS\V201901\Error
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param \Jp\YahooApis\SS\V201901\Error $error
     * @return \Jp\YahooApis\SS\V201901\CampaignLabel\mutateResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}