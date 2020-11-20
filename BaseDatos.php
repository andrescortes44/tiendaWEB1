<?php

    class BaseDatos{

        public $usuarioBD="root";
        public $passwordBD="";

        //constructor
        public function  __construct(){}

        //metodos
        public function conectarBD(){

            try{

                $infoBD="mysql:host=localhost;dbname=administradorproducto";
                $conexionBD= new PDO($infoBD,$this->usuarioBD,$this->passwordBD);
                return($conexionBD);

            }catch(PDOException $error){

                echo($error->getMessage());
            }
         
        }

        public function agregarDatos($consultaSQL){

            
            $conectar=$this->conectarBD();

        
            $consultaInsertarDatos= $conectar->prepare($consultaSQL);

            
            
            $resultado=$consultaInsertarDatos->execute();
                
            if($resultado){
                echo("Dato agregado con exito");
            }else{
                print_r($consultaInsertarDatos->errorInfo());
            }         

        }

        public function consultarDatos($consultaSQL){

            
             $conectar=$this->conectarBD();

             
             $consultaBuscarDatos= $conectar->prepare($consultaSQL);
          
             
             $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

             $consultaBuscarDatos->execute();

             return($consultaBuscarDatos->fetchAll());
        }


    }




?>