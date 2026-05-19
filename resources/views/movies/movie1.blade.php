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
    overflow-x:hidden;
}

/* SECTION */
.movie-wrapper{
    padding:30px 20px;
}

/* TITLE */
.movie-title{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
}

.movie-title h2{
    color:var(--yellow);
    font-size:35px;
    font-weight:bold;
}

.show-btn{
    background:var(--yellow);
    color:var(--black);
    padding:10px 18px;
    border-radius:12px;
    text-decoration:none;
    font-weight:bold;
}

/* SLIDER */
.slider-container{
    width:100%;
    overflow-x:auto;
    overflow-y:hidden;

    scroll-behavior:smooth;

    scrollbar-width:none;
}

.slider-container::-webkit-scrollbar{
    display:none;
}

.movie-slider{
    display:flex;
    gap:20px;
    width:max-content;
    padding-top:10px;
    scroll-snap-type:x mandatory;

    padding-bottom:10px;
}

/* CARD */
.movie-card{
    width:220px;
    background:#111;
    border:1px solid var(--yellow);
    border-radius:18px;
    overflow:hidden;

    flex-shrink:0;

    scroll-snap-align:start;

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
    height:200px;
    object-fit:cover;
    display:block;
}

/* CATEGORY */
.category{
    position:absolute;
    top:10px;
    left:10px;

    background:var(--yellow);
    color:var(--black);

    padding:5px 12px;
    border-radius:10px;

    font-size:14px;
    font-weight:bold;
}

/* HEART */
.heart{
    position:absolute;
    top:10px;
    right:10px;

    width:40px;
    height:40px;

    border-radius:50%;
    background:rgba(0,0,0,0.7);

    display:flex;
    justify-content:center;
    align-items:center;

    color:var(--yellow);
    font-size:20px;
}

/* CONTENT */
.movie-content{
    padding:15px;
}

.movie-content h3{
    color:var(--yellow);
    font-size:22px;
    margin-bottom:10px;
}

.movie-time{
    color:var(--yellow);
    opacity:0.8;
}

/* MORE CARD */
.more-card{
    width:220px;
    border:2px dashed var(--yellow);
    border-radius:18px;

    display:flex;
    justify-content:center;
    align-items:center;

    text-align:center;

    color:var(--yellow);

    flex-shrink:0;

    scroll-snap-align:start;
}

.more-card i{
    font-size:45px;
}

.more-card p{
    margin-top:10px;
    font-size:20px;
    font-weight:bold;
}

/* MOBILE */
@media(max-width:768px){

    .movie-title{
        /* flex-direction:column; */
        /* align-items:flex-start; */
        gap:15px;
        display: flex;
    }

    .movie-title h2{
        font-size:24px;
    }

    .show-btn{
        font-size:10px;
        padding:5px 7px;
    }

    .movie-card{
        width:160px;
    }

    .movie-img img{
        height:180px;
    }

    .movie-content h3{
        font-size:16px;
    }

    .movie-time{
        font-size:13px;
    }

    .more-card{
        width:160px;
    }

    .more-card i{
        font-size:35px;
    }

    .more-card p{
        font-size:16px;
    }

}

</style>

<body>

<div class="movie-wrapper">

    <!-- TITLE -->
    <div class="movie-title">

        <h2>រឿង​ពេញនិយម</h2>

        <a href="#" class="show-btn">
           ទាំងអស់
            <i class="bi bi-chevron-double-right"></i>
        </a>

    </div>

    <!-- SLIDER -->
    <div class="slider-container">

        <div class="movie-slider">

            <!-- CARD 1 -->
            <div class="movie-card">
                <a href="{{url('movies/usa')}}">
                <div class="movie-img">

                    <img  src="https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?q=80&w=800&auto=format&fit=crop">

                    <span class="category">New</span>

                    <div class="heart">
                        <i class="bi bi-heart"></i>
                    </div>
                </a>
                </div>

                <div class="movie-content">

                    <h3>Batman</h3>

                    <div class="movie-time">
                        <i class="bi bi-clock"></i>
                        1h 59min
                    </div>

                </div>

            </div>

            <!-- CARD 2 -->
            <div class="movie-card">
                <a href="#">
                <div class="movie-img">

                    <img src="https://images.unsplash.com/photo-1517604931442-7e0c8ed2963c?q=80&w=800&auto=format&fit=crop">

                    <span class="category">Hot</span>

                    <div class="heart">
                        <i class="bi bi-heart"></i>
                    </div>
                </a>
                </div>

                <div class="movie-content">

                    <h3>Avengers</h3>

                    <div class="movie-time">
                        <i class="bi bi-clock"></i>
                        2h 10min
                    </div>

                </div>

            </div>

            <!-- CARD 3 -->
            <div class="movie-card">
                <a href="#">
                <div class="movie-img">

                    <img src="https://images.unsplash.com/photo-1536440136628-849c177e76a1?q=80&w=800&auto=format&fit=crop">

                    <span class="category">Top</span>

                    <div class="heart">
                        <i class="bi bi-heart"></i>
                    </div>
                </a>
                </div>

                <div class="movie-content">

                    <h3>Spider Man</h3>

                    <div class="movie-time">
                        <i class="bi bi-clock"></i>
                        1h 40min
                    </div>

                </div>

            </div>

            <!-- CARD 4 -->
            <div class="movie-card">
                <a href="#">
                <div class="movie-img">

                    <img src="https://images.unsplash.com/photo-1440404653325-ab127d49abc1?q=80&w=800&auto=format&fit=crop">

                    <span class="category">New</span>

                    <div class="heart">
                        <i class="bi bi-heart"></i>
                    </div>
                </a>
                </div>

                <div class="movie-content">

                    <h3>Joker</h3>

                    <div class="movie-time">
                        <i class="bi bi-clock"></i>
                        2h 05min
                    </div>

                </div>

            </div>

            <!-- CARD 5 -->
            <div class="movie-card">
                <a href="#">
                <div class="movie-img">

                    <img src="https://images.unsplash.com/photo-1478720568477-152d9b164e26?q=80&w=800&auto=format&fit=crop">

                    <span class="category">Hot</span>

                    <div class="heart">
                        <i class="bi bi-heart"></i>
                    </div>
                </a>
                </div>

                <div class="movie-content">

                    <h3>Venom</h3>

                    <div class="movie-time">
                        <i class="bi bi-clock"></i>
                        1h 26min
                    </div>

                </div>

            </div>

            <!-- CARD 6 -->
            <div class="movie-card">
                <a href="#">
                <div class="movie-img">

                    <img src="https://images.unsplash.com/photo-1505685296765-3a2736de412f?q=80&w=800&auto=format&fit=crop">

                    <span class="category">Top</span>

                    <div class="heart">
                        <i class="bi bi-heart"></i>
                    </div>
                </a>
                </div>

                <div class="movie-content">

                    <h3>Family</h3>

                    <div class="movie-time">
                        <i class="bi bi-clock"></i>
                        2h 06min
                    </div>

                </div>

            </div>

            <!-- MORE CARD -->
            <div class="more-card">

                <div>

                    <i class="bi bi-chevron-double-right"></i>

                    <p>More Movies</p>

                </div>

            </div>

        </div>

    </div>

</div>
<div class="movie-wrapper">

    <!-- TITLE -->
    <div class="movie-title">

        <h2>រឿង​ខ្មែរ</h2>

        <a href="#" class="show-btn">
           ទាំងអស់
            <i class="bi bi-chevron-double-right"></i>
        </a>

    </div>

    <!-- SLIDER -->
    <div class="slider-container">

        <div class="movie-slider">

            <!-- CARD 1 -->
            <div class="movie-card">
                <a href="#">
                <div class="movie-img">

                    <img  src="https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?q=80&w=800&auto=format&fit=crop">

                    <span class="category">New</span>

                    <div class="heart">
                        <i class="bi bi-heart"></i>
                    </div>
                </a>
                </div>

                <div class="movie-content">

                    <h3>Batman</h3>

                    <div class="movie-time">
                        <i class="bi bi-clock"></i>
                        1h 59min
                    </div>

                </div>

            </div>

            <!-- CARD 2 -->
            <div class="movie-card">
                <a href="#">
                <div class="movie-img">

                    <img src="https://images.unsplash.com/photo-1517604931442-7e0c8ed2963c?q=80&w=800&auto=format&fit=crop">

                    <span class="category">Hot</span>

                    <div class="heart">
                        <i class="bi bi-heart"></i>
                    </div>
                </a>
                </div>

                <div class="movie-content">

                    <h3>Avengers</h3>

                    <div class="movie-time">
                        <i class="bi bi-clock"></i>
                        2h 10min
                    </div>

                </div>

            </div>

            <!-- CARD 3 -->
            <div class="movie-card">
                <a href="#">
                <div class="movie-img">

                    <img src="https://images.unsplash.com/photo-1536440136628-849c177e76a1?q=80&w=800&auto=format&fit=crop">

                    <span class="category">Top</span>

                    <div class="heart">
                        <i class="bi bi-heart"></i>
                    </div>
                </a>
                </div>

                <div class="movie-content">

                    <h3>Spider Man</h3>

                    <div class="movie-time">
                        <i class="bi bi-clock"></i>
                        1h 40min
                    </div>

                </div>

            </div>

            <!-- CARD 4 -->
            <div class="movie-card">
                <a href="#">
                <div class="movie-img">

                    <img src="https://images.unsplash.com/photo-1440404653325-ab127d49abc1?q=80&w=800&auto=format&fit=crop">

                    <span class="category">New</span>

                    <div class="heart">
                        <i class="bi bi-heart"></i>
                    </div>
                </a>
                </div>

                <div class="movie-content">

                    <h3>Joker</h3>

                    <div class="movie-time">
                        <i class="bi bi-clock"></i>
                        2h 05min
                    </div>

                </div>

            </div>

            <!-- CARD 5 -->
            <div class="movie-card">
                <a href="#">
                <div class="movie-img">

                    <img src="https://images.unsplash.com/photo-1478720568477-152d9b164e26?q=80&w=800&auto=format&fit=crop">

                    <span class="category">Hot</span>

                    <div class="heart">
                        <i class="bi bi-heart"></i>
                    </div>
                </a>
                </div>

                <div class="movie-content">

                    <h3>Venom</h3>

                    <div class="movie-time">
                        <i class="bi bi-clock"></i>
                        1h 26min
                    </div>

                </div>

            </div>

            <!-- CARD 6 -->
            <div class="movie-card">
                <a href="#">
                <div class="movie-img">

                    <img src="https://images.unsplash.com/photo-1505685296765-3a2736de412f?q=80&w=800&auto=format&fit=crop">

                    <span class="category">Top</span>

                    <div class="heart">
                        <i class="bi bi-heart"></i>
                    </div>
                </a>
                </div>

                <div class="movie-content">

                    <h3>Family</h3>

                    <div class="movie-time">
                        <i class="bi bi-clock"></i>
                        2h 06min
                    </div>

                </div>

            </div>

            <!-- MORE CARD -->
            <div class="more-card">

                <div>

                    <i class="bi bi-chevron-double-right"></i>

                    <p>More Movies</p>

                </div>

            </div>

        </div>

    </div>

</div>
<div class="movie-wrapper">

    <!-- TITLE -->
    <div class="movie-title">

        <h2>រឿង​ឥណ្តូ</h2>

        <a href="#" class="show-btn">
           ទាំងអស់
            <i class="bi bi-chevron-double-right"></i>
        </a>

    </div>

    <!-- SLIDER -->
    <div class="slider-container">

        <div class="movie-slider">

            <!-- CARD 1 -->
            <div class="movie-card">
                <a href="#">
                <div class="movie-img">

                    <img  src="https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?q=80&w=800&auto=format&fit=crop">

                    <span class="category">New</span>

                    <div class="heart">
                        <i class="bi bi-heart"></i>
                    </div>
                </a>
                </div>

                <div class="movie-content">

                    <h3>Batman</h3>

                    <div class="movie-time">
                        <i class="bi bi-clock"></i>
                        1h 59min
                    </div>

                </div>

            </div>

            <!-- CARD 2 -->
            <div class="movie-card">
                <a href="#">
                <div class="movie-img">

                    <img src="https://images.unsplash.com/photo-1517604931442-7e0c8ed2963c?q=80&w=800&auto=format&fit=crop">

                    <span class="category">Hot</span>

                    <div class="heart">
                        <i class="bi bi-heart"></i>
                    </div>
                </a>
                </div>

                <div class="movie-content">

                    <h3>Avengers</h3>

                    <div class="movie-time">
                        <i class="bi bi-clock"></i>
                        2h 10min
                    </div>

                </div>

            </div>

            <!-- CARD 3 -->
            <div class="movie-card">
                <a href="#">
                <div class="movie-img">

                    <img src="https://images.unsplash.com/photo-1536440136628-849c177e76a1?q=80&w=800&auto=format&fit=crop">

                    <span class="category">Top</span>

                    <div class="heart">
                        <i class="bi bi-heart"></i>
                    </div>
                </a>
                </div>

                <div class="movie-content">

                    <h3>Spider Man</h3>

                    <div class="movie-time">
                        <i class="bi bi-clock"></i>
                        1h 40min
                    </div>

                </div>

            </div>

            <!-- CARD 4 -->
            <div class="movie-card">
                <a href="#">
                <div class="movie-img">

                    <img src="https://images.unsplash.com/photo-1440404653325-ab127d49abc1?q=80&w=800&auto=format&fit=crop">

                    <span class="category">New</span>

                    <div class="heart">
                        <i class="bi bi-heart"></i>
                    </div>
                </a>
                </div>

                <div class="movie-content">

                    <h3>Joker</h3>

                    <div class="movie-time">
                        <i class="bi bi-clock"></i>
                        2h 05min
                    </div>

                </div>

            </div>

            <!-- CARD 5 -->
            <div class="movie-card">
                <a href="#">
                <div class="movie-img">

                    <img src="https://images.unsplash.com/photo-1478720568477-152d9b164e26?q=80&w=800&auto=format&fit=crop">

                    <span class="category">Hot</span>

                    <div class="heart">
                        <i class="bi bi-heart"></i>
                    </div>
                </a>
                </div>

                <div class="movie-content">

                    <h3>Venom</h3>

                    <div class="movie-time">
                        <i class="bi bi-clock"></i>
                        1h 26min
                    </div>

                </div>

            </div>

            <!-- CARD 6 -->
            <div class="movie-card">
                <a href="#">
                <div class="movie-img">

                    <img src="https://images.unsplash.com/photo-1505685296765-3a2736de412f?q=80&w=800&auto=format&fit=crop">

                    <span class="category">Top</span>

                    <div class="heart">
                        <i class="bi bi-heart"></i>
                    </div>
                </a>
                </div>

                <div class="movie-content">

                    <h3>Family</h3>

                    <div class="movie-time">
                        <i class="bi bi-clock"></i>
                        2h 06min
                    </div>

                </div>

            </div>

            <!-- MORE CARD -->
            <div class="more-card">

                <div>

                    <i class="bi bi-chevron-double-right"></i>

                    <p>More Movies</p>

                </div>

            </div>

        </div>

    </div>

</div>

<script>

const button = document.querySelector(".show-btn");
const slider = document.querySelector(".slider-container");

let openMovie = false;

button.addEventListener("click", function(e){

    e.preventDefault();

    if(openMovie == false){

        slider.style.overflowX = "visible";

        slider.style.whiteSpace = "normal";

        document.querySelector(".movie-slider").style.flexWrap = "wrap";

        document.querySelector(".movie-slider").style.width = "100%";

        button.innerHTML = `
            Hide Movies
            <i class="bi bi-chevron-up"></i>
        `;

        openMovie = true;

    }else{

        slider.style.overflowX = "auto";

        document.querySelector(".movie-slider").style.flexWrap = "nowrap";

        document.querySelector(".movie-slider").style.width = "max-content";

        button.innerHTML = `
            Show More
            <i class="bi bi-chevron-double-right"></i>
        `;

        openMovie = false;

    }

});

</script>