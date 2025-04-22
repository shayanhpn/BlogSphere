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
                                <form>
                                    <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Title" name="title" value="{{ $post->title }}" disabled>
                                    </div>
                                    <textarea name="body" id="body" class="form-control my-3" rows="10" placeholder="Write Text Here..." disabled>{{ $post->body }}</textarea>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-dash-layout>
