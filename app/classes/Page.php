<?php
    
final class Page() 
{
    private $lang = 'es';
    private $header = FALSE;
    private $nav = FALSE;
    private $content = FALSE;
    private $footer = FALSE;
    
    public function __construct(
        Header $header,
        Nav $nav,
        Content $content,
        Footer $footer,
        $lang = 'es'
    )
    {
        $this->header = $header;
        $this->nav = $nav;
        $this->content = $content;
        $this->footer = $footer;
        $this->lang = $lang;
    }
    
    public function render()
    {
        $html = "
            <!DOCTYPE html>
            <html lang='".$this->lang."'>
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
        return $html
    }
    
}