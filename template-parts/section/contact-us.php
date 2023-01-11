<!-- Contact Us -->
<section class="py-10 sm:py-12 md:py-20 lg:py-[102px] bg-bgColor">
    <div class="container">
        <div class="w-full max-w-[1000px] mx-auto bg-white px-5 xs:px-10 sm:px-14 md:px-16 lg:px-[77px] py-6 xs:py-7 sm:py-8 md:py-9 lg:py-11">
            <div class="mb-8">
                <h2 class="text-primary text-3xl md:text-4xl lg:text-5xl leading-[62px] text-center font-semibold">
                    Contact Us
                </h2>
                <h6 class="text-secondary text-base lg:text-lg leading-7 text-center w-full max-w-[440px] mx-auto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec
                    nibh vitae erat efficitur faucibus.
                </h6>
            </div>
            <?php

            // get contact us

            echo do_shortcode('[contact-form-7 id="59" title="Contact form 1"]');
            ?>
            <!-- <form action="" class="grid grid-cols-2 gap-5">
                <div class="form-field field-half">
                    <input type="text" placeholder="Name" required />
                </div>
                <div class="form-field field-half">
                    <input type="email" placeholder="Email" required />
                </div>
                <div class="form-field">
                    <select name="cars" id="cars">
                        <option selected disabled hidden>Subject</option>
                        <option value="saab">1</option>
                        <option value="mercedes">2</option>
                        <option value="audi">3</option>
                    </select>
                </div>
                <div class="form-field">
                    <input type="email" placeholder="Enter your email address" required />
                </div>
                <div class="form-field">
                    <textarea type="text" placeholder="Type here your message"></textarea>
                </div>
                <button class="text-white hover:bg-hoverColor animation bg-primary rounded-[5px] text-sm lg:text-base leading-none py-4 px-12 uppercase font-semibold mx-auto">
                    send message
                </button>
            </form> -->
        </div>
    </div>
</section>