<?php
include BASEPATH."class/model.php"; 
class casaModel extends model{
    function index(){
        $model_db = $this->getDB();
        $sql = 'SELECT * FROM post';
        $stm = $model_db->prepare($sql);
        $stm->execute();
        $post = $stm->fetchAll(PDO::FETCH_OBJ);
        return $post;
    }
}
