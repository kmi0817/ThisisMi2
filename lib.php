<?php
  class ClassDB {
    private $dbid = "root";
    private $dbpw = "";
    private $dbname = "ThismisMi";
    private $dbhost = "localhost";

    protected function getID() {
      return $this->dbid;
    }

    protected function getPW() {
      return $this->dbpw;
    }

    protected function getName() {
      return $this->dbname;
    }

    protected function getHost() {
      return $this->dbhost;
    }
  }
?>
