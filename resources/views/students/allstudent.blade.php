<x-layout>
    <nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">All Student</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExample02">
          <ul class="navbar-nav me-auto">
          </ul>
          <form role="search">
            <input class="form-control" type="search" placeholder="# ID Type Here..." aria-label="Search">
          </form>
          <form role="search">
            <input class="form-control" type="search" placeholder="Type Class..." aria-label="Search">
          </form>
          <form role="search">
            <input class="form-control" type="search" placeholder="Subject..." aria-label="Search">
          </form>
          <input type="submit" value="Search" class="btn btn-primary">
        </div>
      </div>
    </nav>
  
    <form action="/action_page.php">
      <table class="table">
        {{-- <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">
              <input type="checkbox" id="selectAll" onclick="toggleAll(this)">
            </th>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Subject</th>
            <th scope="col">Class</th>
            <th scope="col">Section</th>
            <th scope="col">Address</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Mobile No</th>
            <th scope="col">E-mail</th>
            <th scope="col">Action</th>
          </tr>
        </thead> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
        <form action="/action_page.php">
          <table class="table table-bordered table-striped table-hover align-middle">
            <thead class="table-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">
                  <input type="checkbox" id="selectAll" onclick="toggleAll(this)">
                  <th>Roll</th>
                </th>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Parent Name</th>
                <th scope="col">Subject</th>
                <th scope="col">Class</th>
                <th scope="col">Section</th>
                <th scope="col">Address</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Mobile No</th>
                <th scope="col">E-mail</th>
                <th scope="col" colspan="3" class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>
                    <input type="checkbox" name="person1" value="Mark Otto">
                    <td>#2000</td>
                </td>
                <td><img src="photo1.jpg" alt="Photo" class="img-thumbnail" width="50" height="50"></td>
                <td>Sok Ratana</td>
                <td>Male</td>
                <td>San Sok</td>
                <td>Mathematics</td>
                <td>10</td>
                <td>A</td>
                <td>123 Main St, City</td>
                <td>1998-04-15</td>
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
                <td>
                    <input type="checkbox" name="person2" value="Jacob Thornton">
                    <td>#2001</td>
                </td>
                <td><img src="photo2.jpg" alt="Photo" class="img-thumbnail" width="50" height="50"></td>
                <td>Chann Vireak</td>
                <td>Male</td>
                <td>Chet Bunchann</td>
                <td>English</td>
                <td>9</td>
                <td>B</td>
                <td>456 Another St, City</td>
                <td>2000-08-21</td>
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
                <td>
                    <input type="checkbox" name="person3" value="Larry Bird">
                    <td>#2002</td>
                </td>
                <td><img src="photo3.jpg" alt="Photo" class="img-thumbnail" width="50" height="50"></td>
                <td>Chen Monyneath</td>
                <td>Female</td>
                <td>Sem Chen</td>
                <td>History</td>
                <td>8</td>
                <td>C</td>
                <td>789 Third St, City</td>
                <td>2001-12-05</td>
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
  
        </form>
        
        <script>
          function toggleAll(source) {
            checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(checkbox => checkbox.checked = source.checked);
          }
        </script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        
      </table>
    </form>
    
    <script>
      function toggleAll(source) {
        checkboxes = document.getElementsByTagName('input');
        for (var i = 0; i < checkboxes.length; i++) {
          if (checkboxes[i].type == 'checkbox') {
            checkboxes[i].checked = source.checked;
          }
        }
      }
    </script>
  </x-layout>
  