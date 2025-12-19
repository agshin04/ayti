<footer class="site-footer">
    <div class="footer-container">

        <!-- Brand -->
        <div class="footer-brand">
            {{-- Replace text with <img src="..."> later --}}
            <div class="footer-logo">Ayti</div>
            <p class="footer-tagline">
                Biznesinizi Avtomatlaşdırın.
            </p>
        </div>

        <!-- Mini contact form -->
        <div class="footer-form">
            <p class="footer-form-title">Newsletter-ə qoşulmaq üçün email </p>

            <form action="" method="POST">
                @csrf

                <input
                        type="email"
                        name="email"
                        placeholder="Your email"
                        required
                >

                <button type="submit">
                    →
                </button>
            </form>
        </div>


    </div>

    <div class="footer-bottom">
        <p>&copy; {{ date('Y') }} Ayti.</p>
    </div>
</footer>
