let btn = document.getElementById("btn")
btn.addEventListener("click", () => {
    location.href = "about";
})

const cards = document.querySelectorAll(".card");
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.style.transform = "translateX(0)"
            entry.target.style.backgroundColor = "black"
            counter()
        } else {
            entry.target.style.transform = "translateX(100%)"
            entry.target.style.backgroundColor = "blue"
        }

    });
}, {
    threshold: .2
});
cards.forEach((card) => {
    observer.observe(card);
});

// js animated counter function
function counter() {
    let valueDisplays = document.querySelectorAll(".num");
    let interval = 4000

    valueDisplays.forEach((valueDisplay) => {
        let startValue = 0
        let endValue = parseInt(valueDisplay.getAttribute("data-val"))
        let duration = Math.floor(interval / endValue)
        let counter = setInterval(function () {
            startValue += 1
            valueDisplay.textContent = startValue
            if (startValue > endValue) {
                clearInterval(counter)
            }
        }, duration)
    })
}