@extends('admin.admin_master')
@section('dashboard-content')


<div class="card">
    <h5 class="card-header">Approve Comments</h5>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered first">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Post Related</th>
                        <th>Commentor</th>
                        <th>Comment</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp
                @foreach ($comments as $comment)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $comment->post->title}}</td>
                        <td>{{ $comment->name}}</td>
                        <td>{{ $comment->content}}</td>
                        <td width="25%" style="text-align: center;">
                            <form method="POST" action="{{route('comment.destroy',$comment)}}">
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
