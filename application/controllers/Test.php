<?php

class Test extends CI_Controller {
  
  public function test() {
    $name = $this->input->post('name');
    echo $name;
  }
}