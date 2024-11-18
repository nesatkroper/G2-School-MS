<x-layout>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.2.0/dist/fullcalendar.min.css" rel="stylesheet">

    <div class="container mt-4">
        <div class="row">
            <!-- Students Card -->
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div class="icon text-success">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                        <div>
                            <div class="h5 mb-1">Students</div>
                            <div class="text-muted">50,000</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Teachers Card -->
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div class="icon text-primary">
                            <i class="fas fa-chalkboard-teacher fa-2x"></i>
                        </div>
                        <div>
                            <div class="h5 mb-1">Teachers</div>
                            <div class="text-muted">10,000</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Parents Card -->
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div class="icon text-warning">
                            <i class="fas fa-user-friends fa-2x"></i>
                        </div>
                        <div>
                            <div class="h5 mb-1">Parents</div>
                            <div class="text-muted">15,000</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Earnings Card -->
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div class="icon text-info">
                            <i class="fas fa-dollar-sign fa-2x"></i>
                        </div>
                        <div>
                            <div class="h5 mb-1">Total Earnings</div>
                            <div class="text-muted">$30,000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
