<?php

    function savequestion(string $question,string $nbpoint ,string $type,array $choix,array $reponse,){
            $tab=[
                "name"=>$question,
                "reponse"=>$choix,
                "type"=>$type,
                "correct"=>$reponse,
                "nbPoint"=> $nbpoint
            ];
           
            array_to_json("questions",$tab);

    }