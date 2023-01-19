<div class="card">
    <h5 class="card-header">Update Password</h5>
    <div class="card-body">
        <form method="post" action="{{ route('password.update') }}">
            @csrf
            @method('put')
            
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
                        <label>Current Password</label>
                        <input type="password" class="form-control form-control-lg" id="current_password" name="current_password" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Retry Password</label>
                        <input type="password" class="form-control form-control-lg" id="password_confirmation" name="password_confirmation" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Update Password</button>
                </div>
            </div>
        </form>
    </div>
</div>