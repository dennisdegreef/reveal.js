<section>
    <section>
        <h1>XHProf</h1>
    </section>

    <section>
        <h2>XHProf</h2>
        <ul>
            <li>Developed by Facebook and released as open-source in 2009</li>
            <li>PECL extension</li>
            <li>Lightweight for being a passive profiler</li>
            <li>Includes webgui for reviewing and comparing profiling data</li>
        </ul>
    </section>

    <section>
        <h2>Installation</h2>
                <code><pre>
# Linux (using apt or yum)
apt-get install -y php5-xhprof

# OSX (using homebrew)
brew install php56-xhprof

# For Windows, use PECL or download a .dll somewhere, or compile for your own
</pre></code>
    </section>

    <section>
        <h2>Wordpress example</h2>
        <pre><code>
// index.php

xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );

$xhprof_data = xhprof_disable();

include_once 'xhprof_lib/utils/xhprof_lib.php';
include_once 'xhprof_lib/utils/xhprof_runs.php';

$xhprof_runs = new XHProfRuns_Default();

$run_id = $xhprof_runs->save_run($xhprof_data, "xhprof_foo");
        </code></pre>
    </section>

    <section>
        <h2>Callstack</h2>
        <img src="images/wp-callstack.png" />
    </section>

    <section>
        <h2>Callgraph</h2>
        <img src="images/wp-callgraph.png" />
    </section>

    <section>
        <h2>Callgraph</h2>
        <img src="images/wp-callgraph-zoom.png" />
    </section>

    <section>
        <h2>Callgraph</h2>
        <img src="images/wp-callgraph-zoom2.png" />
    </section>

    <section>
        <h2>Useful tools</h2>
        <ul>
            <img src="images/xhprof-helper-chrome.webp" height="300" width="480"/>
            <li><a href="https://chrome.google.com/webstore/detail/xhprof-helper/adnlhmmjijeflmbmlpmhilkicpnodphi">XHProf Helper for Chrome</a></li>
            <li><a href="https://addons.mozilla.org/nl/firefox/addon/xhprof-helper-for-firefox/">XHProf Helper for Firefox</a></li>
            <li>Sets $_COOKIE['_profile'] to 1</li>
        </ul>
    </section>

    <section>
        <h2>XHGui</h2>

        <ul>
            <li>Web frontend for profile data</li>
            <li>Requires MongoDB</li>
            <li>Shows callstacks</li>
            <li>Shows callgraphs</li>
            <li>Can compare different runs</li>
        </ul>
    </section>

    <section>
        <h2>XHGui</h2>
        <img src="images/xhgui1.png"/>
    </section>
    <section>
        <h2>XHGui</h2>
        <img src="images/xhgui2.png"/>
    </section>
    <section>
        <h2>XHGui Compare</h2>
        <img src="images/xhgui3.png"/>
    </section>
    <section>
        <h2>XHGui Compare</h2>
        <img src="images/xhgui4.png"/>
    </section>
    <section>
        <h2>XHGui Compare difference</h2>
        <img src="images/xhgui5.png"/>
    </section>
    <section>
        <h2>XHGui Callstack</h2>
        <img src="images/xhgui6.png"/>
    </section>
</section>