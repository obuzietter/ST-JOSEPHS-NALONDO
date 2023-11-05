<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
    <link rel="stylesheet" href="/css/contact.css">

    
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
    <script src="/js/contact.js" defer></script>
    
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
        <!-- google map,paragraph and button -->
<div class="map">
    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255331.65767682373!2d34.307006886718746!3d0.6555780000000055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1781d97dceaaf703%3A0xb1750155e3970e39!2sNalondo%20secondary%20school!5e0!3m2!1sen!2ske!4v1698776636513!5m2!1sen!2ske" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!-- paragraph -->
    <div class="map-text">
    <h1 class="connect">CONNECT WITH US</h1>
    <!-- button -->
    <button class="google-maps-button">
        <a href="https://maps.app.goo.gl/J9Nt6UcJ2xDf5GS9A">GO TO GOOGLE MAPS</a>
    </button>
    </div>
</div>

    <!-- contacts div -->
<div class="contacts">
    <div class="phone contact-info">
        <div class="left">SCHOOL PHONE NUMBER</div>
        <div class="right">CALL US</div>
    </div>
    <div class="email contact-info">
        <div class="left">SCHOOL EMAIL</div>
        <div class="right">EMAIL US</div>
    </div>
    <div class="location contact-info">
        <div class="left">SCHOOL LOCATION</div>
        <div class="right">VISIT US</div>
    </div>
</div>


    <!-- reviews -->
<div class="reviews">
    <form action="" method="post" target="_blank">
            <h1 class="heading">TELL US WHAT YOU THINK</h1>

            <div class="name-contact">
                <input type="text" placeholder="YOUR NAME" name="name" class="name">

                <input type="text" class="phone-number" name="phone" placeholder="YOUR CONTACT">
            </div>
            


            <input type="email" name="email" placeholder="YOUR EMAIL" class="email" name>


            <textarea name="message" id="message" cols="30" rows="10" placeholder="YOUR MESSAGE"></textarea>
            <button type="submit">SEND MESSAGE</button>
    </form>
</div>
    </main>

    <!-- footer -->
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