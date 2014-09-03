<?php

namespace Zend\InputFilter;

class InputFilterEdencia extends InputFilter implements EmptyContextInterface
{
  protected $continueIfEmpty;

  public function setContinueIfEmpty($continueIfEmpty) {
    $this->continueIfEmpty = $continueIfEmpty;

    return $this;
  }
  public function continueIfEmpty() {
    return $this->continueIfEmpty;
  }
}
