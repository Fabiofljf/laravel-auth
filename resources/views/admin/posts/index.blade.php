@extends('layouts.admin')

@section('content')
<section id="dashboard">
    <h1 class="py-4">Dashboard</h1>
    <div class="row">
        <div class="col-2 h_100 bg_grey">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('admin.home') }}">
                        <span data-feather="home" class="align-text-bottom"></span>
                        Dashboard
                    </a>
                </li>
                <!-- /Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.posts.index') }}">
                        <span data-feather="file" class="align-text-bottom"></span>
                        Posts
                    </a>
                </li>
                <!-- /Posts -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.posts.create') }}">
                        <span data-feather="shopping-cart" class="align-text-bottom"></span>
                        Add Post
                    </a>
                </li>
                <!-- /Add Post -->
            </ul>
        </div>
        <!-- /.col sx -->
        <div class="col">
            <h2>lista post</h2>
        </div>
        <!-- /.col sx -->
    </div>
</section>
<!-- /#dashboard -->
@endsection