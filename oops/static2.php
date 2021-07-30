<?php
class domain {
  protected static function getWebsiteName() {
    return "HelloWorld.com";
  }
}

class domain2 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domain = new domain2;
echo $domain -> websiteName;
?>