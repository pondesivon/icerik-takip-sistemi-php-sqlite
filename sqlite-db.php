<?php
   class SQLiteDB extends SQLite3 {
      function __construct() {
         $this->open('yonetim/Veri.db');
      }
   }
   
   $db = new SQLiteDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   }
?>