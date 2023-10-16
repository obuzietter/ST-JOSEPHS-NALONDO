const listItems = document.querySelectorAll(".core-value");
const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {

                entry.target.style.transform = "translateX(0)"
            } else {
                entry.target.style.transform = "translateX(80%)";
            }

        });
    }, {
    threshold: 0.1,
}
);
listItems.forEach((li) => {
    observer.observe(li);
});


const counters = document.querySelectorAll('.count')
const speed = 200

counters.forEach((counter)=>{
    console.log(counter);
    
    const updateCount = () =>{
        const target = +counter.getAttribute('data-target')
        const count = +counter.innerText
        const increment = target / speed
        console.log(count);

        if(count < target){
            counter.innerText = count + increment
            setTimeout(updateCount, 1)
        }
        else{
            count.innerText = target
        }
    }
})