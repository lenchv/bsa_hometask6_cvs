<?php
namespace Library;

class Decorator {
  private $data;

  public function __construct($type, $data = "") {
    switch ($type) {
      case 'header':
        $this->header($data);
        break;
      case 'footer':
        $this->footer();
        break;
      case 'body':
        $this->body($data);
        break;
      default:
        $this->setData($data);
        break;
    }
  }

  private function header($title) {
    $this->data = "<!DOCTYPE html>" .
      "<html>" .
      "<head>" .
      "<title>{$title}</title>" .
      "</head>";
  }

  private function footer() {
    $this->data = "</html>";
  }

  private function body($param) {
    $this->data = "<body>" .
      "<h1>Current date and time</h1>" .
      "<p>{$param['date']}<br />{$param['time']}</p>" .
      "</body>";
  }

  private function setData($data) {
    $this->data = $data;
  }

  public function getData() {
    return $this->data;
  }
}
