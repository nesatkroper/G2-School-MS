{{-- Assuming you are using a Blade component for the layout --}}
<x-layout>

    <div class="card">
        <div class="card-header">
            <h4><strong>Student Information</strong></h4>
        </div>
        <div class="card-body">

            {{-- <form action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data">
                @csrf  
                 --}}
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="gender" class="form-label">Gender*</label>
                        <select class="form-select" id="gender" name="gender" required>
                            <option selected disabled>Please Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="dob" class="form-label">Date Of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="class" class="form-label">Class</label>
                        <select class="form-select" id="class" name="class" required>
                            <option selected disabled>Please Select Class</option>
                            <option value="1">Class 1</option>
                            <option value="2">Class 2</option>
                            <!-- Add other classes -->
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="section" class="form-label">Section</label>
                        <select class="form-select" id="section" name="section" required>
                            <option selected disabled>Please Select Section</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <!-- Add other sections -->
                        </select>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label">Roll</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="last_name" class="form-label">admission No</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="subject" class="form-label">Subject</label>
                        <select class="form-select" id="subject" name="subject" required>
                            <option selected disabled>Please Select Subject</option>
                            <option value="Math">Math</option>
                            <option value="Science">Science</option>
                            <!-- Add other subjects -->
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="id_no" class="form-label">ID No</label>
                        <input type="text" class="form-control" id="id_no" name="id_no" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="religion" class="form-label">Religion</label>
                        <input type="text" class="form-control" id="religion" name="religion">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone No</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="col-md-6">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="photo" class="form-label">Upload Teacher Photo (150px X 150px)</label>
                        <input type="file" class="form-control" id="photo" name="photo">
                    </div>
                </div>

            {{-- </form> --}}

        {{------------------------------Parent----------------------}}

            <div class="card-foodter">
                <h4><strong>Parents information</strong></h4>
            </div>

            <div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label">Father Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="last_name" class="form-label">Father Occupation</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                </div>
        
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label">Mother Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="last_name" class="form-label">Mother Occupation</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                </div>
        
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="col-md-6">
                        <label for="address" class="form-label">Nationality</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Present Address</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="col-md-6">
                        <label for="address" class="form-label">Permanent Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                </div>
        
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="photo" class="form-label">Upload Teacher Photo (150px X 150px)</label>
                        <input type="file" class="form-control" id="photo" name="photo">
                    </div>
                </div>
                
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-secondary ms-2">Reset</button>
                </div>
    
            </div>
        </div>
    </div>
    
</div>
</x-layout>


