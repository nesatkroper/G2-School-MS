<x-layout>
    <!-- Attendance Card -->
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Checkout Student Attendance</h4>
        </div>
        <div class="card-body">
            <form id="attendance-form">
                <div class="row mb-3">
                    <!-- Select Class -->
                    <div class="col-md-3">
                        <label for="class" class="form-label">Select Class</label>
                        <select class="form-select" id="class">
                            <option selected>One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <!-- Select Section -->
                    <div class="col-md-3">
                        <label for="section" class="form-label">Select Section</label>
                        <select class="form-select" id="section">
                            <option selected>A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                    </div>

                    <!-- Select Month -->
                    <div class="col-md-3">
                        <label for="month" class="form-label">Select Month</label>
                        <select class="form-select" id="month">
                            <option selected>April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                        </select>
                    </div>

                    <!-- Session Year -->
                    <div class="col-md-3">
                        <label for="year" class="form-label">Session Year</label>
                        <select class="form-select" id="year">
                            <option selected>2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-warning">Search</button>
            </form>
        </div>
    </div>

    <!-- Attendance Table -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Student Name</th>
                <th scope="col">Date</th>
                <!-- Generate columns dynamically from 1 to 31 -->
                <script>
                    const thead = document.querySelector('thead tr');
                    for (let i = 1; i <= 31; i++) {
                        const th = document.createElement('th');
                        th.textContent = i;
                        thead.appendChild(th);
                    }
                </script>
            </tr>
        </thead>
        <tbody id="attendance-body">
            <!-- Dynamic rows for students will be generated here -->
        </tbody>
    </table>

    <script>
        // Sample student data
        const students = ["John Doe", "Jane Smith", "Mike Johnson"];

        // Generate checkboxes dynamically for each student
        const tbody = document.getElementById('attendance-body');

        students.forEach((student, index) => {
            const tr = document.createElement('tr');

            // Add student name
            const nameTd = document.createElement('td');
            nameTd.textContent = student;
            tr.appendChild(nameTd);

            // Add date (could be dynamic based on selection)
            const dateTd = document.createElement('td');
            const date = new Date().toLocaleDateString(); // Current date
            dateTd.textContent = date;
            tr.appendChild(dateTd);

            // Add checkboxes for each day
            for (let i = 1; i <= 31; i++) {
                const td = document.createElement('td');
                const div = document.createElement('div');
                div.classList.add('form-check');

                const checkbox = document.createElement('input');
                checkbox.classList.add('form-check-input');
                checkbox.type = 'checkbox';
                checkbox.id = `attendance-${index}-${i}`;
                checkbox.value = `Day${i}`;

                div.appendChild(checkbox);
                td.appendChild(div);
                tr.appendChild(td);
            }

            tbody.appendChild(tr);
        });

        // Capture form submit and log attendance data (optional functionality)
        document.getElementById('attendance-form').addEventListener('submit', function (event) {
            event.preventDefault();
            const attendanceData = [];

            // Loop over students and days to capture attendance data
            students.forEach((student, studentIndex) => {
                const studentAttendance = {
                    name: student,
                    days: []
                };

                for (let day = 1; day <= 31; day++) {
                    const checkbox = document.getElementById(`attendance-${studentIndex}-${day}`);
                    studentAttendance.days.push({
                        day,
                        present: checkbox.checked
                    });
                }

                attendanceData.push(studentAttendance);
            });

            console.log(attendanceData);
            // Process or send the attendance data as needed (e.g., save it to a database)
        });
    </script>
</x-layout>
