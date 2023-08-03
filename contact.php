<section class="contact section" id="contact">
    <h2 class="section__title">Contact Me</h2>
    <span class="section__subtitle">Get in touch</span>

    <div class="contact__container container form-container">


        <form id="contact-form" class="contact__form grid">
            <div class="contact__inputs grid">
                <div class="contact__content">
                    <label for="name" class="contact__label">Name</label>
                    <input type="text" name="name" id="name" class="contact__input">
                </div>
                <div class="contact__content">
                    <label for="email" class="contact__label">Email</label>
                    <input type="email" name="email" id="email" class="contact__input">
                </div>
            </div>
            <div class="contact__content">
                <label for="project" class="contact__label">Project</label>
                <input type="text" name="project" id="project" class="contact__input">
            </div>
            <div class="contact__content">
                <label for="message" class="contact__label">Message</label>
                <textarea name="message" id="message" cols="0" rows="7" class="contact__input"></textarea>
            </div>

            <div class="grid contactdiv">
                <div>
                    <button type="submit" class="button button--flex">
                        Send Message
                        <i class="uil uil-message button__icon"></i>
                    </button>
                </div>


            </div>

            <div id="form-message" class="form-message"></div>

        </form>



    </div>

</section>