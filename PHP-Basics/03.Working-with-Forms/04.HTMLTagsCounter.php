<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tags Counter</title>
    </head>
    <body>
        <form method="GET">
            <label>Enter HTML tags:</label><br />
            <input type="text" name="tags"/>
            <input type="submit" name="submit" value="Submit"/>
        </form>
        <?php
        $validTags = array("a", "abbr", "address", "area", "article", "aside", "audio", "b", "base",
        "bdi", "bdo", "blockquote", "body", "br", "button", "canvas", "caption", "cite", "code", "col", 
        "colgroup", "command", "datalist", "dd", "del", "details", "dfn", "div", "dl", "dt", "em", 
        "embed", "fieldset", "figcaption", "figure", "footer", "form", "h1", "h2", "h3", "h4", "h5", 
        "h6", "head", "header", "hgroup", "hr", "html", "i", "iframe", "img", "input", "ins", "kbd", 
        "keygen", "label", "legend", "li", "link", "map", "mark", "menu", "meta", "meter", "nav", 
        "noscript", "object", "ol", "optgroup", "option", "output", "p", "param", "pre", "progress",
        "q", "rp", "rt", "ruby", "s", "samp", "script", "section", "select", "small", "source", "span", 
        "strong", "style", "sub", "summary", "sup", "table", "tbody", "td", "textarea", "tfoot", "th", 
        "thead", "time", "title", "tr", "track", "u", "ul", "var", "video", "wbr");
        
        if (isset($_GET['submit'])) {
            $tag = $_GET['tags'];
            
            if (!isset($_SESSION['score'])) {
                $_SESSION['score'] = 0;
            }
            
            if (in_array($tag, $validTags)) {
                echo "<strong>Valid HTML tag!</strong><br />";
                $_SESSION['score']++;
            } else {
                echo "<strong>Invalid HTML tag!</strong><br />";
            }
            echo "<strong>Score: " . $_SESSION['score'] . "</strong>";
        }
        ?>
    </body>
</html>
