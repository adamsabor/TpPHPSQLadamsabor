document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.querySelector('input[type="search"]');
    const productItems = document.querySelectorAll('.product-item');
    const cartItemsList = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    const emptyCartButton = document.getElementById('empty-cart');
    const checkoutButton = document.getElementById('checkout');
    const detailedCartSection = document.getElementById('detailed-cart');
    const countdownElement = document.getElementById('countdown');
    let cart = [];

    function updateCart() {
        cartItemsList.innerHTML = '';
        let total = 0;
        cart.forEach(item => {
            const li = document.createElement('li');
            li.textContent = `${item.title} - ${item.price.toFixed(2)}€`;
            cartItemsList.appendChild(li);
            total += item.price;
        });
        cartTotal.textContent = total.toFixed(2) + '€';
    }

    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
            const product = button.closest('.product-item');
            const title = product.getAttribute('data-title');
            const price = parseFloat(product.getAttribute('data-price'));
            const item = { title, price };
            cart.push(item);
            updateCart();
            showPopup(`Ajouté ${title} au panier!`);
        });
    });

    emptyCartButton.addEventListener('click', function() {
        cart = [];
        updateCart();
    });

    searchInput.addEventListener('input', function() {
        const query = searchInput.value.toLowerCase();
        productItems.forEach(function(item) {
            const title = item.querySelector('h3').textContent.toLowerCase();
            if (title.includes(query)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });

    checkoutButton.addEventListener('click', function() {
        detailedCartSection.classList.remove('d-none');
        window.scrollTo({
            top: detailedCartSection.offsetTop,
            behavior: 'smooth'
        });
    });

    const navLinks = document.querySelectorAll('nav a');
    navLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = link.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);
            window.scrollTo({
                top: targetSection.offsetTop - document.querySelector('header').offsetHeight,
                behavior: 'smooth'
            });
        });
    });

    AOS.init();

    function showPopup(message) {
        const popup = document.createElement('div');
        popup.className = 'popup-message animate__animated animate__fadeInDown';
        popup.textContent = message;
        document.body.appendChild(popup);
        setTimeout(() => {
            popup.classList.add('animate__fadeOutUp');
            popup.addEventListener('animationend', () => popup.remove());
        }, 2000);
    }

    function startCountdown(duration, element) {
        let timer = duration, minutes, seconds;
        const interval = setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            element.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                clearInterval(interval);
                element.textContent = "Promotion terminée";
            }
        }, 1000);
    }

    startCountdown(1 * 60, countdownElement);
});
