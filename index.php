<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | E-MERIT</title>

    <!-- BOOTSTRAP & ICONS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
 
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    
  
    <style>
        body.login-page {
            background: transparent !important;
        }
        
        body.login-page::before,
        body.login-page::after {
            display: none !important;
        }
    </style>
</head>
<body class="login-page">

<div class="login-wrapper">
    <div class="card dashboard-card login-card">
        <div class="card-body">
            <div class="text-center">
                <img src="image/emerit.png" alt="E-MERIT Logo" class="profile-image">
                <h1 class="login-title mt-2">E-MERIT</h1>
                <p class="login-subtitle">Student E-Merit System</p>
            </div>
           
    
            <form id="loginForm">
                <div class="form-group">
                    <label><i class="bi bi-person-badge-fill me-1"></i> STUDENT ID</label>
                    <input type="text" id="studentId" class="form-control-custom" placeholder="Enter your Student ID" autocomplete="off">
                </div>
                
                <div class="form-group">
                    <label><i class="bi bi-lock-fill me-1"></i> PASSWORD</label>
                    <div class="password-wrapper">
                        <input type="password" id="password" class="form-control-custom" placeholder="Enter your password">
                        <i class="bi bi-eye-slash toggle-password" id="togglePasswordIcon"></i>
                    </div>
                </div>
                
                <button type="button" class="login-btn" onclick="handleLogin()">
                    <i class="bi bi-box-arrow-in-right me-2"></i> LOGIN
                </button>
            </form>
            
            <!-- Error Message -->
            <div id="errorMessage" class="error-message">
                <i class="bi bi-exclamation-triangle-fill"></i>
                <span id="errorText">Invalid Student ID or password</span>
            </div>
            
            <!-- Notes -->
            <div class="notes">
                <i class="bi bi-info-circle-fill me-1"></i> Notes:<br>
                Student ID: <span>2025228858</span><br>
                Password: <span>password123</span>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Three.js & Vanta Fog Background -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@0.5.24/dist/vanta.fog.min.js"></script>

<script>
    // Vanta  background 
    VANTA.FOG({
        el: "body",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        highlightColor: 0xffc300,
        midtoneColor: 0xff2204,
        lowlightColor: 0x9f9fa9,
        blurFactor: 0.6,
        zoom: 1,
        speed: 1
    });
</script>

<!-- Login FUNCTION -->
<script>
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('togglePasswordIcon');

    toggleIcon.addEventListener('click', function() {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.classList.toggle('bi-eye');
        this.classList.toggle('bi-eye-slash');
    });

    // LOGIN CREDENTIALS
    const validCredentials = [
        { studentId: '2025228858', password: 'password123', name: 'Safirah Amira', studentIdNum: '2025228858' },
        { studentId: 'admin', password: 'admin123', name: 'Admin User', studentIdNum: 'ADMIN001' }
    ];

    function handleLogin() {
        const studentId = document.getElementById('studentId').value.trim();
        const password = document.getElementById('password').value.trim();
        const errorMessage = document.getElementById('errorMessage');
        const errorText = document.getElementById('errorText');
        
        if (studentId === '' || password === '') {
            errorText.innerText = 'Please enter both Student ID and password';
            errorMessage.classList.add('show');
            return;
        }
        
        const user = validCredentials.find(cred => 
            cred.studentId.toLowerCase() === studentId.toLowerCase() && cred.password === password
        );
        
        if (user) {
            localStorage.setItem('studentName', user.name);
            localStorage.setItem('studentId', user.studentIdNum);
            localStorage.setItem('isLoggedIn', 'true');
            window.location.href = 'dashboard.php';
        } else {
            errorText.innerText = 'Invalid Student ID or password. Please try again.';
            errorMessage.classList.add('show');
            document.getElementById('password').value = '';
            passwordInput.setAttribute('type', 'password');
            toggleIcon.classList.remove('bi-eye');
            toggleIcon.classList.add('bi-eye-slash');
        }
    }

    //CLEAR ERROR MESSAGE
    document.getElementById('studentId').addEventListener('input', () => {
        document.getElementById('errorMessage').classList.remove('show');
    });
    document.getElementById('password').addEventListener('input', () => {
        document.getElementById('errorMessage').classList.remove('show');
    });
    
    // USE ENTER KEY TO LOGIN FUNCTION
    document.getElementById('password').addEventListener('keypress', (e) => {
        if (e.key === 'Enter') handleLogin();
    });
</script>

</body>
</html>