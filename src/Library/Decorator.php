<?php
namespace Library;

class Decorator {
  public function header($title) {
    return "<!DOCTYPE html>" .
      "<html>" .
      "<head>" .
      "<title>{$title}</title>" .
      "</head>";
  }

  public function footer() {
    return "</html>";
  }

  public function body($param) {
    return "<body>" .
      "<h1>Current date and time</h1>" .
      "<p>{$param['date']}<br />{$param['time']}</p>" .
      "</body>";
  }
}
