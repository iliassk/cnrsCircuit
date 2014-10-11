<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://localhost/index.php");
  }

  public function testMyTestCase()
  {


    try
  {
      $bdd = new PDO('mysql:host=localhost;dbname=cnrs', 'root', 'group6');
  }
  catch (Exception $e)
  {
        die('Erreur : ' . $e->getMessage());
  }

    $this->open("/index.php");
    $this->assertTrue($this->isElementPresent("link=Atelier_test"));
    $this->type("name=intitule_atelier", "Atelier_test");
    $this->type("name=laboratoire", "Labo_test");
    $this->type("name=lieu", "Lieu_test");
    $this->type("name=descriptif", "testestest2");
    $this->click("name=valider");
    $this->waitForPageToLoad("30000");
    // $this->();
  }
}
?>