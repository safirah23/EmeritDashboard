<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements | E-MERIT</title>

    <<!-- BOOTSTRAP & ICONS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
 
    <!-- MAIN STYLESHEET (includes all dark mode rules) -->
    <link rel="stylesheet" href="css/style.css">
    

</head>
<body>

<div id="sidebarOverlay" class="sidebar-overlay"></div>

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
            <li class="nav-item"><a class="nav-link" href="dashboard.php"><i class="bi bi-grid-fill"></i><span>Dashboard</span></a></li>
            <li class="nav-item"><a class="nav-link" href="studentprofile.php"><i class="bi bi-person-fill"></i><span>Student Profile</span></a></li>
            <li class="nav-item"><a class="nav-link" href="myactivity.php"><i class="bi bi-calendar-event-fill"></i><span>My Activity</span></a></li>
            <li class="nav-item"><a class="nav-link active" href="achievements.php"><i class="bi bi-trophy-fill"></i><span>Achievements</span></a></li>
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
        <button id="logoutSidebarBtn" class="btn btn-outline-secondary btn-sm mt-3 w-100"><i class="bi bi-box-arrow-right me-2"></i>Logout</button>
    </div>
</aside>

<main class="main-content" id="mainContent">
    <!-- TOPBAR -->
    <div class="topbar">
        <div class="d-flex align-items-center gap-3">
            <button id="toggleSidebar" class="topbar-menu-btn">
                <i class="bi bi-list"></i>
            </button>
            <div>
                <h4 class="fw-bold mb-1">Achievements</h4>
                <small class="text-muted">Badges & awards earned from college activities</small>
            </div>
        </div>

        <div class="d-flex align-items-center gap-3">
            <div class="search-box">
                <input type="text" class="form-control" id="topbarSearch" placeholder="Search achievements...">
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

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
        <div>
            <h2 class="fw-bold">My Achievements</h2>
            <p class="text-muted">Badges & awards earned</p>
        </div>
    </div>

    <!-- STAT CARDS -->
    <div class="row g-4 mb-4">
        <div class="col-lg-6 col-md-6">
            <div class="card dashboard-card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">Earned Achievements</p>
                            <h2 class="fw-bold" id="earnedCount">0</h2>
                        </div>
                        <div class="card-icon">
                            <i class="bi bi-star-fill" style="color: #ffc107;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card dashboard-card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">Total Achievements</p>
                            <h2 class="fw-bold">12</h2>
                        </div>
                        <div class="card-icon">
                            <i class="bi bi-star-fill" style="color: #ffc107;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ACHIEVEMENTS GRID  -->
    <div class="row g-4" id="achievementsGrid"></div>

    <!-- FOOTER  -->
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
// ACHIEVEMENTS DATA
const achievements = [
    { id: 1, name: "Challenge Champion", activity: "CHALLENGE DAY", achievement: "Tempat Ketiga - Kayak Berpasangan", category: "sukan", icon: "bi-trophy-fill" },
    { id: 2, name: "Art Inspiration", activity: "WALK WITH ART", achievement: "Penyertaan & Inspirasi Terbaik", category: "sukan", icon: "bi-trophy-fill" },
    { id: 3, name: "Aerodance Icon", activity: "JASMINE AERODANCE NIGHT", achievement: "Persembahan Berkumpulan Terbaik", category: "sukan", icon: "bi-trophy-fill" },
    { id: 4, name: "Ladies Fit Warrior", activity: "LADIES FIT NIGHT", achievement: "Peserta Teraktif Sesi Senam", category: "sukan", icon: "bi-trophy-fill" },
    { id: 5, name: "Eco Glow Champion", activity: "ECO GLOW AWARDS", achievement: "Tempat Pertama - Rumah Terindah & Tercantik", category: "program", icon: "bi-building-fill" },
    { id: 6, name: "Lucky Winner", activity: "FESKO JASMINE 2025", achievement: "Cabutan Bertuah - Menang Hadiah", category: "program", icon: "bi-building-fill" },
    { id: 7, name: "Game Master", activity: "GAME ON! CAMPUS EDITION", achievement: "Berjaya Menjawab Kesemua Kuiz", category: "program", icon: "bi-building-fill" },
    { id: 8, name: "Fire Safety Hero", activity: "FLAMES TO SAFETY", achievement: "Lengkap Latihan Kebakaran", category: "program", icon: "bi-building-fill" },
    { id: 9, name: "Gotong-Royong Hero", activity: "GOTONG-ROYONG PERDANA", achievement: "Penyertaan & Sumbangan Aktif", category: "program", icon: "bi-building-fill" },
    { id: 10, name: "Taqwa Seeker", activity: "TAFAQQUH FIDDIN", achievement: "Penyertaan & Kuiz Terbaik", category: "agama", icon: "bi-book-fill" },
    { id: 11, name: "Tajwid Expert", activity: "KELAS TAJWID", achievement: "Tamat Kesemua Sesi & Lulus Ujian", category: "agama", icon: "bi-book-fill" },
    { id: 12, name: "Wellness Champion", activity: "WEBINAR KESIHATAN MENTAL", achievement: "Peserta Aktif & Sijil Penyertaan", category: "webinar", icon: "bi-laptop-fill" }
];

document.getElementById('earnedCount').innerText = achievements.length;


function renderAchievements(filterText = '') {
    const grid = document.getElementById('achievementsGrid');
    grid.innerHTML = '';
    const lowerFilter = filterText.toLowerCase();
    const filtered = achievements.filter(ach => 
        ach.name.toLowerCase().includes(lowerFilter) || 
        ach.activity.toLowerCase().includes(lowerFilter) ||
        ach.achievement.toLowerCase().includes(lowerFilter)
    );
    
    // ICON COLOR 
    const categoryColors = {
        sukan: '#22c55e',
        program: '#ff9b54',
        agama: '#f59e0b',
        webinar: '#ff6b4a'
    };
    
    filtered.forEach(ach => {
        const col = document.createElement('div');
        col.className = 'col-lg-4 col-md-6';
        const iconColor = categoryColors[ach.category] || '#8b5cf6';
        col.innerHTML = `
            <div class="card dashboard-card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="achievement-icon" style="background: ${iconColor}15; width: 48px; height: 48px; border-radius: 14px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi ${ach.icon}" style="font-size: 26px; color: ${iconColor};"></i>
                        </div>
                        <span class="badge bg-success rounded-pill"><i class="bi bi-check-circle-fill me-1" style="font-size: 10px;"></i> Earned</span>
                    </div>
                    <h5 class="fw-bold mb-1">${ach.name}</h5>
                    <div class="text-muted small mb-2">${ach.activity}</div>
                    <p class="card-text text-secondary mt-2">${ach.achievement}</p>
                </div>
            </div>
        `;
        grid.appendChild(col);
    });
}


renderAchievements();

// FILTER FUNCTION
const topbarSearch = document.getElementById('topbarSearch');
if (topbarSearch) {
    topbarSearch.addEventListener('keyup', function() {
        renderAchievements(this.value);
    });
}

// YEAR SETTING FOR FOOTER
document.getElementById('currentYear').innerText = new Date().getFullYear();

// SIDEBAR TOOGLE
const sidebar = document.getElementById("customSidebar");
const overlay = document.getElementById("sidebarOverlay");
const toggleSidebar = document.getElementById("toggleSidebar");
const closeSidebar = document.getElementById("closeSidebar");
const mainContent = document.getElementById("mainContent");

toggleSidebar?.addEventListener("click", () => {
    if(window.innerWidth >= 992) {
        sidebar.classList.toggle("hidden");
        mainContent.style.marginLeft = sidebar.classList.contains("hidden") ? "30px" : "280px";
    } else {
        sidebar.classList.toggle("show-mobile");
        overlay.classList.toggle("show");
    }
});

closeSidebar?.addEventListener("click", () => {
    sidebar.classList.remove("show-mobile");
    overlay.classList.remove("show");
});

overlay?.addEventListener("click", () => {
    sidebar.classList.remove("show-mobile");
    overlay.classList.remove("show");
});

window.addEventListener("resize", () => {
    if(window.innerWidth >= 992) {
        sidebar.classList.remove("show-mobile");
        overlay.classList.remove("show");
        if(!sidebar.classList.contains("hidden")) mainContent.style.marginLeft = "280px";
        else mainContent.style.marginLeft = "30px";
    } else {
        mainContent.style.marginLeft = "0";
    }
});

// DARK MODE
const toggleBtn = document.getElementById("toggleDarkModeBtn");
const icon = document.getElementById("darkModeIcon");
if(localStorage.getItem("theme") === "dark"){
    document.body.classList.add("dark-mode");
    icon?.classList.replace("bi-moon-stars-fill", "bi-sun-fill");
}
toggleBtn?.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");
    const isDark = document.body.classList.contains("dark-mode");
    localStorage.setItem("theme", isDark ? "dark" : "light");
    if(icon) {
        if(isDark) icon.classList.replace("bi-moon-stars-fill", "bi-sun-fill");
        else icon.classList.replace("bi-sun-fill", "bi-moon-stars-fill");
    }
});

// LOGOUT
function handleLogout() {
    if(confirm('Are you sure you want to logout?')) {
        localStorage.removeItem('theme');
        window.location.href = 'index.php';
    }
}
document.getElementById('logoutSidebarBtn')?.addEventListener('click', handleLogout);
document.getElementById('topbarLogoutBtn')?.addEventListener('click', (e) => { e.preventDefault(); handleLogout(); });
</script>

</body>
</html>