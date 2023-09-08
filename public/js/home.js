let btn = document.getElementById("btn");
btn.addEventListener("click", () => {
    location.href = "about";
});

const cards = document.querySelectorAll(".card");
const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            entry.isIntersecting
                ? ((entry.target.style.transform = "translateX(0)"),
                  (entry.target.style.backgroundColor = "rgba(0, 0, 4, 1)"),
                  counter())
                : ((entry.target.style.transform = "translateX(20%)"),
                  (entry.target.style.backgroundColor = "blue"))
        });
    },
    {
        threshold: 0.1,
    }
);
cards.forEach((card) => {
    observer.observe(card);
});

// js animated counter function
function counter() {
    let valueDisplays = document.querySelectorAll(".num");
    let interval = 4000;

    valueDisplays.forEach((valueDisplay) => {
        let startValue = 0;
        let endValue = parseInt(valueDisplay.getAttribute("data-val"));
        let duration = Math.floor(interval / endValue);
        let counter = setInterval(function () {
            startValue += 1;
            valueDisplay.textContent = startValue;
            if (startValue > endValue) {
                clearInterval(counter);
            }
        }, duration);
    });
}

function slideShow() {
    const slides = document.querySelectorAll(".slide");
    // console.log(typeof(slides));
    // console.log(slides.length);
    let offset = -100;
    let i = -100;
    setInterval(() => {
        slides.forEach((slide) => {
            // console.log(slide.clientWidth);
            slide.style.transform = `translateX(${offset}%)`;
        });
        offset = offset + i;
        // console.log(offset);
        if (offset / i > slides.length) {
            slides.forEach((slide) => {
                offset = offset * -1;
                slide.style.transform = `translateX(0%)`;
            });
            offset = -0;
        }
    }, 4000);
}

slideShow();
