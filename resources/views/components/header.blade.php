<nav class="app-header navbar navbar-expand bg-body shadow-sm">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <!-- Sidebar Toggle Button -->
            <li class="nav-item">
                <a class="nav-link text-primary" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list fs-4"></i>
                </a>
            </li>
            <!-- Date and Time Display -->
            <li class="ms-2">
                <p id="date" class="m-0 fw-semibold text-muted" style="font-size: 14px;"></p>
                <p id="time" class="m-0 fw-semibold text-muted" style="font-size: 14px;"></p>
            </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            <!-- Search Button with Styled Input Field -->
            <li class="nav-item d-flex align-items-center">
                <a class="nav-link text-primary" href="#" role="button" onclick="toggleSearch()">
                    <i class="bi bi-search fs-5"></i>
                </a>
                <input
                    type="text"
                    id="searchInput"
                    class="form-control search-input d-none"
                    placeholder="Search..."
                />
            </li>

            <!-- Language Switch Button -->
            <li class="nav-item">
                <a class="nav-link text-primary" href="#" role="button" onclick="toggleLanguage()" id="languageToggle">
                    <i class="bi bi-translate fs-5"></i>
                    <span class="d-none d-md-inline">English</span>
                </a>
            </li>

            <!-- Fullscreen Button -->
            <li class="nav-item">
                <a class="nav-link text-primary" href="#" data-lte-toggle="fullscreen">
                    <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen fs-5"></i>
                    <i data-lte-icon="minimize" class="bi bi-fullscreen-exit fs-5" style="display: none;"></i>
                </a>
            </li>

            <!-- User Profile Dropdown -->
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                    <img src="{{ asset('image/profile.png') }}" class="user-image rounded-circle shadow-sm me-2" alt="User Image" style="width: 30px; height: 30px;" />
                    <span class="d-none d-md-inline fw-semibold text-primary">SONG PISETH</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- CSS for Search Input -->
<style>
    .search-input {
        width: 0;
        transition: width 0.3s ease, padding 0.3s ease;
        border-radius: 20px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        padding: 0;
        margin-left: 10px;
    }

    .search-input:focus, .search-input:not(.d-none) {
        width: 200px;
        padding: 5px 15px;
    }
</style>

<!-- JavaScript for Date, Time, Search, and Language Toggle -->
<script>
    // Update Date and Time
    const date = document.getElementById("date");
    const time = document.getElementById("time");
    setInterval(() => {
        let now = new Date();
        date.innerHTML = now.toLocaleDateString();
        time.innerHTML = now.toLocaleTimeString();
    });

    // Toggle Search Input Field
    function toggleSearch() {
        const searchInput = document.getElementById("searchInput");
        searchInput.classList.toggle("d-none");
        if (!searchInput.classList.contains("d-none")) {
            searchInput.focus();
        }
    }

    // Toggle Language between English and Khmer
    function toggleLanguage() {
        const languageToggle = document.getElementById("languageToggle");
        const currentLanguage = languageToggle.querySelector("span").innerText;
        languageToggle.querySelector("span").innerText = currentLanguage === "English" ? "Khmer" : "English";
    }
</script>
