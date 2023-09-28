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
        }/* Updated CSS for the header styles */
        .header-links {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
        }
.header-links li {
    margin: 0;
    position: relative; /* Add relative positioning */
}

.header-links a {
    margin: 0;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    font-size: 18px;
    position: relative; /* Add relative positioning */
}

/* Add a hover effect for the links */
.header-links a:hover {
    color: burlywood;
    /* Add animation for smoother transition */
    transition: color 0.3s ease;
}

/* Add a line below the link when hovered */
.header-links a::after {
    content: "";
    display: block;
    position: absolute;
    left: 0;
    bottom: -2px; /* Adjust the position as needed */
    width: 100%;
    height: 2px; /* Height of the line */
    background-color: #fff; /* Color of the line */
    transform: scaleX(0); /* Initially, the line is not visible */
    transform-origin: center; /* Set the transform origin to center */
    transition: transform 0.3s ease; /* Add animation for smoother transition */
}

.header-links a:hover::after {
    transform: scaleX(1); /* When hovered, make the line visible */
}

/* Add a background color for the active link */
.header-links a.active {
    background-color: #062744;
    /* Add animation for smoother transition */
    transition: background-color 0.3s ease;
}

/* Add a line below the active link */
.header-links a.active::after {
    transform: scaleX(1); /* Make the line visible */
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
            font-size: 40px;
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
            font-size: 18px;
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
.achievement-container {
    display:flex;
    gap: 1000px; /* Add some spacing between columns */
    justify-items: center; /* Center the items horizontally */
    align-items: flex-start; /* Align items to the top */
    margin-top: 50px; /* Add some spacing from the title */
    background-image: url('images/achieve.jpg'); /* Background image */
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    border-radius: 10px;
    position: relative; /* Add relative positioning */
    border-radius: 10px;
    overflow: hidden; /* Ensure the overlay covers the entire container */
    width: 100%;
    text-emphasis-color: white;

    
}
.grid-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    justify-items: center;
    align-items: flex-start;
    margin-top: 20px;
    position: relative;
    border-radius: 10px;
    padding: 20px;
    backdrop-filter: blur(5px);
    background-color: rgba(255, 255, 255, 0.6);
}

/* Style for the achievement containers */
.achievement-container {
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
    height: 100%;
}
/* Style for the achievements */
.achievement {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    position: relative; /* Add this line */
    background-color: rgba(0, 0, 0, 0.8); /* Semi-transparent black overlay */
    width: 100%;

}
.achievement-content {
    width: 100%; /* Set the width to 100% */
}

/* Style for the achievement text */
.achievement-text {
    width: 100%; /* Set the width to 100% */
}


/* Style for the achievement images */
.achievement-image {
    max-width: 40%;
    height: 10vh;
    object-fit: cover;
    border-radius: 10px 10px 0 0;
    margin: 20px;
    animation: bounce 1.5s infinite alternate; /* Apply the bounce animation */
}

/* Define the bounce animation */
@keyframes bounce {
    0% {
        transform: translateY(0);
    }
    100% {
        transform: translateY(-10px);
    }
}
@keyframes slideInLeft{
    from{
        transform:translateX(-200px);
    }
    to{
        transform:translateX(0);
    }
}


/* Style for Achievement 1 */
.achievement-container:nth-child(1) .achievement {
    display: flex;
    flex-direction: row-reverse; /* Image on the left, text on the right */
    max-width: 100%;
    height: 50vh;
    align-items: center;
}

/* Style for Achievement 2 */
.achievement-container:nth-child(2) .achievement {
    display: flex;
    flex-direction: row; /* Image on the right, text on the left */
    max-width: 100%;
    height: 50vh;
    align-items: center;
}

.achievement-container:nth-child(3) .achievement {
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    max-width: 100%;
    height: 50vh;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Additional styles specific to Achievement 6 (if needed) */
.achievement-container:nth-child(6) .achievement {
    background-image: url('images/achieve.jpeg'); /* Background image */
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    max-width: 100%;
    height: 50vh;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
}






/* Style for Achievements 4 and 5 (Similar to Achievements 1 and 2) */
.achievement-container:nth-child(4) .achievement,
.achievement-container:nth-child(5) .achievement {
    display: flex;
    flex-direction: row-reverse; /* Image on the left, text on the right */
    max-width: 100%;
    height: 50vh;
    align-items: center;
}



/* Style for Achievements 7 and 8 (Similar to Achievements 1 and 2) */
.achievement-container:nth-child(7) .achievement,
.achievement-container:nth-child(8) .achievement {
    display: flex;
    flex-direction: row-reverse; /* Image on the right, text on the left */
    max-width: 100%;
    height: 50vh;
    align-items: center;
}

/* Style for Achievements 9 and 10 (Similar to Achievements 1 and 2) */
.achievement-container:nth-child(9) .achievement,
.achievement-container:nth-child(10) .achievement {
    display: flex;
    flex-direction: row-reverse; /* Image on the right, text on the left */
    max-width: 100%;
    height: 50vh;
    align-items: center;
}



/* Style the achievement text below images */
.achievement-description {
    text-align:center;
    padding: auto;
    color: #fff !important;
    margin-top: 20px;
    width: 100%;
}
.achievement-text{
    color: var(--background-color);
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
            animation-name: slideInLeft;
            animation-duration: 3s;
            animation-timing-function: ease-in;
            animation-delay: 0s;
            animation-iteration-count: 1;
            animation-direction: normal;
            animation-fill-mode: none;

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
    padding: 20px;
    margin: 8px;
    border-radius: 10px; /* Match the border-radius with the achievement container */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Match the box-shadow with the achievement container */
    height: 60vh;
    background-color: #031a32;
}
   

.additional-description-content {
    flex: 2;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    border-bottom-left-radius: 10px; /* Match the border-radius with the achievement container */
    border-bottom-right-radius: 10px; /* Match the border-radius with the achievement container */
    background-color: #031a32;
    color: #fff;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.additional-description-content .read-more-button {
    background-color: burlywood;
    color: white;
    padding: 10px 20px;
    font-size: 18px;
   
    cursor: pointer;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    margin-top: 20px; /* Add some spacing between the button and header */
    border-bottom-left-radius: 10px; /* Match the border-radius with the achievement container */
    border-bottom-right-radius: 10px; /* Match the border-radius with the achievement container */
}


.additional-description-content .additional-description p {
    font-size: 20px;
    color: var(--primary-color);
    margin-top: 40px;
    display: flex;
    align-content: center;
    box-shadow: 0 0 10px burlywood;
    max-width: 1000px;
    height: auto;
    fill: var(--background-color);
    border-radius: 10px;
    background-color: var(--background-color);
    padding: 20px;
    margin: 20px;
}

.additional-description-image {
    flex: 1.5;
    padding: 30px;
    display: flex;
    justify-content:right;
    align-items: center;
    height: 30vh;
}


.additional-description-header {
    background-color: burlywood;
    color: white;
    padding: 30px;
    margin: 20px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    justify-content: center;
    border-bottom-left-radius: 10px; /* Match the border-radius with the achievement container */
    border-bottom-right-radius: 10px; /* Match the border-radius with the achievement container */
}
/* Style for the achievements row container */
.achievements-row {
    display: flex;
    gap: 20px; /* Add some spacing between achievements */
    justify-content: center; /* Center the achievements horizontally */
    align-items: flex-start; /* Align achievements to the top */
}


 </style>
</head>
<body>
<header>
<script src="navbar.js"></script>
<script src="footer.js"></script>


    <div class="school-info">
        <div class="school-name">ST JOSEPH'S NALONDU HIGH SCHOOL</div>
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <ul class="header-links hidden-links" id="headerLinks"></ul>
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

<!-- Achievements 1 -->
<div class="achievement-container">
    <div class="achievement">
        <div class="achievement-content">
            <div class="achievement-text">
                <h2>Achievement 1</h2>
                <p>Completed a challenging project under tight deadline, showcasing exceptional time-management and problem-solving skills.</p>
            </div>
        </div>
        <img src="images/achievement1.jpeg" alt="Achievement 1" class="achievement-image">
    </div>
</div>

<!-- Achievements 2 -->
<div class="achievement-container">
    <div class="achievement">
        <img src="images/achievement2.jpeg" alt="Achievement 2" class="achievement-image">
        <div class="achievement-content">
            <div class="achievement-text">
                <h2>Achievement 2</h2>
                <p>Received Employee of the Month award for consistently exceeding performance targets and providing outstanding customer service.</p>
            </div>
        </div>
    </div>
</div>

<div class="grid-container">
<!-- Achievement 3 -->
<div class="achievement-container">
    <div class="achievement">
        <div class="achievement-content">
            <div class="achievement-text">
                <h2>Achievement 3</h2>
                <p>Your achievement description goes here.</p>
            </div>
        </div>
        
    </div>
</div>

<!-- Achievements 6 -->
<div class="achievement-container no-image">
    <div class="achievement">
        <div class="achievement-content">
            <div class="achievement-text">
                <h2>Achievement 6</h2>
                <p>Initiated and managed a community outreach program that resulted in a 50% increase in volunteer participation and positive community feedback.</p>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Achievements 4 -->
<div class="achievement-container">
    <div class="achievement">
        <div class="achievement-content">
            <div class="achievement-text">
                <h2>Achievement 4</h2>
                <p>Implemented an innovative cost-saving strategy that reduced departmental expenses by 15% while maintaining high-quality standards.</p>
            </div>
        </div>
        <img src="images/achievement4.jpeg" alt="Achievement 4" class="achievement-image">
    </div>
</div>

<!-- Achievements 5 -->
<div class="achievement-container">
    <div class="achievement">
        <img src="images/achievement5.jpeg" alt="Achievement 5" class="achievement-image">
        <div class="achievement-content">
            <div class="achievement-text">
                <h2>Achievement 5</h2>
                <p>Developed and delivered a series of training sessions that improved overall team efficiency and productivity by 20% within three months.</p>
            </div>
        </div>
    </div>
</div>



<!-- Achievements 7 -->
<div class="achievement-container">
    <div class="achievement">
        <div class="achievement-content">
            <div class="achievement-text">
                <h2>Achievement 7</h2>
                <p>Received the Innovation Excellence Award for conceptualizing and implementing a groundbreaking solution that revolutionized internal processes.</p>
            </div>
        </div>
        <img src="images/achievement1.jpeg" alt="Achievement 7" class="achievement-image">
    </div>
</div>
<div class="achievement-row">
    <div class="grid-container">
        <!-- Achievements 8 -->
        <div class="achievement-container">
            <div class="achievement">
                <img src="images/trumpet.jpg" alt="Achievement 8" class="achievement-image">
                <div class="achievement-content">
                    <div class="achievement-text">
                        <h2>Achievement 8</h2>
                        <p>Collaborated with cross-functional teams to successfully launch a product in a new international market, achieving a 25% increase in market share.</p>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Achievements 9 -->
        <div class="achievement-container">
            <div class="achievement">
                <img src="images/sports red.jpeg" alt="Achievement 9" class="achievement-image">
                <div class="achievement-content">
                    <div class="achievement-text">
                        <h2>Achievement 9</h2>
                        <p>Implemented a data-driven marketing strategy that led to a 40% increase in online sales and a 30% improvement in customer retention.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<!-- Achievements 10 -->
<div class="achievement-container">
    <div class="achievement">
        <img src="images/basketball.jpeg" alt="Achievement 10" class="achievement-image">
        <div class="achievement-content">
            <div class="achievement-text">
                <h2>Achievement 10</h2>
                <p>Designed and executed a comprehensive rebranding campaign that resulted in a 50% increase in brand awareness and positive customer perception.</p>
            </div>
        </div>
    </div>
</div>
</div>





<div class="footer">
    <div class="contact-info">
        <p style="color: #fff; margin-bottom: 20px;font-size: 15px;"><i class="fas fa-envelope"></i> Email: info@nalonduhighschool.com</p>
        <p style="color: #fff; margin-bottom: 20px;font-size: 15px;"><i class="fas fa-phone"></i> Phone: +1 (123) 456-7890</p>
        <p style="color: #fff; margin-bottom: 20px;font-size: 15px;"><i class="fas fa-map-marker-alt"></i> Address: 123 School Street, City, Country</p>
    </div>
    <div class="footer-line"></div>
    <div class="footer-icons-container">
        <div class="footer-icons-row">
            <a href="https://www.facebook.com"><i class="fab fa-facebook" ></i></a>
            <a href="https://www.twitter.com"><i class="fab fa-twitter" ></i></a>
            <a href="https://www.instagram.com"><i class="fab fa-instagram" ></i></a>
        </div>
    </div>
    <div style="color: #fff;">
        <p style="color:var(--background-color);">&copy; 2023 NALONDU HIGH SCHOOL. ALL RIGHTS RESERVED.</p>
    </div>
</div>
<div id="footerContainer"></div>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const navLinks = [
        { text: 'Home', link: 'index.html' },
        { text: 'AboutUs', link: 'about.html' },
        { text: 'Faculty', link: 'faculty.html' },
        { text: 'StudentLife', link: 'student-life.html' },
        { text: 'Community', link: 'community.html' },
        { text: 'Achievements', link: 'achievements.html' },
        { text: 'ContactUs', link: 'contact.html' },
    ];

    const headerLinks = document.getElementById('headerLinks');

    navLinks.forEach(link => {
        const listItem = document.createElement('li');
        const anchor = document.createElement('a');
        anchor.href = link.link;
        anchor.textContent = link.text;
        listItem.appendChild(anchor);
        headerLinks.appendChild(listItem);
    });
});
   // Use JavaScript to load the footer content
   document.addEventListener('DOMContentLoaded', function () {
        const footerContainer = document.getElementById('footerContainer');

        // Create a new element to hold the footer content
        const footerElement = document.createElement('div');

        // Load the content of footer.html using fetch
        fetch('footer.html')
            .then(response => response.text())
            .then(data => {
                footerElement.innerHTML = data;
                footerContainer.appendChild(footerElement);
            });
    });
document.addEventListener("DOMContentLoaded", function () {
    const showAchievementsButton = document.getElementById("showAchievementsButton");

    // Handle clicking the "See More Achievements" button
    showAchievementsButton.addEventListener("click", function () {
        const achievementsContainer = document.querySelector(".achievement-container");
        const windowHeight = window.innerHeight;
        const achievementsHeight = achievementsContainer.getBoundingClientRect().height;
        const scrollY = window.scrollY;

        if (achievementsHeight - scrollY <= windowHeight) {
            // Reached the end of achievements, but still allow button click
            window.scrollBy(0, 1000); // Scroll by 1 pixel to trigger scroll event
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
            paragraph.textContent = originalText.substring(0, 100); // Adjust the length as needed
            readMoreButton.textContent = "Read More";
        }
    });
});

</script>
</body>
</html>
