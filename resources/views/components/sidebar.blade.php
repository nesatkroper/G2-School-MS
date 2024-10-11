<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <div class="sidebar-brand">
    <a href="" class="brand-link">
      <img
        src="{{ asset('image/Germany.png') }}"
        alt="AdminLTE Logo"
        class="brand-image opacity-75 shadow"
      />
      <span class="brand-text fw-light">SUON Phanun</span>
    </a>
  </div>
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="menu"
        data-accordion="false"
      >
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
              Menu
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="nav-icon bi bi-bag-dash"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="nav-icon bi bi-receipt"></i>
                <p>POS</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="nav-icon bi bi-cart-check"></i>
                <p>Product</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('sub.index') }}" class="nav-link">
                <i class="nav-icon bi bi-tags"></i>
                <p>Subject</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    {{-- ----------------Teacher-----------------}}
    <nav class="mt-2">
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="menu"
        data-accordion="false"
      >
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="bi bi-microsoft-teams"></i>
            <p>
              Teacher
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="allteacher" class="nav-link">
                <i class="bi bi-chevron-right"></i>
                <p> All Teacher</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="teacherdetails" class="nav-link">
                <i class="bi bi-chevron-right"></i>
                <p>Teacher Details</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="addteacher" class="nav-link">
                <i class="bi bi-chevron-right"></i>
                <p>Add Teacher</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
      <ul
      class="nav sidebar-menu flex-column"
      data-lte-toggle="treeview"
      role="menu"
      data-accordion="false"
    >
      <li class="nav-item menu-open">
        <a href="atttendace" class="nav-link active">
          <i class="bi bi-list-check"></i>
          <p>
            Attendance
          </p>
        </a>
    </nav>
    {{-- -------Staff---------- --}}
    <nav class="mt-2">
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="menu"
        data-accordion="false"
      >
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="bi bi-person-video2"></i>
            <p>
              Staff
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="create" class="nav-link">
                <i class="bi bi-microsoft-teams"></i>
                <p>Teacher</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="bi bi-badge-vo-fill"></i>
                <p>Volunteer</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
  {{-- ------- --}}
  
</aside>
