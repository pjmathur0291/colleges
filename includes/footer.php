<!-- Footer -->
<footer class="bg-dark text-light py-5 mt-5 footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <h5 class="mb-3">
                    <i class="fas fa-graduation-cap me-2"></i>Colleges Portal
                </h5>
                <p class="text-muted">
                    Your comprehensive guide to finding the perfect college or university. 
                    Discover programs, compare institutions, and make informed decisions about your education.
                </p>
                <div class="d-flex gap-3">
                    <a href="#" class="text-muted"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-muted"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-muted"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="text-muted"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
            <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="mb-3">Quick Links</h6>
                <ul class="list-unstyled">
                    <li><a href="index.php" class="text-muted text-decoration-none">Home</a></li>
                    <li><a href="pages/search.php" class="text-muted text-decoration-none">Search Colleges</a></li>
                    <li><a href="pages/programs.php" class="text-muted text-decoration-none">Programs</a></li>
                    <li><a href="pages/compare.php" class="text-muted text-decoration-none">Compare</a></li>
                </ul>
            </div>
            
            <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="mb-3">Resources</h6>
                <ul class="list-unstyled">
                    <li><a href="pages/guides.php" class="text-muted text-decoration-none">College Guides</a></li>
                    <li><a href="pages/faq.php" class="text-muted text-decoration-none">FAQ</a></li>
                    <li><a href="pages/contact.php" class="text-muted text-decoration-none">Contact Us</a></li>
                    <li><a href="pages/about.php" class="text-muted text-decoration-none">About</a></li>
                </ul>
            </div>
            
            <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="mb-3">Admin</h6>
                <ul class="list-unstyled">
                    <li><a href="admin/index.php" class="text-muted text-decoration-none">Dashboard</a></li>
                    <li><a href="admin/schools.php" class="text-muted text-decoration-none">Manage Schools</a></li>
                    <li><a href="admin/users.php" class="text-muted text-decoration-none">Manage Users</a></li>
                    <li><a href="admin/reviews.php" class="text-muted text-decoration-none">Reviews</a></li>
                </ul>
            </div>
            
            <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="mb-3">Support</h6>
                <ul class="list-unstyled">
                    <li><a href="pages/help.php" class="text-muted text-decoration-none">Help Center</a></li>
                    <li><a href="pages/privacy.php" class="text-muted text-decoration-none">Privacy Policy</a></li>
                    <li><a href="pages/terms.php" class="text-muted text-decoration-none">Terms of Service</a></li>
                    <li><a href="pages/feedback.php" class="text-muted text-decoration-none">Feedback</a></li>
                </ul>
            </div>
        </div>
        
        <hr class="my-4">
        
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="mb-0 text-muted">
                    &copy; 2024 Colleges Portal. All rights reserved.
                </p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-0 text-muted">
                    Made with <i class="fas fa-heart text-danger"></i> for students
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JavaScript -->
<script>
// Add smooth scrolling to all links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Add navbar background on scroll
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.style.background = 'rgba(255, 255, 255, 0.98) !important';
    } else {
        navbar.style.background = 'rgba(255, 255, 255, 0.95) !important';
    }
});

// Initialize tooltips
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
});

// Add loading animation to search form
document.querySelector('form[action="pages/search.php"]').addEventListener('submit', function() {
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Searching...';
    submitBtn.disabled = true;
    
    // Re-enable after 3 seconds if page doesn't redirect
    setTimeout(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    }, 3000);
});
</script>
</body>
</html> 