<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile | E-MERIT</title>

    <!-- BOOTSTRAP & ICONS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- GOOGLE FONTS: Inter + Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800;900&display=swap" rel="stylesheet">
 
    <!-- CSS UTAMA – semua gaya termasuk sidebar, logo, dark mode dll -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- OVERLAY -->
<div id="sidebarOverlay" class="sidebar-overlay"></div>

<!-- SIDEBAR -->
<aside id="customSidebar" class="sidebar d-flex flex-column">
    <div class="sidebar-menu flex-grow-1">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="logo">
                <img src="image/emerit.png" alt="Logo E-MERIT" class="sidebar-logo-img">
                <span>E-MERIT</span>
            </div>
            <button id="closeSidebar" class="btn btn-sm btn-outline-danger d-lg-none">
                <i class="bi bi-x"></i>
            </button>
        </div>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="studentprofile.php">
                    <i class="bi bi-person-fill"></i>
                    <span>Student Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="myactivity.php">
                    <i class="bi bi-calendar-event-fill"></i>
                    <span>My Activity</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="achievements.php">
                    <i class="bi bi-trophy-fill"></i>
                    <span>Achievements</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidebar-profile border-top pt-3 mt-3">
        <div class="d-flex align-items-center gap-3">
            <img src="image/amira.jpg" alt="Profile" class="sidebar-profile-avatar">
            <div class="profile-info">
                <div class="fw-bold">Safirah Amira</div>
                <small class="text-muted">2025228858</small>
            </div>
        </div>
        <button id="logoutSidebarBtn" class="btn btn-outline-secondary btn-sm mt-3 w-100">
            <i class="bi bi-box-arrow-right me-2"></i>
            <span class="logout-text">Logout</span>
        </button>
    </div>
</aside>

<!-- MAIN CONTENT -->
<main class="main-content" id="mainContent">

    <!-- TOPBAR -->
    <div class="topbar">
        <div class="d-flex align-items-center gap-3">
            <button id="toggleSidebar" class="topbar-menu-btn">
                <i class="bi bi-list"></i>
            </button>
            <div>
                <h4 class="fw-bold mb-1">Student Profile</h4>
                <small class="text-muted">View and manage your personal information</small>
            </div>
        </div>

        <div class="d-flex align-items-center gap-3">
            <div class="search-box">
                <input type="text" class="form-control" id="profileSearch" placeholder="Search profile...">
            </div>
            <button class="btn btn-light rounded-circle dark-btn" id="toggleDarkModeBtn">
                <i class="bi bi-moon-stars-fill" id="darkModeIcon"></i>
            </button>
            <div class="dropdown">
                <button class="btn btn-light rounded-circle" data-bs-toggle="dropdown">
                    <i class="bi bi-bell-fill"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">No new notifications</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <img src="image/amira.jpg" alt="Profile" class="topbar-profile-img" data-bs-toggle="dropdown" aria-expanded="false">
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="studentprofile.php">Profile</a></li>
                    <li><a class="dropdown-item" href="#" id="topbarLogoutBtn">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- HEADER MY PROFILE -->
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
        <div>
            <h2 class="fw-bold">My Profile</h2>
            <p class="text-muted">View and update your personal and college information</p>
        </div>
    </div>

    <!-- PROFILE CONTENT -->
    <div>
        
        <!-- PROFILE HEADER CARD -->
        <div class="row g-4 mb-4">
            <div class="col-12">
                <div class="card dashboard-card">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-md-3 text-center">
                                <img src="image/amira.jpg" alt="Profile" class="big-profile-avatar-img">
                            </div>
                            <div class="col-md-9">
                                <div class="d-flex justify-content-between flex-wrap gap-3 align-items-center">
                                    <div>
                                        <h2 class="fw-bold mb-2">Safirah Amira Binti Abdul Hakim</h2>
                                        <p class="text-muted mb-0">SI262 - Pengurusan Sistem Maklumat</p>
                                    </div>
                                    <span class="profile-status">
                                        <i class="bi bi-circle-fill" style="font-size: 8px;"></i>
                                        Active Student
                                    </span>
                                </div>
                                <div class="profile-details-grid">
                                    <div class="profile-detail-item">
                                        <small>Student ID</small>
                                        <h6>2025228858</h6>
                                    </div>
                                    <div class="profile-detail-item">
                                        <small>Faculty</small>
                                        <h6>Fakulti Sains Maklumat</h6>
                                    </div>
                                    <div class="profile-detail-item">
                                        <small>Campus</small>
                                        <h6>UiTM Puncak Perdana</h6>
                                    </div>
                                    <div class="profile-detail-item">
                                        <small>College</small>
                                        <h6>Jasmine</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card dashboard-card h-100">
                    <div class="card-body p-4">
                        <div class="section-heading">
                            <h2>Personal Information</h2>
                            <div class="heading-line"></div>
                        </div>
                        <div class="info-list">
                            <div class="info-item">
                                <span><i class="bi bi-person-badge-fill" style="color: #ff6b4a;"></i> Student ID</span>
                                <strong>2025228858</strong>
                            </div>
                            <div class="info-item">
                                <span><i class="bi bi-envelope-fill" style="color: #ff6b4a;"></i> Email</span>
                                <strong>2025228858@student.uitm.edu.my</strong>
                            </div>
                            <div class="info-item">
                                <span><i class="bi bi-telephone-fill" style="color: #ff6b4a;"></i> Phone Number</span>
                                <strong>012-3456789</strong>
                            </div>
                            <div class="info-item">
                                <span><i class="bi bi-gender-female" style="color: #ff6b4a;"></i> Gender</span>
                                <strong>Female</strong>
                            </div>
                            <div class="info-item">
                                <span><i class="bi bi-calendar-date-fill" style="color: #ff6b4a;"></i> Date of Birth</span>
                                <strong>23 August 2004</strong>
                            </div>
                            <div class="info-item">
                                <span><i class="bi bi-geo-alt-fill" style="color: #ff6b4a;"></i> Address</span>
                                <strong>Shah Alam, Selangor</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card dashboard-card h-100">
                    <div class="card-body p-4">
                        <div class="section-heading">
                            <h2>College Information</h2>
                            <div class="heading-line"></div>
                        </div>
                        <div class="info-list">
                            <div class="info-item">
                                <span><i class="bi bi-building-fill" style="color: #ff6b4a;"></i> College</span>
                                <strong>Jasmine</strong>
                            </div>
                            <div class="info-item">
                                <span><i class="bi bi-house-door-fill" style="color: #ff6b4a;"></i> Room / Unit</span>
                                <strong>4B06C(8)</strong>
                            </div>
                            <div class="info-item">
                                <span><i class="bi bi-geo-alt-fill" style="color: #ff6b4a;"></i> Block / Level / Room</span>
                                <strong>4-4B-2-4B06C</strong>
                            </div>
                            <div class="info-item">
                                <span><i class="bi bi-grid-fill" style="color: #ff6b4a;"></i> Furniture No</span>
                                <strong>8</strong>
                            </div>
                            <div class="info-item">
                                <span><i class="bi bi-calendar-week-fill" style="color: #ff6b4a;"></i> Semester</span>
                                <strong>20262</strong>
                            </div>
                            <div class="info-item">
                                <span><i class="bi bi-clock-fill" style="color: #ff6b4a;"></i> Study Mode</span>
                                <strong>Sepenuh Masa (Full Time)</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="card dashboard-card footer-card mt-5">
        <div class="card-body d-flex flex-wrap justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <span class="text-muted small">&copy; <span id="currentYear"></span> E-MERIT — Student Excellence Portal</span>
            </div>
            <div class="text-center">
                <span class="fw-medium text-secondary small">Safirah Amira</span>
            </div>
            <ul class="nav footer-links justify-content-end list-unstyled d-flex gap-3 mb-0">
                <li class="nav-item"><a href="#" class="nav-link px-0 text-muted small"><i class="bi bi-shield-lock me-1"></i>Privacy</a></li>
            </ul>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
// SIDEBAR TOGGLE
const sidebar = document.getElementById("customSidebar");
const overlay = document.getElementById("sidebarOverlay");
const toggleSidebar = document.getElementById("toggleSidebar");
const closeSidebar = document.getElementById("closeSidebar");
const mainContent = document.getElementById("mainContent");

toggleSidebar.addEventListener("click", function() {
    if(window.innerWidth >= 992) {
        sidebar.classList.toggle("hidden");
        if(sidebar.classList.contains("hidden")) {
            mainContent.style.marginLeft = "30px";
        } else {
            mainContent.style.marginLeft = "280px";
        }
    } else {
        sidebar.classList.toggle("show-mobile");
        overlay.classList.toggle("show");
    }
});

closeSidebar.addEventListener("click", function() {
    sidebar.classList.remove("show-mobile");
    overlay.classList.remove("show");
});

overlay.addEventListener("click", function() {
    sidebar.classList.remove("show-mobile");
    overlay.classList.remove("show");
});

window.addEventListener("resize", function() {
    if(window.innerWidth >= 992) {
        sidebar.classList.remove("show-mobile");
        overlay.classList.remove("show");
        if(sidebar.classList.contains("hidden")) {
            mainContent.style.marginLeft = "30px";
        } else {
            mainContent.style.marginLeft = "280px";
        }
    } else {
        mainContent.style.marginLeft = "0";
    }
});

// DARK MODE
const toggleBtn = document.getElementById("toggleDarkModeBtn");
const icon = document.getElementById("darkModeIcon");

if(localStorage.getItem("theme") === "dark"){
    document.body.classList.add("dark-mode");
    icon.classList.replace("bi-moon-stars-fill", "bi-sun-fill");
}

toggleBtn.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");
    const isDark = document.body.classList.contains("dark-mode");
    if(isDark){
        localStorage.setItem("theme", "dark");
        icon.classList.replace("bi-moon-stars-fill", "bi-sun-fill");
    } else {
        localStorage.setItem("theme", "light");
        icon.classList.replace("bi-sun-fill", "bi-moon-stars-fill");
    }
});

// LOGOUT
function handleLogout() {
    if (confirm('Are you sure you want to logout?')) {
        localStorage.removeItem('theme');
        localStorage.removeItem('studentName');
        localStorage.removeItem('studentId');
        localStorage.removeItem('isLoggedIn');
        window.location.href = 'index.php';
    }
}

const logoutSidebarBtn = document.getElementById('logoutSidebarBtn');
if (logoutSidebarBtn) {
    logoutSidebarBtn.addEventListener('click', handleLogout);
}

const topbarLogoutBtn = document.getElementById('topbarLogoutBtn');
if (topbarLogoutBtn) {
    topbarLogoutBtn.addEventListener('click', function(e) {
        e.preventDefault();
        handleLogout();
    });
}

// SEARCH FUNCTION
const profileSearch = document.getElementById('profileSearch');
if (profileSearch) {
    profileSearch.addEventListener('keyup', function() {
        const searchTerm = this.value.toLowerCase();
        const infoItems = document.querySelectorAll('.info-item');
        infoItems.forEach(item => {
            const text = item.textContent.toLowerCase();
            if (text.includes(searchTerm)) {
                item.style.display = 'flex';
            } else {
                item.style.display = 'none';
            }
        });
    });
}

// YEAR
const yearSpan = document.getElementById('currentYear');
if (yearSpan) {
    yearSpan.textContent = new Date().getFullYear();
}

// MARGIN ON LOAD
if(window.innerWidth >= 992) {
    if(!sidebar.classList.contains("hidden")) {
        mainContent.style.marginLeft = "280px";
    } else {
        mainContent.style.marginLeft = "30px";
    }
} else {
    mainContent.style.marginLeft = "0";
}
</script>

</body>
</html>