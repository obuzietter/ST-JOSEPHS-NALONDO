<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High School Achievements</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Reset and global styles */
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

        /* Header styles */
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
            display: none;
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
            display: flex;
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

        /* Container styles */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 2rem;
        }

        /* Achievement styles */
        .achievement {
            border: 1px solid var(--secondary-color);
            padding: 0;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
            text-align: center;
        }

        .achievement:hover {
            transform: scale(1.05);
        }

        .large-achievement {
            grid-column: span 2;
            border: 1px solid var(--secondary-color);
            padding: 0;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
            text-align: center;
        }

        .large-achievement:hover {
            transform: scale(1.05);
        }

        .achievement img {
            width: 100%;
            height: auto;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        /* Footer styles */
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

        /* Title container styles */
        .title-container {
            text-align: center;
            position: relative;
            padding: 0;
            height: 50vh;
            overflow: hidden;
            background-color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .title-image {
            width: 100%;
            height: auto;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0.5;
            animation: imageSwitch 15s linear infinite;
            filter: blur(10px);
        }

        .title-image:nth-child(1) {
            animation-delay: 0s;
            opacity: 0.5;
            z-index: 0;
        }

        .title-image:nth-child(2) {
            animation-delay: 5s;
            z-index: -1;
        }

        .title-image:nth-child(3) {
            animation-delay: 10s;
            z-index: -1;
        }

        @keyframes imageSwitch {
            0%, 100% {
                opacity: 0;
                z-index: -1;
            }
            33.33%, 100% {
                opacity: 1;
                z-index: 0;
            }
            66.66% {
                opacity: 0;
                z-index: -1;
            }
        }

        .achievements-title {
            font-size: 60px;
            color:var(--background-color);
            margin-top: 20px;
            font-weight: bolder;
            text-transform: uppercase;
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1;
            text-underline-position: below;
        }

        .achievements-description {
            font-size: 24px;
            color: var(--secondary-color);
            margin-top: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1;
            font-weight: bolder;
        }
       /* Updated CSS for the achievements section */
/* Style for achievement containers */
/* Reset some default styles */
body, h1, h2, p {
    margin: 0;
    padding: 0;
}

/* Style the achievement containers */
/* Updated CSS for responsive grid layout */
/* Updated CSS for responsive grid layout */
/* Mobile devices (320px - 480px) */
@media screen and (max-width: 480px) {
    /* Adjust your styles for mobile devices here */
    body {
        font-size: 16px; /* Example: Decrease the font size for better readability */
    }
    
    /* You can modify other styles as needed */
}

/* iPads and Tablets (481px - 768px) */
@media screen and (min-width: 481px) and (max-width: 768px) {
    /* Adjust your styles for tablets here */
    body {
        font-size: 18px; /* Example: Slightly larger font size for tablets */
    }
    
    /* You can modify other styles as needed */
}

/* Small screens and laptops (769px - 1024px) */
@media screen and (min-width: 769px) and (max-width: 1024px) {
    /* Adjust your styles for small screens and laptops here */
    body {
        font-size: 20px; /* Example: Bigger font size for laptops */
    }
    
    /* You can modify other styles as needed */
}

/* Desktops and large screens (1025px - 1200px) */
@media screen and (min-width: 1025px) and (max-width: 1200px) {
    /* Adjust your styles for desktops and large screens here */
    /* You can add specific styles for this range */
}
/* Hamburger menu styles */
.hamburger {
    display: none; /* Initially hide the hamburger menu */
    cursor: pointer;
    margin-right: 10px;
}

/* Show the hamburger menu on smaller screens */
@media screen and (max-width: 768px) {
    .school-info {
        justify-content: space-between; /* Separate the high school name and hamburger menu */
    }
    
    .school-name {
        font-size: 18px; /* Adjust the font size for smaller screens */
    }
    
    .hamburger {
        display: block; /* Show the hamburger menu */
    }
    
    /* You can modify other styles as needed for smaller screens */
}


   /* Updated CSS for the achievements section */
/* Create a grid layout with two columns */
/* Style for achievement containers */

/* Style for the achievements container */
.achievements-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Two columns */
    gap: 20px; /* Add some spacing between columns */
    justify-items: center; /* Center the items horizontally */
    align-items: flex-start; /* Align items to the top */
    margin-top: 20px; /* Add some spacing from the title */
    position: relative; /* Add relative positioning */
    background-image: url('images/achieve.jpg'); /* Background image */
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    border-radius: 10px;
}

/* Style for achievement containers */
.achievement-container {
    width: 100%; /* Occupy full width of the column */
    display: flex;
    flex-direction: column; /* Stack image and description vertically */
    align-items: center; /* Center items horizontally */
    text-align: left; /* Align text to the left */
    padding: 20px; /* Add padding around each achievement */
    position: relative; /* Add relative positioning */
    z-index: 1; /* Ensure text is above the background image */
    background-color: rgba(255, 255, 255, 0.8); /* Background color with opacity */
    border-radius: 10px; /* Rounded corners for the container */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

/* Style the achievement containers */
.achievement {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    position: relative;
    z-index: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 20px;
}

/* Style the achievement titles */
h2 {
    font-size: 18px;
    margin-bottom: 10px;
    color: var(--primary-color);
}

/* Style the achievement text */
p {
    font-size: 14px;
    color: #555;
    margin: 0;
}

/* Style the images for achievements */
/* Style the images for achievements */
.achievement-image {
    max-width: 500px;
    height: 300px; /* Set a fixed height for the image container */
    overflow: hidden; /* Hide image overflow */
    position: relative;
}


/* Style the container for all achievements */
.achievements-container::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('images/achieve.jpg'); /* Replace with your image path */
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed; /* Keeps the background fixed while scrolling */
    opacity: 0.6; /* Adjust the opacity as needed */
    z-index: -1; /* Place the pseudo-element behind the content */
    border-radius: 10px; /* Rounded corners for the background */
}




/* Style the blurred achievements */
.blurred-achievement {
    position: relative;
}

/* Position the text on blurred achievements */
.blurred-achievement .achievement-description {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    background: rgba(0, 0, 0, 0.5);
    padding: 10px;
}

/* Style the achievement rows */
.achievement-row {
    display: flex;
    flex-wrap: wrap;
    justify-content:space-between;
}

/* Style the square images for achievements 1, 2, 9, and 10 */
.achievement-image-left,
.achievement-image-right {
    max-width: 500px;
    height: 10vh;
}

/* Style the left-aligned images for achievements 1 and 9 */
.achievement-image-left {
    float: right;
    margin-right: 400px;
}

/* Style the right-aligned images for achievements 2 and 10 */
.achievement-image-right {
    float: left;
    margin-left: 500px;
}

/* Style the full-width images for achievements 3 and 4 */
.achievement-image-full {
    width: 100%;
    height: 40vh;
}

/* Style the achievement text below images for achievements 5, 6, 7, and 8 */
.achievement-image {
    max-width:500px;
    height: 10vh;
}

/* Style the achievement text below images */
.achievement-description {
    text-align:center;
    padding: auto;
    color: var(--background-color);
    margin-top: 20px;
}
/* 


/* Add an overlay to make the background semi-transparent */



        /* Additional CSS for the button */
        .read-more-button {
            background-color:burlywood;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            z-index: 1000;
            margin-left: 20px;
        }

        .scroll-to-top-button {
            display: block;
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: var(--primary-color);
            color: var(--background-color);
            padding: 10px 20px;
            font-size: 24px;
            border: none;
            cursor: pointer;
            z-index: 1000;
        }

        .scroll-to-top-button.show {
            display: block;
        }

        /* Additional CSS for the "See More" button */
        .see-more-button {
            background-color: burlywood;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            position: fixed;
            bottom: 20px;
            right: 80px;
            z-index: 1000;
        }

        /* Additional description container styles */
    /* Styles for the header section */
.additional-description-header {
    background-color: burlywood;
    color: white;
    padding: 10px;
    border-top-left-radius: 30px;
    border-top-right-radius: 5px;
    justify-content: center;
    
}

.additional-description-header h3 {
    font-size: 40px;
    margin: 0;
}

.additional-description-header p {
    font-size: 20px;
    margin: 0;
    color: #031a32;

}

/* Rest of the styles */
.additional-description-container {
    display: flex;
    align-items: center;
    padding: 0; /* Remove the original padding */
    margin: 8px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    height: 40vh;
    background-color: #031a32;
}

.additional-description-image {
    flex: 1.5;
    padding: 20px;
    display: flex;
    justify-content:left;
    align-items: center;
    height: max-content;
}

.additional-description-content {
    flex: 2;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
}

.additional-description-content .read-more-button {
    background-color: burlywood;
    color: white;
    padding: 10px 20px;
    font-size: 18px;
    border: none;
    cursor: pointer;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);

    margin-top: 20px; /* Add some spacing between the button and header */
}

.additional-description-content .additional-description p {
    font-size: 20px;
    color: var(--primary-color);
    margin: 20px;
    display: flex;
    align-content: center;
    box-shadow: 0 0 10px burlywood;
    max-width: 1000px;
    height: auto;
    fill: var(--background-color);
    border-radius: 10px;
    background-color: var(--background-color);
}
 </style>
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
    <div class="title-text">
        <h2 class="achievements-title">SCHOOL ACHIEVEMENTS</h2>
        <button class="see-more-button" id="showAchievementsButton">See More Achievements</button>
        <button class="scroll-to-top-button" id="scrollToTopButton">&#8593;</button>
    </div>
    <img class="title-image" src="images/title.jpeg" alt="Achievement Image 1">
    <img class="title-image" src="images/sports red.jpeg" alt="Achievement Image 2">
    <img class="title-image" src="images/title3.jpeg" alt="Achievement Image 3">
</div>
<div class="additional-description-container">
    <div class="additional-description-image">
        <img src="images/achieve.jpg" alt="Achievement Image" class="additional-image">
    </div>
    <div class="additional-description-content">
        <div class="additional-description-header">
            <h3>Our Achievements</h3>
            <p>Discover our remarkable accomplishments.</p>
        </div>
        <button class="read-more-button" id="readMoreButton">Read More</button>
        <div class="additional-description">
            <p>
    Step into the world of St. Joseph's Nalondu High School, where extraordinary achievements become everyday stories. Our path is illuminated by the pursuit of excellence in every facet of education and beyond. Dive into the narratives of our students' incredible feats, from conquering regional math competitions to emerging as champions in thrilling sports showdowns. Marvel at the innovative projects that not only impress but inspire. These achievements are more than accolades; they are the embodiment of our students' dedication, the cornerstone of our supportive faculty, and the heartbeat of our vibrant school community. Join us on this exhilarating journey through our accomplishments and witness the unwavering spirit of excellence that defines our school

            </p>
        </div>
    </div>
</div>
<!-- Updated HTML structure for the achievements section -->
<!-- Updated HTML structure for the achievements section -->
<!-- Updated HTML structure for the achievements section -->
<div class="achievements-container">
    <!-- Achievement 1 -->
    <div class="achievement-container">
        <div class="achievement large-achievement">
            <img src="images/achievement1.jpeg" alt="Achievement 1" class="achievement-image-left">
            <div class="achievement-description">
                <h2>Achievement 1</h2>
                <p>Description of Achievement 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>

    <!-- Achievement 2 -->
    <div class="achievement-container">
        <div class="achievement large-achievement">
            <img src="images/achievement2.jpeg" alt="Achievement 2" class="achievement-image-left">
            <div class="achievement-description">
                <h2>Achievement 2</h2>
                <p>Description of Achievement 2. Nulla eget libero eget sapien varius posuere.</p>
            </div>
        </div>
    </div>

    <!-- Achievement 3 -->
    <div class="achievement-container">
        <div class="achievement large-achievement">
            <img src="images/achievement3.jpeg" alt="Achievement 3" class="achievement-image-left">
            <div class="achievement-description">
                <h2>Achievement 3</h2>
                <p>Description of Achievement 3. Vestibulum sodales elit at magna volutpat, nec euismod quam cursus.</p>
            </div>
        </div>
    </div>

    <!-- Achievement 4 -->
    <div class="achievement-container">
        <div class="achievement large-achievement">
            <img src="images/achievement4.jpeg" alt="Achievement 4" class="achievement-image-left">
            <div class="achievement-description">
                <h2>Achievement 4</h2>
                <p>Description of Achievement 4. Phasellus tristique justo eu leo congue, nec placerat purus pulvinar.</p>
            </div>
        </div>
    </div>

    <!-- Achievement 5 -->
    <div class="achievement-container">
        <div class="achievement large-achievement">
            <img src="images/achievement5.jpeg" alt="Achievement 5" class="achievement-image-left">
            <div class="achievement-description">
                <h2>Achievement 5</h2>
                <p>Description of Achievement 5. Maecenas facilisis nulla id quam feugiat, sit amet suscipit nisl malesuada.</p>
            </div>
        </div>
    </div>

    <!-- Achievement 6 -->
    <div class="achievement-container">
        <div class="achievement large-achievement">
            <img src="images/achievement6.jpeg" alt="Achievement 6" class="achievement-image-left">
            <div class="achievement-description">
                <h2>Achievement 6</h2>
                <p>Description of Achievement 6. Fusce vel purus in risus placerat finibus.</p>
            </div>
        </div>
    </div>

    <!-- Achievement 7 -->
    <div class="achievement-container">
        <div class="achievement large-achievement">
            <img src="images/sports red.jpeg" alt="Achievement 7" class="achievement-image-left">
            <div class="achievement-description">
                <h2>Achievement 7</h2>
                <p>Description of Achievement 7. Integer scelerisque libero et mauris bibendum, eu pharetra quam dignissim.</p>
            </div>
        </div>
    </div>

    <!-- Achievement 8 -->
    <div class="achievement-container">
        <div class="achievement large-achievement">
            <img src="images/achievement1.jpeg" alt="Achievement 8" class="achievement-image-left">
            <div class="achievement-description">
                <h2>Achievement 8</h2>
                <p>Description of Achievement 8. Sed dapibus tortor eget ipsum varius, ac dapibus justo malesuada.</p>
            </div>
        </div>
    </div>

    <!-- Achievement 9 -->
    <div class="achievement-container">
        <div class="achievement large-achievement">
            <img src="images/achievement2.jpeg" alt="Achievement 9" class="achievement-image-left">
            <div class="achievement-description">
                <h2>Achievement 9</h2>
                <p>Description of Achievement 9. Donec quis arcu at metus finibus congue.</p>
            </div>
        </div>
    </div>

    <!-- Achievement 10 -->
    <div class="achievement-container">
        <div class="achievement large-achievement">
            <img src="images/basketball.jpeg" alt="Achievement 10" class="achievement-image-left">
            <div class="achievement-description">
                <h2>Achievement 10</h2>
                <p>Description of Achievement 10. Nam id arcu eget dui malesuada auctor.</p>
            </div>
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
</div>
</footer>

<script>

document.addEventListener("DOMContentLoaded", function () {
    const showAchievementsButton = document.getElementById("showAchievementsButton");

    // Handle clicking the "See More Achievements" button
    showAchievementsButton.addEventListener("click", function () {
        const achievementsContainer = document.querySelector(".achievements-container");
        const windowHeight = window.innerHeight;
        const achievementsHeight = achievementsContainer.getBoundingClientRect().height;
        const scrollY = window.scrollY;

        if (achievementsHeight - scrollY <= windowHeight) {
            // Reached the end of achievements, but still allow button click
            window.scrollBy(0, 100); // Scroll by 1 pixel to trigger scroll event
        } else {
            // Scroll to the achievements section
            achievementsContainer.scrollIntoView({ behavior: "smooth" });
        }
    });

    // JavaScript for the "Scroll to Top" button
    const scrollToTopButton = document.getElementById("scrollToTopButton");

    scrollToTopButton.addEventListener("click", function () {
        // Scroll to the top of the page
        window.scrollTo({ top: 0, behavior: "smooth" });
    });

    // Handle "Read More" button click
    const additionalDescription = document.querySelector(".additional-description");
    const readMoreButton = document.getElementById("readMoreButton");
    const paragraph = additionalDescription.querySelector("p");

    const originalText = paragraph.textContent;
    let isDescriptionExpanded = false;

    // Handle clicking the "Read More" button
    readMoreButton.addEventListener("click", function () {
        isDescriptionExpanded = !isDescriptionExpanded;

        if (isDescriptionExpanded) {
            // Show the expanded version
            paragraph.textContent = originalText;
            readMoreButton.textContent = "Read Less";
        } else {
            // Show the shortened version
            paragraph.textContent = originalText.substring(0, 200); // Adjust the length as needed
            readMoreButton.textContent = "Read More";
        }
    });
});

</script>
</body>
</html>
