const chev = document.getElementById("chevron");
chev.addEventListener("click", () => {
    location.href = "#values";
});

const navItems = document.querySelectorAll(".history-nav .item");

navItems.forEach((item) => {
    item.addEventListener("click", () => {
        let activeLinks = document.querySelectorAll(".active");
        activeLinks.forEach((activeLink) => {
            activeLink.classList.remove("active");
        });
        item.classList.add("active");
    });
});

document.getElementById("up").addEventListener("click", () => {
    location.href = "about";
});

const coreValues = document.querySelectorAll(".core-value");

const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            entry.isIntersecting
                ? (entry.target.style.translate = "0")
                : entry.target.classList.contains("even")
                ? (entry.target.style.translate = "100%")
                : (entry.target.style.translate = "-100%");
        });
    },
    {
        threshold: 0.2,
    }
);
coreValues.forEach((coreValue) => {
    observer.observe(coreValue);
});
// window scroll event
/*
const revealElement = document.getElementById('revealElement');

function checkScroll() {
  const scrollPosition = window.scrollY;
  const windowHeight = window.innerHeight;

  if (scrollPosition > windowHeight) {
    revealElement.style.opacity = 1;
  } else {
    revealElement.style.opacity = 0;
  }
}

// Attach the scroll event listener
window.addEventListener('scroll', checkScroll);

// Initial check in case the user starts already scrolled down
checkScroll();
*/
