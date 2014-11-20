<section>
    <section>
        <h1>Xdebug</h1>
    </section>

    <section>
        <h2>Xdebug</h2>

        <ul>
            <li>Generates <a href="http://valgrind.org/docs/manual/cg-manual.html">cachegrind</a> files (like Valgrind for C)</li>
            <li>Can be analysed by KCacheGrind among others </li>
            <li>Cachegrind files are relatively big in size</li>
            <li>Also a developer tool for breakpoints and remote debugging</li>
            <li>Active profiler</li>
        </ul>
    </section>

    <section>
        <h2>Enable xdebug profiling</h2>
        <pre><code># php.ini settings
xdebug.profiler_enable=1
xdebug.profiler_output_dir=/path/to/store/snapshots
xdebug.profiler_enable_trigger=1</code></pre>
    </section>

    <section>
        <h2>Xdebug with KCacheGrind</h2>
        <img src="images/kcachegrind.png"/>
    </section>

    <section>
        <h2>Xdebug in phpstorm</h2>
        <img src="images/xdebug-phpstorm.png"/>
    </section>

    <section>
        <h2>Xdebug in PhpStorm</h2>
        <img src="images/xdebug-phpstorm-select.png" />
    </section>

    <section>
        <h2>Xdebug in PhpStorm</h2>
        <img src="images/xdebug-phpstorm-analyze.png" />
    </section>

    <section>
        <h2>Xdebug in PhpStorm</h2>
        <img src="images/xdebug-phpstorm-calltree.png" />
    </section>
</section>