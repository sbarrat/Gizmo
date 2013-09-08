<?php
final class Footer extends Page
{

    private function scripts()
    {
        $html = "
            <script src='//code.jquery.com/jquery-1.10.1.min.js'></script>
            <script src='//code.jquery.com/jquery-migrate-1.2.1.min.js'></script>
            <script src='//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js'></script>
            ";
        $html .= "<script src='assets/js/script.js'></script>";    
            
            return $html;
    }
    public function extraScripts(Array $scripts = array())
    {
        $html = "";
        foreach ($scripts as $script)
        {
            $html .= $script;
        }
        return $html;
    }
    
    public function render()
    {
        $html = $this->scripts();
        $html .= $this->extraScripts();
        return $html;
    }
}