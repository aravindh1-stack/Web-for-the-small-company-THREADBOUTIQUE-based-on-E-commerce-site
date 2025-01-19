// Product gallery animation
document.addEventListener('DOMContentLoaded', () => {
    const products = document.querySelectorAll('.product-gallery div');

    products.forEach(product => {
        product.addEventListener('mouseenter', () => {
            product.style.boxShadow = '0 8px 20px rgba(0, 0, 0, 0.3)';
        });

        product.addEventListener('mouseleave', () => {
            product.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
        });
    });
});

// Placeholder for future e-commerce functionality
function addToCart(productId) {
    alert(`Product ${productId} added to cart!`);
}
// Placeholder for e-commerce functionality
function addToCart(productId) {
    alert(`Product ${productId} added to cart!`);
}
