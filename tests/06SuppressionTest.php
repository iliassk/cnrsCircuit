<?php
class TestSuppresion extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://localhost/index.php");
  }

  public function testMyTestCase()
  {
    $this->open("/index.php");
    $this->assertTrue($this->isElementPresent("link=Atelier_test"));
    $this->click("link=Atelier_test");
    $this->waitForPageToLoad("30000");
    $this->click("css=input[type=\"submit\"]");
    $this->waitForPageToLoad("30000");
    $this->assertFalse($this->isElementPresent("link=Atelier_test"));
  }
}
?>