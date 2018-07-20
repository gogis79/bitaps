<?php

namespace bitaps\response;

use bitaps\base\BaseObject;
use bitaps\BitAps;

class Transaction extends BaseObject
{
    public $size;
    public $locktime;

    /**
     * @var \bitaps\response\TransactionInput[]
     */
    public $input;
    public $block;
    public $coinbase;

    /**
     * @var \bitaps\response\TransactionOutput[]
     */
    public $output;
    public $fee;
    public $hash;
    public $timestamp;
    public $data;
    public $version;

    /**
     * @return Block
     */
    public function getBlock()
    {
        return BitAps::getBlock($this->block);
    }

}