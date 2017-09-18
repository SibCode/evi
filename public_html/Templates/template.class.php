<?php

/**
* 18.09.2017 Greber Michelle
*
* This is the template-class which is used to add the content to the templates.
*
* Inspired by http://www.broculos.net/2008/03/how-to-make-simple-html-template-engine.html#.Wb_HWchJbVd
*
**/

class Template {

  protected $file;

  protected $values = array();

  public function __construct($file) {
    $this->file = $file;
  }

  public function set($key, $value) {
    $this->values[$key] = $value;
  }

  public function output() {
    if (!file_exists($this->file)) {
      return "Error loading template file ($this->file).";
    }
    $output = file_get_contents($this->file);

    foreach ($this->values as $key => $value) {
      $key = strtoupper($key);
      $tagToReplace = "##$key##";
      $output = str_replace($tagToReplace, $value, $output);
    }

    return $output;
  }

  static public function merge($templates, $separator = "n") {
    $output = "";

    foreach ($templates as $template) {
      $content = (get_class($template) !== "Template") ? "Error, incorrect type - expected Template." : $template->output();
      $output .= $content . $separator;
    }

    return $output;
  }
}

?>
