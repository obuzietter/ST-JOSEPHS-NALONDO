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
