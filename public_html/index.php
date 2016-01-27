<?php include('includes/header.php'); ?>

    <header id="Masthead">
        <a href="/" title="Home">Dashboard</a>

    </header>

    <section id="primary">
        <div class="row dashboard tiles">
            <div class="column width-3">
                <div class="panel alerts">
                    <h2>Alerts</h2>
                </div>
            </div>
            <div class="column">
                <div class="panel">
                    <h2>Water Levels</h2>
                </div>
            </div>
            <div class="column">
                <div class="panel">
                    <h2>Feeding</h2>
                </div>
            </div>
            <div class="column">
                <div class="panel">
                    <h2>Maintenance</h2>
                </div>
            </div>
        </div>
    </section>
    <ul>
        <li><a href="/">Sensing requirements</a>
            <ul>
                <li><a href="/">Display Level</a></li>
                <li><a href="/">Sump Level</a></li>
                <li><a href="/">Top-up Level</a></li>
                <li><a href="/">Display Temperature</a></li>
                <li><a href="/">Sump Temperature</a></li>
            </ul>
        </li>
        <li><a href="/">Controls</a>
            <ul>
                <li><a href="/">Increase Return Pump Flow</a></li>
                <li><a href="/">Decrease Return Pump Flow</a></li>
            </ul>
        </li>
    </ul>

<?php include('includes/footer.php'); ?>