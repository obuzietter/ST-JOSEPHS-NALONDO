<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMMUNITY AND EVENTS</title>
    <link rel="stylesheet" href="projects.css">
    <link rel="stylesheet" href="{{ url('css/projects.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">

    
</head>
<body>
    <header>
    
    <div class="school-info">
        <div class="school-name">ST JOSEPH'S NALONDU HIGH SCHOOL</div>
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <nav>
    <ul class="header-links">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About Us</a></li>
        <li><a href="{{ route('faculty') }}">Faculty</a></li>
        <li><a href="{{ route('studentLife') }}">Student Life</a></li>
        <li><a href="{{ route('community') }}">Community</a></li>
        <li><a href="{{ route('achievements') }}">Achievements</a></li>
        <li><a href="{{ route('contact') }}">Contact Us</a></li>
    </ul>


    </header>
   
    </nav>
<!-- MAIN CONTAINER -->
    <main class="main-container">
        <!-- THE MAIN INTODUCTORY CLAUSE -->
        <div class="intro-div">
            <video autoplay loop muted plays-inline class="video">
                <source src="vid/vid.mov" type="mov">
            </video>
            
            <h1><span>PROJECTS</span> YOU REALLY<br>
                <span>NEED</span> TO KNOW ABOUT</h1>

            <button><span></span><a href="#projects">VIEW</a></button>
        </div>

        <!-- THE PROJECTS -->
        <div class="projects" id="projects">

            <!-- project-1 -->
            <div class="project project-1">
                <div class="project-title">project-1</div>
                <div class="image">  <img src="{{ asset('images/nalondo30.jpeg') }}" alt=""></div>
                <div class="project-details">
                    This is the description
                    of this project.
                </div>
            </div>

            <!-- project-2 -->
            <div class="project project-2">
                <div class="project-title">project-2</div>
                <div class="image">
                <img src="{{ asset('images/nalondo14.jpeg') }}" alt="">                   
                </div>
                <div class="project-details">
                    This is the description
                    of this project.
                </div>
            </div>

            <!-- project-3 -->
            <div class="project project-3">
                <div class="project-title">project-3</div>
                <div class="image">
                <img src="{{ asset('images/nalondo15.jpeg') }}" alt="">                   
                </div>
                <div class="project-details">
                    This is the description
                    of this project.
                </div>
            </div>

            <!-- project-5 -->
            <div class="project project-5">
                <div class="project-title">project-4</div>
                <div class="image">
                <img src="{{ asset('images/nalondo16.jpeg') }}" alt="">                   
                </div>
                <div class="project-details">
                    This is the description
                    of this project.
                </div>
            </div>
<!-- project-4 -->
            <div class="project project-5">
                <div class="project-title">project-5</div>
                <div class="image">
                <img src="{{ asset('images/nalondo17.jpeg') }}" alt="">                   
                </div>
                <div class="project-details">
                    This is the description
                    of this project.
                </div>
                       
                        </div>
              <!-- project-6 -->
            <div class="project project-6">
                <div class="project-title">project-6</div>
                <div class="image">
                <img src="{{ asset('images/nalondo18.jpeg') }}" alt="">                   
                </div>
                <div class="project-details">
                    This is the description
                    of this project.
                </div>
            </div>
        </div>

        <div class="calendar-intro">ANNUAL CALENDAR</div>
        <div class="calendar">
            <!-- show beginning of calendar -->
        
            <div class="headings">
                <h4>DATE</h4>
                <h4>EVENT</h4>
            </div>

            <div class="event event-1">
                <div class="date"></div>
                <div class="action"></div>
            </div>
            <div class="event event-2">
                <div class="date"></div>
                <div class="action"></div>
            </div>
            <div class="event event-3">
                <div class="date"></div>
                <div class="action"></div>
            </div>
            <div class="event event-4">
                <div class="date"></div>
                <div class="action"></div>
            </div>
            <div class="event event-5">
                <div class="date"></div>
                <div class="action"></div>
            </div>
            <div class="event event-6">
                <div class="date"></div>
                <div class="action"></div>
            </div>
            <div class="event event-7">
                <div class="date"></div>
                <div class="action"></div>
            </div>
            <div class="event event-8">
                <div class="date"></div>
                <div class="action"></div>
            </div>
            <div class="event event-9">
                <div class="date"></div>
                <div class="action"></div>
            </div>
        </div>

    </main>
    
</body>
</html>