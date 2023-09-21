
// const cards = document.querySelectorAll(".card");
// const observer = new IntersectionObserver(
//     (entries) => {
//         entries.forEach((entry) => {
//             entry.isIntersecting
//                 ? ((entry.target.style.transform = "translateX(0)"),
//                   (entry.target.style.backgroundColor = "rgba(0, 0, 4, 1)"),
//                   counter())
//                 : ((entry.target.style.transform = "translateX(20%)"),
//                   (entry.target.style.backgroundColor = "blue"))
//         });
//     },
//     {
//         threshold: 0.1,
//     }
// );
// cards.forEach((card) => {
//     observer.observe(card);
// });



// js animated counter function


const counters = document.querySelectorAll(".count");

const speed = 64;


counters.forEach((counter) => {
    console.log(counter);
    const updateCount = () => {
        const target = parseInt(+counter.getAttribute("data-target"));
        const count = parseInt(+counter.innerText);
        const increment = Math.trunc(target / speed);
        console.log(increment);
 
        if (count < target) {
            counter.innerText = count + increment;
            setTimeout(updateCount, 1);
        } else {
            count.innerText = target;
        }
    };
    updateCount();
});



