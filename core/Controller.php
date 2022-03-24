<?php

namespace Core;

class Controller {
  private $_controllerName, $_actionName;
  public $view, $request;

  public function __construct($controller, $action) {
    $this->__controllerName = $controller;
    $this->__actionName = $action;
  }
}
