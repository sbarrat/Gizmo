<?php
final class Nav()
{
    private $elements = NULL;
    public function __construct($brand = "Gizmo", Array $elements)
    {
        $this->brand = $brand;
        $this->elements = $elements;
    }
    private function navTab()
    {
        
    }
    public function render()
    {
        $html = $this->navTab();
        return $html;
    }
}