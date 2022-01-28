		<header id="navbar-spy" class="header header-light">
            <nav id="primary-menu" class="navbar navbar-expand-lg navbar-dark bg-white">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img class="logo logo-dark" src="assets/images/fm-logo.png" alt="FieldMarine Engineering">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="<?php if ($active == 'home') {echo 'active';} ?>">
                                <a href="/" class="menu-item">Home</a>
                            </li>
                            <li class="has-dropdown <?php if ($active == 'about') {echo 'active';} ?>">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item" data-hover="pages">Who we are</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="about">About Us</a>
                                    </li>
                                    <li>
                                        <a href="vision">Vision &amp; Mission</a>
                                    </li>
                                    <li>
                                        <a href="hsepolicy">HSE Policy</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-dropdown <?php if ($active == 'services') {echo 'active';} ?>">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">What we do</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="technical">Technical Assistance</a>
                                    </li>
                                    <li>
                                        <a href="operations">Operations &amp; Maintenance</a>
                                    </li>
                                    <li>
                                        <a href="drilling">Drilling Support Services</a>
                                    </li>
                                    <li>
                                        <a href="marine">Marine Support Services</a>
                                    </li> 
                                    <li>
                                        <a href="aim">Asset Integrity Management</a>
                                    </li>
                                    <li>
                                        <a href="gfm">Gas Facility Management</a>
                                    </li>
                                    <li>
                                        <a href="hse">Health Safety &amp; Environment</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="<?php if ($active == 'media') {echo 'active';} ?>">
                                <a href="#" class="menu-item">Media</a>
                            </li>
                            <li class="<?php if ($active == 'contact') {echo 'active';} ?>">
                                <a href="contact" class="menu-item">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>