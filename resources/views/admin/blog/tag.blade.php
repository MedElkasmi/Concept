@extends('admin.admin_master')
@section('dashboard-content')
<div class="card">
   <h5 class="card-header">Create New Tag</h5>
   <div class="card-body">
      <form method="post" action="{{route('tag.store')}}">
         @csrf
         @method('post')
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
                  <label>New Tag</label>
                  <input type="text" class="form-control form-control-lg" name="tag_name">
                  <br>
                  <button type="submit" class="btn btn-primary float-right">Save</button>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>


<div class="card">
    <h5 class="card-header">Tags</h5>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered first">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tag Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                @php $i=1; @endphp
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$tag->tag_name}}</td>
                        <td width="25%" style="text-align: center;">
                            <form method="POST" action="{{route('tag.destroy',$tag)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
