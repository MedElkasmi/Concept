@extends('admin.admin_master')
@section('dashboard-content')

<div class="card">
    <h5 class="card-header">Posts</h5>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered first">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Post</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td></td>
                        <td></td>
                        <td width="25%" style="text-align: center;">

                            <form method="POST" action="">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Remove</button>
                            </form>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection