
        <h1>Welcome to PULSE!</h1>
        <p class="lead">
            Congratulations! Your application is running. If this is
            your first time using Pulse, start with this <a href="<?=basePath()?>/hello/world">"Hello World" Example</a>.
        </p>
        <section>
            <h2>Get Started</h2>
            <ol>
                <li>The application router/controller is in <code>Controller/Default.php</code></li>
                <li>The HTML5 views in <code>Views/Default/home.php</code></li>
                <li>Read the <a href="http://docs.pulseframework.com/" target="_blank">online documentation</a></li>
                <li>Follow <a href="http://www.twitter.com/pulseframework" target="_blank">@pulseframework</a> on Twitter</li>
            </ol>
        </section>
        <section style="padding-bottom: 20px;">
            <h2>Auth Security incorporated</h2>
            <p>
                Check the integrated security with Authorization Header, 
                start with this <a href="<?=basePath()?>/secured">"Protected path" Example</a> and get PublicKey in <code>Controller/Default.php</code>. Change <code>errorAuth();</code> with <code>printAuth();</code> and start with your secured Api's.
            </p>
        </section>
        <section>
            <h2>PULSE Framework Community</h2>

            <h3>Support Forum and Knowledge Base</h3>
            <p>
                Visit the <a href="<?=uri('documentationUrl')?>" target="_blank">Pulse support forum and knowledge base</a>
                to read notifications, ask questions, help others, or expose your Pulse Framework apps.
            </p>

            <h3>Twitter</h3>
            <p>
                Follow <a href="http://www.twitter.com/pulseframework" target="_blank">pulseframework</a> on Twitter to receive the very latest news
                and updates about the framework.
            </p>
        </section>
        <section style="padding-bottom: 40px">
            <h2>PULSE Admin Dashboard</h2>
            <p>
                Start to design your app or website with the Pulse Admin Dashboard, 
                speacially implemente to design without coding.
            </p>
            <p><a href="<?=path('adashboard')?>" class="btn btn-primary">Go to Admin Dashboard</a></p>
        </section>
        <section style="padding-bottom: 10px">
            <p><i>PULSE Framework Version.<?=Pulse\Pulse::VERSION?></i></p>
        </section>
