<?php
  function json_to_array(string $key):array{
    //fonction qui retourne tout le contenu d’un fichier sous forme d’une chaîne.
      $dataJson=file_get_contents(PATH_DB);
      //json_decode(): fonction qui convertit du json en tableau 
      $data=json_decode($dataJson,true); 
      return $data[$key];
    }
    //Enregistrement et Mis a jour des donnees du fichier
      function array_to_json(string $key,array $data):array{
      return [];
    }
    