<div class="card">
    <h5 class="card-header">Update Password</h5>
    <div class="card-body">
        <form method="post" action="{{ route('password.update') }}">
            @csrf
            @method('put')
            
            <div class="row">
                <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-3 col-md-12 col-sm-12 col-12 p-4">
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