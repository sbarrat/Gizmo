<?php
final class Nav extends Page
{
    private $elements = NULL;

    public function setElements(Array $elements)
    {
        $this->elements = $elements;
    }
    private function navTab()
    {
        $html ="
        <div class='navbar navbar-default navbar-fixed-top'>
            <div class='container'>
                <div class='navbar-header'>
                <a href='../' class='navbar-brand'>"
            .$this->iniConfig['brand']."</a>
          <button class='navbar-toggle' type='button' data-toggle='collapse' data-target='#navbar-main'>
        <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
        </div>
        <div class='navbar-collapse collapse' id='navbar-main'>
          <ul class='nav navbar-nav'>
            <li class='dropdown'>
              <a class='dropdown-toggle' data-toggle='dropdown' href='#'
              id='themes'>Dropdown <span class='caret'></span></a>
              <ul class='dropdown-menu' aria-labelledby='themes'>
                <li><a tabindex='-1' href='../default/'>Default</a></li>
                <li class='divider'></li>
                <li><a tabindex='-1' href='../amelia/'>Amelia</a></li>
              </ul>
            </li>
            <li>
              <a href='../help/'>Help</a>
            </li>
            <li>
              <a href='http://news.bootswatch.com'>Blog</a>
            </li>
            <li class='dropdown'>
              <a class='dropdown-toggle' data-toggle='dropdown' href='#' id='download'>
              Download <span class='caret'></span></a>
              <ul class='dropdown-menu' aria-labelledby='download'>
                <li><a tabindex='-1' href='./bootstrap.min.css'>bootstrap.min.css</a></li>
                <li><a tabindex='-1' href='./bootstrap.css'>bootstrap.css</a></li>
                <li class='divider'></li>
                <li><a tabindex='-1' href='./variables.less'>variables.less</a></li>
                <li><a tabindex='-1' href='./bootswatch.less'>bootswatch.less</a></li>
              </ul>
            </li>
          </ul>

          <ul class='nav navbar-nav navbar-right'>
            <li><a href='http://builtwithbootstrap.com/' target='_blank'>Built With Bootstrap</a></li>
            <li><a href='https://wrapbootstrap.com/?ref=bsw' target='_blank'>WrapBootstrap</a></li>
          </ul>

        </div>
      </div>
    </div>

        ";
        return $html;
    }
    public function render()
    {
        $html = $this->navTab();
        return $html;
    }
}