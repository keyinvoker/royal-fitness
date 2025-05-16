document.getElementById('learn-more').addEventListener('click', function (e) {
    e.preventDefault();
    window.scrollTo({
        top: document.body.scrollHeight,
        behavior: 'smooth'
    });
});
