<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/home.css') }}">
    <link rel="stylesheet" href="{{ url('css/homeResponsive.css') }}">
    <script src="{{ url('js/home.js') }}" defer></script>
    <title>Nalondo - Home</title>
    {{-- <script src="{{ url('js/draggableSlider.js') }}" defer></script> --}}
</head>

<body>
    {{-- navigation bar --}}
    <nav>

    </nav>
    {{-- This is the main container --}}
    <main>
        {{-- home page landing section --}}
        <section class="landing">
            <marquee behavior="scroll" direction="left">26 April 2022TERM 1 2022 OPENING DATE 04 May 2021OFFICIAL SCHOOL REPORT 04 M</marquee>
            <div class="welcome">
                <div class="welcome-text">
                    WE WELCOME YOU TO
                </div>
                <div class="school-name anim-typewriter">
                    ST JOSEPH'S NALONDO BOYS HIGH SCHOOL
                </div>
                <div class="button">
                    <button id="btn">LEARN MORE</button>
                </div>
            </div>

            <div class="boxes">
                <div class="box">
                    <img src="{{ asset('icons/faculty.png') }}" alt="">
                    <h4>
                        FACULTY
                    </h4>
                    <p>
                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring
                        which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.

                        <span>Learn More</span>
                    </p>
                </div>
                <div class="box">
                    <img src="{{ asset('icons/student-life.png') }}" alt="">
                    <h4>
                        STUDENT LIFE
                    </h4>
                    <p>
                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring
                        which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.

                        <span>Learn More</span>
                    </p>
                </div>
                <div class="box">
                    <img src="{{ asset('icons/projects.png') }}" alt="">
                    <h4>
                        PROJECTS
                    </h4>
                    <p>
                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring
                        which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.

                        <span>Learn More</span>
                    </p>
                </div>
            </div>
        </section>

        {{-- home page slideshow section --}}
        <section class="slideshow">

            {{-- slides container --}}
            <div class="slides">
                <div class="slide">
                    <img src="{{ asset('images/nalondo1.jpeg') }}" alt="">
                    <div class="brief">
                        <h1>TITLE</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, voluptates.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="{{ asset('images/nalondo8.jpeg') }}" alt="">
                    <div class="brief">
                        <h1>TITLE</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, voluptates.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="{{ asset('images/nalondo10.jpeg') }}" alt="">
                    <div class="brief">
                        <h1>TITLE</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, voluptates.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="{{ asset('images/nalondo11.jpeg') }}" alt="">
                    <div class="brief">
                        <h1>TITLE</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, voluptates.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="{{ asset('images/nalondo13.jpeg') }}" alt="">
                    <div class="brief">
                        <h1>TITLE</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, voluptates.</p>
                    </div>
                </div>
            </div>

            {{-- animated statistics counter container --}}
            <div class="statistics">
                <div class="teachers card">
                    <h1>TEACHERS</h1>
                    <span class="num" data-val="68">0</span>
                </div>
                <div class="candidates card">
                    <h1>CANDIDATES</h1>
                    <span class="num" data-val="299">0</span>
                </div>
                <div class="students card">
                    <h1>STUDENTS</h1>
                    <span class="num" data-val="1875">0</span>
                </div>
            </div>

        </section>
    </main>
    <footer>

    </footer>
</body>

</html>
