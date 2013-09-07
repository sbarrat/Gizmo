<?php
final class Header()
{
    public $charset = 'utf-8';
    public $title = "Gizmo Framework - Website Creator";
    public $appname = "Gizmo Framework";
    public $author = "Ruben Lacasa <ruben@rubenlacasa.es>";
    public $description = "Page descripction";
    public $keywords = "Page keywords";
    public function __construct()
    {
        // Deny constructor;
    }
    public function extraMetaTags(Array $tags)
    {
        
    }
    public function headScripts(Array $scripts)
    {
        
    }
    private function meta()
    {
        $html = "
            <meta charset='".$this->charset."'>
            <title>".$this->title."</title>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <meta name='application-name' content='".$this->appname."'>
            <meta name='author' content='".$this->author."'>
            <meta name='robots' content='index,follow'>
            <meta name='revisit-after' content='1 days'>
            <meta name='description' content='".$this->description."'>
            <meta name='keywords' content='".$this->keywords."'>
            ";
            return $html;
    }
    private function styles()
    {
        $html = "
            <!-- Latest compiled and minified CSS - With no icons-->
            <link href='//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css' rel='stylesheet'>
            <!--  Bootswatch Flaty Theme -->
            <link href='//netdna.bootstrapcdn.com/bootswatch/3.0.0/flatly/bootstrap.min.css' rel='stylesheet'>
            <!-- Font-awesome -->
            <link href='//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css' rel='stylesheet'>
            <!-- Own Styles -->
            <link href='assets/css/style.css' rel='stylesheet'>            
";
return $html;
    }
    private function favTouchIcons()
    {
        $html = "
            <!-- Favicon -->
            <link rel='shortcut icon' href='assets/ico/favicon.png'>
            <!-- Touch icons -->
            <link rel='apple-touch-icon-precomposed' sizes='114x114'
                href='assets/ico/apple-touch-icon-114x114-precomposed.png'>
            <link rel='apple-touch-icon-precomposed' sizes='72x72'
                href='assets/ico/apple-touch-icon-72x72-precomposed.png'>
            <link rel='apple-touch-icon-precomposed' sizes='57x57'                              href='assets/ico/apple-touch-icon-57x57-precomposed.png'>
            <link rel='apple-touch-icon-precomposed'                  
                href='assets/ico/apple-touch-icon-precomposed.png'>
            ";
            return $html;
    }
    private function html5shim()
    {
        $html .= "
        <!-- HTML5 shim for IE backwards compatibility -->
        <!--[if lt IE 9]>
            <script     src='http://html5shim.googlecode.com/svn/trunk/html5.js'></script>
        <![endif]-->
        ";
        return $html;
    }
    public function render()
    {
        $html .= $this->favTouchIcons();
        $html .= $this->styles();
        $html .= $this->html5shim();
        return $html;
    }
}
?>