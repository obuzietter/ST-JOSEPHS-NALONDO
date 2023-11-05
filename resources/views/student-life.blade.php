<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Life</title>
    <link rel="stylesheet" href="/css/student-life.css">
    <link rel="stylesheet" href="/css/student-leader.css">
    <script src="/js/student-leader.js" defer></script>

    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
</head>

<body>
    <header>

    <div class="school-info">
        <div class="school-name">ST JOSEPH'S NALONDO HIGH SCHOOL</div>
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

</nav>
    </header>
    <main>
        <section class="hero">
            <h1>SEE THE STUDENT LIFE</h1>
        </section>
        <section class="brief">
            <div class="box">
                <div class="image">
                    <img src="/images/background.jpg" alt="">
                </div>
                <div class="description">
                    <h3>STUDENT LIFE</h3>
                    <p>
                        The student-life webpage on our high school's website serves as a vibrant hub of information and connection for our students. Here, you'll discover a treasure trove of resources and activities that enrich your high school experience. Stay up-to-date with the latest events, club meetings, and sports fixtures through our interactive calendar. Explore the diverse array of student organizations and clubs that cater to a wide range of interests, from the arts to STEM and beyond. Our student-life webpage also features inspiring stories and achievements from our fellow students, creating a strong sense of community and celebrating our successes. Whether you're looking to get involved, find academic support, or simply stay informed about the pulse of our school, this webpage is your one-stop destination for all things related to high school life.</p>
                </div>
            </div>
        </section>
        <section class="clubs">
            <div class="heading">
                <h2>CLUBS AND EXTRA CURRICULAR ACTIVITIES</h2>

            </div>
            <div class="cards">
                <div class="card">
                    <div class="image">
                        <img src="/images/nalondo8.jpeg" alt="">
                    </div>
                    <div class="desc">
                        <h3>Eco-Warriors Club</h3>
                        <p>The Eco-Warriors Club is a group of passionate high school students committed to making a positive impact on the environment. We organize regular clean-up events, promote recycling and sustainable living, and collaborate with local organizations to address environmental issues in our community. </p>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="/images/nalondo8.jpeg" alt="">
                    </div>
                    <div class="desc">
                        <h3>Tech Innovators Society</h3>
                        <p>The Tech Innovators Society is the perfect place for tech enthusiasts and aspiring innovators. We explore cutting-edge technologies, experiment with coding, and develop innovative projects. Whether you're interested in app development, robotics, or artificial intelligence, this club provides a platform to nurture your passion for all things tech.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="/images/nalondo8.jpeg" alt="">
                    </div>
                    <div class="desc">
                        <h3>Debate and Model UN Club</h3>
                        <p> If you enjoy expressing your opinions, debating global issues, or simulating international diplomacy, the Debate and Model UN Club is for you. Join us to improve your public speaking skills, engage in stimulating debates, and represent your school in Model United Nations conferences. This club is the ideal platform for future leaders and diplomats.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="/images/nalondo8.jpeg" alt="">
                    </div>
                    <div class="desc">
                        <h3>Music Harmonics Society
                        </h3>
                        <p>The Music Harmonics Society welcomes all music enthusiasts, from classical virtuosos to rock aficionados. We organize jam sessions, host music appreciation events, and provide opportunities for solo and group performances. No matter your skill level, you can share your love for music in a supportive and creative environment.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="/images/nalondo8.jpeg" alt="">
                    </div>
                    <div class="desc">
                        <h3>Tech Innovators Society</h3>
                        <p>The Tech Innovators Society is the perfect place for tech enthusiasts and aspiring innovators. We explore cutting-edge technologies, experiment with coding, and develop innovative projects. Whether you're interested in app development, robotics, or artificial intelligence, this club provides a platform to nurture your passion for all things tech.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="record">
            <div class="banner">
                <h1>HIGHEST KCSE SCORE EVER ACHIEVED
                    <br>
                10.5
                </h1>
            </div>
        </section>
        <section class="student-leaders">
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="https://img.freepik.com/free-photo/confident-businessman-smiles-city-night-generated-by-ai_188544-26175.jpg" style="width:100%">
                    <div class="text">SCHOOL CAPTAIN</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="https://img.freepik.com/free-photo/smiling-school-children-posing-cheerful-portrait-generated-by-ai_188544-29175.jpg" style="width:100%">
                    <div class="text">DEPUTY SCHOOL CAPTAIN - ACADEMICS</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="https://img.freepik.com/premium-photo/enchanted-educator-unveiling-magic-teaching-with-passion-wisdom-generative-ai_70251-4956.jpg" style="width:100%">
                    <div class="text">DEPUTY SCHOOL CAPTAIN - ADMINISTRATION</div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </section>
        <section class="religion">
            <div class="container">
                <div class="text">
                    <h1 class="animate-character">RELIGION</h1>
                    <p class="religion-text"> At our school, we embrace the Catholic faith, and this section offers a space for students to connect with their spiritual beliefs and values. Here, you can access information about religious services, prayer groups, and events organized by the school's chapel. We aim to foster a sense of community and spiritual growth, in line with our Catholic tradition, ensuring that students have a supportive environment to explore their faith and engage in discussions about religion. Whether you seek guidance, want to participate in religious activities, or simply wish to learn more about our Catholic identity, our student-life webpage provides valuable resources to enrich your spiritual journey.</p>
                </div>
                <video autoplay loop class="background-clip">
                    <source src="https://v.ftcdn.net/02/16/14/54/240_F_216145419_8ZL4rGJUqB6Ci4dRUrEOiRQh4Jgd2Ui1_ST.mp4" type="">
                </video>
            </div>
            
        </section>
        <section class="accomodation">
            <div class="title">
                <h1>STUDENT HOSTELS</h1>
            </div>
            <hr>
            <div class="boxes">
                <div class="box">
                    <img src="https://img.freepik.com/premium-photo/dormitory-with-bunk-beds-professional-photography-ai-generated_925376-1543.jpg" alt="">
                </div>
                <div class="box">
                    <img src="https://img.freepik.com/premium-photo/dormitory-with-bunk-beds-professional-photography-ai-generated_925376-1520.jpg" alt="">
                </div>
                
                <div class="box">
                    <img src="https://img.freepik.com/free-photo/long-hallway-with-blue-doors-light-ceiling_1340-32511.jpg" alt="">
                </div>
                <div class="box">
                    <img src="https://img.freepik.com/premium-photo/dormitory-with-bunk-beds-professional-photography-ai-generated_925376-1529.jpg" alt="">
                </div>
                <div class="box">
                    <img src="https://img.freepik.com/free-photo/architecture-modern-city-building-dusk-generative-ai_188544-8013.jpg" alt="">
                </div>
                <div class="box"><img src="https://img.freepik.com/free-photo/view-empty-football-locker-room_23-2150885819.jpg" alt=""></div>
                <div class="box"><img src="https://img.freepik.com/free-photo/long-school-corridor-with-locker_587448-4971.jpg" alt=""></div>
                <div class="box">
                    <img src="https://img.freepik.com/free-photo/empty-corridor-leads-modern-illuminated-entrance-hall-generated-by-ai_188544-29226.jpg" alt="">
                </div>
                <div class="box">
                    <img src="https://img.freepik.com/free-photo/diminishing-perspective-modern-office-corridor-reflects-design-generated-by-ai_188544-27897.jpg" alt="">
                </div>
                <div class="box">
                    <img src="https://img.freepik.com/free-photo/view-empty-football-locker-room_23-2150885807.jpg" alt="">
                </div>
                <div class="box">
                    <img src="https://img.freepik.com/free-photo/luxury-modern-home-with-wooden-flooring-glass-generated-by-ai_188544-26710.jpg" alt="">
                </div>
                <div class="box">
                    <img src="https://img.freepik.com/free-photo/blue-yellow-sunset-cityscape-high-up-generated-by-ai_188544-27807.jpg" alt="">
                </div>
            </div>
        </section>
    </main>
    <footer>
    <div class="footer">
            <div class="contact-info">
                <p style="color: #fff; margin-bottom: 20px;font-size: 15px;"><i class="fas fa-envelope"></i> Email:
                    info@nalondohighschool.com</p>
                <p style="color: #fff; margin-bottom: 20px;font-size: 15px;"><i class="fas fa-phone"></i> Phone: +1
                    (123) 456-7890</p>
                <p style="color: #fff; margin-bottom: 20px;font-size: 15px;"><i class="fas fa-map-marker-alt"></i>
                    Address: 123 School Street, City, Country</p>
            </div>
            <div class="footer-line"></div>
            <div class="footer-icons-container">
                <div class="footer-icons-row">
                    <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div style="color: #fff;">
                <p style="color:var(--background-color);">&copy; 2023 NALONDO HIGH SCHOOL. ALL RIGHTS RESERVED.</p>
            </div>
        </div>
    </footer>
</body>

</html>