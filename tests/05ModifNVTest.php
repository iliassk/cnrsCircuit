<?php
class TestModifNV extends PHPUnit_Extensions_SeleniumTestCase
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
    $this->click("//input[@value='Modifier']");
    $this->waitForPageToLoad("30000");
    $this->type("name=laboratoire", "");
    $this->type("name=descriptif", "test2");
    $this->click("name=valider");
    $this->waitForPageToLoad("30000");
    $this->assertNotEquals("", $this->getText("id=laboratoire"));
    $this->assertNotEquals("test2", $this->getText("id=descriptif"));
  }
}
?>