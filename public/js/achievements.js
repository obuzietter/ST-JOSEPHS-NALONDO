  
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

