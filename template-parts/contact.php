<?php 
    $page_id = get_the_ID();
?>
      <section class="contact">
                <div class="container">
                    <div class="contact__text wow animate__animated animate__fadeInLeft">
                        <h2 class="section-title">
                            contact with us
                            <span>for personal offer</span>
                        </h2>
                        <form action="#" class="contact-form">
                            <div class="contact-form__columns">
                                <input type="text" class="contact-form__input" placeholder="Company name">
                                <input type="tel" class="contact-form__input" placeholder="Phone number">
                            </div>
                            <input type="email" class="contact-form__input" placeholder="Email Adrress">
                            <textarea class="contact-form__input contact-form__message" cols="30" rows="10"
                                placeholder="Message"></textarea>
                            <button class="book">Send now</button>
                        </form>
                    </div>
                    <div class="contact__img wow animate__animated animate__fadeInRight">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/contact.jpg" alt="">
                    </div>
                </div>
            </section>