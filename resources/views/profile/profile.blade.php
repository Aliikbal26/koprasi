<x-app-layout>
    <div class="section-header">
        <h1>Profile</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item">Profile</div>
        </div>
    </div>

    {{-- Content --}}
    <div class="section-body">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Profile</h4>
                        <a href="{{route('profile.index')}}" class="btn btn-success edit-profile">Edit Profile</a>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{$user->foto == null ? 'assets/img/avatar/avatar-4.png' : '$user->foto'}}" class="img-thumbnail text-center" width="50%" alt="">
                            </div>
                            <div class="col-md-8 my-2">
                                <h6>Nama : {{$user->name}}</h6>
                                <h6>Email : {{$user->email}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal edit profile -->
    <form action="" method="post" class="modal-part modal-edit-profile" id="modal" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="name">Name<span class="text-danger">*</span></label>
            <input type="text" class="form-control " name="name" id="email" placeholder="Ali Ikbal" required>
        </div>
        <div class="form-group">
            <label for="email">Email<span class="text-danger">*</span></label>
            <input type="email" class="form-control " name="email" id="email" placeholder="example@gmail.com" required>
        </div>
        <div class="form-group">
            <label for="foto">Foto<span class="text-danger">*</span></label>
            <input type="file" class="form-control " name="foto" id="foto" placeholder="0" required>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>
</x-app-layout>