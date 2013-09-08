<?php
class Document
{
    private $iniConfig;
    public $header;
    public $nav;
    public $content;
    public $footer;
    public function __construct()
    {
        $this->iniConfig = parse_ini_file(INI_FILE);

        $this->header = new Header($this->iniConfig);
        $this->nav = new Nav($this->iniConfig);
        $this->content = new Content($this->iniConfig);
        $this->footer = new Footer($this->iniConfig);
    }
    public function render()
    {
        $html = "
            <!DOCTYPE html>
            <html lang='".$this->iniConfig['lang']."'>
        ";
        $html .= "<head>";
        $html .= $this->header->render();
        $html .= "</head>";
        $html .= "<body>";
        $html .= $this->nav->render();
        $html .= $this->content->render();
        $html .= $this->footer->render();
        $html .= "</body>";
        $html .= "</html>";
        return $html;
    }


}
