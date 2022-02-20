<div class="navbar">
    <div class="justify-navbar">
        <div class="navbar-brand">Izzy's Blog</div>
    </div>
    <nav>
        <ul class="nav">
            <li class="nav-item"><a href="/">Recent</a></li>
            <li class="nav-item"><a href="/about">About</a></li>
            <li class="nav-item"><a href="/contact">Contact</a></li>
            <?php if(isset($logout)): ?>
            <li class="nav-item"><a href="/logout" className="btn ">Logout</a></li>
            <?php endif; ?>
        </ul>
        <span class="custom-bar">=</span>
        <ul class="hidden-nav" id="bars-nav">
            <li class="nav-item"><a href="/">Recent</a></li>
            <li class="nav-item"><a href="/about">About</a></li>
            <li class="nav-item"><a href="/contact">Contact</a></li>
            <?php if(isset($logout)): ?>
            <li class="nav-item"><a href="/logout" className="btn ">Logout</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</div>
<br><br>