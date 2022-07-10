<div>
    <div class="container-fluid mb-3">
        <div class="d-flex align-items-center p-3 bg-white rounded shadow">
            <img src="{{ url('images/avatar/' . auth('admin')->user()->avatar) }}" alt="" width="64px" height="64px">
            <div class="ms-3">
                <p class="fs-4 fw-bold mb-0 text-capitalize">{{ auth('admin')->user()->username }}</p>
                <p class="mb-2">{{ auth('admin')->user()->email }}</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="d-block bg-white shadow">
            <div class="d-flex align-items-center py-2 px-3 border-bottom">
                <p class="mb-0 fw-bold">Profile Detail</p>
                <div class="dropstart ms-auto">
                    <button class="btn btn-sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-bars fa-sm fa-fw"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">Edit</a></li>
                    </ul>
                  </div>
            </div>
            <div class="p-3">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" value="{{ auth('admin')->user()->username }}">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Email</label>
                            <input type="text" class="form-control disabled" value="{{ auth('admin')->user()->email }}" disabled>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="username" class="form-label">Phone</label>
                            <div class="input-group">
                                <span class="btn border border-right-0" id="basic-addon1">+62</span>
                                <input type="text" class="form-control" placeholder="phone" value="{{ auth('admin')->user()->phone }}">
                              </div>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Born</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Alamat</label>
                    <textarea name="address" id="" class="form-control" rows="3"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>