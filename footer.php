</main>
        <footer>
            <div class="footer-content flex p4">
                <div class="col-3">
                    <h2>Design that makes sense</h2>
                    <p>Luca Tosoni</p>
                    <p>Verolanuova, Brescia.</p>
                    <a href="tel:+393276760363">+39 327 676 0363</a>
                    <a href="mailto:info@tosoniluca.it">info@tosoniluca.it</a>
                    <p>P.IVA 04364290983</p>
                </div>
                <div class="col-3">
                    <h2>Servizi</h2>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                </div>
                <div class="col-3 flex flex-column g-4">
                    <h2>Link utili</h2>
                    <a href="">Privacy Policy</a>
                    <a href="">Cookie Policy</a>
                    <a href="">Preferenze Cookie</a>
                </div>
                <div class="col-3 flex flex-column">
                    <h2>Seguimi</h2>
                    <a href="">Instagram</a>
                    <a href="">LinkedIn</a>
                    <a href="">Behance</a>
                </div>
            </div>
        </footer>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>