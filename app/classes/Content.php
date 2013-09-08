<?php
final class Content
{
    public function render()
    {
        $html = "Hello World";
        $html .= $this->footer();
        return $html;
    }
    public function footer()
    {
        $html = "
        <footer>
            <div class='row'>
                <div class='col-lg-12'>
                    <ul class='list-unstyled'>
                        <li class='pull-right'><a href='#top'>Back to top</a></li>
                        <li><a href='https://twitter.com/thomashpark'>Twitter</a></li>
                        <li><a href='https://github.com/thomaspark/bootswatch/'>GitHub</a></li>
                        <li><a href='../help/#api'>API</a></li>
                    </ul>
                    <p>Made by <a href='http://thomaspark.me'>Thomas Park</a>. Contact him at
                    <a href='mailto:hello@thomaspark.me'>hello@thomaspark.me</a>.</p>
            <p>Code licensed under the <a href='http://www.apache.org/licenses/LICENSE-2.0'>Apache License v2.0</a>.</p>
            <p>Based on <a href='http://getbootstrap.com'>Bootstrap</a>. Icons from
            <a href='http://fortawesome.github.io/Font-Awesome/'>Font Awesome</a>. Web fonts from
            <a href='http://www.google.com/webfonts'>Google</a>.
            Favicon by <a href='https://twitter.com/geraldhiller'>Gerald Hiller</a>.</p>

          </div>
        </div>

      </footer>";
        return $html;
    }
}