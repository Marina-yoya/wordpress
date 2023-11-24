<section id="contact" class="contact-section">
    <h1>Contact Us</h1>
    <div class="container contact-container">
        <div class="contact-info">
            <img src="<?php echo get_template_directory_uri(); ?>/images/contact-us.jpg" alt="Contact Image"
                class="contact-image">
            <div class="office-info">
                <h2>HEAD OFFICE</h2>
                <p>Village Vet<br>
                    40 Aldermans Hill<br>
                    Hampstead<br>
                    London<br>
                    United Kingdom N13 4PN</p>
            </div>
        </div>
        <div class="contact-form">
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</section>