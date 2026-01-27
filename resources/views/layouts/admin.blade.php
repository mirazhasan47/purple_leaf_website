<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - @yield('title')</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        :root {
            --sidebar-width: 260px;
            --primary-accent: #6366f1; /* Modern Indigo */
            --glass-bg: rgba(255, 255, 255, 0.95);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
            color: #1f2937;
            overflow-x: hidden;
        }

        /* Animated Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            background: #1e1e2d;
            color: #a2a3b7;
            position: fixed;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .sidebar-header {
            padding: 2rem 1.5rem;
            font-weight: 700;
            color: white;
            letter-spacing: -0.5px;
        }

        .nav-link {
            color: #a2a3b7;
            padding: 0.8rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: all 0.2s;
            border-left: 4px solid transparent;
        }

        .nav-link:hover, .nav-link.active {
            color: white;
            background: rgba(255, 255, 255, 0.05);
            border-left-color: var(--primary-accent);
        }

        .nav-link i { width: 18px; }

        /* Main Content Area */
        .main-wrapper {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            transition: all 0.3s;
        }

        .top-header {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            padding: 1rem 2rem;
            border-bottom: 1px solid #e5e7eb;
            position: sticky;
            top: 0;
            z-index: 999;
        }

        /* Card Styling */
        .content-area {
            padding: 2rem;
            animation: fadeIn 0.5s ease-in-out;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        /* User Profile Badge */
        .user-badge {
            display: flex;
            align-items: center;
            gap: 10px;
            background: #fff;
            padding: 5px 15px;
            border-radius: 50px;
            border: 1px solid #e5e7eb;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar { margin-left: calc(-1 * var(--sidebar-width)); }
            .main-wrapper { margin-left: 0; }
            .sidebar.active { margin-left: 0; }
        }
    </style>
</head>
<body>

<div class="d-flex">
    <nav class="sidebar shadow" id="sidebar">
        <div class="sidebar-header d-flex align-items-center">
            <div class="bg-primary p-2 rounded-3 me-2">
                <i data-lucide="layout-dashboard" class="text-white"></i>
            </div>
            <span class="fs-4">LGF</span>
        </div>
        
        <div class="mt-3">
            <a href="{{ route('dashboard') }}" class="nav-link">
                <i data-lucide="home"></i> Dashboard
            </a>
            <a href="{{ route('users.index') }}" class="nav-link">
                <i data-lucide="users"></i> Users
            </a>
            <a href="{{ route('products.index') }}" class="nav-link">
                <i data-lucide="package"></i> Products
            </a>
            <a href="{{ route('orders.index') }}" class="nav-link">
                <i data-lucide="shopping-cart"></i> Orders
            </a>
            
            <div class="px-4 py-3 small text-uppercase fw-bold opacity-50">Account</div>
            
            <a href="{{ route('logout') }}" class="nav-link text-danger"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i data-lucide="log-out"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </nav>

    <div class="main-wrapper flex-grow-1">
        <header class="top-header d-flex justify-content-between align-items-center">
            <h5 class="m-0 fw-bold">@yield('title')</h5>
            
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-light rounded-circle shadow-sm">
                    <i data-lucide="bell" size="18"></i>
                </button>
                <div class="user-badge shadow-sm">
                    <div class="rounded-circle bg-soft-primary" style="width: 30px; height:30px; background: #e0e7ff; display:grid; place-items:center;">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                    <span class="small fw-semibold">{{ Auth::user()->name }}</span>
                </div>
            </div>
        </header>

        <main class="content-area">
            <div class="animate__animated animate__fadeIn">
                @yield('content')
            </div>
        </main>
    </div>
</div>
@yield('modals')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Initialize Lucide Icons
    lucide.createIcons();
    
    // Add active class to current nav link
    document.querySelectorAll('.nav-link').forEach(link => {
        if(link.href === window.location.href) {
            link.classList.add('active');
        }
    });
</script>
@stack('scripts')
</body>
</html>