<?php
include BASEPATH."class/controller.php";
class site extends controller{
    public function default(){
        echo "olá mundo";
    }
    public function casa(){
        echo BASEPATH."<br>";
        echo $GLOBALS["MYURL"]."<br>";
        echo "e ai seus putos"."<br>";
        require BASEPATH."models/casaModel.php";
        $thisModel = new casaModel();
        $pesquisa = $thisModel->index();
        echo "<pre>";
        echo "
            o post de indice ".$pesquisa[0]->id."
            tem o texto ".$pesquisa[0]->texto."
        ";
    }
}
