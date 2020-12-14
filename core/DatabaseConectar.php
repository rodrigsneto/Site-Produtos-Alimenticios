<?php
namespace core;

class DatabaseConectar implements DatabaseInterface
{
    public $dbnome = 'projetomvc';
    public $dbhost = 'localhost';
    public $dbuser = 'root';
    public $dbpass = '';
    public $query;

    public function getDbnome()
    {
        return $this->dbnome;
    }
    public function setDbnome($dbnome)
    {
        $this->dbnome = $dbnome;
    }
    public function getDbhost()
    {
        return $this->dbhost;
    }
    public function setDbhost($dbhost)
    {
        $this->dbhost = $dbhost;
    }
    public function getDbuser()
    {
        return $this->dbuser;
    }
    public function setDbuser($dbuser)
    {
        $this->dbuser = $dbuser;
    }
    public function getDbpass()
    {
        return $this->dbpass;
    }
    public function setDbpass($dbpass)
    {
        $this->dbpass = $dbpass;
    }
    public function getQuery()
    {
        return $this->query;
    }
    public function setQuery($index)
    {
        $this->query = $index;
    }
    public function conectar()
    {
        $this->setQuery(new \PDO("mysql:dbname=" . $this->getDbnome() . ";host=" . $this->getDbhost(), $this->getDbuser(), $this->getDbpass()));

        return $this->getQuery();
    }

}