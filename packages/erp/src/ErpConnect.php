<?php

namespace ErpConnect;

use Illuminate\Config\Repository;

class ErpConnect extends Erp
{
    /**
     *获取erp返回的token
     * @var
     */
    protected $token;

    /**
     * ErpConnect constructor.
     * @param Repository $repository
     */
    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }


    public function getToken()
    {

    }

    public function passAuth()
    {
    }

}