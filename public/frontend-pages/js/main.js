document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const nav = document.querySelector('nav');
    
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', function() {
            nav.classList.toggle('active');
        });
    }
    
    // Product quantity selector
    const quantityBtns = document.querySelectorAll('.quantity-btn');
    
    if (quantityBtns.length > 0) {
        quantityBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const input = this.parentElement.querySelector('.quantity-input');
                const currentValue = parseInt(input.value);
                
                if (this.classList.contains('minus-btn') && currentValue > 1) {
                    input.value = currentValue - 1;
                } else if (this.classList.contains('plus-btn')) {
                    input.value = currentValue + 1;
                }
            });
        });
    }
    
    // Product tabs
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    if (tabBtns.length > 0) {
        tabBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all buttons and contents
                tabBtns.forEach(b => b.classList.remove('active'));
                tabContents.forEach(c => c.classList.remove('active'));
                
                // Add active class to clicked button and corresponding content
                this.classList.add('active');
                const tabId = this.getAttribute('data-tab');
                document.getElementById(tabId).classList.add('active');
            });
        });
    }
    
    // Product gallery
    const mainImage = document.querySelector('.main-image img');
    const thumbnails = document.querySelectorAll('.thumbnail');
    
    if (mainImage && thumbnails.length > 0) {
        thumbnails.forEach(thumb => {
            thumb.addEventListener('click', function() {
                // Remove active class from all thumbnails
                thumbnails.forEach(t => t.classList.remove('active'));
                
                // Add active class to clicked thumbnail
                this.classList.add('active');
                
                // Update main image
                const imgSrc = this.querySelector('img').getAttribute('src');
                mainImage.setAttribute('src', imgSrc);
            });
        });
    }
    
    // Rating selection
    const ratingStars = document.querySelectorAll('.rating-select i');
    
    if (ratingStars.length > 0) {
        ratingStars.forEach((star, index) => {
            star.addEventListener('click', function() {
                // Remove active class from all stars
                ratingStars.forEach(s => s.classList.remove('active'));
                
                // Add active class to clicked star and all stars before it
                for (let i = 0; i <= index; i++) {
                    ratingStars[i].classList.add('active');
                }
                
                // Set hidden input value
                document.querySelector('input[name="rating"]').value = index + 1;
            });
        });
    }
    
    // Add to cart functionality
    const addToCartBtns = document.querySelectorAll('.add-to-cart-btn');
    
    if (addToCartBtns.length > 0) {
        addToCartBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const productId = this.getAttribute('data-id');
                const productName = this.getAttribute('data-name');
                const productPrice = parseFloat(this.getAttribute('data-price'));
                const quantity = 1;
                
                // Get existing cart from localStorage or initialize empty array
                let cart = JSON.parse(localStorage.getItem('cart')) || [];
                
                // Check if product already exists in cart
                const existingProductIndex = cart.findIndex(item => item.id === productId);
                
                if (existingProductIndex !== -1) {
                    // Product exists, update quantity
                    cart[existingProductIndex].quantity += quantity;
                } else {
                    // Product doesn't exist, add to cart
                    cart.push({
                        id: productId,
                        name: productName,
                        price: productPrice,
                        quantity: quantity,
                        image: 'https://img.freepik.com/free-vector/realistic-white-pill-bottle-with-plastic-lid_1284-33655.jpg' // Default image
                    });
                }
                
                // Save updated cart to localStorage
                localStorage.setItem('cart', JSON.stringify(cart));
                
                // Update cart count
                updateCartCount();
                
                // Show success message
                showNotification(`${productName} added to cart!`, 'success');
            });
        });
    }
    
    // Update cart count on page load
    updateCartCount();
    
    // Wishlist functionality
    const wishlistBtns = document.querySelectorAll('.wishlist-btn');
    
    if (wishlistBtns.length > 0) {
        wishlistBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const productId = this.getAttribute('data-id');
                const icon = this.querySelector('i');
                
                // Toggle icon
                if (icon.classList.contains('far')) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                    showNotification('Product added to wishlist!', 'success');
                } else {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                    showNotification('Product removed from wishlist!', 'info');
                }
                
                // Here you would typically update the wishlist in localStorage or send to server
            });
        });
    }
    
    // Newsletter form
    const newsletterForm = document.querySelector('.newsletter-form');
    
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input').value;
            
            if (email) {
                showNotification('Thank you for subscribing to our newsletter!', 'success');
                this.reset();
            } else {
                showNotification('Please enter a valid email address.', 'error');
            }
        });
    }
    
    // Contact form
    const contactForm = document.querySelector('.contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            showNotification('Your message has been sent. We will contact you soon!', 'success');
            this.reset();
        });
    }
});

// Function to update cart count
function updateCartCount() {
    const cartCountElements = document.querySelectorAll('.cart-btn span');
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    
    // Calculate total quantity
    const totalQuantity = cart.reduce((total, item) => total + item.quantity, 0);
    
        // Update all cart count elements
        cartCountElements.forEach(element => {
            element.textContent = totalQuantity;
        });
    }
    
    // Function to show notification
    function showNotification(message, type = 'info') {
        // Create notification element
        const notification = document.createElement('div');
        notification.className = `notification ${type}`;
        
        // Create icon based on notification type
        let icon = '';
        switch(type) {
            case 'success':
                icon = '<i class="fas fa-check-circle"></i>';
                break;
            case 'error':
                icon = '<i class="fas fa-exclamation-circle"></i>';
                break;
            case 'warning':
                icon = '<i class="fas fa-exclamation-triangle"></i>';
                break;
            default:
                icon = '<i class="fas fa-info-circle"></i>';
        }
        
        // Set notification content
        notification.innerHTML = `
            ${icon}
            <p>${message}</p>
            <button class="close-btn"><i class="fas fa-times"></i></button>
        `;
        
        // Add notification to the DOM
        const notificationsContainer = document.querySelector('.notifications-container');
        
        if (!notificationsContainer) {
            // Create container if it doesn't exist
            const container = document.createElement('div');
            container.className = 'notifications-container';
            document.body.appendChild(container);
            container.appendChild(notification);
        } else {
            notificationsContainer.appendChild(notification);
        }
        
        // Add close button functionality
        notification.querySelector('.close-btn').addEventListener('click', function() {
            notification.remove();
        });
        
        // Auto remove notification after 5 seconds
        setTimeout(() => {
            notification.classList.add('fade-out');
            setTimeout(() => {
                notification.remove();
            }, 300);
        }, 5000);
    }
    