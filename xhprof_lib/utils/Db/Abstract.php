<?php
abstract class Db_Abstract
{
    protected $config;
    public $linkID;

    public function __construct($config)
    {
        $this->config = $config;
    }
    abstract public function connect();
    abstract public function query($sql);
    abstract public function escape($str);
    abstract public function affectedRows();
}