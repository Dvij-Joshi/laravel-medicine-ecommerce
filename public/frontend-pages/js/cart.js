document.addEventListener('DOMContentLoaded', function() {
    // Load cart from localStorage
    loadCart();
    
    // Update cart when quantity changes
    const cartContainer = document.querySelector('.cart-items');
    
    if (cartContainer) {
        cartContainer.addEventListener('click', function(e) {
            if (e.target.classList.contains('cart-quantity-btn')) {
                const input = e.target.parentElement.querySelector('.cart-quantity-input');
                const currentValue = parseInt(input.value);
                const productId = input.getAttribute('data-id');
                
                if (e.target.classList.contains('minus-btn') && currentValue > 1) {
                    input.value = currentValue - 1;
                    updateCartItem(productId, currentValue - 1);
                } else if (e.target.classList.contains('plus-btn')) {
                    input.value = currentValue + 1;
                    updateCartItem(productId, currentValue + 1);
                }
            }
            
            if (e.target.classList.contains('remove-btn') || e.target.parentElement.classList.contains('remove-btn')) {
                const productId = e.target.closest('.cart-item').getAttribute('data-id');
                removeCartItem(productId);
            }
        });
    }
    
    // Handle quantity input changes
    const quantityInputs = document.querySelectorAll('.cart-quantity-input');
    
    if (quantityInputs.length > 0) {
        quantityInputs.forEach(input => {
            input.addEventListener('change', function() {
                const productId = this.getAttribute('data-id');
                const newQuantity = parseInt(this.value);
                
                if (newQuantity < 1) {
                    this.value = 1;
                    updateCartItem(productId, 1);
                } else {
                    updateCartItem(productId, newQuantity);
                }
            });
        });
    }
    
    // Apply coupon code
    const couponForm = document.querySelector('.coupon-form');
    
    if (couponForm) {
        couponForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const couponInput = this.querySelector('input');
            const couponCode = couponInput.value.trim();
            
            if (couponCode) {
                // In a real app, you would validate the coupon code with the server
                // For this demo, we'll just accept any code
                applyCoupon(couponCode);
                couponInput.value = '';
            } else {
                showNotification('Please enter a coupon code.', 'warning');
            }
        });
    }
    
    // Remove coupon code
    const removeCouponBtn = document.querySelector('.remove-promo');
    
    if (removeCouponBtn) {
        removeCouponBtn.addEventListener('click', function() {
            removeCoupon();
        });
    }
    
    // Update cart button
    const updateCartBtn = document.querySelector('.update-cart-btn');
    
    if (updateCartBtn) {
        updateCartBtn.addEventListener('click', function() {
            showNotification('Cart updated successfully!', 'success');
        });
    }
    
    // Shipping option selection
    const shippingOptions = document.querySelectorAll('.shipping-option');
    
    if (shippingOptions.length > 0) {
        shippingOptions.forEach(option => {
            option.addEventListener('click', function() {
                // Remove active class from all options
                shippingOptions.forEach(opt => opt.classList.remove('active'));
                
                // Add active class to clicked option
                this.classList.add('active');
                
                // Update shipping cost
                const shippingCost = parseFloat(this.getAttribute('data-cost'));
                updateShippingCost(shippingCost);
            });
        });
    }
});

// Function to load cart from localStorage
function loadCart() {
    const cartItemsContainer = document.querySelector('.cart-items-container');
    const emptyCartMessage = document.querySelector('.empty-cart');
    const cartSummary = document.querySelector('.cart-summary');
    
    if (!cartItemsContainer) return;
    
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    
    if (cart.length === 0) {
        // Show empty cart message
        if (emptyCartMessage) emptyCartMessage.style.display = 'block';
        if (cartSummary) cartSummary.style.display = 'none';
        cartItemsContainer.innerHTML = '';
        return;
    }
    
    // Hide empty cart message and show summary
    if (emptyCartMessage) emptyCartMessage.style.display = 'none';
    if (cartSummary) cartSummary.style.display = 'block';
    
    // Generate cart items HTML
    let cartItemsHTML = '';
    let subtotal = 0;
    
    cart.forEach(item => {
        const itemTotal = item.price * item.quantity;
        subtotal += itemTotal;
        
        cartItemsHTML += `
            <div class="cart-item" data-id="${item.id}">
                <div class="product-col">
                    <div class="product-image">
                        <img src="${item.image}" alt="${item.name}">
                    </div>
                    <div class="product-details">
                        <h3>${item.name}</h3>
                        <div class="product-meta">
                            <span>Category: Medicine</span>
                        </div>
                    </div>
                </div>
                <div class="price-col">$${item.price.toFixed(2)}</div>
                <div class="quantity-col">
                    <div class="cart-quantity">
                        <button class="cart-quantity-btn minus-btn"><i class="fas fa-minus"></i></button>
                        <input type="number" class="cart-quantity-input" value="${item.quantity}" min="1" data-id="${item.id}">
                        <button class="cart-quantity-btn plus-btn"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
                <div class="subtotal-col">$${itemTotal.toFixed(2)}</div>
                <div class="action-col">
                    <button class="remove-btn"><i class="fas fa-trash-alt"></i></button>
                </div>
            </div>
        `;
    });
    
    // Update cart items container
    cartItemsContainer.innerHTML = cartItemsHTML;
    
    // Update cart summary
    updateCartSummary(subtotal);
}

// Function to update cart item quantity
function updateCartItem(productId, newQuantity) {
    // Get cart from localStorage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    
    // Find the item in the cart
    const itemIndex = cart.findIndex(item => item.id === productId);
    
    if (itemIndex !== -1) {
        // Update quantity
        cart[itemIndex].quantity = newQuantity;
        
        // Save updated cart to localStorage
        localStorage.setItem('cart', JSON.stringify(cart));
        
        // Show update notification
        const updateNotification = document.querySelector('.cart-update');
        if (updateNotification) {
            updateNotification.classList.add('show');
            setTimeout(() => {
                updateNotification.classList.remove('show');
            }, 2000);
        }
        
        // Update subtotal for this item
        const itemSubtotal = cart[itemIndex].price * newQuantity;
        const subtotalElement = document.querySelector(`.cart-item[data-id="${productId}"] .subtotal-col`);
        if (subtotalElement) {
            subtotalElement.textContent = `$${itemSubtotal.toFixed(2)}`;
        }
        
        // Update cart summary
        const subtotal = cart.reduce((total, item) => total + (item.price * item.quantity), 0);
        updateCartSummary(subtotal);
        
        // Update cart count
        updateCartCount();
    }
}

// Function to remove cart item
function removeCartItem(productId) {
    // Get cart from localStorage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    
    // Find the item in the cart
    const itemIndex = cart.findIndex(item => item.id === productId);
    
    if (itemIndex !== -1) {
        // Get item name for notification
        const itemName = cart[itemIndex].name;
        
        // Remove item from cart
        cart.splice(itemIndex, 1);
        
        // Save updated cart to localStorage
        localStorage.setItem('cart', JSON.stringify(cart));
        
        // Remove item from DOM with animation
        const cartItem = document.querySelector(`.cart-item[data-id="${productId}"]`);
        if (cartItem) {
            cartItem.classList.add('cart-item-exit-active');
            setTimeout(() => {
                cartItem.remove();
                
                // If cart is empty, show empty cart message
                if (cart.length === 0) {
                    const emptyCartMessage = document.querySelector('.empty-cart');
                    const cartSummary = document.querySelector('.cart-summary');
                    
                    if (emptyCartMessage) emptyCartMessage.style.display = 'block';
                    if (cartSummary) cartSummary.style.display = 'none';
                }
            }, 300);
        }
        
        // Update cart summary
        const subtotal = cart.reduce((total, item) => total + (item.price * item.quantity), 0);
        updateCartSummary(subtotal);
        
        // Update cart count
        updateCartCount();
        
        // Show notification
        showNotification(`${itemName} removed from cart.`, 'info');
    }
}

// Function to update cart summary
function updateCartSummary(subtotal) {
    const subtotalElement = document.querySelector('.summary-item.subtotal .summary-value');
    const discountElement = document.querySelector('.summary-item.discount .summary-value');
    const shippingElement = document.querySelector('.summary-item.shipping .summary-value');
    const totalElement = document.querySelector('.summary-item.total .summary-value');
    
    if (!subtotalElement || !totalElement) return;
    
    // Update subtotal
    subtotalElement.textContent = `$${subtotal.toFixed(2)}`;
    
    // Get discount and shipping from data attributes or default to 0
    let discount = 0;
    if (discountElement) {
        discount = parseFloat(discountElement.getAttribute('data-discount') || 0);
        discountElement.textContent = `-$${discount.toFixed(2)}`;
    }
    
    let shipping = 0;
    if (shippingElement) {
        shipping = parseFloat(shippingElement.getAttribute('data-shipping') || 0);
        shippingElement.textContent = shipping > 0 ? `$${shipping.toFixed(2)}` : 'Free';
    }
    
    // Calculate total
    const total = subtotal - discount + shipping;
    totalElement.textContent = `$${total.toFixed(2)}`;
}

// Function to apply coupon
function applyCoupon(couponCode) {
    // In a real app, you would validate the coupon code with the server
    // For this demo, we'll just apply a fixed discount
    
    const discount = 10; // $10 discount
    const promoContainer = document.querySelector('.promo-applied');
    const discountElement = document.querySelector('.summary-item.discount .summary-value');
    
    if (promoContainer && discountElement) {
        // Show promo container
        promoContainer.style.display = 'flex';
        promoContainer.querySelector('span').textContent = `Coupon "${couponCode}" applied: $${discount.toFixed(2)} off`;
        
        // Update discount in summary
        discountElement.setAttribute('data-discount', discount);
        discountElement.textContent = `-$${discount.toFixed(2)}`;
        
        // Update total
        const subtotalElement = document.querySelector('.summary-item.subtotal .summary-value');
        const shippingElement = document.querySelector('.summary-item.shipping .summary-value');
        
        if (subtotalElement && shippingElement) {
            const subtotal = parseFloat(subtotalElement.textContent.replace('$', ''));
            const shipping = parseFloat(shippingElement.getAttribute('data-shipping') || 0);
            const total = subtotal - discount + shipping;
            
            const totalElement = document.querySelector('.summary-item.total .summary-value');
            if (totalElement) {
                totalElement.textContent = `$${total.toFixed(2)}`;
            }
        }
        
        // Show notification
        showNotification(`Coupon "${couponCode}" applied successfully!`, 'success');
    }
}

// Function to remove coupon
function removeCoupon() {
    const promoContainer = document.querySelector('.promo-applied');
    const discountElement = document.querySelector('.summary-item.discount .summary-value');
    
    if (promoContainer && discountElement) {
        // Hide promo container
        promoContainer.style.display = 'none';
        
        // Reset discount in summary
        discountElement.setAttribute('data-discount', 0);
        discountElement.textContent = '-$0.00';
        
        // Update total
        const subtotalElement = document.querySelector('.summary-item.subtotal .summary-value');
        const shippingElement = document.querySelector('.summary-item.shipping .summary-value');
        
        if (subtotalElement && shippingElement) {
            const subtotal = parseFloat(subtotalElement.textContent.replace('$', ''));
            const shipping = parseFloat(shippingElement.getAttribute('data-shipping') || 0);
            const total = subtotal + shipping;
            
            const totalElement = document.querySelector('.summary-item.total .summary-value');
            if (totalElement) {
                totalElement.textContent = `$${total.toFixed(2)}`;
            }
        }
        
        // Show notification
        showNotification('Coupon removed.', 'info');
    }
}

// Function to update shipping cost
function updateShippingCost(cost) {
    const shippingElement = document.querySelector('.summary-item.shipping .summary-value');
    
    if (shippingElement) {
        // Update shipping cost
        shippingElement.setAttribute('data-shipping', cost);
        shippingElement.textContent = cost > 0 ? `$${cost.toFixed(2)}` : 'Free';
        
        // Update total
        const subtotalElement = document.querySelector('.summary-item.subtotal .summary-value');
        const discountElement = document.querySelector('.summary-item.discount .summary-value');
        
        if (subtotalElement && discountElement) {
            const subtotal = parseFloat(subtotalElement.textContent.replace('$', ''));
            const discount = parseFloat(discountElement.getAttribute('data-discount') || 0);
            const total = subtotal - discount + cost;
            
            const totalElement = document.querySelector('.summary-item.total .summary-value');
            if (totalElement) {
                totalElement.textContent = `$${total.toFixed(2)}`;
            }
        }
    }
}
