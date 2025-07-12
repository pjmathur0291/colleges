-- Colleges Portal Database Schema
-- Create database if not exists
CREATE DATABASE IF NOT EXISTS colleges_db;
USE colleges_db;

-- Users table for admin and regular users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    role ENUM('admin', 'user', 'moderator') DEFAULT 'user',
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Categories table for organizing institutions
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- States/Provinces table
CREATE TABLE states (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    country VARCHAR(50) DEFAULT 'USA',
    abbreviation VARCHAR(10),
    is_active BOOLEAN DEFAULT TRUE
);

-- Cities table
CREATE TABLE cities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    state_id INT,
    population INT,
    is_active BOOLEAN DEFAULT TRUE,
    FOREIGN KEY (state_id) REFERENCES states(id) ON DELETE SET NULL
);

-- Institutions table (colleges, universities, schools)
CREATE TABLE institutions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    type ENUM('college', 'university', 'school', 'institute') NOT NULL,
    category_id INT,
    city_id INT,
    address TEXT,
    phone VARCHAR(20),
    email VARCHAR(100),
    website VARCHAR(255),
    description TEXT,
    founded_year INT,
    student_population INT,
    acceptance_rate DECIMAL(5,2),
    tuition_in_state DECIMAL(10,2),
    tuition_out_state DECIMAL(10,2),
    is_public BOOLEAN DEFAULT FALSE,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE SET NULL,
    FOREIGN KEY (city_id) REFERENCES cities(id) ON DELETE SET NULL
);

-- Programs/Majors table
CREATE TABLE programs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    institution_id INT NOT NULL,
    name VARCHAR(200) NOT NULL,
    degree_type ENUM('associate', 'bachelor', 'master', 'doctorate', 'certificate') NOT NULL,
    department VARCHAR(100),
    duration_months INT,
    tuition DECIMAL(10,2),
    description TEXT,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (institution_id) REFERENCES institutions(id) ON DELETE CASCADE
);

-- Reviews table for user reviews
CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    institution_id INT NOT NULL,
    user_id INT NOT NULL,
    rating INT CHECK (rating >= 1 AND rating <= 5),
    title VARCHAR(200),
    review_text TEXT,
    pros TEXT,
    cons TEXT,
    is_approved BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (institution_id) REFERENCES institutions(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Favorites table for users to save institutions
CREATE TABLE favorites (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    institution_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY unique_favorite (user_id, institution_id),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (institution_id) REFERENCES institutions(id) ON DELETE CASCADE
);

-- Search history table
CREATE TABLE search_history (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    search_query VARCHAR(255) NOT NULL,
    search_filters TEXT,
    results_count INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);

-- Insert default admin user (password: admin123)
INSERT INTO users (username, email, password_hash, first_name, last_name, role) 
VALUES ('admin', 'admin@collegesportal.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Admin', 'User', 'admin');

-- Insert sample categories
INSERT INTO categories (name, description) VALUES
('Engineering', 'Engineering and technology programs'),
('Business', 'Business administration and management'),
('Arts & Humanities', 'Liberal arts and humanities programs'),
('Sciences', 'Natural and physical sciences'),
('Medicine', 'Medical and health sciences'),
('Education', 'Teaching and education programs'),
('Computer Science', 'Computer science and IT programs'),
('Law', 'Legal studies and law programs');

-- Insert sample states
INSERT INTO states (name, abbreviation) VALUES
('California', 'CA'),
('New York', 'NY'),
('Texas', 'TX'),
('Florida', 'FL'),
('Illinois', 'IL'),
('Pennsylvania', 'PA'),
('Ohio', 'OH'),
('Georgia', 'GA'),
('Michigan', 'MI'),
('North Carolina', 'NC');

-- Insert sample cities
INSERT INTO cities (name, state_id, population) VALUES
('Los Angeles', 1, 3979576),
('New York City', 2, 8336817),
('Houston', 3, 2320268),
('Miami', 4, 454279),
('Chicago', 5, 2693976),
('Philadelphia', 6, 1603797),
('Columbus', 7, 898553),
('Atlanta', 8, 506811),
('Detroit', 9, 674841),
('Charlotte', 10, 885708);

-- Insert sample institutions
INSERT INTO institutions (name, type, category_id, city_id, address, phone, email, website, description, founded_year, student_population, acceptance_rate, tuition_in_state, tuition_out_state, is_public) VALUES
('University of California, Los Angeles', 'university', 4, 1, '405 Hilgard Ave, Los Angeles, CA 90095', '(310) 825-4321', 'admissions@ucla.edu', 'https://www.ucla.edu', 'Public research university in Los Angeles', 1919, 45000, 12.3, 13240, 43022, TRUE),
('Stanford University', 'university', 1, 1, '450 Serra Mall, Stanford, CA 94305', '(650) 723-2300', 'admission@stanford.edu', 'https://www.stanford.edu', 'Private research university in Stanford', 1885, 17000, 4.3, 56169, 56169, FALSE),
('New York University', 'university', 3, 2, '70 Washington Square S, New York, NY 10012', '(212) 998-4500', 'admissions@nyu.edu', 'https://www.nyu.edu', 'Private research university in New York City', 1831, 52000, 16.2, 56500, 56500, FALSE),
('University of Texas at Austin', 'university', 1, 3, '110 Inner Campus Dr, Austin, TX 78712', '(512) 471-3434', 'admissions@utexas.edu', 'https://www.utexas.edu', 'Public research university in Austin', 1883, 51000, 32.0, 11000, 38000, TRUE);

-- Insert sample programs
INSERT INTO programs (institution_id, name, degree_type, department, duration_months, tuition, description) VALUES
(1, 'Computer Science', 'bachelor', 'Computer Science', 48, 13240, 'Bachelor of Science in Computer Science'),
(1, 'Business Administration', 'bachelor', 'Business', 48, 13240, 'Bachelor of Business Administration'),
(2, 'Electrical Engineering', 'bachelor', 'Engineering', 48, 56169, 'Bachelor of Science in Electrical Engineering'),
(2, 'Computer Science', 'master', 'Computer Science', 24, 56169, 'Master of Science in Computer Science'),
(3, 'Film Studies', 'bachelor', 'Arts', 48, 56500, 'Bachelor of Arts in Film Studies'),
(4, 'Petroleum Engineering', 'bachelor', 'Engineering', 48, 11000, 'Bachelor of Science in Petroleum Engineering'); 