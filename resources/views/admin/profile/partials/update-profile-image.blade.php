<div class="card">
    <h5 class="card-header">Update Profile</h5>
    <div class="card-body">
        <form method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
            @csrf
            @method('post')

            <div class="row">
                <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-3 col-md-12 col-sm-12 col-12 p-4">
                    <div class="form-group">
                        <label>Upload Profile Picture</label>
                        <input type="file" class="form-control form-control-lg" name="profile_name" placeholder="">
                        <br>
                    <button type="submit" class="btn btn-primary float-right">Upload Picture</button>
                </div>
            </div>
        </form>
    </div>
</div>