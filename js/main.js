
window.onload = function () {
    /*================ FORM SUBMISSION ==========*/
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function (event) {
            event.preventDefault();
            submitForm(event.target);
        });
    }

    /*==================== SKILLS DROPDOWN ====================*/
    const skillsContent = document.getElementsByClassName('skills__content'),
        skillsHeader = document.querySelectorAll('.skills__header')

    function toggleSkills() {

        let itemClass = this.parentNode.className


        for (let i = 0; i < skillsContent.length; i++) {
            skillsContent[i].className = 'skills__content skills__close'
        }
        if (itemClass === 'skills__content skills__close') {
            this.parentNode.className = 'skills__content skills__open'
        }
    }



    /*==================== SHOW ACTIVE PAGE IN NAV ====================*/
    const sections = document.querySelectorAll('section[id]')

    function scrollActive() {
        const scrollY = window.pageYOffset

        sections.forEach(current => {
            const sectionHeight = current.offsetHeight
            const sectionTop = current.offsetTop - 50;
            sectionId = current.getAttribute('id')

            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
            } else {
                document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
            }
        })
    }
    window.addEventListener('scroll', scrollActive)

    skillsHeader.forEach((el) => {
        el.addEventListener('click', toggleSkills);
    });

};


/*===========SUBMIT FORM=============*/
function submitForm(form) {
    // Serialize the form data
    const formData = new FormData(form);

    // Send the form data via AJAX
    fetch('save_message.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            // Display the success or error message
            const formMessageElement = document.getElementById('form-message');
            formMessageElement.textContent = data.message;

            if (data.status === 'success') {
                formMessageElement.classList.add('success');
                formMessageElement.classList.remove('error');
            } else {
                formMessageElement.classList.add('error');
                formMessageElement.classList.remove('success');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}




/*==================== CHANGE BACKGROUND HEADER ====================*/
function scrollHeader() {
    const nav = document.getElementById('header');
    if (this.scrollY >= 80) nav.classList.add('scroll-header'); else nav.classList.remove('scroll-header');
}
window.addEventListener('scroll', scrollHeader)

/*==================== SHOW SCROLL TOP ====================*/
function scrollTop() {
    let scrollTop = document.getElementById('scroll-top');
    // When the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if (this.scrollY >= 200) scrollTop.classList.add('show-scroll'); else scrollTop.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollTop)







