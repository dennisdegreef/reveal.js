<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Profiling PHP</title>

    <meta name="description" content="An HTML5 presentation about PHP Profiling">
    <meta name="author" content="Dennis de Greef">

    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" href="css/reveal.min.css">
    <!--<link rel="stylesheet" href="css/theme/default.css" id="theme">-->
    <link rel="stylesheet" href="css/theme/moon.css" id="theme">

    <!-- For syntax highlighting -->
    <link rel="stylesheet" href="lib/css/zenburn.css">

    <!-- If the query includes 'print-pdf', include the PDF print sheet -->
    <script>
        if (window.location.search.match(/print-pdf/gi)) {
            var link = document.createElement('link');
            link.rel = 'stylesheet';
            link.type = 'text/css';
            link.href = 'css/print/pdf.css';
            document.getElementsByTagName('head')[0].appendChild(link);
        }
    </script>

    <!--[if lt IE 9]>
    <script src="lib/js/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<div class="reveal">

    <!-- Any section element inside of this container is displayed as a slide -->
    <div class="slides">
        <?php

        $sections = array(
            'introduction',
            'definition',
            'static-analysis',
            'dynamic-analysis',
            'why',
            'cause',
            'active-passive',
            'xdebug',
            'xhprof',
            'link0',
            'future',
            'questions',
        );

        $problem = false;
        foreach ($sections as $section) {
            $sectionFile = dirname(__FILE__) . '/sections/' . $section . '.php';

            if (!file_exists($sectionFile)) {
                $problems[] = "Section[name='{$section}'] not found on filesystem";
                $problem = true;
            }

            $includes[] = $sectionFile;
        }

        if($problem) {
            echo "<section><p>" . implode(PHP_EOL, $problems) . "</p></section>";
        } else {
            foreach ($includes as $include) {
                include($include);
            }
        }

        ?>
    </div>

</div>

<script src="lib/js/head.min.js"></script>
<script src="js/reveal.min.js"></script>

<script>

    // Full list of configuration options available here:
    // https://github.com/hakimel/reveal.js#configuration
    Reveal.initialize({
        controls: true,
        progress: true,
        history: true,
        center: true,

        theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
        transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/fade/none

        // Parallax scrolling
        //parallaxBackgroundImage: 'https://s3.amazonaws.com/hakim-static/reveal-js/reveal-parallax-1.jpg',
        //parallaxBackgroundSize: '2100px 900px',

        // Optional libraries used to extend on reveal.js
        dependencies: [
            { src: 'lib/js/classList.js', condition: function () {
                return !document.body.classList;
            } },
            { src: 'plugin/markdown/marked.js', condition: function () {
                return !!document.querySelector('[data-markdown]');
            } },
            { src: 'plugin/markdown/markdown.js', condition: function () {
                return !!document.querySelector('[data-markdown]');
            } },
            { src: 'plugin/highlight/highlight.js', async: true, callback: function () {
                hljs.initHighlightingOnLoad();
            } },
            { src: 'plugin/zoom-js/zoom.js', async: true, condition: function () {
                return !!document.body.classList;
            } },
            { src: 'plugin/notes/notes.js', async: true, condition: function () {
                return !!document.body.classList;
            } }
        ]
    });

</script>

</body>
</html>
