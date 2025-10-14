<!-- resources/views/header.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light nav-fresh shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <span class="fw-bold brand-fresh">🍃 Sistem Pendaftaran Pengguna 🍋</span>
        </a>

        <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarCollapse" 
            aria-controls="navbarCollapse" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav-links-fresh">
                <li class="nav-item"><a class="nav-link active" href="#">🏠 Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#">📖 Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#">📞 Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<style>
/* 🌿 Navbar Background */
.nav-fresh {
    background: linear-gradient(90deg, #DCE775, #AED581);
    padding: 12px 0;
    border-bottom: 4px solid #8BC34A;
}

/* 🍋 Brand Title */
.brand-fresh {
    background: linear-gradient(90deg, #33691E, #558B2F);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 1.6rem;
    font-weight: 800;
    letter-spacing: 0.5px;
}

/* 📗 Nav Links */
.nav-links-fresh .nav-link {
    color: #33691E;
    font-weight: 600;
    font-size: 1rem;
    padding: 8px 18px;
    border-radius: 12px;
    transition: all 0.3s ease;
}

/* Hover efek */
.nav-links-fresh .nav-link:hover {
    background: #C5E1A5;
    color: #1B5E20;
    transform: translateY(-2px);
}

/* Active page */
.nav-links-fresh .nav-link.active {
    background: linear-gradient(90deg, #8BC34A, #C0CA33);
    color: #fff !important;
    box-shadow: 0 4px 10px rgba(139, 195, 74, 0.4);
}

/* Navbar saat mobile */
.navbar-toggler {
    border-color: #8BC34A;
}

.navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(139,195,74,1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}
</style>
