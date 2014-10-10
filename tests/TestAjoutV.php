<?php
class TestAjoutV extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://localhost/index.php");
  }

  public function testMyTestCase()
  {
    $this->open("/index.php");
    $this->assertFalse($this->isElementPresent("link=test"));
    $this->type("name=intitule_atelier", "Atelier_test");
    $this->type("name=laboratoire", "Labo_test");
    $this->type("name=lieu", "Lieu_test");
    $this->select("name=discipline", "label=Informatique");
    $this->type("name=descriptif", "testestest");
    $this->click("name=valider");
    $this->waitForPageToLoad("30000");
    $this->assertTrue($this->isElementPresent("link=Atelier_test"));
    $this->click("link=Atelier_test");
    $this->waitForPageToLoad("30000");
    $this->assertEquals("Nom : Atelier_test", $this->getText("id=nom"));
    $this->assertEquals("Lieu : Lieu_test", $this->getText("id=lieu"));
    $this->assertEquals("Theme : Informatique", $this->getText("id=theme"));
    $this->assertEquals("Laboratoire : Labo_test", $this->getText("id=laboratoire"));
    $this->assertEquals("Descriptif : testestest", $this->getText("id=descriptif"));
  }
}
?>