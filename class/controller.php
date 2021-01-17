<?php
class controller{
    public function __construct($arguments = array()){
        $this->executar($arguments);
    }
    public function executar($arguments){
        $action =   isset($arguments[0]) ?
                ($arguments[0] != null) &&
                ($arguments[0] != ''):
                false;

        if($action){
            $action = array_shift($arguments);
            $this->$action();
        }else{
            $this->default();
        }
    }
}
