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

    public static function unixTimestamp($field)
    {
        throw new RuntimeException(
            "Method should be implemented '" . get_called_class() . "::" . __FUNCTION__ . "' in calling class"
        );
    }

    public static function dateSub($days)
    {
        throw new RuntimeException(
            "Method should be implemented '" . get_called_class() . "::" . __FUNCTION__ . "' in calling class"
        );
    }

    public static function getNextAssoc($resultSet)
    {
        throw new RuntimeException(
            "Method should be implemented '" . get_called_class() . "::" . __FUNCTION__ . "' in calling class"
        );
    }
}