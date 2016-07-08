<?php
namespace Library;

class Decorator {
  private $header;
  private $footer;
  private $body;

  public function header($title) {
    $this->header = "<!DOCTYPE>" .
      "<html>" .
      "<head>" .
      "<title>{$title}</title>" .
      "</head>";
      return $this;
  }

  public function footer() {
    $this->footer = "</html>";
    return $this;
  }

  public function body($param) {
    $this->body = "<body>" .
      "<h1>Current date and time</h1>" .
      "<p>{$param['date']}<br />{$param['time']}</p>" .
      "</body>";
    return $this;
  }

  public function build() {
    return $this->header . $this->body . $this->footer;
  }
}
