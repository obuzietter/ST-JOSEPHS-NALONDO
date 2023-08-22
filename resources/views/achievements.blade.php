<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High School Achievements</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #031a32;
            --secondary-color: #062744;
            --background-color: #F8F9FA;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--background-color);
        }

        header {
            background-color: var(--primary-color);
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
        }

        .school-info {
            display: flex;
            align-items: center;
        }

        .school-name {
            font-size: 24px;
            font-weight: bold;
            margin-right: 10px;
        }

        .hamburger {
            display: none; /* Hide hamburger menu by default */
            cursor: pointer;
            margin-right: 10px;
        }

        .hamburger span {
            display: block;
            width: 30px;
            height: 3px;
            background-color: #fff;
            margin: 3px 0;
        }

        .header-links {
            list-style: none;
            display: flex; /* Display the links horizontally by default */
            gap: 20px;
            margin: 0;
        }

        .header-links li {
            margin: 0;
        }

        .header-links a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 2rem;
        }

        .achievement {
            border: 1px solid var(--secondary-color);
            padding: 0;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .large-achievement {
            grid-column: span 2;
            border: 1px solid var(--secondary-color);
            padding: 0;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .achievement img {
            width: 100%;
            height: auto;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .achievement-description {
            padding: 1rem;
        }

        .footer {
            background-color: var(--primary-color);
            color: #fff;
            text-align: center;
            padding: 7rem;
        }

        .contact-info {
            margin-bottom: 20px;
        }

        .contact-info p {
            margin: 0;
        }

        .footer-line {
            border-top: 1px solid #fff;
            margin: 10px 0;
            width: 100%;
        }

        .footer-icons-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .footer-icons-row {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .footer-icons-row a {
            margin: 10px;
            font-size: 24px;
        }

        /* Responsive styles for icons and hamburger menu */
        @media (max-width: 768px) {
            .footer-icons-row a {
                font-size: 20px; /* Adjust icon size for smaller screens */
            }

            .school-name {
                display: none; /* Hide the school name on small screens */
            }

            .hamburger {
                display: block; /* Show the hamburger menu on small screens */
            }

            .header-links {
                display: none; /* Hide the horizontal menu on small screens */
                flex-direction: column;
                background-color: var(--primary-color);
                position: absolute;
                top: 60px;
                right: 0;
                width: 100%;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                z-index: 1;
            }

            .header-links.show {
                display: flex; /* Show the dropdown menu when the hamburger is clicked */
            }

            .header-links li {
                margin: 10px;
            }
        }

        /* Style for the achievements title */
        .title-container {
            text-align: center;
            padding: 3rem 0 2rem;
            background-color: var(--secondary-color);
        }

        .page-title {
            font-size: 36px;
            color: white;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 2px; /* Add letter spacing for a professional look */
        }
    </style>
</head>
<body>
<header>
    <div class="school-info">
        <div class="school-name">NALONDU HIGH SCHOOL</div>
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <ul class="header-links hidden-links" id="headerLinks">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="faculty.html">Faculty</a></li>
        <li><a href="student-life.html">Student Life</a></li>
        <li><a href="community.html">Community</a></li>
        <li class="active-link"><a href="achievements.html">Achievements</a></li>
        <li><a href="contact.html">Contact Us</a></li>
    </ul>
</header>
<div class="title-container">
    <h1 class="page-title">School Achievements</h1>
</div>
<div class="container">
  <div class="achievement">
    <img src="images/achievement1.jpg" alt="Achievement 1">
    <div class="achievement-description">
        <h2>Achievement 1</h2>
        <p>Description of Achievement 1.</p>
    </div>
</div>
<div class="achievement">
    <img src="images/achievement2.jpg" alt="Achievement 2">
    <div class="achievement-description">
        <h2>Math Competition</h2>
        <p>We secured first place in the regional math competition with our excellent problem-solving skills.</p>
    </div>
</div>
<div class="achievement">
    <img src="images/achievement3.jpg" alt="Achievement 3">
    <div class="achievement-description">
        <h2>Science Fair Success</h2>
        <p>Our project on renewable energy impressed the judges and earned us a top position in the science fair.</p>
    </div>
</div>
<div class="achievement">
    <img src="images/achievement4.jpg" alt="Achievement 4">
    <div class="achievement-description">
        <h2>Achievement 4</h2>
        <p>Description of Achievement 4.</p>
    </div>
</div>
<div class="large-achievement">
    <img src="images/achievement5.jpg" alt="Achievement 5">
    <div class="achievement-description">
        <h2>Achievement 5</h2>
        <p>Description of Achievement 5.</p>
    </div>
</div>
<div class="large-achievement">
    <img src="images/achievement1.jpg" alt="Achievement 6">
    <div class="achievement-description">
        <h2>Achievement 6</h2>
        <p>Description of Achievement 6.</p>
    </div>
</div>
<div class="achievement">
    <img src="images/achievement2.jpg" alt="Achievement 7">
    <div class="achievement-description">
        <h2>Sports Championship</h2>
        <p>We emerged as the champions in the inter-school basketball championship, showcasing our teamwork and skill.</p>
    </div>
</div>
<div class="achievement">
    <img src="images/achievement3.jpg" alt="Achievement 8">
    <div class="achievement-description">
        <h2>Debate Competition</h2>
        <p>Our debate team excelled in the regional competition, presenting well-researched arguments and eloquent speeches.</p>
    </div>
</div>
<div class="achievement">
    <img src="images/achievement4.jpg" alt="Achievement 9">
    <div class="achievement-description">
        <h2>Art Exhibition</h2>
        <p>Our students' creative talents were showcased in the local art exhibition, receiving praise for their originality.</p>
    </div>
</div>
<div class="achievement">
    <img src="images/achievement5.jpg" alt="Achievement 10">
    <div class="achievement-description">
        <h2>Community Service</h2>
        <p>We actively participated in community service projects and made a positive impact on the community.</p>
    </div>
</div>
</div>
<div class="footer">
    <div class="contact-info">
        <p><i class="fas fa-envelope"></i> Email: info@nalonduhighschool.com</p>
        <p><i class="fas fa-phone"></i> Phone: +1 (123) 456-7890</p>
        <p><i class="fas fa-map-marker-alt"></i> Address: 123 School Street, City, Country</p>
    </div>
    <div class="footer-line"></div>
    <div class="footer-icons-container">
        <div class="footer-icons-row">
            <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
            <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <div>
        <p>&copy; 2023 NALONDU HIGH SCHOOL. ALL RIGHTS RESERVED.</p>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const hamburger = document.getElementById("hamburger");
        const headerLinks = document.getElementById("headerLinks");

        hamburger.addEventListener("click", function () {
            headerLinks.classList.toggle("show");
        });

        // Highlight the active link based on the page being displayed
        const links = document.querySelectorAll(".header-links a");
        const currentPage = window.location.href;
        for (const link of links) {
            if (currentPage.includes(link.getAttribute("href"))) {
                link.classList.add("active-link");
            }
        }
    });
</script>
</body>
</html>
