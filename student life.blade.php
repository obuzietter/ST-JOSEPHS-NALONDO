@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Student Life</h1>
        <div class="slick-slider">
            <div>
                <img src="#" alt="Games">
                <p>Engage in various exciting games and activities on campus.</p>
            </div>
            <div>
                <img src="#" alt="Dormitories">
                <p>Comfortable and modern dormitories provide a home away from home.</p>
            </div>
            <!-- Add more slides for other aspects -->
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.slick-slider').slick({
                dots: true, // Add navigation dots
                autoplay: true, // Enable autoplay
                autoplaySpeed: 3000, // Autoplay interval in milliseconds
            });
        });
    </script>
@endsection
