<?php

namespace ConnectDb\Database;

class SetUpConnect
{
    private string $dbDrive;
    private string $dbHost;
    private string $dbPort;
    private string $dbName;
    private string $dbUsername;
    private string $dbPasswd;
    private string $dbCharset;


    /**
     * 
     * @param array $feature Database characteristics
     */
    public function __construct(array $feature = null)
    {
        $this->dbDrive    = (empty($feature["db_drive"]))    ? $this->setDbDrive("mysql")    : $feature["db_drive"];
        $this->dbPort     = (empty($feature["db_port"]))     ? $this->setDbPort("3306")      : $feature["db_port"];
        $this->dbHost     = (empty($feature["db_host"]))     ? $this->setDbHost("localhost") : $feature["db_host"];
        $this->dbName     = (empty($feature["db_name"]))     ? $this->setDbName("Test")      : $feature["db_name"];
        $this->dbUsername = (empty($feature["db_username"])) ? $this->setDbUsername("root")  : $feature["db_username"];
        $this->dbPasswd   = (empty($feature["db_passwd"]))   ? $this->setDbPasswd("")        : $feature["db_passwd"];
        $this->dbCharset  = (empty($feature["db_charset"]))  ? $this->setDbCharset("utf8")   : $feature["db_charset"];
    }

    
    /*******************************************
                    GET DATABASE
    *******************************************/

    /**
     * Take the drive used in the database
     * 
     * @return string|null
     */
    public function getDbDrive()
    {
        return $this->dbDrive;
    }

    /**
     * Take the drive used in the database
     * 
     * @return string|null
     */
    public function getDbHost()
    {
        return $this->dbHost;
    }

    /**
     * Take the drive used in the database
     * 
     * @return string|null
     */
    public function getDbPort()
    {
        return $this->dbPort;
    }

    /**
     * Take the drive used in the database
     * 
     * @return string|null
     */
    public function getDbName()
    {
        return $this->dbName;
    }

    /**
     * Take the drive used in the database
     * 
     * @return string|null
     */
    public function getDbUsername()
    {
        return $this->dbUsername;
    }

    /**
     * Take the drive used in the database
     * 
     * @return string|null
     */
    public function getDbPasswd()
    {
        return $this->dbPasswd;
    }
    /**
     * Configure the drive used in the database 
     *
     * @return string|null
     */
    public function getDbCharset()
    {
        return $this->dbCharset;
    }

    /*******************************************
                    SET DATABASE
    *******************************************/

    /**
     * Configure the drive used in the database 
     * 
     * @param string $dbDrive Drive database
     * @return string
     */
    public function setDbDrive(string $dbDrive): string
    {
        return $this->dbDrive = $dbDrive;
    }

    /**
     * Configure the host used in the database 
     *
     * @param string $dbHost Host database
     * @return string
     */
    public function setDbHost(string $dbHost): string
    {
        return $this->dbHost = $dbHost;
    }

    /**
     * Configure the port used in the database
     * 
     * @param string $dbPort Port database
     * @return string
     */
    public function setDbPort(string $dbPort): string
    {
        return $this->dbPort = $dbPort;
    }

    /**
     * Configure the name used in the database 
     *
     * @param string $dbName Name database
     * @return string
     */
    public function setDbName(string $dbName): string
    {
        return $this->dbName = $dbName;
    }

    /**
     * Configure the username used in the database 
     *
     * @param string $dbUsername Username database
     * @return string
     */
    public function setDbUsername(string $dbUsername): string
    {
        return $this->dbUsername = $dbUsername;
    }

    /**
     * Configure the password used in the database 
     *
     * @param string $dbPasswd Passwd database
     * @return string
     */
    public function setDbPasswd(string $dbPasswd): string
    {
        return $this->dbPasswd = $dbPasswd;
    }

    /**
     * Configure the charset used in the database 
     *
     * @param string $dbCharset Charset database
     * @return string
     */
    public function setDbCharset(string $dbCharset): string
    {
        return $this->dbCharset = $dbCharset;
    }

    /**
     * Characteristics
     *
     * @return array
     */
    public function feature(): array
    {
        return [
            "db_drive" => $this->getDbDrive(),
            "db_port" => $this->getDbPort(),
            "db_name" => $this->getDbName(),
            "db_host" => $this->getDbHost(),
            "db_username" => $this->getDbUsername(),
            "db_passwd" => $this->getDbPasswd(),
            "db_charset" => $this->getDbCharset(),
        ];
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function configure(): array
    {
        return [
            "dsn" => "{$this->getDbDrive()}:host={$this->getDbHost()}; port={$this->getDbPort()}; dbname={$this->getDbName()}; charset={$this->getDbCharset()};",
            "username" => $this->getDbUsername(),
            "passwd" => $this->getDbPasswd()
        ];
    }
}
