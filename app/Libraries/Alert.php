<?php

namespace App\Libraries;


use Config\Alert as AlertC;
use stdClass;

class Alert {

   
    var $config;
    var $result;
    var $message;
    var $class;

    public function __construct() {
       
        $this->config = new AlertC();
        $this->result = new stdClass();
    }
/**
 * @param $type - true nebo false podle toho, jestli se operace podařila
 * @param $method - typ operace, která se prováděla
 */
    public function makeMessage($type, $method){
        if($type){
            $result = "Success";
            $class = "true";
        } else {
            $result = "Error";
            $class = "false";
        }
        $result = $method.$result;
        $message = $this->config->message[$result];
        $class = $this->config->class[$class];
        $this->result->class = $class;
        $this->result->message = $message;

        return $this->result;
    }
}