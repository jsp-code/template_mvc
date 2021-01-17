<?php 
class rotas {

    private $locations;
    private $url;
    private $base_url;
    public $argument;
    public $local;

    public function __construct($base_url,$list = array()) {

        $this->locations = $list;
        $this->base_url = $base_url;

    }
    public function goFrom($url) {
        $this->url = ($url != null) && ($url != '')? $url:"site";

        if (strpos($this->url,'/')) {

            $this->argument = explode("/",$this->url);
            $this->local = array_shift($this->argument);

        }else{

            $this->local = $this->url;
            $this->argument = array();
    
        }

        if(in_array($this->local,$this->locations)){
            include(($this->base_url)."controlles/".($this->local)."Controller.php");
            $controller = new $this->local($this->argument);
        }else{
            http_response_code(404);
            include(($this->base_url)."view/404.php");
        }
    }
}
$siteRotas = array(
    "site",
    "blog",
    "admin"
);
$rota = new rotas(BASEPATH,$siteRotas);