<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: services.proto

namespace TodoWorld;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GetTodoResponse</code>
 */
class GetTodoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Todo Result = 1;</code>
     */
    private $Result = null;
    /**
     * Generated from protobuf field <code>.ResponseStatus ResponseStatus = 2;</code>
     */
    private $ResponseStatus = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \TodoWorld\Todo $Result
     *     @type \TodoWorld\ResponseStatus $ResponseStatus
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Services::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Todo Result = 1;</code>
     * @return \TodoWorld\Todo
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * Generated from protobuf field <code>.Todo Result = 1;</code>
     * @param \TodoWorld\Todo $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \TodoWorld\Todo::class);
        $this->Result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ResponseStatus ResponseStatus = 2;</code>
     * @return \TodoWorld\ResponseStatus
     */
    public function getResponseStatus()
    {
        return $this->ResponseStatus;
    }

    /**
     * Generated from protobuf field <code>.ResponseStatus ResponseStatus = 2;</code>
     * @param \TodoWorld\ResponseStatus $var
     * @return $this
     */
    public function setResponseStatus($var)
    {
        GPBUtil::checkMessage($var, \TodoWorld\ResponseStatus::class);
        $this->ResponseStatus = $var;

        return $this;
    }

}

