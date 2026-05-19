
<style>


/* FOOTER */
.footer{
    background:#000;
    color:#fff;
    padding:0 20px 15px;
}

/* CONTAINER */
.footer-container{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    flex-wrap:wrap;
    gap:20px;
}

/* LOGO */
.footer-logo h2{
    font-size:24px;
    margin:0;
}

.footer-logo span{
    color:#ffcc00;
}

.footer-logo p{
    font-size:13px;
    color:#aaa;
    margin-top:6px;
}

/* LINKS */
.footer-links{
    display:flex;
    flex-direction:column;
    gap:8px;
}

.footer-links a{
    color:#fff;
    text-decoration:none;
    font-size:14px;
    transition:0.3s;
}

.footer-links a:hover{
    color:#ffcc00;
}

/* SOCIAL */
.footer-social{
    display:flex;
    gap:12px;
}

.footer-social a{
    color:#fff;
    font-size:18px;
    transition:0.3s;
}

.footer-social a:hover{
    color:#ffcc00;
}

/* BOTTOM */
.footer-bottom{
    text-align:center;
    margin-top:20px;
    border-top:1px solid #222;
    padding-top:10px;
    font-size:12px;
    color:#aaa;
}

/* MOBILE RESPONSIVE */
@media(max-width:768px){
    .footer-container{
        flex-direction:column;
        align-items:center;
        text-align:center;
    }

    .footer-social{
        justify-content:center;
    }
}
</style>
</head>

<body>

<!-- FOOTER -->
<footer class="footer">

    <div class="footer-container">

        <!-- LOGO -->
        <div class="footer-logo">
            <h2>Movie<span>Zone</span></h2>
            <p>Watch movies anytime, anywhere</p>
        </div>

        <!-- LINKS -->
        <div class="footer-links">
            <a href="#">Home</a>
            <a href="#">Movies</a>
            <a href="#">Series</a>
            <a href="#">Contact</a>
        </div>

        <!-- SOCIAL -->
        <div class="footer-social">
            <a href="#"><i class="bi bi-telegram"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-youtube"></i></a>
            <a href="#"><i class="bi bi-twitter-x"></i></a>
        </div>

    </div>

    <div class="footer-bottom">
        © 2026 MovieZone. All rights reserved.
    </div>

</footer>
