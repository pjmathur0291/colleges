<?php include 'includes/header.php'; ?>

<!-- Featured Schools Section -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Featured Schools</h2>
                <p class="text-muted">Discover top-rated schools across the country</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm featured-school-card">
                    <div class="card-body text-center">
                        <i class="fas fa-school fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Delhi Public School</h5>
                        <p class="card-text text-muted">New Delhi, India</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-success">CBSE</span>
                            <small class="text-muted">Rating: 4.8/5</small>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="pages/school-details.php?id=1" class="btn btn-outline-primary w-100">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm featured-school-card">
                    <div class="card-body text-center">
                        <i class="fas fa-school fa-3x text-warning mb-3"></i>
                        <h5 class="card-title">The Doon School</h5>
                        <p class="card-text text-muted">Dehradun, India</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-warning">Boarding</span>
                            <small class="text-muted">Rating: 4.9/5</small>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="pages/school-details.php?id=2" class="btn btn-outline-primary w-100">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm featured-school-card">
                    <div class="card-body text-center">
                        <i class="fas fa-school fa-3x text-info mb-3"></i>
                        <h5 class="card-title">St. Xavier's School</h5>
                        <p class="card-text text-muted">Mumbai, India</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-info">ICSE</span>
                            <small class="text-muted">Rating: 4.7/5</small>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="pages/school-details.php?id=3" class="btn btn-outline-primary w-100">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm featured-school-card">
                    <div class="card-body text-center">
                        <i class="fas fa-school fa-3x text-success mb-3"></i>
                        <h5 class="card-title">Modern School</h5>
                        <p class="card-text text-muted">Delhi, India</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-success">CBSE</span>
                            <small class="text-muted">Rating: 4.6/5</small>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="pages/school-details.php?id=4" class="btn btn-outline-primary w-100">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="pages/search.php" class="btn btn-primary btn-lg">
                <i class="fas fa-search me-2"></i>View All Schools
            </a>
        </div>
    </div>
</section>

<!-- Browse by Category Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Browse by Category</h2>
                <p class="text-muted">Find the perfect school type for your child's education</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h4>Day Schools</h4>
                    <p>Traditional schools where students attend during the day and return home in the evening</p>
                    <div class="category-stats">
                        <span class="stat-item">
                            <strong>15,000+</strong>
                            <small>Schools</small>
                        </span>
                        <span class="stat-item">
                            <strong>50+</strong>
                            <small>Cities</small>
                        </span>
                    </div>
                    <a href="pages/search.php?type=day" class="btn btn-outline-primary mt-3">Explore Day Schools</a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h4>Play Schools</h4>
                    <p>Early childhood education centers for children aged 2-5 years with play-based learning</p>
                    <div class="category-stats">
                        <span class="stat-item">
                            <strong>8,000+</strong>
                            <small>Schools</small>
                        </span>
                        <span class="stat-item">
                            <strong>45+</strong>
                            <small>Cities</small>
                        </span>
                    </div>
                    <a href="pages/search.php?type=play" class="btn btn-outline-primary mt-3">Explore Play Schools</a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-bed"></i>
                    </div>
                    <h4>Boarding Schools</h4>
                    <p>Residential schools where students live on campus and receive comprehensive education</p>
                    <div class="category-stats">
                        <span class="stat-item">
                            <strong>1,200+</strong>
                            <small>Schools</small>
                        </span>
                        <span class="stat-item">
                            <strong>30+</strong>
                            <small>Cities</small>
                        </span>
                    </div>
                    <a href="pages/search.php?type=boarding" class="btn btn-outline-primary mt-3">Explore Boarding Schools</a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4>PU & Junior Colleges</h4>
                    <p>Pre-university institutions offering 11th and 12th standard education with various streams</p>
                    <div class="category-stats">
                        <span class="stat-item">
                            <strong>3,000+</strong>
                            <small>Institutions</small>
                        </span>
                        <span class="stat-item">
                            <strong>25+</strong>
                            <small>Cities</small>
                        </span>
                    </div>
                    <a href="pages/search.php?type=pu" class="btn btn-outline-primary mt-3">Explore PU Colleges</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Services Section -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Additional Services</h2>
                <p class="text-muted">Comprehensive support to help you make the best educational decisions</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h5>Pan India Presence</h5>
                    <p>Access to schools across major cities in India with comprehensive information</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> All major cities covered</li>
                        <li><i class="fas fa-check"></i> 25,000+ schools listed</li>
                        <li><i class="fas fa-check"></i> Real-time updates</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h5>Compare Schools</h5>
                    <p>Side-by-side comparison of schools to help you make informed decisions</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Fee comparison</li>
                        <li><i class="fas fa-check"></i> Infrastructure details</li>
                        <li><i class="fas fa-check"></i> Parent reviews</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h5>Parent Counselling</h5>
                    <p>Professional guidance from education experts to help you choose the right school</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Free consultation</li>
                        <li><i class="fas fa-check"></i> Personalized advice</li>
                        <li><i class="fas fa-check"></i> Admission support</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h5>Online Admissions</h5>
                    <p>Streamlined admission process with step-by-step guidance and support</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Application tracking</li>
                        <li><i class="fas fa-check"></i> Document upload</li>
                        <li><i class="fas fa-check"></i> Status updates</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Boards Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Popular Education Boards</h2>
                <p class="text-muted">Explore schools by different education boards and curricula</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="card border-0 shadow-sm text-center h-100 board-card">
                    <div class="card-body">
                        <i class="fas fa-book fa-2x text-primary mb-2"></i>
                        <h6 class="card-title">CBSE</h6>
                        <small class="text-muted">12,000+ schools</small>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="card border-0 shadow-sm text-center h-100 board-card">
                    <div class="card-body">
                        <i class="fas fa-graduation-cap fa-2x text-success mb-2"></i>
                        <h6 class="card-title">ICSE</h6>
                        <small class="text-muted">2,500+ schools</small>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="card border-0 shadow-sm text-center h-100 board-card">
                    <div class="card-body">
                        <i class="fas fa-globe fa-2x text-warning mb-2"></i>
                        <h6 class="card-title">IB</h6>
                        <small class="text-muted">400+ schools</small>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="card border-0 shadow-sm text-center h-100 board-card">
                    <div class="card-body">
                        <i class="fas fa-flag fa-2x text-danger mb-2"></i>
                        <h6 class="card-title">IGCSE</h6>
                        <small class="text-muted">300+ schools</small>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="card border-0 shadow-sm text-center h-100 board-card">
                    <div class="card-body">
                        <i class="fas fa-map fa-2x text-info mb-2"></i>
                        <h6 class="card-title">State Boards</h6>
                        <small class="text-muted">8,000+ schools</small>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="card border-0 shadow-sm text-center h-100 board-card">
                    <div class="card-body">
                        <i class="fas fa-star fa-2x text-secondary mb-2"></i>
                        <h6 class="card-title">International</h6>
                        <small class="text-muted">200+ schools</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- School Types Detail Section -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Learn About Different School Types</h2>
                <p class="text-muted">Understand the differences to make the best choice for your child's education</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="institution-type-card">
                    <div class="institution-header">
                        <div class="institution-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div>
                            <h4>Day Schools</h4>
                            <span class="badge bg-primary">Most Popular</span>
                        </div>
                    </div>
                    <div class="institution-content">
                        <p>Day schools are traditional educational institutions where students attend classes during the day and return home in the evening. They provide a balanced approach to education with regular family interaction.</p>
                        
                        <div class="institution-features">
                            <h6>Key Features:</h6>
                            <ul>
                                <li>Regular day schedule (8 AM - 3 PM)</li>
                                <li>Family involvement in education</li>
                                <li>Extracurricular activities</li>
                                <li>Various board options (CBSE, ICSE, IB)</li>
                                <li>Affordable fee structure</li>
                            </ul>
                        </div>
                        
                        <div class="institution-stats">
                            <div class="stat">
                                <strong>15,000+</strong>
                                <span>Schools</span>
                            </div>
                            <div class="stat">
                                <strong>50+</strong>
                                <span>Cities</span>
                            </div>
                            <div class="stat">
                                <strong>All Boards</strong>
                                <span>Available</span>
                            </div>
                        </div>
                        
                        <a href="pages/search.php?type=day" class="btn btn-primary">Explore Day Schools</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="institution-type-card">
                    <div class="institution-header">
                        <div class="institution-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <div>
                            <h4>Play Schools</h4>
                            <span class="badge bg-success">Early Learning</span>
                        </div>
                    </div>
                    <div class="institution-content">
                        <p>Play schools focus on early childhood development through play-based learning. They prepare children aged 2-5 years for formal education with a nurturing and creative environment.</p>
                        
                        <div class="institution-features">
                            <h6>Key Features:</h6>
                            <ul>
                                <li>Play-based learning methodology</li>
                                <li>Age-appropriate activities</li>
                                <li>Social skill development</li>
                                <li>Creative expression</li>
                                <li>Safe and nurturing environment</li>
                            </ul>
                        </div>
                        
                        <div class="institution-stats">
                            <div class="stat">
                                <strong>8,000+</strong>
                                <span>Schools</span>
                            </div>
                            <div class="stat">
                                <strong>45+</strong>
                                <span>Cities</span>
                            </div>
                            <div class="stat">
                                <strong>2-5 Years</strong>
                                <span>Age Group</span>
                            </div>
                        </div>
                        
                        <a href="pages/search.php?type=play" class="btn btn-primary">Explore Play Schools</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="institution-type-card">
                    <div class="institution-header">
                        <div class="institution-icon">
                            <i class="fas fa-bed"></i>
                        </div>
                        <div>
                            <h4>Boarding Schools</h4>
                            <span class="badge bg-warning">Residential</span>
                        </div>
                    </div>
                    <div class="institution-content">
                        <p>Boarding schools provide comprehensive residential education where students live on campus. They offer 24/7 learning environment with academic excellence and character development.</p>
                        
                        <div class="institution-features">
                            <h6>Key Features:</h6>
                            <ul>
                                <li>24/7 residential facilities</li>
                                <li>Comprehensive development</li>
                                <li>Structured daily routine</li>
                                <li>Sports and activities</li>
                                <li>Character building</li>
                            </ul>
                        </div>
                        
                        <div class="institution-stats">
                            <div class="stat">
                                <strong>1,200+</strong>
                                <span>Schools</span>
                            </div>
                            <div class="stat">
                                <strong>30+</strong>
                                <span>Cities</span>
                            </div>
                            <div class="stat">
                                <strong>Premium</strong>
                                <span>Education</span>
                            </div>
                        </div>
                        
                        <a href="pages/search.php?type=boarding" class="btn btn-primary">Explore Boarding Schools</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="institution-type-card">
                    <div class="institution-header">
                        <div class="institution-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div>
                            <h4>PU & Junior Colleges</h4>
                            <span class="badge bg-info">Higher Secondary</span>
                        </div>
                    </div>
                    <div class="institution-content">
                        <p>Pre-University and Junior Colleges offer 11th and 12th standard education with various streams like Science, Commerce, and Arts. They prepare students for higher education.</p>
                        
                        <div class="institution-features">
                            <h6>Key Features:</h6>
                            <ul>
                                <li>11th and 12th standard education</li>
                                <li>Multiple stream options</li>
                                <li>University preparation</li>
                                <li>Career guidance</li>
                                <li>Entrance exam coaching</li>
                            </ul>
                        </div>
                        
                        <div class="institution-stats">
                            <div class="stat">
                                <strong>3,000+</strong>
                                <span>Institutions</span>
                            </div>
                            <div class="stat">
                                <strong>25+</strong>
                                <span>Cities</span>
                            </div>
                            <div class="stat">
                                <strong>3 Streams</strong>
                                <span>Available</span>
                            </div>
                        </div>
                        
                        <a href="pages/search.php?type=pu" class="btn btn-primary">Explore PU Colleges</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-5 cta-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-white fw-bold mb-3">Ready to Find Your Perfect School?</h2>
                <p class="text-white-50 mb-4">Join thousands of parents who have found the right school for their children through our comprehensive search platform.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="pages/search.php" class="btn btn-light btn-lg">
                        <i class="fas fa-search me-2"></i>Start Searching
                    </a>
                    <a href="pages/compare.php" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-balance-scale me-2"></i>Compare Schools
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?> 