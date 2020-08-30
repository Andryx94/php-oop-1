<?php
  // Trait sconto
  trait Sconto {
    public $eta;

    protected $sconto = 0;

    public function getSconto(){
      if ($this->eta < 18 || $this->eta > 65){
        $this->sconto = 30;
      }
    }
  }
 ?>
