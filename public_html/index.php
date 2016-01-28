<?php include('includes/header.php'); ?>

    <header id="Masthead">
        <div class="row">
            <a href="/" title="Home" class="logo"><img src="/images/logo.png" /></a>
            <div class="status">
                <ul>
                    <li class="data">Receiving data</li>
                    <li class="alerts">2 Warnings</li>
                    <li class="pumpSpeed">54% Power</li>
                    <li class="water-level">
                        <span>Display 165L</span>
                        <span>Sump 30L</span>
                    </li>
                    <li class="temperature">Display 26.6&deg;c | Sump 27.2&deg;c</li>
                </ul>
            </div>
        </div>
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