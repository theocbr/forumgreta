<?php


try{
        $objetPDO = new PDO('mysql:host=localhost;dbname=forum','root','', 
        [
          PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_EMULATE_PREPARES   => false
        ]); 
        // $stmt = $objetPDO->prepare('SELECT * FROM series ORDER BY nomserie ASC');
        // $stmt->execute();
        // $series = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
      } catch (Exception $e) {
          echo "ERREUR : ".$e->getMessage()."\n";
      }


?>