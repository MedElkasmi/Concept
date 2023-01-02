<div class="card">
    <h5 class="card-header">Update Profile</h5>
    <div class="card-body">
        <form method="post" action="{{ route('profile.update') }}">
            @csrf
            @method('patch')

            <div class="row">
                <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-3 col-md-12 col-sm-12 col-12 p-4">
                    <div class="form-group">
                        <label>Your Name</label>
                        <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Your Email</label>
                        <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Update email</button>
                </div>
            </div>
        </form>
    </div>
</div>