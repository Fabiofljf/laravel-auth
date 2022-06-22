@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row flex-column">
        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
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
                                <a class="nav-link" href="#">
                                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                    Add Post
                                </a>
                            </li>
                            <!-- /Add Post -->
                        </ul>
                    </div>
                </nav>
                <!-- /nav sx-->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Dashboard utente</h1>
                    </div>

                    <h2>Benvenuto nella tua area riservata</h2>
                    <p>Qui potrai visualizzare i posts, modificarli o cancellarli e crearne dei nuovi!</p>
                    <div class="table-responsive">

                    </div>
                </main>
                <!-- /main central-->
            </div>
        </div>
    </div>
</div>
@endsection