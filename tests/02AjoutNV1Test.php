<?php
class TestAjoutNV1 extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://localhost/index.php");
  }

  public function testMyTestCase()
  {
    $this->open("/index.php");
    $this->assertFalse($this->isElementPresent("link=testnv"));
    $this->type("name=intitule_atelier", "testnv");
    $this->type("name=laboratoire", "Labo_test");
    $this->type("name=lieu", "Lieu_test");
    $this->click("name=valider");
    $this->waitForPageToLoad("30000");
    $this->assertFalse($this->isElementPresent("link=testnv"));
  }
}
?>