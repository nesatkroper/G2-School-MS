<x-layout>
    <div class="container mt-5">
        <h2 class="text-center">Edit Employee</h2>
        <form action="{{ route('employee.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="employeeName">Name:</label>
                <input type="text" class="form-control" id="employeeName" name="name" value="{{ $employee->name }}" required>
            </div>
            <div class="form-group">
                <label for="employeeEmail">Email:</label>
                <input type="email" class="form-control" id="employeeEmail" name="email" value="{{ $employee->email }}" required>
            </div>
            <div class="form-group">
                <label for="employeePhone">Phone Number:</label>
                <input type="text" class="form-control" id="employeePhone" name="phone" value="{{ $employee->phone }}" required>
            </div>
            <div class="form-group">
                <label for="employeePosition">Position:</label>
                <input type="text" class="form-control" id="employeePosition" name="position" value="{{ $employee->position }}" required>
            </div>
            <div class="form-group">
                <label for="employeeDepartment">Department:</label>
                <input type="text" class="form-control" id="employeeDepartment" name="department" value="{{ $employee->department }}" required>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('employee.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</x-layout>
