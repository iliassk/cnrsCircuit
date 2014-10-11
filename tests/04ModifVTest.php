<?php
class TestModifV extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://localhost/index.php");
  }

  public function testMyTestCase()
  {
    $this->open("/index.php");
    $this->click("link=Atelier_test");
    $this->waitForPageToLoad("30000");
    $this->assertEquals("Descriptif : testestest", $this->getText("id=descriptif"));
    $this->click("//input[@value='Modifier']");
    $this->waitForPageToLoad("30000");
    $this->type("name=descriptif", "descriptif modifié");
    $this->click("name=valider");
    $this->waitForPageToLoad("30000");
    $this->assertEquals("Descriptif : descriptif modifié", $this->getText("id=descriptif"));
  }
}
?>