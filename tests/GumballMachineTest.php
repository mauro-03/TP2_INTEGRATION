<?php

require 'GumballMachine.php';

class GumballMachineTest extends PHPUnit_Framework_TestCase
{
    public $gumballMachineInstance;
    //prof1
    private $nom1="XXX1";
    private $prenom1="YYY1";
    private $date_naissance1="29-09-1980";
    private $lieu_naissance1="ZZZ1";

    //prof2
        private $nom2="XXX2";
        private $prenom2="YYY2";
        private $date_naissance2="30-10-1981";
        private $lieu_naissance2="ZZZ2";

    //prof3
        private $nom3="XXX3";
        private $prenom3="YYY3";
        private $date_naissance3="31-12-1982";
        private $lieu_naissance3="ZZZ3";

    // cours1
        private $intitule1="IOT";
        private $duree1="10";

    // cours2
        private $intitule2="IA";
        private $duree2="12";

    // cours3
        private $intitule3="C++";
        private $duree3="18";

    // cours1
        private $intitule4="EDL";
        private $duree4 ="30";
    
        
    public function setUp()
    {
        $this->gumballMachineInstance = new GumballMachine();
    }
    
    public function testAffichageProfAVI()
    {
        $this->assertEquals(true,$this->gumballMachineInstance->AffichageProf("Before Insertion of Professors"));
    }
    public function testInsertP()
    {
        $max__id1=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom1,$this->prenom1,$this->date_naissance1,$this->lieu_naissance1));
        $this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom2,$this->prenom2,$this->date_naissance2,$this->lieu_naissance2));
        $this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom3,$this->prenom3,$this->date_naissance3,$this->lieu_naissance3));
        $max__id2=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals($max__id1+3,$max__id2);
    }
    public function testAffichageProfAPI()
    {
        /*� completer*/

    }
     
    
    public function testAffichageCoursAVI()
    {
        /*� completer*/
    }
    public function testInsertC()
    {
        /*� completer*/
        $max__id1=$this->gumballMachineInstance->GetLastIDC();
        $this->assertEquals(true, $this->gumballMachineInstance->InsertC($this->intitule1, $this->duree1, $this->gumballMachineInstance->GetIdP($this->nom2, $this->prenom2)));
        $this->assertEquals(true, $this->gumballMachineInstance->InsertC($this->intitule2, $this->duree2, $this->gumballMachineInstance->GetIdP($this->nom1, $this->prenom1)));
        $this->assertEquals(true, $this->gumballMachineInstance->InsertC($this->intitule3, $this->duree3, $this->gumballMachineInstance->GetIdP($this->nom3, $this->prenom3)));
        $this->assertEquals(true, $this->gumballMachineInstance->InsertC($this->intitule4, $this->duree4, $this->gumballMachineInstance->GetIdP($this->nom3, $this->prenom3)));
        $max__id2=$this->gumballMachineInstance->GetLastIDC();
        $this->assertEquals($max__id1+4, $max__id2);
        
    }
    public function testAffichageCoursAPI()
    {
        /*� completer*/
    }

    public function testUpdateC()
    {
        //$col = "duree"
        //$value = "30"
        $this->assertEquals(true, $this->gumballMachineInstance->UpdateC("duree", "30", $this->$intitule3));
    }

   
}
