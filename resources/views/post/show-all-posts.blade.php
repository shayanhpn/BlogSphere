<x-dash-layout>
    <div class="container">
        <div class="page-inner">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Post Title</th>
                        <th>Created At</th>
                        <th>Edited At</th>
                        <th>Functions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->created_at}}</td>
                            <td>{{$post->updated_at}}</td>
                            <td><a href="#" class="btn btn-primary">View</a><a href="#" class="btn btn-danger mx-2">Delete</a><a href="#" class="btn btn-success">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
               
            </div>
        </div>
    </div>
</x-dash-layout>
