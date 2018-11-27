<?php

namespace ErpConnect;

use Illuminate\Config\Repository;

class Erp {

    /**
     * @var Repository
     */
    protected $config;

    /**
     * ERP_SERVER
     * @var
     */
    protected $erp_server;

    /**
     * DS_SEQUENCE
     * @var
     */
    protected $ds;

    /**
     * ERP_AppKey
     * @var
     */
    protected $erp_key;

    /**
     * ERP_AppSecret
     * @var
     */
    protected $erp_secret;

    /**
     * FROM_ACCOUNT
     * @var
     */
    protected $from_account;

    /**
     * TO_ACCOUNT
     * @var
     */
    protected $to_account;

    /**
     * Erp constructor.
     * @param Repository $repository
     */
    public function __construct(Repository $repository)
    {
        $this->config = $repository;
        $this->getBaseConfig();
    }

    /**
     * 获取基础ERP配置
     */
    protected function getBaseConfig()
    {
        $this->erp_server = $this->config->get('erpconnect.ERP_SERVER');
        $this->ds = $this->config->get('erpconnect.DS_SEQUENCE');
        $this->erp_key = $this->config->get('erpconnect.ERP_AppKey');
        $this->erp_secret = $this->config->get('erpconnect.ERP_AppSecret');
        $this->from_account = $this->config->get('erpconnect.FROM_ACCOUNT');
        $this->to_account = $this->config->get('erpconnect.TO_ACCOUNT');
    }

    public function getToken()
    {

    }







}