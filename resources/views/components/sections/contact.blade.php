<section class="contact" id="contact">
    <h2 class="section-title">Bizimlə Əlaqə</h2>
    <div class="contact-container">
        <form class="contact-form" action="" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="name" placeholder="Adınız" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="E-poçt ünvanınız" required>
            </div>
            <div class="form-group">
                <input type="text" name="subject" placeholder="Mövzu" required>
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Mesajınız" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Mesaj Göndər</button>
        </form>
    </div>
</section>
