document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    for (const [key, value] of formData.entries()) {
        console.log(`${key}: ${value}`);
    }

    formData.append('service_id', emailJsServiceId);
    formData.append('template_id', emailJsTemplateId);
    formData.append('user_id', emailJsPublicKey);

    fetch('https://api.emailjs.com/api/v1.0/email/send-form', {
        method: 'POST',
        body: formData,
    })
    .then(() => {
        alert('Your mail is sent!');
    })
    .catch(error => {
        alert('Oops... ' + JSON.stringify(error));
    });
});
