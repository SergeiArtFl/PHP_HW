<div class="form">
    <form action="./form.php" method="post">
        <fieldset>
            <legend>Contact information</legend>
            <div class="form_field">
                <label>Enter your name</label><br>
                <input required type="text" name="name" placeholder="Name">
            </div>
            <div class="form_field">
                <label>Enter your number of telefone</label><br>
                <input required type="tel" name="phone" value='+375'>
            </div>
            <div class="form_field">
                <label>Enter your email</label><br>
                <input required type="email" name="email" placeholder="mail@gmail.com">
            </div>
            <div class="form_field">
                <label>Enter your message</label><br>
                <textarea name="message" placeholder="Your message..."></textarea>
            </div>
        </fieldset>
        <button class="btn__primary">Send</button>
    </form>
</div>