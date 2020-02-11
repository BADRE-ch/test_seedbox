<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of serveurs
 */
class serveur {
    private $ids;
    private $marque;
    private $modele;
    private $micro;
    private $ram;
    private $cache;
    private $image;
    
    public function Serveurs() {
        $this->ids=0;
        $this->marque="";
        $this->modele="";
        $this->micro="";
        $this->ram="";
        $this->cache="";
        $this->image="";
        //etc...
    }
    //metodos get y set
    public function getIds(){
        return $this->ids;
    }
//    public function setIds($ids){
//        $this->ids=$ids;
//    }
    
    public function getMarque(){
        return $this->marque;
    }
    public function setMarque($marque){
        $this->marque=$marque;
    }
    
    public function getModele(){
        return $this->modele;
    }
    public function setModele($modele){
        $this->modele=$modele;
    }
    
     public function getMicro(){
        return $this->micro;
    }
    public function setMicro($micro){
        $this->micro=$micro;
    }
    
    public function getRam(){
        return $this->ram;
    }
    public function setRam($ram){
        $this->ram=$ram;
    }
     public function getCache(){
        return $this->cache;
    }
    public function setCache($cache){
        $this->cache=$cache;
    }
    public function getImage(){
        return $this->image;
    }
    public function setImage($image){
        $this->image=$image;
    }
    
    
    
    
    
    
    
}

?>