<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schools Portal - Find the Perfect School for Your Child</title>
    <meta name="description" content="Discover top schools across India. Compare schools, read reviews, and find the perfect educational institution for your child's future.">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Edustoke-Style Mega Menu Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark main-mega-nav">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">
                <i class="fas fa-school me-2"></i>Schools Portal
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#megaNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="megaNavbar">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <!-- Schools in City Mega Menu -->
                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="schoolsCityDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Schools in City
                        </a>
                        <div class="dropdown-menu mega-menu-card" aria-labelledby="schoolsCityDropdown">
                            <div class="row g-0">
                                <div class="col-md-4 p-4">
                                    <div class="mega-section">
                                        <div class="mega-title">Popular Cities</div>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Delhi</a></li>
                                            <li><a href="#">Mumbai</a></li>
                                            <li><a href="#">Bangalore</a></li>
                                            <li><a href="#">Chennai</a></li>
                                            <li><a href="#">Hyderabad</a></li>
                                            <li><a href="#">Kolkata</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 p-4">
                                    <div class="mega-section">
                                        <div class="mega-title">Top Boards</div>
                                        <ul class="list-unstyled">
                                            <li><a href="#">CBSE Schools</a></li>
                                            <li><a href="#">ICSE Schools</a></li>
                                            <li><a href="#">IB Schools</a></li>
                                            <li><a href="#">IGCSE Schools</a></li>
                                            <li><a href="#">State Board Schools</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 p-4">
                                    <div class="mega-section">
                                        <div class="mega-title">School Types</div>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Day Schools</a></li>
                                            <li><a href="#">Play Schools</a></li>
                                            <li><a href="#">Boarding Schools</a></li>
                                            <li><a href="#">PU & Junior Colleges</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Boarding Schools Mega Menu -->
                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="boardingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Boarding Schools
                        </a>
                        <div class="dropdown-menu mega-menu-card" aria-labelledby="boardingDropdown">
                            <div class="row g-0">
                                <div class="col-md-3 p-4">
                                    <div class="mega-section">
                                        <div class="mega-title">Boarding Schools in India</div>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Best Boarding Schools in India</a></li>
                                            <li><a href="#">Boarding Schools in North India</a></li>
                                            <li><a href="#">Boarding Schools in South India</a></li>
                                            <li><a href="#">Boarding Schools in Central India</a></li>
                                            <li><a href="#">Boarding Schools in East India</a></li>
                                            <li><a href="#">Boarding Schools in West India</a></li>
                                            <li><a href="#">Best International Boarding Schools</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 p-4">
                                    <div class="mega-section">
                                        <div class="mega-title">Boarding Schools in Cities</div>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Boarding Schools in Bengaluru</a></li>
                                            <li><a href="#">Boarding Schools in Shimla</a></li>
                                            <li><a href="#">Boarding Schools in Nainital</a></li>
                                            <li><a href="#">Boarding Schools in Panchgani</a></li>
                                            <li><a href="#">Boarding Schools in Dehradun</a></li>
                                            <li><a href="#">Boarding Schools in Ooty-Nilgiris</a></li>
                                            <li><a href="#">Boarding Schools in Darjeeling</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 p-4">
                                    <div class="mega-section">
                                        <div class="mega-title">Boarding Schools in States</div>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Boarding Schools in Tamil Nadu</a></li>
                                            <li><a href="#">Boarding Schools in Uttarakhand</a></li>
                                            <li><a href="#">Boarding Schools in Uttar Pradesh</a></li>
                                            <li><a href="#">Boarding Schools in Haryana</a></li>
                                            <li><a href="#">Boarding Schools in Gujarat</a></li>
                                            <li><a href="#">Boarding Schools in Maharashtra</a></li>
                                            <li><a href="#">Boarding Schools in Karnataka</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 p-4">
                                    <div class="mega-section">
                                        <div class="mega-title">Boarding Schools by Preference</div>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Best Girls Boarding Schools in India</a></li>
                                            <li><a href="#">Best Boys Boarding Schools in India</a></li>
                                            <li><a href="#">Best Co Ed Boarding Schools in India</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Junior Colleges Mega Menu -->
                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="juniorDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Junior Colleges
                        </a>
                        <div class="dropdown-menu mega-menu-card" aria-labelledby="juniorDropdown">
                            <div class="row g-0">
                                <div class="col-md-6 p-4">
                                    <div class="mega-section">
                                        <div class="mega-title">Streams</div>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Science</a></li>
                                            <li><a href="#">Commerce</a></li>
                                            <li><a href="#">Arts/Humanities</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 p-4">
                                    <div class="mega-section">
                                        <div class="mega-title">Top Cities</div>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Mumbai</a></li>
                                            <li><a href="#">Pune</a></li>
                                            <li><a href="#">Bangalore</a></li>
                                            <li><a href="#">Hyderabad</a></li>
                                            <li><a href="#">Chennai</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Register School -->
                    <li class="nav-item">
                        <a class="nav-link" href="pages/register-school.php">Register School</a>
                    </li>
                    <!-- Blog -->
                    <li class="nav-item">
                        <a class="nav-link" href="pages/blog.php">Blog</a>
                    </li>
                    <!-- More Mega Menu -->
                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </a>
                        <div class="dropdown-menu mega-menu-card" aria-labelledby="moreDropdown">
                            <div class="row g-0">
                                <div class="col-md-4 p-4">
                                    <div class="mega-section">
                                        <div class="mega-title">Resources</div>
                                        <ul class="list-unstyled">
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Contact</a></li>
                                            <li><a href="#">FAQ</a></li>
                                            <li><a href="#">Parenting Guides</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 p-4">
                                    <div class="mega-section">
                                        <div class="mega-title">Services</div>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Compare Schools</a></li>
                                            <li><a href="#">Parent Counseling</a></li>
                                            <li><a href="#">Online Admissions</a></li>
                                            <li><a href="#">School Reviews</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 p-4">
                                    <div class="mega-section">
                                        <div class="mega-title">Quick Links</div>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Admin Login</a></li>
                                            <li><a href="#">User Login</a></li>
                                            <li><a href="#">Register</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Mega Menu Navigation -->

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        
        <div class="college-images">
            <div class="college-image"></div>
            <div class="college-image"></div>
            <div class="college-image"></div>
        </div>
        
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-title">Find the Perfect School for Your Child's Future</h1>
                        <p class="hero-subtitle">Discover top-rated schools across India with comprehensive information, parent reviews, and expert guidance to make the best educational choice.</p>
                        
                        <div class="row mb-4">
                            <div class="col-4">
                                <div class="stats-card">
                                    <div class="stats-number">25,000+</div>
                                    <div class="stats-label">Schools</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="stats-card">
                                    <div class="stats-number">50+</div>
                                    <div class="stats-label">Cities</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="stats-card">
                                    <div class="stats-number">100K+</div>
                                    <div class="stats-label">Parents</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="search-box">
                        <h3 class="text-center mb-4 text-dark">Find Your Perfect School</h3>
                        
                        <form action="pages/search.php" method="GET">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <select name="city" class="form-select search-input" required>
                                        <option value="">Select City</option>
                                        <option value="delhi">Delhi</option>
                                        <option value="mumbai">Mumbai</option>
                                        <option value="bangalore">Bangalore</option>
                                        <option value="chennai">Chennai</option>
                                        <option value="kolkata">Kolkata</option>
                                        <option value="hyderabad">Hyderabad</option>
                                        <option value="pune">Pune</option>
                                        <option value="ahmedabad">Ahmedabad</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-6">
                                    <select name="type" class="form-select search-input" required>
                                        <option value="">School Type</option>
                                        <option value="day">Day Schools</option>
                                        <option value="play">Play Schools</option>
                                        <option value="boarding">Boarding Schools</option>
                                        <option value="pu">PU & Junior Colleges</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-6">
                                    <select name="board" class="form-select search-input">
                                        <option value="">Education Board</option>
                                        <option value="cbse">CBSE</option>
                                        <option value="icse">ICSE</option>
                                        <option value="ib">IB</option>
                                        <option value="igcse">IGCSE</option>
                                        <option value="state">State Board</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-6">
                                    <select name="budget" class="form-select search-input">
                                        <option value="">Fee Range</option>
                                        <option value="low">Under ₹50,000/year</option>
                                        <option value="medium">₹50,000 - ₹2,00,000/year</option>
                                        <option value="high">Above ₹2,00,000/year</option>
                                    </select>
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" class="btn search-btn w-100">
                                        <i class="fas fa-search me-2"></i>Search Schools
                                    </button>
                                </div>
                            </div>
                        </form>
                        
                        <div class="search-suggestions">
                            <small class="text-muted">Popular searches:</small><br>
                            <span class="suggestion-tag">CBSE Schools in Delhi</span>
                            <span class="suggestion-tag">Boarding Schools</span>
                            <span class="suggestion-tag">International Schools</span>
                            <span class="suggestion-tag">Play Schools</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Actions Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card quick-action-card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-search fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Search Schools</h5>
                            <p class="card-text">Find schools by location, type, board, and more criteria</p>
                            <a href="pages/search.php" class="btn btn-outline-primary">Start Search</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card quick-action-card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-balance-scale fa-3x text-success mb-3"></i>
                            <h5 class="card-title">Compare Schools</h5>
                            <p class="card-text">Side-by-side comparison of schools to make informed decisions</p>
                            <a href="pages/compare.php" class="btn btn-outline-success">Compare Now</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card quick-action-card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-user-graduate fa-3x text-warning mb-3"></i>
                            <h5 class="card-title">Expert Counseling</h5>
                            <p class="card-text">Get personalized guidance from education experts</p>
                            <a href="pages/counseling.php" class="btn btn-outline-warning">Book Session</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card quick-action-card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-file-alt fa-3x text-info mb-3"></i>
                            <h5 class="card-title">Online Admissions</h5>
                            <p class="card-text">Apply to schools online with step-by-step guidance</p>
                            <a href="pages/admissions.php" class="btn btn-outline-info">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function setSearch(query) {
            document.querySelector('input[name="q"]').value = query;
        }
    </script> 