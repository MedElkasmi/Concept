@extends('admin.admin_master')
@section('dashboard-content')

<body>
    <div class="email-head">
        <div class="email-head-title">Create New Post<span class="icon mdi mdi-edit"></span></div>
    </div>
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <div class="email-compose-fields">
            <div class="subject">
                <div class="form-group row pt-2">
                    <label class="col-md-1 control-label">Title :</label>
                    <div class="col-md-11">
                        <input class="form-control" type="text" name="title">
                    </div>
                </div>
            </div>
            <div class="to cc">
                <div class="form-group row pt-2">
                    <label class="col-md-1 control-label">Tag :</label>
                    <div class="col-md-11">
                        <select class="js-example-basic-multiple" multiple="multiple" name="tags[]">
                            <option value="Facebook">Facebook</option>
                            <option value="Youtube">Youtube</option>
                            <option value="Google">Google</option>
                            <option value="Instagram">Instagram</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="subject">
                <div class="form-group row pt-2">
                    <label class="col-md-1 control-label">Image :</label>
                    <div class="col-md-11">
                        <input class="form-control" type="file" name="image_url">
                    </div>
                </div>
            </div>
        </div>
        <div class="email editor">
            <div class="col-md-12 p-0">
                <div class="form-group">
                    <label class="control-label sr-only" for="summernote">Descriptions </label>
                    <textarea class="form-control" id="summernote" name="paragraph" rows="6" placeholder="Write Descriptions"></textarea>
                </div>
            </div>
            <div class="email action-send">
                <div class="col-md-12 ">
                    <div class="form-group">
                        <button class="btn btn-primary btn-space" type="submit"><i class="icon s7-mail"></i> Create</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

@endsection