// Add this script at the end of your HTML body or in a separate JS file

document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section');

    const options = {
        threshold: 0.5
    };

    const observer = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                observer.unobserve(entry.target);
            }
        });
    }, options);

    sections.forEach(section => {
        observer.observe(section);
    });
});
