<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Activity | E-MERIT</title>

    <!-- BOOTSTRAP & ICONS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
 
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    
</head>

<body>

<!-- OVERLAY -->
<div id="sidebarOverlay" class="sidebar-overlay"></div>

<!-- SIDEBAR  -->
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
                <a class="nav-link" href="studentprofile.php">
                    <i class="bi bi-person-fill"></i>
                    <span>Student Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="myactivity.php">
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
                <small class="text-bold">2025228858</small>
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

    <!-- TOPBAR  -->
    <div class="topbar">
        <div class="d-flex align-items-center gap-3">
            <button id="toggleSidebar" class="topbar-menu-btn">
                <i class="bi bi-list"></i>
            </button>
            <div>
                <h4 class="fw-bold mb-1">My Activity</h4>
                <small class="text-muted">View all activities you joined</small>
            </div>
        </div>

        <div class="d-flex align-items-center gap-3">
            <!-- SEARCH BOX -->
            <div class="search-box">
                <input type="text" class="form-control" id="topbarSearch" placeholder="Search activities...">
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
            <h2 class="fw-bold">Joined Activities</h2>
            <p class="text-muted">Complete list of student activities</p>
        </div>
    </div>

    <?php
   
    // ACTIVITIES DATA - 36 ACTIVITIES 
    
    
    // CATEGORY
    $categories = [
        'webinar' => ['name' => 'Webinar/Online', 'icon' => 'bi-laptop-fill', 'color' => '#ff6b4a'],
        'program' => ['name' => 'Program Kolej', 'icon' => 'bi-building-fill', 'color' => '#ff9b54'],
        'agama' => ['name' => 'Kelas Agama', 'icon' => 'bi-book-fill', 'color' => '#f59e0b'],
        'sukan' => ['name' => 'Sukan/Seni', 'icon' => 'bi-trophy-fill', 'color' => '#22c55e'],
        'lain' => ['name' => 'Lain-lain', 'icon' => 'bi-pencil-fill', 'color' => '#8b5cf6']
    ];
    
    $activities = [
        // REGISTERED 3 ACTIVITIES
        ['no' => 1, 'name' => 'Podcast: Sembang Santai Melati', 'date' => '19 May 2026', 'merit' => 0, 'status' => 'registered', 'category' => 'lain', 'ptj' => 'YouTube Official TV Melati'],
        ['no' => 2, 'name' => 'Program Gotong-Royong Perdana Kolej Jasmine 2026', 'date' => '20 Jun 2026', 'merit' => 0, 'status' => 'registered', 'category' => 'program', 'ptj' => 'Kolej Jasmine'],
        ['no' => 3, 'name' => 'Leadership Summit 2026', 'date' => '15 Jun 2026', 'merit' => 0, 'status' => 'registered', 'category' => 'lain', 'ptj' => 'Student Leadership Program'],
        
        // COMPLETED 33 ACTIVITIES
        ['no' => 4, 'name' => 'Jasmine Aerodance Night: Battle!', 'date' => '13 May 2026', 'merit' => 3, 'status' => 'completed', 'category' => 'sukan', 'ptj' => 'Dewan Serbaguna Kolej Jasmine'],
        ['no' => 5, 'name' => 'Podcast: Sembang Santai Melati (1000 Peserta)', 'date' => '12 May 2026', 'merit' => 3, 'status' => 'completed', 'category' => 'lain', 'ptj' => 'YouTube Official TV Melati'],
        ['no' => 6, 'name' => 'Jasmine Chillfix Night', 'date' => '8 May 2026', 'merit' => 3, 'status' => 'completed', 'category' => 'program', 'ptj' => 'Dewan Serbaguna Kolej Jasmine'],
        ['no' => 7, 'name' => 'Ladies Fit Night', 'date' => '7 May 2026', 'merit' => 3, 'status' => 'completed', 'category' => 'sukan', 'ptj' => 'Dewan Serbaguna Kolej Jasmine'],
        ['no' => 8, 'name' => 'Ladies Fit Night Sesi 2', 'date' => '7 May 2026', 'merit' => 5, 'status' => 'completed', 'category' => 'sukan', 'ptj' => 'Dewan Serbaguna Jasmine'],
        ['no' => 9, 'name' => 'Taklimat Blok Jasmine 4 dan 5', 'date' => '6 May 2026', 'merit' => 3, 'status' => 'completed', 'category' => 'program', 'ptj' => 'Dewan Serbaguna Kolej Jasmine'],
        ['no' => 10, 'name' => 'Eco Glow Awards - Sesi 4', 'date' => '11 Jan 2026', 'merit' => 3, 'status' => 'completed', 'category' => 'program', 'ptj' => 'Kolej Jasmine'],
        ['no' => 11, 'name' => 'Program Gotong-Royong Perdana Kolej Jasmine 2026', 'date' => '10 Jan 2026', 'merit' => 3, 'status' => 'completed', 'category' => 'program', 'ptj' => 'Kolej Jasmine'],
        ['no' => 12, 'name' => 'Podcast: Sembang Santai Melati (peserta)', 'date' => '9 Jan 2026', 'merit' => 3, 'status' => 'completed', 'category' => 'lain', 'ptj' => 'YouTube Official TV Melati'],
        ['no' => 13, 'name' => 'Kuliah Tafaqquh Fiddin', 'date' => '7 Jan 2026', 'merit' => 3, 'status' => 'completed', 'category' => 'agama', 'ptj' => 'Surau Ar-Razzaq'],
        ['no' => 14, 'name' => 'Jasmine Aerodance Night - Sesi 2', 'date' => '17 Dec 2025', 'merit' => 3, 'status' => 'completed', 'category' => 'sukan', 'ptj' => 'Dewan Serbaguna Kolej Jasmine'],
        ['no' => 15, 'name' => 'Walk With Art: Steps of Inspiration', 'date' => '15 Dec 2025', 'merit' => 5, 'status' => 'completed', 'category' => 'sukan', 'ptj' => 'Dewan Seminar FSKM'],
        ['no' => 16, 'name' => 'Game On! Campus Edition - Sesi 2', 'date' => '14 Dec 2025', 'merit' => 3, 'status' => 'completed', 'category' => 'program', 'ptj' => 'Kolej Jasmine'],
        ['no' => 17, 'name' => 'Challenge Day', 'date' => '13 Dec 2025', 'merit' => 3, 'status' => 'completed', 'category' => 'sukan', 'ptj' => 'UiTM Kampus Puncak Alam'],
        ['no' => 18, 'name' => 'Bicara Siswa Sejahtera', 'date' => '10 Dec 2025', 'merit' => 3, 'status' => 'completed', 'category' => 'program', 'ptj' => 'Dewan Serbaguna Kolej Jasmine'],
        ['no' => 19, 'name' => 'One Hour Infosmart with Library', 'date' => '8 Dec 2025', 'merit' => 5, 'status' => 'completed', 'category' => 'webinar', 'ptj' => 'Google Meet'],
        ['no' => 20, 'name' => 'Podcast: Sembang Santai Melati (peserta)', 'date' => '29 Dec 2025', 'merit' => 3, 'status' => 'completed', 'category' => 'lain', 'ptj' => 'YouTube Official TV Melati'],
        ['no' => 21, 'name' => 'Flames to Safety', 'date' => '19 Nov 2025', 'merit' => 3, 'status' => 'completed', 'category' => 'program', 'ptj' => 'Kolej Jasmine'],
        ['no' => 22, 'name' => 'Podcast: Sembang Santai Melati (peserta)', 'date' => '20 Nov 2025', 'merit' => 3, 'status' => 'completed', 'category' => 'lain', 'ptj' => 'YouTube Official TV Melati'],
        ['no' => 23, 'name' => 'FESKO Jasmine 2025', 'date' => '2 Nov 2025', 'merit' => 3, 'status' => 'completed', 'category' => 'program', 'ptj' => 'Kolej Jasmine'],
        ['no' => 24, 'name' => 'Program Kesejahteraan Remaja Bebas HIV', 'date' => '6 Nov 2025', 'merit' => 5, 'status' => 'completed', 'category' => 'webinar', 'ptj' => 'Perpustakaan Tun Abdul Razak'],
        ['no' => 25, 'name' => 'Webinar: Healthy vs Toxic Relationship', 'date' => '27 Oct 2025', 'merit' => 5, 'status' => 'completed', 'category' => 'webinar', 'ptj' => 'Atas Talian'],
        ['no' => 26, 'name' => 'Program Sambutan Pelajar Baru PMHPP', 'date' => '10 Oct 2025', 'merit' => 3, 'status' => 'completed', 'category' => 'program', 'ptj' => 'Dewan Serbaguna DSG'],
        ['no' => 27, 'name' => 'Webinar Kaunseling Isu Kesihatan Mental', 'date' => '29 Oct 2025', 'merit' => 5, 'status' => 'completed', 'category' => 'webinar', 'ptj' => 'Google Meet & FB Live'],
        ['no' => 28, 'name' => 'Program Lets Talk Minda Sihat@UiTM', 'date' => '31 Oct 2025', 'merit' => 5, 'status' => 'completed', 'category' => 'webinar', 'ptj' => 'Facebook Live'],
        ['no' => 29, 'name' => 'Kelas Tajwid 1 - Hukum Mad Lazim', 'date' => '13 Oct 2025', 'merit' => 3, 'status' => 'completed', 'category' => 'agama', 'ptj' => 'Surau Ar-Razzaq'],
        ['no' => 30, 'name' => 'Kelas Tajwid 2 - Hukum Mad Aridh', 'date' => '27 Oct 2025', 'merit' => 3, 'status' => 'completed', 'category' => 'agama', 'ptj' => 'Surau Ar-Razzaq'],
        ['no' => 31, 'name' => 'Tafaqquh Fiddin 3 - LGBT', 'date' => '8 Nov 2025', 'merit' => 3, 'status' => 'completed', 'category' => 'agama', 'ptj' => 'Surau Ar-Razzaq'],
        ['no' => 32, 'name' => 'Kuliah Oh My Tajwid', 'date' => '8 Dec 2025', 'merit' => 3, 'status' => 'completed', 'category' => 'agama', 'ptj' => 'Surau Ar-Razzaq'],
        ['no' => 33, 'name' => 'Kuliah Oh My Tajwid', 'date' => '15 Dec 2025', 'merit' => 3, 'status' => 'completed', 'category' => 'agama', 'ptj' => 'Surau Ar-Razzaq'],
        ['no' => 34, 'name' => 'Tafaqquh Fiddin 1 (Sampel)', 'date' => '7 Apr 2026', 'merit' => 3, 'status' => 'completed', 'category' => 'agama', 'ptj' => 'Dewan Serbaguna'],
        ['no' => 35, 'name' => 'Kelas Tajwid 1', 'date' => '13 Apr 2026', 'merit' => 3, 'status' => 'completed', 'category' => 'agama', 'ptj' => 'Surau Ar-Razzaq'],
        ['no' => 36, 'name' => 'Perakuan Pelajar Kolej Kediaman Jasmine', 'date' => '31 Oct 2025', 'merit' => 5, 'status' => 'completed', 'category' => 'program', 'ptj' => 'Kolej Jasmine'],
    ];
    
    // STATS
    $totalActivities = count($activities);
    $registeredCount = 0;
    $completedCount = 0;
    $totalMerit = 0;
    
    foreach ($activities as $activity) {
        if ($activity['status'] == 'registered') {
            $registeredCount++;
        } else {
            $completedCount++;
        }
        $totalMerit += $activity['merit'];
    }
    ?>
    
    <!-- STAT CARDS -->
    <div class="row g-4 mb-4">
        <div class="col-lg-4 col-md-6">
            <div class="card dashboard-card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">Total Activities</p>
                            <h2 class="fw-bold"><?php echo $totalActivities; ?></h2>
                        </div>
                        <div class="card-icon">
                            <i class="bi bi-calendar-check-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card dashboard-card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">Registered</p>
                            <h2 class="fw-bold"><?php echo $registeredCount; ?></h2>
                        </div>
                        <div class="card-icon">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card dashboard-card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">Completed</p>
                            <h2 class="fw-bold"><?php echo $completedCount; ?></h2>
                        </div>
                        <div class="card-icon">
                            <i class="bi bi-check-circle-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FILTER SECTION -->
    <div class="card dashboard-card mb-4">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="filterSearch" placeholder="Search activity name...">
                </div>
                <div class="col-lg-3">
                    <select class="form-select" id="filterStatus">
                        <option value="all">All Status</option>
                        <option value="registered">Registered</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>
                <div class="col-lg-3">
                    <select class="form-select" id="filterCategory">
                        <option value="all">All Categories</option>
                        <option value="webinar">Webinar/Online</option>
                        <option value="program">Program Kolej</option>
                        <option value="agama">Kelas Agama</option>
                        <option value="sukan">Sukan/Seni</option>
                        <option value="lain">Lain-lain</option>
                    </select>
                </div>
                <div class="col-lg-2">
                    <button class="btn btn-primary w-100" id="filterBtn">
                        <i class="bi bi-funnel-fill me-2"></i>
                        Filter
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- ACTIVITY TABLE -->
    <div class="activity-table">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
            <div class="d-flex align-items-center gap-3">
                <i class="bi bi-table fs-4" style="color: #ff6b4a;"></i>
                <h5 class="fw-bold mb-0">Activity Records</h5>
            </div>
            <div>
                <span class="badge bg-primary px-3 py-2 rounded-pill" id="recordCount">
                    <i class="bi bi-files me-1"></i> <?php echo $totalActivities; ?> Records
                </span>
            </div>
        </div>
        
        <div class="table-responsive">
            <table class="activity-table-modern" id="activityTable">
                <thead>
                    <tr>
                        <th><i class="bi bi-hash"></i> No</th>
                        <th><i class="bi bi-calendar-event"></i> Activity Name</th>
                        <th><i class="bi bi-tag-fill"></i> Category</th>
                        <th><i class="bi bi-building"></i> PTJ / Organizer</th>
                        <th><i class="bi bi-calendar3"></i> Date</th>
                        <th><i class="bi bi-star-fill"></i> Merit</th>
                        <th><i class="bi bi-info-circle"></i> Status</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <?php foreach ($activities as $activity): 
                        $statusClass = $activity['status'];
                        $statusText = ucfirst($activity['status']);
                        $statusIcon = $statusClass == 'registered' ? 'bi-calendar-check' : 'bi-check-circle-fill';
                        $category = $categories[$activity['category']];
                    ?>
                    <tr data-status="<?php echo $activity['status']; ?>" 
                        data-category="<?php echo $activity['category']; ?>"
                        data-name="<?php echo strtolower($activity['name']); ?>" 
                        data-date="<?php echo $activity['date']; ?>">
                        <td class="fw-bold text-muted"><?php echo str_pad($activity['no'], 2, '0', STR_PAD_LEFT); ?></td>
                        <td><strong><?php echo htmlspecialchars($activity['name']); ?></strong></td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi <?php echo $category['icon']; ?>" style="color: <?php echo $category['color']; ?>; font-size: 16px;"></i>
                                <small><?php echo $category['name']; ?></small>
                            </div>
                        </td>
                        <td><small class="text-muted"><?php echo htmlspecialchars($activity['ptj']); ?></small></td>
                        <td><span class="date-badge"><?php echo $activity['date']; ?></span></td>
                        <td class="merit-cell">+<?php echo $activity['merit']; ?></td>
                        <td>
                            <span class="status-badge-modern <?php echo $statusClass; ?>">
                                <i class="bi <?php echo $statusIcon; ?>"></i>
                                <?php echo $statusText; ?>
                            </span>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ========== FOOTER  ========== -->
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
// SIDEBAR TOOGLE
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

// LOGOUT FUNCTION
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

// FILTER FUNCTION
const filterSearch = document.getElementById('filterSearch');
const filterStatus = document.getElementById('filterStatus');
const filterCategory = document.getElementById('filterCategory');
const filterBtn = document.getElementById('filterBtn');
const tableBody = document.getElementById('tableBody');
const recordCount = document.getElementById('recordCount');
const topbarSearch = document.getElementById('topbarSearch');

function filterTable() {
    let searchTerm = filterSearch.value.toLowerCase();
    const topbarTerm = topbarSearch ? topbarSearch.value.toLowerCase() : '';
    if (topbarTerm !== '') {
        filterSearch.value = topbarTerm;
        searchTerm = topbarTerm;
    }
    
    const statusTerm = filterStatus.value;
    const categoryTerm = filterCategory.value;
    
    const rows = tableBody.querySelectorAll('tr');
    let visibleCount = 0;
    
    rows.forEach(row => {
        const name = row.getAttribute('data-name');
        const status = row.getAttribute('data-status');
        const category = row.getAttribute('data-category');
        
        let show = true;
        
        if (searchTerm && !name.includes(searchTerm)) show = false;
        if (statusTerm !== 'all' && status !== statusTerm) show = false;
        if (categoryTerm !== 'all' && category !== categoryTerm) show = false;
        
        if (show) {
            row.style.display = '';
            visibleCount++;
        } else {
            row.style.display = 'none';
        }
    });
    
    recordCount.innerHTML = `<i class="bi bi-files me-1"></i> ${visibleCount} Records`;
}

if (topbarSearch) {
    topbarSearch.addEventListener('keyup', function() {
        filterSearch.value = this.value;
        filterTable();
    });
}

filterBtn.addEventListener('click', filterTable);
filterSearch.addEventListener('keyup', filterTable);
filterStatus.addEventListener('change', filterTable);
filterCategory.addEventListener('change', filterTable);
const yearSpan = document.getElementById('currentYear');
if (yearSpan) {
    yearSpan.textContent = new Date().getFullYear();
}

// FILTER FUNCTION
filterTable();
</script>

</body>
</html>