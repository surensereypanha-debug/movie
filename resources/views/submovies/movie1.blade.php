@extends('layouts.app')

@section('title', 'Sub movies')

@section('content')
<style>
    iframe{
        width: 100%;
        height: 100vh;
    }
    .col-lg-12 img {
        width: 200px;
    }
    .movie-description{
            font-size: 13px;
            color: #ffcc00;
            opacity: 0.5;
    }
@media (max-width: 768px) and (orientation: portrait) {
          iframe{
            width: 100%;
            height: auto;
        }
        .col-lg-4 img {
            width: 100px;
        }
          .col-lg-12 h1{
            font-size: 12px;
        }
        .col-lg-12 p{
            font-size: 10px;
        }
        .btn{
            width: 100%;
        }
    }
    @media (orientation: landscape) {
     iframe{
        height: 100vh;
    }
    .btn{
            width: 100%;
        }
}
</style>
 
<div>
      <iframe 
            src="https://www.youtube.com/embed/66rknFPqZbs"
            title="YouTube video"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
        <hr class="text-warning">

       <div class="container py-4">

    <div class="movie-box p-4">

        <div class="row align-items-start">

            <!-- LEFT: POSTER -->
            <div class="col-12 col-md-3 text-center">
                <img src="https://wp.scoopwhoop.com/wp-content/uploads/2024/04/03184653/image-3.png"
                     class="movie-poster img-fluid">
            </div>

            <!-- MIDDLE: INFO -->
            <div class="col-12 col-md-6 text-white">

                <h2 class="movie-title">រឿងអាមេរិច</h2>

                <p class="movie-description">
                    ការផ្សងព្រេងគឺជាដំណើរដែលពោរពេញទៅដោយភាពរំភើប បញ្ហាប្រឈម និងការរកឃើញអ្វីថ្មីៗ...
                </p>

                <div class="movie-info">
                    <p><b>Language:</b> <span class="text-warning">Khmer</span></p>
                    <p><b>Time:</b> 1h 59m</p>
                    <p><b>Type:</b> <span class="text-warning">Korean</span></p>
                    <p><b>Year:</b> <span class="text-warning">2026</span></p>
                    <p><b>Quality:</b> <span class="badge bg-warning">FHD</span></p>

                    <button class="btn btn-success mt-2 mb-4">Subscribe</button>
                </div>

            </div>

            <!-- RIGHT: SUBSCRIBE BOX -->
            <div class="col-12 col-md-3 text-white border-start border-secondary ps-3">

                <button class="btn btn-danger w-100 mb-3">
                    🛒 Subscribe Films $4,000
                </button>

                <p class="small">
                    You can watch the movie after subscribing to the plan
                </p>

                <hr>

                <div class="d-flex gap-3 justify-content-center">
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-telegram"></i>
                    <i class="bi bi-link"></i>
                    <i class="bi bi-heart"></i>
                </div>

            </div>

        </div>

    </div>

</div>
</div>
@include('submovies.sub-movie1')
 

    
@endsection