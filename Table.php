<?php
class Table {
    private $nbrePieds;
    private $matiere;
    private $color;
    private $id;
    public function __construct($nbrePieds = null, $matiere = null, $color = null, $id= null){
        $this->nbrePieds = $nbrePieds;
        $this->matiere = $matiere;
        
    }
    public function getNbrePieds(){
        return $this->nbrePieds;
    }
    public function getColor(){
        return $this->color;
    }
    public function getMatiere(){
        return $this->matiere;
    }
    public function getId(){
        return $this->id;
    }
    public function setNbrePieds($nbrePieds){
        $this->nbrePieds = $nbrePieds;
   }
   public function setColor($color){
        $this->color = $color;
   }
   public function setMatiere($matiere){
        $this->matiere= $matiere;
   }
   public function setId($id){
        $this->id = $id;
   }
}
