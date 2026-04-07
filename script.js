document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.style.padding = '10px 50px';
            navbar.style.boxShadow = '0 4px 15px rgba(0,0,0,0.2)';
        } else {
            navbar.style.padding = '20px 50px';
            navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
        }
    });

    const allButtons = document.querySelectorAll('.product-card button');

    allButtons.forEach(button => {
        button.addEventListener('click', function() {
            const card = this.closest('.product-card');
            const productName = card.querySelector('h3').innerText;
            
            let formData = new FormData();
            formData.append('p_name', productName);

            fetch('insert_order.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                alert(productName + " səbətinizə uğurla əlavə edildi! 🦁");
            })
            .catch(error => {
                console.error(error);
            });
            
            this.style.opacity = '0.7';
            setTimeout(() => {
                this.style.opacity = '1';
            }, 200);
        });
    });

    const footerLinks = document.querySelectorAll('.footer-column ul li');
    footerLinks.forEach(link => {
        link.addEventListener('click', function() {
            console.log(this.innerText + " aktiv deyil.");
        });
    });
});