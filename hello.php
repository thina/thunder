<?php

require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*firefox");
    $this->setBrowserUrl("http://localhost/");
  }

  public function testMyTestCase()
  {
    $this->open("/echo.php");
    try {
        $this->assertTrue($this->isTextPresent("hello world"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
#    try {
#        $this->assertTrue($this->isTextPresent("hello world"));
#    } catch (PHPUnit_Framework_AssertionFailedError $e) {
#        array_push($this->verificationErrors, $e->toString());
#    }
#    try {
#        $this->assertTrue($this->isTextPresent("world"));
#    } catch (PHPUnit_Framework_AssertionFailedError $e) {
#        array_push($this->verificationErrors, $e->toString());
#    }
  }
}
?>

