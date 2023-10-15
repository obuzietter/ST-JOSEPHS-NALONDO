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