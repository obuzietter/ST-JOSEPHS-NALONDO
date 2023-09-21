<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nalondo - Home</title>
    {{-- css linking --}}
    {{-- <link rel="stylesheet" href="{{ asset('/css/home.css') }}"> --}}
    <link rel="stylesheet" href="/css/home.css">
    <script src="{{asset('/js/home.js')}}" defer></script>
</head>

<body>
    <header>

    </header>
    <main>
        {{-- section landing --}}
        <section class="landing">
            <div class="slides">
                <div class="slide active" id="one">
                    <div class="welcome">
                        WELCOME TO
                    </div>
                    <div class="banner">
                        ST JOSEPHS NALONDO BOYS HIGHSCHOOL
                    </div>
                </div>
                <div class="slide" id="two">
                    <div class="welcome">
                        THIS IS WHERE
                    </div>
                    <div class="banner">
                        BOYS ARE TURNED INTO MEN
                    </div>
                </div>
                <div class="slide" id="three">
                    <div class="welcome">
                        OUR MOTTO
                    </div>
                    <div class="banner">
                        WE USE COMMON SENSE
                    </div>
                </div>

            </div>

            <nav>
                <span class="navBtns active">O</span>
                <span class="navBtns">O</span>
                <span class="navBtns">O</span>
            </nav>
        </section>
        <section class="brief">
            <div class="card student-life">
                <div class="icon">
                    <img src="{{ asset('/icons/student-life.png') }}" alt="">

                </div>
                <div class="desc">
                    <h3>STUDENT LIFE</h3>
                    <p>Our 'Student Life' page is your hub for an engaging high school experience. Explore a dynamic
                        calendar of events, from sports tournaments to club meetings, and stay updated on important
                        school announcements. </p>
                </div>
            </div>
            <div class="card projects">
                <div class="icon">
                    <img src="{{ asset('/icons/projects.png') }}" alt="">
                </div>
                <div class="desc">
                    <h3>SCHOOL PROJECTS</h3>
                    <p>Our 'Student Life' page is your hub for an engaging high school experience. Explore a dynamic
                        calendar of events, from sports tournaments to club meetings, and stay updated on important
                        school announcements. </p>
                </div>
            </div>
            <div class="card faculty">
                <div class="icon">
                    <img src="{{ asset('/icons/faculty.png') }}" alt="">
                </div>
                <div class="desc">
                    <h3>SCHOOL PROJECTS</h3>
                    <p>Our 'Student Life' page is your hub for an engaging high school experience. Explore a dynamic
                        calendar of events, from sports tournaments to club meetings, and stay updated on important
                        school announcements. </p>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="blue-bg-color">
                <div class="heading">
                    Latest News

                </div>
                <div class="content">
                    <article>
                        <div class="image">
                            <img src="https://cdn-icons-png.flaticon.com/128/458/458555.png" alt="">
                        </div>
                        <div class="body">
                            <h3>Drastic Improvement in kcse</h3>
                            <p>Positive Vibes as Nalondo Boys threaten the great Kmausinga . . .</p>
                            <span>
                                See article
                            </span>
                        </div>
                    </article>
                    <article>
                        <div class="image">
                            <img src="https://cdn-icons-png.flaticon.com/128/458/458555.png" alt="">
                        </div>
                        <div class="body">
                            <h3>Drastic Improvement in kcse</h3>
                            <p>Positive Vibes as Nalondo Boys threaten the great Kmausinga . . .</p>
                            <span>
                                See article
                            </span>
                        </div>
                    </article>
                    <article>
                        <div class="image">
                            <img src="https://cdn-icons-png.flaticon.com/128/458/458555.png" alt="">
                        </div>
                        <div class="body">
                            <h3>Drastic Improvement in kcse</h3>
                            <p>Positive Vibes as Nalondo Boys threaten the great Kmausinga . . .</p>
                            <span>
                                See article
                            </span>
                        </div>
                    </article>
                </div>
                <div class="more">
                    <button>SEE MORE ARTICLES</button>
                </div>
            </div>
        </section>
        <section class="events">
            <div class="heading">
                <h1>Upcoming Events</h1>
            </div>
            <div class="event-items">
                <div class="event">
                    <div class="date">
                        <div class="widget">
                            <div class="month">MAY</div>
                            <div class="day">23</div>
                        </div>
                    </div>
                    <div class="desc">
                        <h3>Regional Competitions</h3>
                        <p>Will be held at Nalondo Boys Highschool</p>
                        <span>
                            See event details ->
                        </span>
                    </div>
                </div>
                <div class="event">
                    <div class="date">
                        <div class="widget">
                            <div class="month">JULY</div>
                            <div class="day">4</div>
                        </div>
                    </div>
                    <div class="desc">
                        <h3>Science and Engineering fair</h3>
                        <p>Will be held at Friends School Kamusinga

                        </p>
                        <span>
                            See event details ->
                        </span>
                    </div>
                </div>
            </div>
            <div class="calender">
                <h1>SEE CALENDER OF EVENTS</h1>
            </div>


        </section>
        <section class="about">
            <div class="slides">
                <div class="content">
                    <h1>ABOUT OUR SCHOOL</h1>
                    <p>
                        We don’t just give students an education and experiences that set them up for success in a
                        career. We help them succeed in their career—to discover a field they’re passionate about and
                        dare to lead it.</p>
                    <p>
                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring
                        which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot,
                        which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed
                        in the exquisite sense of mere.
                    </p>
                </div>
                <div class="button">
                    <button>LEARN MORE</button>
                </div>
                <nav>
                    <a href="">A</a>
                    <a href="">B</a>
                    <a href="">C</a>
                </nav>
            </div>
        </section>
        <section class="counters">
            <div class="counter ob">
                <span class="count" data-target="64">0</span>
                <h3>TEACHERS</h3>
            </div>
            <div class="counter ob">
                <span class="count" data-target="1453">0</span>
                <h3>STUDENTS</h3>
            </div>
            <div class="counter ob">
                <span class="count" data-target="217">0</span>
                <h3>CANDIDATES</h3>
            </div>
        </section>
    </main>
    <footer>

    </footer>
</body>
<script>
    var slides = document.querySelectorAll('.slide');
    var btns = document.querySelectorAll('.navBtns')
    let currentSlide = 1;

    // manual navigation
    var manualNav = function(manual) {
        slides.forEach((slide) => {
            slide.classList.remove('active')

            btns.forEach((btn) => {
                btn.classList.remove('active')
            })
        });
        
        slides[manual].classList.add('active')
        btns[manual].classList.add('active')
    }

    btns.forEach((btn, i)=>{
        btn.addEventListener("click", ()=>{
            manualNav(i)
            currentSlide = i
        })
    })
</script>

</html>
