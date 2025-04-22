<x-dash-layout>
    <div class="container">
        <div class="page-inner">
        {{--            BreadCrumb Section--}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Create Post</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <form action="{{ route('create-post') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Title" name="title">
                                    </div>
                                    <textarea name="body" id="body" class="form-control my-3" rows="10" placeholder="Write Text Here..."></textarea>
                                    <input class="form-control" type="file" name="post_image">
                                    <button class="btn btn-primary mt-3" type="submit">Create Post</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-dash-layout>
