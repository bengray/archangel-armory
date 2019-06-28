<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/"><img class="nav-logo" src="img/aasc_logo.png" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo $_SERVER['REQUEST_URI'] == '/' ? 'active' : ''; ?>">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item <?php echo $_SERVER['REQUEST_URI'] == '/store' ? 'active' : ''; ?>">
                    <a class="nav-link" href="store">Store</a>
                </li>
                <li class="nav-item <?php echo $_SERVER['REQUEST_URI'] == '/services' ? 'active' : ''; ?>">
                    <a class="nav-link" href="services">Services</a>
                </li>
                <li class="nav-item <?php echo $_SERVER['REQUEST_URI'] == '/contact' ? 'active' : ''; ?>">
                    <a class="nav-link" href="contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="store#!/~/cart">Cart <i class="fas fa-shopping-cart"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>