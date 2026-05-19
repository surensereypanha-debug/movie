<style>
 /* animation */
 @keyframes appear{
        from{
            opacity: 0;
            /* scale: 0.5; */
            transform: translateX(-100px);
        }
        to
        {
            opacity: 1;
            /* scale: 1; */
            transform: translateX(0);
        }
    }
li{
        animation: appear 5s linear;
        animation-timeline: view() ;
        animation-range:entry 0 cover 40%;
        
}

.carousel-item{
    position: relative;
    overflow: hidden;
}


/* IMAGE */
.carousel-img{
    height: 100vh;
    object-fit: cover;
    display: block;
    width: 100%;
}

/* DARK OVERLAY */
.carousel-item::before{
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.5); /* adjust darkness here */
    z-index: 1;
    pointer-events: none;
}

/* TEXT FIX (IMPORTANT) */
.carousel-caption{
    position: absolute;
    z-index: 2;
    bottom: 20%;
    left: 10%;
    right: auto;
    text-align: left;
    width: 500px
}

/* FORCE FULL WHITE TEXT */
.carousel-caption h3,
.carousel-caption p{
    color: #fff !important;
    text-shadow: 0 2px 10px rgba(0,0,0,0.8);
}

.carousel-caption h3{
    font-size: 30px;
    font-weight: bold;
}

.carousel-caption p{
    font-size: 15px;
    opacity: 0.5;
    width: 100%;
}
.movie-badge {
    display: inline-block;
    background:#ffcc00 ;
    color: white;
    font-size: 11px;
    padding: 4px 10px;
    border-radius: 3px;
    margin-bottom: 20px;
    font-weight: bold;
    border: 1px solid #ffcc00;
}

/* MOBILE FIX */
@media (max-width: 768px) and (orientation: portrait) {
    .carousel-img{
        height: 30vh;
    }
    .movie-badge {
            display: inline-block;
            background:#ffcc00 ;
            color: white;
            font-size: 7px;
            padding: 2px 5px;
            border-radius: 3px;
            margin-bottom: 10px;
            font-weight: bold;
            border: 1px solid #ffcc00;
        }

     .carousel-caption {
        width: 60%;
        bottom: 1%;
    }

   .carousel-caption h3{
            font-size: 20px;
            font-weight: bold;
    }

    .carousel-caption p{
            font-size: 8px;
            opacity: 0.5;
            width: 70%;
    }
    .btn{
        font-size: 7px;
        padding: 2;
    }

}
@media (max-width: 768px) and (orientation: landscape) {
     .carousel-img{
        height: 100vh;
    }
 .carousel-caption {
        width: 60%;
        bottom: 20%;
    }
  .movie-badge {
            display: inline-block;
            background:#ffcc00 ;
            color: white;
            font-size: 7px;
            padding: 2px 5px;
            border-radius: 3px;
            margin-bottom: 10px;
            font-weight: bold;
            border: 1px solid #ffcc00;
        }
}
</style>

<div id="demo" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

  <div class="carousel-inner">

    <div class="carousel-item active">
      <img id="myImage" src="{{ asset('img-3.jpg') }}" class="d-block w-100 carousel-img">
      <div class="carousel-caption">
        <span class="movie-badge">NEW</span>
        <h3>រឿងខ្មៅឆៅស៊ីការ៉េម</h3>
        <p>នឹងមកដល់ឆាប់ៗនេះគ្រប់រោងភាពយន្ក​នៅក្នុងព្រះរាជាណាចក្រកម្ពូជា នឹងមកដល់ឆាប់ៗនេះគ្រប់រោងភាពយន្ក​នៅក្នុងព្រះរាជាណាចក្រកម្ពូជា </p>
        <button id="btn" class="btn btn-outline-warning text-white px-4">មើលឥឡូវ</button>
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{ asset('ben10.jpg') }}" class="d-block w-100 carousel-img">
      <div class="carousel-caption">
        <span class="movie-badge">NEW</span>
        <h3>រឿងអ្នកប្រយុទ្ធដ៏អង់អាច</h3>
        <p>នឹងមកដល់ឆាប់ៗនេះគ្រប់រោងភាពយន្ក​នៅក្នុងព្រះរាជាណាចក្រកម្ពូជា</p>
        <button class="btn btn-outline-warning text-white px-4">មើលឥឡូវ</button>
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{ asset('ben10.jpg') }}" class="d-block w-100 carousel-img">
      <div class="carousel-caption">
        <span class="movie-badge">NEW</span>
        <h3>រឿងអ្នកចម្បាំងវាលខ្សាច់</h3>
        <p>នឹងមកដល់ឆាប់ៗនេះគ្រប់រោងភាពយន្ក​នៅក្នុងព្រះរាជាណាចក្រកម្ពូជា</p>
        <button class="btn btn-outline-warning text-white px-4">មើលឥឡូវ</button>
      </div>
    </div>

  </div>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/node-vibrant/3.2.0/vibrant.min.js"></script>