<section>

    <section>
        <h1>Link0</h1>
    </section>

    <section>
        <h2>Link0/profiler</h2>
        <ul>
            <li>Focused on XHProf</li>
            <li>Has multiple persistence layers for storing profiles
                <ul>
                    <li>Memory</li>
                    <li>Flysystem</li>
                    <li>Zend\Db\Adapter</li>
                    <li>MongoDB (work in progress)</li>
                </ul>
            </li>
            <li>Available on composer/packagist</li>
            <li>Fully Object-orientated</li>
            <li>100% code coverage</li>
            <li><a href="http://github.com/link0/profiler">http://github.com/link0/profiler</a></li>
        </ul>
    </section>

    <section>
        <h2>Getting started</h2>
        <p>Bootstrapping the profiler</p>
        <pre><code>$profiler = new \Link0\Profiler\Profiler();
$profiler->start();
print_r($profiler->stop());</code></pre>

        <p>Adding a PersistenceHandler</p>
        <pre><code>$persistenceHandler = new \Link0\Profiler\PersistenceHandler\MemoryHandler();
$profiler = new \Link0\Profiler\Profiler($persistenceHandler);</code></pre>

        <p>Flysystem example</p>
        <pre><code>$filesystemAdapter = new \League\Flysystem\Adapter\Local('/tmp/profiler');
$filesystem = new \Link0\Profiler\Filesystem($filesystemAdapter);
$persistenceHandler = new \Link0\Profiler\PersistenceHandler\FilesystemHandler($filesystem);
$profiler = new \Link0\Profiler\Profiler($persistenceHandler);</code></pre>
    </section>

</section>