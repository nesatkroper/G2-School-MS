<x-layout>
  <div class="container-fluid px-4">
    <h2 class="mt-4">Subject</h2>
    <button
      class="btn btn-success rounded-3 shadow m-3"
      type="button"
      data-bs-toggle="modal"
      data-bs-target="#staticBackdropAdd"
      data-bs-whatever="@mdo"
    >
      Add New Subject
    </button>
    <div class="app-content">
      <div class="container-fluid">
        <div class="row">
          <div class="card mb-4">
            <div class="card-header">
              <h3 class="card-title">Bordered Table</h3>
            </div>
            <div class="card-body">
              @if(session('success'))
              <div class="alert alert-success">
                {{ session("success") }}
              </div>
              @endif
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Subject Name</th>
                    <th>Subject Code</th>
                    <th>Subject Price</th>
                    <th>Status</th>
                    <th style="width: 40px">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($sub as $s)
                  <tr class="align-middle">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$s->name}}</td>
                    <td>{{$s->code}}</td>
                    <td>$ {{$s->price}}</td>

                    @if($s->status == '0')
                    <td class="fw-bold text-success">Active</td>
                    @else
                    <td class="fw-bold text-danger">Disactive</td>
                    @endif

                    <td class="d-flex flex-row gap-2">
                      <button
                        class="btn btn-warning rounded-3"
                        data-bs-toggle="modal"
                        data-bs-target="#editModal-{{ $s->id }}"
                      >
                        Edit
                      </button>
                      <button
                        class="btn btn-danger rounded-3"
                        data-bs-toggle="modal"
                        data-bs-target="#deleteModal-{{ $s->id }}"
                      >
                        Delete
                      </button>
                    </td>
                  </tr>
                  <!-- Edit Modal -->
                  <div
                    class="modal fade"
                    id="editModal-{{ $s->id }}"
                    tabindex="-1"
                    aria-labelledby="editModalLabel-{{ $s->id }}"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form
                          action="{{ route('sub.update', $s->id) }}"
                          method="POST"
                          enctype="multipart/form-data"
                        >
                          @csrf @method('PUT')
                          <div class="modal-header">
                            <h5
                              class="modal-title"
                              id="editModalLabel-{{ $s->id }}"
                            >
                              Edit S Information
                            </h5>
                            <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="modal-body">
                            <div class="mb-3">
                              <label class="form-label">Name</label>
                              <input
                                type="text"
                                class="form-control"
                                id="name-{{ $s->id }}"
                                name="name"
                                value="{{ $s->name }}"
                              />
                            </div>
                            <div class="mb-3">
                              <label class="col-form-label">Code</label>
                              <input
                                type="text"
                                class="form-control"
                                name="code"
                                value="{{ $s->code }}"
                              />
                            </div>

                            <div class="mb-3">
                              <label class="col-form-label">Price:</label>
                              <input
                                type="text"
                                class="form-control"
                                name="price"
                                value="{{ $s->price }}"
                              />
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button
                              type="button"
                              class="btn btn-secondary"
                              data-bs-dismiss="modal"
                            >
                              Close
                            </button>
                            <button type="submit" class="btn btn-warning">
                              Update Category
                            </button>
                          </div>
                        </form>
                        @if($s->status == '1')
                        <form
                          action="{{route('sub.change', $s->id)}}"
                          method="POST"
                        >
                          @csrf @method('PUT')
                          <button class="btn btn-sm btn-danger" type="submit">
                            This subject was disactive, Wanna active?
                          </button>
                        </form>
                        @endif
                      </div>
                    </div>
                  </div>
                  <!-- Delete Modal -->
                  <div
                    class="modal fade"
                    id="deleteModal-{{ $s->id }}"
                    tabindex="-1"
                    aria-labelledby="deleteModalLabel-{{ $s->id }}"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form
                          action="{{ route('sub.destroy', $s->id) }}"
                          method="POST"
                        >
                          @csrf @method('DELETE')
                          <div class="modal-header fs-5 fw-bold">
                            Are you sure want to delete this record?
                          </div>
                          <div class="modal-footer">
                            <button
                              type="button"
                              class="btn btn-secondary"
                              data-bs-dismiss="modal"
                            >
                              Close
                            </button>
                            <button type="submit" class="btn btn-danger">
                              Delete Category
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Add Product Category -->
  <div
    class="modal fade"
    id="staticBackdropAdd"
    tabindex="-1"
    aria-labelledby="staticBackdropLabel"
    aria-hidden="true"
    data-bs-target="#staticBackdropAdd"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">
            Add New Product Category
          </h1>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <form
            action="{{ route('sub.store') }}"
            method="POST"
            enctype="multipart/form-data"
          >
            @csrf
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label"
                >Category Name:</label
              >
              <input
                type="text"
                class="form-control"
                id="recipient-name"
                name="name"
              />
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label"
                >Category Code:</label
              >
              <input
                type="text"
                class="form-control"
                id="recipient-name"
                name="code"
                placeholder="Sub00#"
              />
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label"
                >Category Price:</label
              >
              <input
                type="text"
                class="form-control"
                id="recipient-name"
                name="price"
                placeholder="$"
              />
            </div>
            <input type="submit" name="submit" id="" class="btn btn-success" />
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-layout>
