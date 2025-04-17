// Reservation Form Validation
document.addEventListener('DOMContentLoaded', function () {
    const reservationForm = document.querySelector('#reservationForm');
    if (reservationForm) {
        reservationForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const name = document.querySelector('#name').value;
            const date = document.querySelector('#date').value;
            const time = document.querySelector('#time').value;
            const guests = document.querySelector('#guests').value;

            if (!name || !date || !time || !guests) {
                alert("Please fill in all fields.");
            } else {
                alert(`Thank you ${name}, your table for ${guests} is booked on ${date} at ${time}!`);
                reservationForm.reset();
            }
        });
    }

    // Contact Form Validation
    const contactForm = document.querySelector('#contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const name = document.querySelector('#contactName').value;
            const email = document.querySelector('#contactEmail').value;
            const message = document.querySelector('#contactMessage').value;

            if (!name || !email || !message) {
                alert("Please fill in all contact form fields.");
            } else {
                alert(`Thank you for reaching out, ${name}! We'll get back to you soon.`);
                contactForm.reset();
            }
        });
    }
});
