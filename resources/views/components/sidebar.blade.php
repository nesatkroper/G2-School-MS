<aside class="app-sidebar bg-warning shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="#" class="brand-link">
            <img src="{{ asset('image/WLC_logo.png') }}" alt="AdminLTE Logo" class="brand-image opacity-80 shadow" />
            <span class="brand-text fw-light">WLC</span>
        </a>
    </div>
    <div class="sidebar-wrapper bg-primary">
        <nav class="mt-0">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon bi bi-speedometer" style="color: yellow;"></i>
                        <p>
                            Dashboard
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="allteacher" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="teacherdetails" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>Subents</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="addteacher" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>Parants</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        {{-- ----------------Teacher----------------- --}}
        <nav class="mt-0">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="bi bi-microsoft-teams" style="color: yellow;"></i>
                        <p>
                            Teacher
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="allteacher" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>All Teacher</p>
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
        </nav>
        {{-- ----------------Class Routine----------------- --}}
        <nav class="mt-0">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="bi bi-calendar-check" style="color: yellow;"></i>
                        <!-- Changed icon to book for Subject -->
                        <p>
                            Class Routine
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="allsubject" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>All Subjects</p> <!-- Changed text to All Subjects -->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="subjectdetails" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>Subject Details</p> <!-- Changed text to Subject Details -->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="addsubject" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>Add Subject</p> <!-- Changed text to Add Subject -->
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        {{-- ----------------Subject----------------- --}}
        <nav class="mt-0">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="bi bi-book" style="color: yellow;"></i> <!-- Changed icon to pencil for Exam -->
                        <p>
                            Subject
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="allsubject" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>All Subjects</p> <!-- Changed text to All Subjects -->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="subjectdetails" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>Subject Details</p> <!-- Changed text to Subject Details -->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="addsubject" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>Add Subject</p> <!-- Changed text to Add Subject -->
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        {{-- ----------------Account----------------- --}}
        <nav class="mt-0">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="bi bi-person-circle" style="color: yellow;"></i>
                        <!-- Changed icon to pencil for Exam -->
                        <p>
                            Account
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="allteacher" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>All Accounts</p> <!-- Changed text to All Accounts -->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="teacherdetails" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>Account Details</p> <!-- Changed text to Account Details -->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="addteacher" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>Add Account</p> <!-- Changed text to Add Account -->
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        {{-- ----------------Books----------------- --}}
        <nav class="mt-0">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="bi bi-book" style="color: yellow;"></i> <!-- Changed icon to pencil for Exam -->
                        <p>
                            Books
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="allbook" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>All Books</p> <!-- Changed text to All Books -->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="addbook" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>Add Book</p> <!-- Changed text to Book Details -->
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        {{-- ----------------Class----------------- --}}
        <nav class="mt-0">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="bi bi-house-door" style="color: yellow;"></i> <!-- Changed icon to pencil for Exam -->
                        <p>
                            Class
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="allclass" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>All Classes</p> <!-- Changed text to All Classes -->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="addclass" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>Add Class</p> <!-- Changed text to Add Class -->
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        {{-- ----------------Student----------------- --}}
        <nav class="mt-0">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="bi bi-people" style="color: yellow;"></i> <!-- Changed icon to pencil for Exam -->
                        <p>
                            Students
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="allstudent" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>All Students</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="studentdetail" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>Student Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="addstudent" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>Add Student</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        {{-- -------Attendance-------- --}}
        <nav class="mt-0">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="attendance" class="nav-link active">
                        <i class="bi bi-list-check" style="color: yellow;"></i> <!-- Changed icon to pencil for Exam -->
                        <p>Attendance</p>
                    </a>
                </li>
            </ul>
        </nav>
        {{-- ----------------Exam----------------- --}}
        <nav class="mt-0">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="bi bi-pencil" style="color: yellow;"></i> <!-- Changed icon to pencil for Exam -->
                        <p>
                            Exam
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="allexams" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>All Exams</p> <!-- Changed text to All Exams -->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="examdetails" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>Exam Details</p> <!-- Changed text to Exam Details -->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="addexam" class="nav-link">
                                <i class="bi bi-chevron-right"></i>
                                <p>Add Exam</p> <!-- Changed text to Add Exam -->
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        {{-- -------Staff---------- --}}
        <nav class="mt-0">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="bi bi-person-video2" style="color: yellow;"></i>
                        <!-- Changed icon to person-circle for Account -->
                        <p>
                            Staff
                            <i class="nav-arrow bi bi-chevron-right" style="color: yellow;"></i>
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
                            <a href="#" class="nav-link">
                                <i class="bi bi-badge-vo-fill"></i>
                                <p>Volunteer</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        {{-- ----------------Account & Logout----------------- --}}
        <nav class="mt-5">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="bi bi-person-circle" style="color: yellow;"></i>
                        <!-- Changed icon to person-circle for Account -->
                        <p>
                            Account
                            <i class="nav-arrow bi bi-chevron-right" style="color: yellow;"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="accountdetails" class="nav-link">
                                <i class="bi bi-chevron-right" style="color: yellow;"></i>
                                <!-- Icon for Account Details -->
                                <p>Account Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="logout" class="nav-link">
                                <i class="bi bi-box-arrow-right" style="color: yellow;"></i> <!-- Icon for Logout -->
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
</aside>
