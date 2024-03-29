<?php
class connect
{
     var $db = null;
     function __construct()
     {
          $dsn = 'mysql:host=localhost;dbname=thecoffeehouse';
          $user =  'root';
          $pass = '';
          try {
               $this->db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
          } catch (\Throwable $th) {
               echo "Error: " . $th->getMessage;
          }
     }

     function getList($select)
     {
          $result = $this->db->query($select);
          return $result;
     }

     function getInstance($select)
     {
          $results = $this->db->query($select);
          $result = $results->fetch();
          return $result;
     }

     function exec($query)
     {
          $result = $this->db->exec($query);
          return $result;
     }

     function execP($query)
     {
          $statement = $this->db->prepare($query);
          return $statement;
     }
     function lastInsertId()
     {
          return $this->db->lastInsertId();
     }
}
