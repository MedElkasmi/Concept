@extends('admin.admin_master')
@section('dashboard-content')

<body>
    <div class="email-head">
        <div class="email-head-title">Create New Post<span class="icon mdi mdi-edit"></span></div>
    </div>
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="email-compose-fields">
            <div class="subject">
                <div class="form-group row pt-2">
                    <label class="col-md-1 control-label">Title :</label>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="title">
                    </div>
                </div>
            </div>
            <div class="subject">
                <div class="form-group row pt-2">
                    <label class="col-md-1 control-label">Category :</label>
                    <div class="col-md-6">
                        <select class="js-example-basic-multiple" multiple="multiple" name="categories[]">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="subject">
                <div class="form-group row pt-2">
                    <label class="col-md-1 control-label">Tag :</label>
                    <div class="col-md-6">
                        <select class="js-example-basic-multiple" multiple="multiple" name="tags[]">
                            @foreach ($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->tag_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="subject">
                <div class="form-group row pt-2">
                    <label class="col-md-1 control-label">Image :</label>
                    <div class="col-md-6">
                        <input class="form-control" type="file" name="img_url">
                    </div>
                </div>
            </div>
        </div>
        <div class="email editor">
            <div class="col-md-12 p-40">
                <div class="form-group">
                    <textarea class="form-control" id="summernote" name="content" rows="6" placeholder="Write Descriptions"></textarea>
                </div>
            </div>
            <div class="email action-send">
                <div class="col-md-6 ">
                    <div class="form-group">
                        <button class="btn btn-primary btn-space" type="submit"><i class="icon s7-mail"></i> Create</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

@endsection