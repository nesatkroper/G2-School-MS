<x-layout>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5>Book Information</h5>
            </div>
            <div class="card-body">
                {{-- <form action="{{ route('books.store') }}" method="POST"> --}}
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="book_name" class="form-label">Book Name</label>
                            <input type="text" name="book_name" id="book_name" class="form-control" placeholder="Enter book name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter subject" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="writer_name" class="form-label">Writer Name</label>
                            <input type="text" name="writer_name" id="writer_name" class="form-control" placeholder="Enter writer name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="class" class="form-label">Class</label>
                            <input type="text" name="class" id="class" class="form-control" placeholder="Enter class" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="publishing_year" class="form-label">Publishing Year</label>
                            <input type="number" name="publishing_year" id="publishing_year" class="form-control" placeholder="Enter publishing year" required>
                        </div>
                        <div class="col-md-6">
                            <label for="upload_date" class="form-label">Upload Date</label>
                            <input type="date" name="upload_date" id="upload_date" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="id_no" class="form-label">ID No</label>
                            <input type="text" name="id_no" id="id_no" class="form-control" placeholder="Enter ID number" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="reset" class="btn btn-secondary me-2">Reset</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
