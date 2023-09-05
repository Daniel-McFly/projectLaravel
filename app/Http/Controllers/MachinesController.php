<?php 
    namespace App\Http\Controllers;
    
    class MachinesController{
        public function index(){
            echo "<h1>Listar Máquinas</h1>";
        }
        public function show($id){
            echo "<h1>Visualizar as Máquinas $id</h1>";
        }
    }
?>