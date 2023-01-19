<div class="card">
    <h5 class="card-header">Update Profile</h5>
    <div class="card-body">
        <form method="post" action="{{ route('profile.update') }}">
            @csrf
            @method('patch')

            <div class="row">
                <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-3 col-md-12 col-sm-12 col-12 p-4">
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $error }}
                        <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                        </div>
                    @endforeach
                    @endif
                    <div class="form-group">
                        <label>Your Name</label>
                        <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label>Your Email</label>
                        <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="" value="{{ $user->email }}">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Update email</button>
                </div>
            </div>
        </form>
    </div>
</div>