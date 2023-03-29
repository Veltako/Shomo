<footer>
    <ul>
        <li><a href="assets/php/head.inc.php"><h1>contact</h1></a></li>
        <li><a href=""><h1>Mentions Légales</h1></a></li>
        <li><a href=""><h1>Support</h1></a></li>
    </ul>
</footer>

<script>
    let burgerMenu = document.getElementById('burger-menu');
    let overlay = document.getElementById('menu');

    burgerMenu.addEventListener('click', function() {
        this.classList.toggle("close");
        overlay.classList.toggle("overlay");
    });
</script>
</body>
</html>