<x-layout>
    <section class="p-3">
        <div class="row mb-3">
            <div class="col-12 text-end">
                <button class="btn btn-primary newEmployee" data-bs-toggle="modal" data-bs-target="#employeeForm">
                    New Employee <i class="bi bi-person-plus-fill"></i>
                </button>
            </div>
        </div>

        <table class="table table-bordered table-striped table-hover align-middle">
            <thead class="table-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">
                  <input type="checkbox" id="selectAll" onclick="toggleAll(this)">
                </th>
                <th>No</th>
                <th>Photo</th>
                <th>Name</th>
                <th>ID Number</th>
                <th>Nationality</th>
                <th>Education</th>
                <th>Major</th>
                <th>Age</th>
                <th>Dept</th>
                <th>Position</th>
                <th>Credit Card</th>
                <th>Dormitory No</th>
                <th>Job Training</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><input type="checkbox" name="person1" value="Mark Otto"></td>
                <td><img src="photo1.jpg" alt="Photo" class="img-thumbnail" width="50" height="50"></td>
                <td>Mark Otto</td>
                <td>Male</td>
                <td>Mathematics</td>
                <td>10</td>
                <td>A</td>
                <td>123 Main St, City</td>
                <td>1990-04-15</td>
                <td>123-456-7890</td>
                <td>mark@example.com</td>
                <td class="text-center">
                  <button class="btn btn-sm btn-outline-primary" type="button" title="View"><i class="bi bi-eye"></i></button>
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-outline-warning" type="button" title="Edit"><i class="bi bi-pencil-square"></i></button>
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-outline-danger" type="button" title="Delete"><i class="bi bi-trash3"></i></button>
                </td>
                
              </tr>
              <tr>
                <th scope="row">2</th>
                <td><input type="checkbox" name="person2" value="Jacob Thornton"></td>
                <td><img src="photo2.jpg" alt="Photo" class="img-thumbnail" width="50" height="50"></td>
                <td>Jacob Thornton</td>
                <td>Male</td>
                <td>English</td>
                <td>9</td>
                <td>B</td>
                <td>456 Another St, City</td>
                <td>1985-08-21</td>
                <td>987-654-3210</td>
                <td>jacob@example.com</td>
                <td class="text-center">
                  <button class="btn btn-sm btn-outline-primary" type="button" title="View"><i class="bi bi-eye"></i></button>
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-outline-warning" type="button" title="Edit"><i class="bi bi-pencil-square"></i></button>
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-outline-danger" type="button" title="Delete"><i class="bi bi-trash3"></i></button>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td><input type="checkbox" name="person3" value="Larry Bird"></td>
                <td><img src="photo3.jpg" alt="Photo" class="img-thumbnail" width="50" height="50"></td>
                <td>Larry Bird</td>
                <td>Male</td>
                <td>History</td>
                <td>8</td>
                <td>C</td>
                <td>789 Third St, City</td>
                <td>1979-12-05</td>
                <td>123-555-6789</td>
                <td>larry@example.com</td>
                <td class="text-center">
                  <button class="btn btn-sm btn-outline-primary" type="button" title="View"><i class="bi bi-eye"></i></button>
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-outline-warning" type="button" title="Edit"><i class="bi bi-pencil-square"></i></button>
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-outline-danger" type="button" title="Delete"><i class="bi bi-trash3"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
    </section>
    
    <!-- Employee Form Modal -->
    <div class="modal fade" id="employeeForm">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Employee Information</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="card imgholder mb-3">
                        <label for="imgInput" class="upload">
                            <input type="file" name="photo" id="imgInput" class="d-none">
                            <i class="bi bi-plus-circle-dotted"></i>
                        </label>
                        <img src="{{ asset('images/default_profile.webp') }}" alt="Default Profile" class="img-fluid rounded" width="200" height="200">
                    </div>
                    <div class="inputField">
                        <div>
                            <label for="name">Full Name:</label>
                            <input type="text" name="name" id="name" required>
                        </div>
                        <div>
                            <label for="id_number">ID Number:</label>
                            <input type="text" name="id_number" id="id_number" required>
                        </div>
                        <div>
                            <label for="nationality">Nationality:</label>
                            <input type="text" name="nationality" id="nationality" required>
                        </div>
                        <div>
                            <label for="education">Education:</label>
                            <input type="text" name="education" id="education" required>
                        </div>
                        <div>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Gender</option>
                                <option value="F">F</option>
                                <option value="M">M</option>
                                <option value="Other">Other</option>
                              </select>
                        </div>
                        <div>
                            <label for="age">Age:</label>
                            <input type="number" name="age" id="age" required>
                        </div>
                        <div>
                            <label for="dept">Dept:</label>
                            <input type="text" name="dept" id="dept" required>
                        </div>
                        <div>
                            <label for="position">Position:</label>
                            <input type="text" name="position" id="position" required>
                        </div>
                        <div>
                            <label for="credit_card">Credit Card:</label>
                            <input type="text" name="credit_card" id="credit_card" required>
                        </div>
                        <div>
                            <label for="dormitory_number">Dormitory No:</label>
                            <input type="text" name="dormitory_number" id="dormitory_number" required>
                        </div>
                        <div>
                            <label for="job_training">Job Training:</label>
                            <input type="text" name="job_training" id="job_training" required>
                        </div>
                    </div>
                    <input type="hidden" name="id" id="id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="employeeForm" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- View Employee Modal -->
    <div class="modal fade" id="viewEmployeeModal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h4 class="modal-title">Employee Profile</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="viewEmployeeForm">
                        <div class="card imgholder text-center mb-3">
                            <img src="{{ asset('images/default_profile.webp') }}" alt="Employee Photo" width="150" height="150" class="rounded-circle border border-3 border-primary">
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="viewName" class="form-label">Full Name:</label>
                                <input type="text" id="viewName" class="form-control" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="viewIdNumber" class="form-label">ID Number:</label>
                                <input type="text" id="viewIdNumber" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="viewNationality" class="form-label">Nationality:</label>
                                <input type="text" id="viewNationality" class="form-control" disabled>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="viewEducation" class="form-label">Education:</label>
                                <input type="text" id="viewEducation" class="form-control" disabled>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="viewMajor" class="form-label">Major:</label>
                                <input type="text" id="viewMajor" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="viewAge" class="form-label">Age:</label>
                                <input type="number" id="viewAge" class="form-control" disabled>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="viewDept" class="form-label">Dept:</label>
                                <input type="text" id="viewDept" class="form-control" disabled>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="viewPosition" class="form-label">Position:</label>
                                <input type="text" id="viewPosition" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="viewCreditCard" class="form-label">Credit Card:</label>
                                <input type="text" id="viewCreditCard" class="form-control" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="viewDormitoryNumber" class="form-label">Dormitory No:</label>
                                <input type="text" id="viewDormitoryNumber" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="viewJobTraining" class="form-label">Job Training:</label>
                            <input type="text" id="viewJobTraining" class="form-control" disabled>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    
    <style>
        table tr td {
            vertical-align: middle;
        }

        td button {
            margin: 5px;
        }

        td button i {
            font-size: 20px;
        }

        .modal-header {
            background: #0d6efd;
            color: #fff;
        }

        .modal-body {
            padding: 20px;
        }

        .modal-body form {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .imgholder {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            background-color: #f7f9fc;
            border: 2px dashed #0d6efd;
            width: 33%;
        }

        .upload {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            display: none;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .upload i {
            color: #fff;
            font-size: 35px;
        }

        .imgholder:hover .upload {
            display: flex;
        }

        .modal-body form .inputField {
            flex-basis: 68%;
            padding-left: 20px;
        }

        .inputField > div {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .inputField > div label {
            font-size: 16px;
            font-weight: 500;
        }

        .inputField > div input {
            width: 75%;
            padding: 10px;
            border: 1px solid #0d6efd;
            border-radius: 5px;
            outline: none;
            background: #f9f9f9;
            transition: border-color 0.3s ease;
        }

        .inputField > div input:focus {
            border-color: #0b5ed7; /* Darker shade of blue on focus */
            background-color: #fff;
        }

        .modal-footer .submit {
            font-size: 18px;
        }
    </style>
</x-layout>