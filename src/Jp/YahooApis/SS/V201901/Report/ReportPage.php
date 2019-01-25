<?php

namespace Jp\YahooApis\SS\V201901\Report;

class ReportPage extends \Jp\YahooApis\SS\V201901\Page
{

    /**
     * @var ReportValues[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ReportValues[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param ReportValues[] $values
     * @return \Jp\YahooApis\SS\V201901\Report\ReportPage
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}