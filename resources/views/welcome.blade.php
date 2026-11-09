@extends('layouts.app')

@section('title')
    home
@endsection

@section('styles')
    @vite('resources/css/home.css')
@endsection

@section('content')
    <div class="carousel w-full">
        <div id="slide1" class="carousel-item relative w-full">
            <img alt="Tailwind CSS slide example"
                src="https://www.pcspecialist.fr/images/landing/pcs/streaming-pcs/streaming-pc-feature-2025.png" class="w-full" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide4" class="btn btn-circle">❮</a>
                <a href="#slide2" class="btn btn-circle">❯</a>
            </div>
        </div>
        <div id="slide2" class="carousel-item relative w-full">
            <img alt="Tailwind CSS slide example"
                src="https://media.materiel.net/categories/424.png" class="w-full" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide1" class="btn btn-circle">❮</a>
                <a href="#slide3" class="btn btn-circle">❯</a>
            </div>
        </div>
        <div id="slide3" class="carousel-item relative w-full">
            <img alt="Tailwind CSS slide example"
                src="https://m.media-amazon.com/images/I/51fE7FmJZ2L._AC_UF1000,1000_QL80_.jpg" class="w-full" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide2" class="btn btn-circle">❮</a>
                <a href="#slide4" class="btn btn-circle">❯</a>
            </div>
        </div>
        <div id="slide4" class="carousel-item relative w-full">
            <img alt="Tailwind CSS slide example"
                src="https://m.media-amazon.com/images/I/51fE7FmJZ2L._AC_UF1000,1000_QL80_.jpg" class="w-full" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide3" class="btn btn-circle">❮</a>
                <a href="#slide1" class="btn btn-circle">❯</a>
            </div>
        </div>
    </div>
    @forelse ( $articles as $article )
        <div class="card bg-base-100 w-96 shadow-sm">
            <figure>
                <img
                src="https://m.media-amazon.com/images/I/51fE7FmJZ2L._AC_UF1000,1000_QL80_.jpg"
                alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">Card Title</h2>
                <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
                <div class="card-actions justify-end">
                <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
    @empty
        aucun article
    @endforelse
@endsection
