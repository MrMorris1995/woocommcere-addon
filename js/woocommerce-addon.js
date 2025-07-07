console.log("TEST");
document.addEventListener('DOMContentLoaded', function() {
    const rows = document.querySelectorAll('.woocommerce-product-attributes-item');

    rows.forEach(row => {
        const label = row.querySelector('.woocommerce-product-attributes-item__label');
        if (label) {
            label.textContent = label.textContent.trim() + ':';
        }
    });
});