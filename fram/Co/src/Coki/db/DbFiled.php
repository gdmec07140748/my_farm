<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/6/29
 * Time: 22:20
 */

namespace Co\src\Coki\db;


class DbFiled
{
    public $driver = 'mysql';
    public $host = 'localhost';
    public $database = 'database';
    public $username = 'root';
    public $password = 'password';
    public $charset = 'utf8';
    public $collation = 'utf8_unicode_ci';
    public $prefix = 'public';
    public  $conn;

    /**
     * Connect constructor.
     * @param string $host
     * @param string $database
     * @param string $username
     * @param string $password
     * @param string $prefix
     */
    public function __construct(string $host, string $database, string $username, string $password, string $prefix)
    {
        $this->host = $host;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;
        $this->prefix = $prefix;
    }


    /**
     * @return string
     */
    public function getDriver(): string
    {
        return $this->driver;
    }

    /**
     * @param string $driver
     */
    public function setDriver(string $driver): void
    {
        $this->driver = $driver;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @param string $host
     */
    public function setHost(string $host): void
    {
        $this->host = $host;
    }

    /**
     * @return string
     */
    public function getDatabase(): string
    {
        return $this->database;
    }

    /**
     * @param string $database
     */
    public function setDatabase(string $database): void
    {
        $this->database = $database;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getCharset(): string
    {
        return $this->charset;
    }

    /**
     * @param string $charset
     */
    public function setCharset(string $charset): void
    {
        $this->charset = $charset;
    }

    /**
     * @return string
     */
    public function getCollation(): string
    {
        return $this->collation;
    }

    /**
     * @param string $collation
     */
    public function setCollation(string $collation): void
    {
        $this->collation = $collation;
    }

    /**
     * @return string
     */
    public function getPrefix(): string
    {
        return $this->prefix;
    }

    /**
     * @param string $prefix
     */
    public function setPrefix(string $prefix): void
    {
        $this->prefix = $prefix;
    }

}