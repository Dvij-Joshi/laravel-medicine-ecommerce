<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paracetamol 500mg - MediShop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animations.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1><i class="fas fa-clinic-medical"></i> MediShop</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html#featured">Products</a></li>
                    <li><a href="index.html#categories">Categories</a></li>
                    <li><a href="index.html#about">About</a></li>
                    <li><a href="index.html#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="header-buttons">
                <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> <span id="cart-count">0</span></a>
                <a href="login.html" class="login-btn">Login</a>
                <a href="register.html" class="register-btn">Register</a>
            </div>
            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <section class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Pain Relief</a></li>
                <li>Paracetamol 500mg</li>
            </ul>
        </div>
    </section>

    <section class="product-details">
        <div class="container">
            <div class="product-details-container">
                <div class="product-gallery fade-in">
                    <div class="main-image">
                        <img src="https://img.freepik.com/free-vector/realistic-white-pill-bottle-with-plastic-lid_1284-33655.jpg" alt="Paracetamol 500mg" id="main-product-image">
                    </div>
                    <div class="thumbnail-images">
                        <img src="https://img.freepik.com/free-vector/realistic-white-pill-bottle-with-plastic-lid_1284-33655.jpg" alt="Paracetamol 500mg" class="active" onclick="changeImage(this)">
                        <img src="https://img.freepik.com/free-vector/realistic-pills-blisters-transparent-set_1284-33638.jpg" alt="Paracetamol 500mg Blister" onclick="changeImage(this)">
                        <img src="https://img.freepik.com/free-vector/realistic-pills-composition-with-images-pills-tablets-capsules-different-shape-color_1284-33635.jpg" alt="Paracetamol 500mg Pills" onclick="changeImage(this)">
                    </div>
                </div>
                <div class="product-info fade-in">
                    <div class="product-badge">Bestseller</div>
                    <h1>Paracetamol 500mg</h1>
                    <div class="product-meta">
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>(128 reviews)</span>
                        </div>
                        <div class="product-sku">
                            <span>SKU: MED-PR-001</span>
                        </div>
                    </div>
                    <div class="product-price">
                        <span class="price">$5.99</span>
                        <span class="old-price">$7.99</span>
                        <span class="discount">25% OFF</span>
                    </div>
                    <div class="product-short-description">
                        <p>Paracetamol 500mg is an effective medication for relieving pain and reducing fever. It's commonly used to treat headaches, toothaches, backaches, menstrual pains, and other minor aches and pains.</p>
                    </div>
                    <div class="product-attributes">
                        <div class="attribute">
                            <span class="attribute-label">Brand:</span>
                            <span class="attribute-value">MediCare</span>
                        </div>
                        <div class="attribute">
                            <span class="attribute-label">Category:</span>
                            <span class="attribute-value">Pain Relief</span>
                        </div>
                        <div class="attribute">
                            <span class="attribute-label">Dosage:</span>
                            <span class="attribute-value">500mg</span>
                        </div>
                        <div class="attribute">
                            <span class="attribute-label">Form:</span>
                            <span class="attribute-value">Tablets</span>
                        </div>
                        <div class="attribute">
                            <span class="attribute-label">Prescription:</span>
                            <span class="attribute-value">Not Required</span>
                        </div>
                    </div>
                    <div class="product-stock">
                        <i class="fas fa-check-circle"></i> In Stock (50+ items)
                    </div>
                    <div class="product-actions">
                        <div class="quantity-selector">
                            <button class="quantity-btn minus" onclick="decreaseQuantity()">
                                <i class="fas fa-minus"></i>
                            </button>
                            <input type="number" id="quantity" value="1" min="1" max="10">
                            <button class="quantity-btn plus" onclick="increaseQuantity()">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <button class="btn primary-btn add-to-cart-btn" data-id="1" data-name="Paracetamol 500mg" data-price="5.99">
                            <i class="fas fa-cart-plus"></i> Add to Cart
                        </button>
                        <button class="btn wishlist-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                    <div class="product-delivery">
                        <div class="delivery-option">
                            <i class="fas fa-truck"></i>
                            <div>
                                <h4>Free Shipping</h4>
                                <p>On orders over $25</p>
                            </div>
                        </div>
                        <div class="delivery-option">
                            <i class="fas fa-undo"></i>
                            <div>
                                <h4>Easy Returns</h4>
                                <p>30-day return policy</p>
                            </div>
                        </div>
                    </div>
                    <div class="product-share">
                        <span>Share:</span>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="product-details-tabs">
                <div class="tabs-header">
                    <button class="tab-btn active" data-tab="description">Description</button>
                    <button class="tab-btn" data-tab="usage">Usage & Dosage</button>
                    <button class="tab-btn" data-tab="side-effects">Side Effects</button>
                    <button class="tab-btn" data-tab="reviews">Reviews (128)</button>
                </div>
                <div class="tabs-content">
                    <div class="tab-panel active" id="description">
                        <h3>Product Description</h3>
                        <p>Paracetamol 500mg is a widely used over-the-counter analgesic (pain reliever) and antipyretic (fever reducer). It is commonly used for the relief of mild to moderate pain such as headache, backache, menstrual pains, toothache, and for reducing fever.</p>
                        <p>Paracetamol works by blocking the production of certain chemical messengers in the brain that signal pain and fever. Unlike NSAIDs (non-steroidal anti-inflammatory drugs), paracetamol doesn't reduce inflammation significantly.</p>
                        <h4>Key Benefits:</h4>
                        <ul>
                            <li>Effective pain relief for mild to moderate pain</li>
                            <li>Reduces fever</li>
                            <li>Gentle on the stomach compared to NSAIDs</li>
                            <li>Suitable for most people, including pregnant women and children (at appropriate doses)</li>
                            <li>Can be taken with or without food</li>
                        </ul>
                        <p>Each tablet contains 500mg of paracetamol as the active ingredient. The tablets are film-coated for easy swallowing.</p>
                    </div>
                    <div class="tab-panel" id="usage">
                        <h3>Usage & Dosage</h3>
                        <h4>Recommended Dosage for Adults:</h4>
                        <p>The standard dose for adults is one to two 500mg tablets taken every 4-6 hours as needed, with a maximum of 8 tablets (4000mg) in 24 hours.</p>
                        
                        <h4>How to Take:</h4>
                        <ul>
                            <li>Swallow the tablets whole with water</li>
                            <li>Can be taken with or without food</li>
                            <li>Do not exceed the stated dose</li>
                            <li>Allow at least 4 hours between doses</li>
                        </ul>
                        
                        <div class="warning-box">
                            <h4><i class="fas fa-exclamation-triangle"></i> Important Warnings:</h4>
                            <ul>
                                <li>Do not take with other paracetamol-containing products</li>
                                <li>Consult a doctor if symptoms persist for more than 3 days</li>
                                <li>Seek immediate medical attention in case of overdose, even if you feel well</li>
                                <li>Keep out of reach of children</li>
                            </ul>
                        </div>
                        
                        <h4>Special Populations:</h4>
                        <p><strong>Elderly:</strong> No special dosage adjustment is required for elderly patients with normal liver and kidney function.</p>
                        <p><strong>Liver or Kidney Impairment:</strong> Consult your doctor before use if you have liver or kidney problems.</p>
                    </div>
                    <div class="tab-panel" id="side-effects">
                        <h3>Side Effects</h3>
                        <p>Paracetamol is generally well-tolerated when taken at recommended doses. However, like all medicines, it can cause side effects in some people.</p>
                        
                        <h4>Common Side Effects (affecting less than 1 in 10 people):</h4>
                        <ul>
                            <li>None at recommended doses</li>
                        </ul>
                        
                        <h4>Uncommon Side Effects (affecting less than 1 in 100 people):</h4>
                        <ul>
                            <li>Allergic reactions such as skin rash or itching</li>
                        </ul>
                        
                        <h4>Rare Side Effects (affecting less than 1 in 1,000 people):</h4>
                        <ul>
                            <li>Blood disorders (such as thrombocytopenia, leukopenia)</li>
                            <li>Liver problems</li>
                            <li>Kidney problems</li>
                        </ul>
                        
                        <div class="warning-box">
                            <h4><i class="fas fa-exclamation-triangle"></i> Seek Immediate Medical Attention If:</h4>
                            <ul>
                                <li>You develop a skin rash, peeling, or mouth sores</li>
                                <li>You experience symptoms of liver problems (yellowing of the skin or whites of the eyes, dark urine, pale stools, abdominal pain)</li>
                                <li>You have taken more than the recommended dose (overdose)</li>
                            </ul>
                        </div>
                        
                        <h4>Interactions with Other Medications:</h4>
                        <p>Paracetamol may interact with certain medications. Inform your doctor or pharmacist if you are taking:</p>
                        <ul>
                            <li>Warfarin or other blood thinners</li>
                            <li>Metoclopramide or domperidone (for nausea and vomiting)</li>
                            <li>Cholestyramine (for high cholesterol)</li>
                            <li>Certain anticonvulsants (for epilepsy)</li>
                        </ul>
                    </div>
                    <div class="tab-panel" id="reviews">
                        <div class="reviews-summary">
                            <div class="overall-rating">
                                <h3>Customer Reviews</h3>
                                <div class="rating-number">4.5</div>
                                <div class="rating-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <p>Based on 128 reviews</p>
                            </div>
                            <div class="rating-breakdown">
                                <div class="rating-bar">
                                    <span class="rating-level">5 stars</span>
                                    <div class="progress-bar">
                                        <div class="progress" style="width: 75%"></div>
                                    </div>
                                    <span class="rating-percent">75%</span>
                                </div>
                                <div class="rating-bar">
                                    <span class="rating-level">4 stars</span>
                                    <div class="progress-bar">
                                        <div class="progress" style="width: 15%"></div>
                                    </div>
                                    <span class="rating-percent">15%</span>
                                </div>
                                <div class="rating-bar">
                                    <span class="rating-level">3 stars</span>
                                    <div class="progress-bar">
                                        <div class="progress" style="width: 7%"></div>
                                    </div>
                                    <span class="rating-percent">7%</span>
                                </div>
                                <div class="rating-bar">
                                    <span class="rating-level">2 stars</span>
                                    <div class="progress-bar">
                                        <div class="progress" style="width: 2%"></div>
                                    </div>
                                    <span class="rating-percent">2%</span>
                                </div>
                                <div class="rating-bar">
                                    <span class="rating-level">1 star</span>
                                    <div class="progress-bar">
                                        <div class="progress" style="width: 1%"></div>
                                    </div>
                                    <span class="rating-percent">1%</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="review-form">
                            <h3>Write a Review</h3>
                            <form>
                                <div class="form-group">
                                    <label>Your Rating</label>
                                    <div class="rating-select">
                                        <i class="far fa-star" data-rating="1"></i>
                                        <i class="far fa-star" data-rating="2"></i>
                                        <i class="far fa-star" data-rating="3"></i>
                                        <i class="far fa-star" data-rating="4"></i>
                                        <i class="far fa-star" data-rating="5"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="review-title">Review Title</label>
                                    <input type="text" id="review-title" placeholder="Give your review a title">
                                </div>
                                <div class="form-group">
                                    <label for="review-content">Your Review</label>
                                    <textarea id="review-content" rows="5" placeholder="Write your review here"></textarea>
                                </div>
                                <button type="submit" class="btn primary-btn">Submit Review</button>
                            </form>
                        </div>
                        
                        <div class="reviews-list">
                            <h3>Customer Reviews</h3>
                            <div class="review-item">
                                <div class="review-header">
                                    <div class="reviewer-info">
                                        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Sarah J." class="reviewer-avatar">
                                        <div>
                                            <h4>Sarah J.</h4>
                                            <span class="review-date">October 15, 2023</span>
                                        </div>
                                    </div>
                                    <div class="review-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <h5 class="review-title">Works quickly and effectively</h5>
                                <p class="review-content">I always keep Paracetamol in my medicine cabinet. It works quickly for headaches and doesn't upset my stomach like some other pain relievers. The price is reasonable too.</p>
                                <div class="review-helpful">
                                    <span>Was this review helpful?</span>
                                    <button class="btn-sm">Yes</button>
                                    <button class="btn-sm">No</button>
                                </div>
                            </div>
                            
                            <div class="review-item">
                                <div class="review-header">
                                    <div class="reviewer-info">
                                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael T." class="reviewer-avatar">
                                        <div>
                                            <h4>Michael T.</h4>
                                            <span class="review-date">October 10, 2023</span>
                                        </div>
                                    </div>
                                    <div class="review-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <h5 class="review-title">Good for fever reduction</h5>
                                <p class="review-content">Used this when I had a fever last week. It brought my temperature down within an hour. The tablets are easy to swallow and don't have a bad taste. Would recommend.</p>
                                <div class="review-helpful">
                                    <span>Was this review helpful?</span>
                                    <button class="btn-sm">Yes</button>
                                    <button class="btn-sm">No</button>
                                </div>
                            </div>
                            
                            <div class="review-item">
                                <div class="review-header">
                                    <div class="reviewer-info">
                                        <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Emma L." class="reviewer-avatar">
                                        <div>
                                            <h4>Emma L.</h4>
                                            <span class="review-date">October 5, 2023</span>
                                        </div>
                                    </div>
                                    <div class="review-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <h5 class="review-title">Works but takes time</h5>
                                <p class="review-content">It does work for my headaches but takes about 45 minutes to kick in. I've used other brands that work faster. The price is good though.</p>
                                <div class="review-helpful">
                                    <span>Was this review helpful?</span>
                                    <button class="btn-sm">Yes</button>
                                    <button class="btn-sm">No</button>
                                </div>
                            </div>
                            
                            <div class="load-more">
                                <button class="btn secondary-btn">Load More Reviews</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="related-products">
                <h2>Related Products</h2>
                <div class="products-grid">
                    <div class="product-card fade-in">
                        <div class="product-badge">New</div>
                        <div class="product-image">
                            <img src="https://img.freepik.com/free-vector/realistic-white-pill-bottle-with-plastic-lid_1284-33655.jpg" alt="Ibuprofen 400mg">
                            <div class="product-actions">
                                <button class="action-btn quick-view-btn" data-id="2">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="action-btn wishlist-btn" data-id="2">
                                    <i class="far fa-heart"></i>
                                </button>
                                <button class="action-btn compare-btn" data-id="2">
                                    <i class="fas fa-sync-alt"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Ibuprofen 400mg</a></h3>
                            <div class="product-category">Pain Relief</div>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(98)</span>
                            </div>
                            <div class="product-price">
                                <span class="price">$6.99</span>
                                <span class="old-price">$8.99</span>
                            </div>
                            <button class="btn primary-btn add-to-cart-btn" data-id="2" data-name="Ibuprofen 400mg" data-price="6.99">
                                <i class="fas fa-cart-plus"></i> Add to Cart
                            </button>
                        </div>
                    </div>
                    
                    <div class="product-card fade-in">
                        <div class="product-badge">Bestseller</div>
                        <div class="product-image">
                            <img src="https://img.freepik.com/free-vector/realistic-pills-blisters-transparent-set_1284-33638.jpg" alt="Aspirin 325mg">
                            <div class="product-actions">
                                <button class="action-btn quick-view-btn" data-id="3">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="action-btn wishlist-btn" data-id="3">
                                    <i class="far fa-heart"></i>
                                </button>
                                <button class="action-btn compare-btn" data-id="3">
                                    <i class="fas fa-sync-alt"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Aspirin 325mg</a></h3>
                            <div class="product-category">Pain Relief</div>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(112)</span>
                            </div>
                            <div class="product-price">
                                <span class="price">$4.99</span>
                                <span class="old-price">$6.49</span>
                            </div>
                            <button class="btn primary-btn add-to-cart-btn" data-id="3" data-name="Aspirin 325mg" data-price="4.99">
                                <i class="fas fa-cart-plus"></i> Add to Cart
                            </button>
                        </div>
                    </div>
                    
                    <div class="product-card fade-in">
                        <div class="product-image">
                            <img src="https://img.freepik.com/free-vector/realistic-pills-composition-with-images-pills-tablets-capsules-different-shape-color_1284-33635.jpg" alt="Naproxen 250mg">
                            <div class="product-actions">
                                <button class="action-btn quick-view-btn" data-id="4">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="action-btn wishlist-btn" data-id="4">
                                    <i class="far fa-heart"></i>
                                </button>
                                <button class="action-btn compare-btn" data-id="4">
                                    <i class="fas fa-sync-alt"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Naproxen 250mg</a></h3>
                            <div class="product-category">Pain Relief</div>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(87)</span>
                            </div>
                            <div class="product-price">
                                <span class="price">$7.49</span>
                            </div>
                            <button class="btn primary-btn add-to-cart-btn" data-id="4" data-name="Naproxen 250mg" data-price="7.49">
                                <i class="fas fa-cart-plus"></i> Add to Cart
                            </button>
                        </div>
                    </div>
                    
                    <div class="product-card fade-in">
                        <div class="product-badge">Sale</div>
                        <div class="product-image">
                            <img src="https://img.freepik.com/free-vector/realistic-white-pill-bottle-with-plastic-lid_1284-33655.jpg" alt="Acetaminophen 650mg">
                            <div class="product-actions">
                                <button class="action-btn quick-view-btn" data-id="5">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="action-btn wishlist-btn" data-id="5">
                                    <i class="far fa-heart"></i>
                                </button>
                                <button class="action-btn compare-btn" data-id="5">
                                    <i class="fas fa-sync-alt"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Acetaminophen 650mg</a></h3>
                            <div class="product-category">Pain Relief</div>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>(64)</span>
                            </div>
                            <div class="product-price">
                                <span class="price">$6.29</span>
                                <span class="old-price">$8.99</span>
                            </div>
                            <button class="btn primary-btn add-to-cart-btn" data-id="5" data-name="Acetaminophen 650mg" data-price="6.29">
                                <i class="fas fa-cart-plus"></i> Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <div class="footer-logo">
                        <h2><i class="fas fa-clinic-medical"></i> MediShop</h2>
                    </div>
                    <p>Your trusted online pharmacy for all your healthcare needs. We provide genuine medicines at competitive prices with fast delivery.</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index.html#featured">Products</a></li>
                        <li><a href="index.html#categories">Categories</a></li>
                        <li><a href="index.html#about">About Us</a></li>
                        <li><a href="index.html#contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Categories</h3>
                    <ul>
                        <li><a href="#">Pain Relief</a></li>
                        <li><a href="#">Antibiotics</a></li>
                        <li><a href="#">Cardiac Care</a></li>
                        <li><a href="#">Respiratory</a></li>
                        <li><a href="#">Vitamins & Supplements</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Customer Service</h3>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Order Tracking</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 MediShop. All Rights Reserved.</p>
                <div class="payment-methods">
                    <i class="fab fa-cc-visa"></i>
                    <i class="fab fa-cc-mastercard"></i>
                    <i class="fab fa-cc-amex"></i>
                    <i class="fab fa-cc-paypal"></i>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>
    <script src="js/product.js"></script>
</body>
</html>

