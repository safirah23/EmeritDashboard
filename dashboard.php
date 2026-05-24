<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-MERIT Dashboard</title>

    <!-- BOOTSTRAP & ICONS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
 
    <!-- MAIN STYLESHEET (includes all dark mode rules) -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- APEXCHARTS JS -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    
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
                <a class="nav-link active" href="dashboard.php">
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
                <h4 class="fw-bold mb-1">
                    Welcome, <span id="displayName">Safirah Amira</span>
                </h4>
                <small class>Monitor your merit activity</small>
            </div>
        </div>

        <div class="d-flex align-items-center gap-3">
            <div class="search-box">
                <input type="text" class="form-control" id="searchActivity" placeholder="Search activity...">
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
            <h2 class="fw-bold">Dashboard Overview</h2>
            <p class>Monitor student merit activities</p>
        </div>
    </div>

    <!-- STATISTICS CARDS -->
    <div class="row g-4">
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">TOTAL MERIT</p>
                            <h2 class="fw-bold">80</h2>
                        </div>
                        <div class="card-icon">
                            <i class="bi bi-star-fill"></i>
                        </div>
                    </div>
                    <small class="text-muted">merit points collected</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">ACTIVITIES</p>
                            <h2 class="fw-bold">36</h2>
                        </div>
                        <div class="card-icon">
                            <i class="bi bi-calendar-event-fill"></i>
                        </div>
                    </div>
                    <small class="text-muted">activities joined</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">ACHIEVEMENTS</p>
                            <h2 class="fw-bold">12</h2>
                        </div>
                        <div class="card-icon">
                            <i class="bi bi-trophy-fill"></i>
                        </div>
                    </div>
                    <small class="text-muted">awards earned</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">ACTIVE MONTHS</p>
                            <h2 class="fw-bold">6</h2>
                        </div>
                        <div class="card-icon">
                            <i class="bi bi-calendar-check-fill"></i>
                        </div>
                    </div>
                    <small class="text-muted">months active</small>
                </div>
            </div>
        </div>
    </div>

    <!-- CHARTS + MY SUMMARY CARD -->
    <div class="row g-4 mt-1">
        
        <!-- BAR CHART // APEX.JS -->
        <div class="col-lg-5">
            <div class="card dashboard-card p-4 h-100">
                <div class="mb-4">
                    <h5 class="text-muted">Monthly Merit Collection</h5>
                    <div class="heading-line mt-2"></div>
                </div>
                <div class="chart-box">
                    <div id="meritBarChart" class="apex-chart-container"></div>
                </div>
            </div>
        </div>

        <!-- DONUT CHART // CHART.JS) -->
        <div class="col-lg-4">
            <div class="card dashboard-card p-4 h-100">
                <div class="mb-4">
                    <h5 class="fw-bold mb-0">Activity Categories</h5>
                    <div class="heading-line mt-2"></div>
                </div>
                <div class="chart-box d-flex justify-content-center align-items-center">
                    <canvas id="categoryDonutChart" style="max-width: 280px; max-height: 280px; margin: 0 auto;"></canvas>
                </div>
                <div class="d-flex justify-content-center gap-3 mt-3 flex-wrap" id="customDonutLegend"></div>
            </div>
        </div>

        <!-- MY SUMMARY CARD -->
        <div class="col-lg-3">
            <div class="card dashboard-card p-0 h-100">
                <div class="summary-cover"></div>
                <div class="text-center">
                    <div class="summary-avatar-wrapper">
                        
                        <div class="summary-avatar-placeholder">
                            <img src="image/amira.jpg" alt="Safirah Amira" style="width:100%; height:100%; object-fit:cover; border-radius:50%;">
                        </div>
                    </div>
                    <h5 class="fw-bold mb-0">SAFIRAH AMIRA</h5>
                    <p class="text-muted small">2025228858</p>
                </div>
                <div class="p-3 pt-0">
                    <div class="summary-info-row">
                        <span class="summary-info-label">Faculty</span>
                        <span class="summary-info-value">FSM</span>
                    </div>
                    <div class="summary-info-row">
                        <span class="summary-info-label">College</span>
                        <span class="summary-info-value">Jasmine</span>
                    </div>
                    <div class="summary-info-row">
                        <span class="summary-info-label">Campus</span>
                        <span class="summary-info-value">UiTM Puncak Perdana</span>
                    </div>
                    <div class="summary-info-row">
                        <span class="summary-info-label">Total Merit</span>
                        <span class="summary-info-value ranking">80 pts</span>
                    </div>
                </div>
                <div class="p-3 pt-0">
                    <button class="btn btn-primary w-100" onclick="window.location.href='studentprofile.php'">
                        <i class="bi bi-person-fill me-2"></i>
                        View Profile
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- RECENT ACTIVITIES & ANNOUNCEMENTS -->
    <div class="row g-4 mt-2">
        <!-- RECENT ACTIVITIES -->
        <div class="col-lg-6">
            <div class="card dashboard-card p-4 h-100">
                <div class="section-heading mb-4">
                    <h5 class="fw-bold mb-0">Recent Activities</h5>
                    <div class="heading-line"></div>
                </div>
                <div class="activity-container">
                    <div class="activity-item">
                        <div class="activity-info">
                            <div class="activity-icon" style="background: rgba(139, 92, 246, 0.12); color: #8b5cf6;">
                                <i class="bi bi-pencil-fill"></i>
                            </div>
                            <div class="activity-details">
                                <h6>Podcast: Sembang Santai Melati</h6>
                                <small>YouTube Official TV Melati</small>
                            </div>
                        </div>
                        <div class="activity-date"><i class="bi bi-calendar3"></i> 19 May 2026</div>
                        <div class="activity-merit">+0</div>
                        <div class="activity-status"><span class="status-badge registered"><i class="bi bi-calendar-check"></i> Registered</span></div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-info">
                            <div class="activity-icon" style="background: rgba(255, 155, 84, 0.12); color: #ff9b54;">
                                <i class="bi bi-building-fill"></i>
                            </div>
                            <div class="activity-details">
                                <h6>Program Gotong-Royong Perdana</h6>
                                <small>Kolej Jasmine</small>
                            </div>
                        </div>
                        <div class="activity-date"><i class="bi bi-calendar3"></i> 20 Jun 2026</div>
                        <div class="activity-merit">+0</div>
                        <div class="activity-status"><span class="status-badge registered"><i class="bi bi-calendar-check"></i> Registered</span></div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-info">
                            <div class="activity-icon" style="background: rgba(139, 92, 246, 0.12); color: #8b5cf6;">
                                <i class="bi bi-pencil-fill"></i>
                            </div>
                            <div class="activity-details">
                                <h6>Leadership Summit 2026</h6>
                                <small>Student Leadership Program</small>
                            </div>
                        </div>
                        <div class="activity-date"><i class="bi bi-calendar3"></i> 15 Jun 2026</div>
                        <div class="activity-merit">+0</div>
                        <div class="activity-status"><span class="status-badge registered"><i class="bi bi-calendar-check"></i> Registered</span></div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-info">
                            <div class="activity-icon" style="background: rgba(34, 197, 94, 0.12); color: #22c55e;">
                                <i class="bi bi-trophy-fill"></i>
                            </div>
                            <div class="activity-details">
                                <h6>Jasmine Aerodance Night: Battle!</h6>
                                <small>Dewan Serbaguna Kolej Jasmine</small>
                            </div>
                        </div>
                        <div class="activity-date"><i class="bi bi-calendar3"></i> 13 May 2026</div>
                        <div class="activity-merit">+3</div>
                        <div class="activity-status"><span class="status-badge completed"><i class="bi bi-check-circle-fill"></i> Completed</span></div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="myactivity.php" class="btn btn-sm btn-outline-primary">View All 36 Activities <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <!-- ANNOUNCEMENTS -->
        <div class="col-lg-6">
            <div class="card dashboard-card p-4 h-100">
                <div class="section-heading mb-4">
                    <h5 class="fw-bold mb-0">Latest Announcements</h5>
                    <div class="heading-line"></div>
                </div>
                <div class="announcement-list">
                    <div class="announcement-item">
                        <div class="announcement-icon success">
                            <i class="bi bi-trophy-fill"></i>
                        </div>
                        <div class="announcement-content">
                            <div class="announcement-header">
                                <h6>Merit Credited: Jasmine Aerodance Night: Battle!
                                    <span class="announcement-badge-new">Completed</span>
                                </h6>
                                <span class="announcement-date">
                                    <i class="bi bi-clock"></i> 13 May 2026
                                </span>
                            </div>
                            <p>You earned <strong>+3 merit points</strong> for participating in Aerodance Night. Total merit now 80 points.</p>
                        </div>
                    </div>
                    <div class="announcement-item">
                        <div class="announcement-icon warning">
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="announcement-content">
                            <div class="announcement-header">
                                <h6> Merit Points System Update</h6>
                                <span class="announcement-date">
                                    <i class="bi bi-clock"></i> 3 days ago
                                </span>
                            </div>
                            <p>New merit allocation: <strong>Sukan/Seni</strong> = 5 points, <strong>Program Kolej</strong> = 3 points, <strong>Webinar</strong> = 3-5 points. Ensure your attendance is verified to receive points.</p>
                        </div>
                    </div>
                    <div class="announcement-item">
                        <div class="announcement-icon danger">
                            <i class="bi bi-exclamation-triangle-fill"></i>
                        </div>
                        <div class="announcement-content">
                            <div class="announcement-header">
                                <h6>Activity Report Deadline</h6>
                                <span class="announcement-date">
                                    <i class="bi bi-clock"></i> 1 week ago
                                </span>
                            </div>
                            <p>Submit your pending activity reports by <strong>30 June 2026</strong> to get merit points validated. Late submissions will not be processed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>


// SEARCH BAR FUNCTION (filters activities)
document.getElementById('searchActivity').addEventListener('keyup', function() {
    const searchTerm = this.value.toLowerCase();
    const items = document.querySelectorAll('.activity-item');
    items.forEach(item => {
        const text = item.textContent.toLowerCase();
        item.style.display = text.includes(searchTerm) ? 'flex' : 'none';
    });
});

// BAR CHART // APEX CHARTS
const months6 = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'];
const data6 = [10, 12, 15, 18, 13, 12];   // sum = 80

let barChart;

function initBarChart(categories, seriesData) {
    const isDark = document.body.classList.contains('dark-mode');
    const textColor = isDark ? '#e0e0e0' : '#333';
    const gridColor = isDark ? '#333' : '#f0f0f0';
    
    const options = {
        series: [{ name: 'Merit Points', data: seriesData }],
        chart: {
            type: 'bar',
            height: 350,
            toolbar: { show: false },      
            background: 'transparent',
            animations: { enabled: true, easing: 'easeinout', speed: 800 }
        },
        plotOptions: {
            bar: {
                borderRadius: 10,
                borderRadiusApplication: 'end',
                columnWidth: '55%',
                horizontal: false
            }
        },
        dataLabels: {
            enabled: true,
            formatter: val => val + ' pts',
            offsetY: -20,
            style: { colors: [textColor], fontSize: '11px', fontWeight: '500' }
        },
        xaxis: {
            categories: categories,
            labels: { style: { colors: textColor, fontSize: '12px', fontWeight: 500 }, rotate: -45 },
            axisBorder: { color: gridColor },
            axisTicks: { color: gridColor }
        },
        yaxis: {
            title: { text: 'Merit Points', style: { color: textColor } },
            labels: { style: { colors: textColor }, formatter: val => val + ' pts' }
        },
        grid: { borderColor: gridColor, strokeDashArray: 4 },
        fill: {
            type: 'gradient',
            gradient: {
                shade: isDark ? 'dark' : 'light',
                type: 'vertical',
                shadeIntensity: 0.5,
                gradientToColors: ['#ff9b54'],
                inverseColors: false,
                opacityFrom: 0.9,
                opacityTo: 0.7,
                stops: [0, 100]
            }
        },
        colors: ['#ff6b4a'],
        tooltip: { theme: isDark ? 'dark' : 'light', y: { formatter: val => val + ' merit points' } },
        legend: { position: 'top', labels: { colors: textColor } }
    };
    if (barChart) barChart.destroy();
    barChart = new ApexCharts(document.querySelector("#meritBarChart"), options);
    barChart.render();
}
initBarChart(months6, data6);

// DONUT CHART // CHART.JS
const donutCtx = document.getElementById('categoryDonutChart').getContext('2d');
const donutData = {
    labels: ['Webinar/Online', 'Program Kolej', 'Kelas Agama', 'Sukan/Seni', 'Lain-lain'],
    datasets: [{
        data: [6, 11, 8, 6, 5],
        backgroundColor: ['#ff6b4a', '#ff9b54', '#f59e0b', '#22c55e', '#8b5cf6'],
        borderWidth: 0,
        hoverOffset: 15,
        cutout: '65%',
        borderRadius: 8,
        spacing: 4
    }]
};
let donutChart = new Chart(donutCtx, {
    type: 'doughnut',
    data: donutData,
    options: {
        responsive: true,
        maintainAspectRatio: true,
        animation: { animateRotate: true, animateScale: true, duration: 1200, easing: 'easeOutElastic' },
        plugins: {
            tooltip: { backgroundColor: 'rgba(255,255,255,0.95)', titleColor: '#4a281a', bodyColor: '#9c786c', borderColor: '#ff6b4a', borderWidth: 1, borderRadius: 12, callbacks: { label: ctx => `${ctx.label}: ${ctx.raw} activities` } },
            legend: { display: false }
        }
    }
});
function generateDonutLegend() {
    const legendContainer = document.getElementById('customDonutLegend');
    if (legendContainer) {
        legendContainer.innerHTML = donutData.labels.map((label, i) => {
            const color = donutData.datasets[0].backgroundColor[i];
            const value = donutData.datasets[0].data[i];
            return `<div class="d-flex align-items-center gap-2" style="cursor: pointer;" onclick="highlightDonutSegment(${i})">
                        <div style="width:12px; height:12px; border-radius:4px; background:${color}; box-shadow:0 0 6px ${color};"></div>
                        <small class="fw-semibold">${label}</small>
                        <small class="text-muted">(${value})</small>
                    </div>`;
        }).join('');
    }
}
function highlightDonutSegment(index) {
    donutChart.setActiveElements([{ datasetIndex: 0, index: index }]);
    donutChart.update();
    setTimeout(() => { donutChart.setActiveElements([]); donutChart.update(); }, 1500);
}
generateDonutLegend();

// TOGGLE SIDEBAR
const sidebar = document.getElementById("customSidebar");
const overlay = document.getElementById("sidebarOverlay");
const toggleSidebarBtn = document.getElementById("toggleSidebar");
const closeSidebarBtn = document.getElementById("closeSidebar");
const mainContent = document.getElementById("mainContent");

toggleSidebarBtn.addEventListener("click", function() {
    if(window.innerWidth >= 992) {
        sidebar.classList.toggle("hidden");
        mainContent.style.marginLeft = sidebar.classList.contains("hidden") ? "30px" : "280px";
    } else {
        sidebar.classList.toggle("show-mobile");
        overlay.classList.toggle("show");
    }
});
closeSidebarBtn.addEventListener("click", function() {
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
        mainContent.style.marginLeft = sidebar.classList.contains("hidden") ? "30px" : "280px";
    } else {
        mainContent.style.marginLeft = "0";
    }
});

// DARK MODE 
const toggleDarkBtn = document.getElementById("toggleDarkModeBtn");
const darkIcon = document.getElementById("darkModeIcon");
if(localStorage.getItem("theme") === "dark"){
    document.body.classList.add("dark-mode");
    darkIcon.classList.replace("bi-moon-stars-fill", "bi-sun-fill");
}
function updateAllChartsTheme() {
    const isDark = document.body.classList.contains("dark-mode");
    const textColor = isDark ? '#e0e0e0' : '#333';
    const gridColor = isDark ? '#333' : '#f0f0f0';
    if (barChart) {
        barChart.updateOptions({
            xaxis: { labels: { style: { colors: textColor } }, axisBorder: { color: gridColor }, axisTicks: { color: gridColor } },
            yaxis: { labels: { style: { colors: textColor } }, title: { style: { color: textColor } } },
            grid: { borderColor: gridColor },
            dataLabels: { style: { colors: [textColor] } },
            tooltip: { theme: isDark ? 'dark' : 'light' },
            legend: { labels: { colors: textColor } },
            fill: { gradient: { shade: isDark ? 'dark' : 'light' } }
        });
    }
    donutChart.update();
}
toggleDarkBtn.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");
    const isDark = document.body.classList.contains("dark-mode");
    localStorage.setItem("theme", isDark ? "dark" : "light");
    darkIcon.classList = isDark ? "bi bi-sun-fill" : "bi bi-moon-stars-fill";
    updateAllChartsTheme();
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
document.getElementById('logoutSidebarBtn')?.addEventListener('click', handleLogout);
document.getElementById('topbarLogoutBtn')?.addEventListener('click', (e) => { e.preventDefault(); handleLogout(); });

// SET CURRENT YEAR IN FOOTER
const yearSpan = document.getElementById('currentYear');
if (yearSpan) {
    yearSpan.textContent = new Date().getFullYear();
}
</script>

</body>
</html>