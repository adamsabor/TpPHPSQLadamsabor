<?php include 'includes/header.php'; ?>

<main>
    <?php include 'includes/products.php'; ?>
    <section id="promotion-counter" class="text-center my-5" data-aos="zoom-in">
        <h2>Promotion spéciale se termine dans :</h2>
        <div id="countdown" class="countdown"></div>
    </section>
    <section id="detailed-cart" class="d-none">
        <div class="container text-center my-5">
            <h2>Votre Panier Détailé</h2>
            <img src="images/merci.webp" alt="Panier Détailé" class="img-fluid">
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
<script>
    AOS.init();
</script>
