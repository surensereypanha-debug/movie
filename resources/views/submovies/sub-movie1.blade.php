
<style>

:root{
    --black:#000;
    --yellow:#ffcc00;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background:var(--black);
}

/* WRAPPER */
.movie-wrapper{
    padding:30px 20px;
}

/* TITLE */
.movie-title{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:20px;
}

.movie-title h2{
    color:var(--yellow);
    font-size:28px;
}

/* BUTTON */
.show-btn{
    background:var(--yellow);
    color:#000;
    padding:8px 14px;
    border-radius:10px;
    text-decoration:none;
    font-weight:bold;
}

/* GRID */
.movie-grid{
    display:grid;
    grid-template-columns:repeat(4, 1fr); /* 1 row 4 COLUMNS */
    gap:20px;

    max-height:300px; 
    overflow:hidden;

    padding-top:30px;
    padding-bottom:30px;

    transition:0.4s ease;
}

/* EXPAND */
.movie-grid.expanded{
    max-height:2000px;
}

/* CARD */
.movie-card{
    background:#111;
    border:1px solid var(--yellow);
    border-radius:15px;
    overflow:hidden;
    color:var(--yellow);
    transition:0.3s;
}

.movie-card:hover{
    transform:translateY(-5px);
}

/* IMAGE */
.movie-img{
    position:relative;
}

.movie-img img{
    width:100%;
    height:180px;
    object-fit:cover;
    display:block;
}

/* CATEGORY */
.category{
    position:absolute;
    top:10px;
    left:10px;
    background:var(--yellow);
    color:#000;
    padding:5px 10px;
    border-radius:8px;
    font-size:12px;
    font-weight:bold;
}

/* HEART */
.heart{
    position:absolute;
    top:10px;
    right:10px;
    width:35px;
    height:35px;
    background:rgba(0,0,0,0.6);
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    color:var(--yellow);
}

/* CONTENT */
.movie-content{
    padding:10px;
}

.movie-content h3{
    font-size:18px;
    margin-bottom:5px;
}

.movie-time{
    font-size:14px;
    opacity:0.8;
}

/* MOBILE */
@media(max-width:768px) and (orientation: landscape){
    .movie-grid{
        grid-template-columns:repeat(2, 1fr);
        max-height:280px;
    }
    .movie-content h3{
        font-size: 12px;
    }
    .movie-time{
        font-size: 9px;
    }
}

</style>
</head>

<body>

<div class="movie-wrapper">

    <!-- TITLE -->
    <div class="movie-title">
        <h2>រឿង​ពេញនិយម</h2>

        <a href="#" class="show-btn" id="toggleBtn">
            Show More
            <i class="bi bi-chevron-double-right"></i>
        </a>
    </div>

    <!-- GRID -->
    <div class="movie-grid" id="movieGrid">

        <!-- CARD -->
        <div class="movie-card">
            <div class="movie-img">
                <img src="https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?q=80&w=800">
                <span class="category">New</span>
                <div class="heart"><i class="bi bi-heart"></i></div>
            </div>
            <div class="movie-content">
                <h3>Batman</h3>
                <div class="movie-time"><i class="bi bi-clock"></i> 1h 59m</div>
            </div>
        </div>

        <div class="movie-card">
            <div class="movie-img">
                <img src="https://images.unsplash.com/photo-1517604931442-7e0c8ed2963c?q=80&w=800">
                <span class="category">Hot</span>
                <div class="heart"><i class="bi bi-heart"></i></div>
            </div>
            <div class="movie-content">
                <h3>Avengers</h3>
                <div class="movie-time">2h 10m</div>
            </div>
        </div>

        <div class="movie-card">
            <div class="movie-img">
                <img src="https://images.unsplash.com/photo-1536440136628-849c177e76a1?q=80&w=800">
                <span class="category">Top</span>
                <div class="heart"><i class="bi bi-heart"></i></div>
            </div>
            <div class="movie-content">
                <h3>Spider Man</h3>
                <div class="movie-time">1h 40m</div>
            </div>
        </div>

        <div class="movie-card">
            <div class="movie-img">
                <img src="https://images.unsplash.com/photo-1440404653325-ab127d49abc1?q=80&w=800">
                <span class="category">New</span>
                <div class="heart"><i class="bi bi-heart"></i></div>
            </div>
            <div class="movie-content">
                <h3>Joker</h3>
                <div class="movie-time">2h 05m</div>
            </div>
        </div>

        <div class="movie-card">
            <div class="movie-img">
                <img src="https://images.unsplash.com/photo-1478720568477-152d9b164e26?q=80&w=800">
                <span class="category">Hot</span>
                <div class="heart"><i class="bi bi-heart"></i></div>
            </div>
            <div class="movie-content">
                <h3>Venom</h3>
                <div class="movie-time">1h 26m</div>
            </div>
        </div>

        <div class="movie-card">
            <div class="movie-img">
                <img src="https://images.unsplash.com/photo-1505685296765-3a2736de412f?q=80&w=800">
                <span class="category">Top</span>
                <div class="heart"><i class="bi bi-heart"></i></div>
            </div>
            <div class="movie-content">
                <h3>Family</h3>
                <div class="movie-time">2h 06m</div>
            </div>
        </div>

    </div>

</div>
<script>
const btn = document.getElementById("toggleBtn");
const grid = document.getElementById("movieGrid");

let open = false;

btn.addEventListener("click", function(e){
    e.preventDefault();

    open = !open;
    grid.classList.toggle("expanded");

    btn.innerHTML = open
        ? `Hide <i class="bi bi-chevron-up"></i>`
        : `Show More <i class="bi bi-chevron-double-right"></i>`;
});
</script>
