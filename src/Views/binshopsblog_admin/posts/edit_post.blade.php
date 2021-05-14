@extends("binshopsblog_admin::layouts.admin_layout")
@section("content")


    @if(!$post->is_tutorial)
        <h5>Editing post
            <a target='_blank' href='{{$post->url()}}' class='float-right btn btn-primary'>View post</a>
        </h5>
    @else
        <h5>Editing Tutorial Post
            <a target='_blank' href='{{$post->url()}}' class='float-right btn btn-primary'>View Tutorial Post</a>
        </h5>
    @endif


    <form method='post' action='{{route("binshopsblog.admin.update_post",$post->id)}}'  enctype="multipart/form-data" >

        @csrf
        @method("patch")
        @include("binshopsblog_admin::posts.form", ['post' => $post])

        <input type='submit' class='btn btn-primary' value='Save Changes' >

    </form>

@endsection