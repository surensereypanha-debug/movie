
<style>
body{
    padding-top: 70px; /* adjust based on navbar height */
}
     /* animation */
    @keyframes appear{
        from{
            opacity: 0;
            /* scale: 0.5; */
            transform: translateX(100px);
        }
        to
        {
            opacity: 1;
            /* scale: 1; */
            transform: translateX(0);
        }
    }
div{
        animation: appear 0.7s linear;
        /* animation-timeline: view() ; */
        animation-range:entry 0 cover 10%;
        
    }
    
/* animation */
li {
    opacity: 0;
    transform: translateX(-100px);
    transition: 0.6s;
}

li.show {
    opacity: 1;
    transform: translateX(0);
}
/* ?? */

.carousel-item{
    position: relative;
    overflow: hidden;
}

a{
    font-size: 11px;
    text-decoration: none;
}

/* NAVBAR */
.navbar {
    padding: 12px 15px;
    background: rgb(0,0,0);
    position: relative;
}
/* nav bar no hide */
.navbar{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
}
/* CONTAINER */
.container-fluid{
    display: flex;
    align-items: center;
    justify-content: space-between;
}

/* LOGO */
.logo img{
    width: 50px;
}

/* MENU */
.nav-show {
 position: relative;
    display: flex;
    align-items: center;
    list-style: none;
    padding: 0;
    margin: 0;
}

.nav-link {
    position: relative;
    color: #ffcc00;
    font-weight: 500;
    margin-right: 8px;
    transition: 0.3s;
}

/* underline */
.nav-link::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -5px;
    width: 0%;
    height: 2px;
    background: #ffcc00;
    transition: 0.3s;
}
.nav-link:hover {
    color: #ffcc00;
}

.nav-link:hover::after,
.nav-link.active::after {
    width: 100%;
}

/* AUTH */
.auth {
    display: flex;
    gap: 8px;
}

.btn-auth {
    padding: 5px 10px;
    border: 1px solid #ffcc00;
    color: #ffcc00;
    border-radius: 4px;
    font-size: 11px;
    transition: 0.3s;
}

.btn-auth:hover {
    background: #ffcc00;
    color: #111;
}

/* HAMBURGER */
.showbar {
    display: none;
    font-size: 26px;
    color: #ffcc00;
    cursor: pointer;
}

/* ===== MOBILE ===== */
@media(max-width:600px)  {

    .showbar {
        display: block;
    }

    .nav-show {
        position: absolute;
        top: 60px;
        left: 0;
        width: 100%;
        background: #111;

        flex-direction: column;
        align-items: flex-start;

        display: none;
        z-index: 999;
    }

    .nav-show.active {
        display: flex;
    }

    .mobilehiden {
        width: 100%;
        padding: 10px 15px;
    }

    /* AUTH mobile */
    .auth {
        flex-direction: column;
        width: 100%;
        padding: 10px 15px;
    }
}

</style>


<body>

<nav class="navbar">

<div class="container-fluid">

    <!-- LOGO -->
    <a href="/" class="logo">
        <img src="{{ asset('logo.png') }}" alt="">
    </a>

    <!-- MENU -->
    <ul class="nav-show">

        <li class="mobilehiden">
            <a class="nav-link {{ request()->is('series') ? 'active' : '' }}" href="/series">
                រឿងភាគ
            </a>
        </li>

        <li class="mobilehiden">
            <a class="nav-link {{ request()->is('popular') ? 'active' : '' }}" href="/popular">
                រឿងពេញនិយម
            </a>
        </li>

        <li class="mobilehiden">
            <a class="nav-link {{ request()->is('action') ? 'active' : '' }}" href="/action">
                រឿងខ្មែរ
            </a>
        </li>

        <li class="mobilehiden">
            <a class="nav-link {{ request()->is('new') ? 'active' : '' }}" href="/new">
                រឿងថ្មីៗ
            </a>
        </li>

        <!-- AUTH inside menu (mobile friendly) -->
        <div class="auth">
            <a href="/login" class="btn-auth">Login</a>
            <a href="/register" class="btn-warning text-white btn-auth">Register</a>
        </div>

    </ul>

    <!-- HAMBURGER -->
    <div class="showbar" onclick="toggleMenu()">
        <i class="bi bi-list"></i>
    </div>

</div>

</nav>

<script>
function toggleMenu() {
    document.querySelector('.nav-show').classList.toggle('active');
}
</script>

<script>
    const items = document.querySelectorAll("li");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    });

    items.forEach(li => observer.observe(li));
</script>
