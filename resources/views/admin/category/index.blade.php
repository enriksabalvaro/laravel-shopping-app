@extends('admin.layouts')


@section('content')
  <!--Main layout-->
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">

            <!-- Heading -->
            <div class="card mb-4 wow fadeIn">

                <!--Card content-->
                <div class="card-body d-sm-flex justify-content-between">

                    <h4 class="mb-2 mb-sm-0 pt-1">
                        <a href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">Home Page</a>
                        <span>/</span>
                        <span>Dashboard</span>
                    </h4>

                    <form class="d-flex justify-content-center">
                        <!-- Default input -->
                        <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
                        <button class="btn btn-primary btn-sm my-0 p" type="submit">
                            <i class="fa fa-search"></i>
                        </button>

                    </form>

                    <a href="{{ route('category.create') }}"><button class="btn btn-primary">Add Category</button></a>

                </div>

            </div>
            <!-- Heading -->

                <!--Grid column-->
                <div class="col-md-12 mb-6">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">

                            <!-- Table  -->
                            <table class="table table-hover">
                                <!-- Table head -->
                                <thead class="blue lighten-4">
                                    <tr>
                                        <th>#</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <!-- Table head -->

                                <!-- Table body -->
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <th scope="row">{{ $category->id }}</th>
                                        <td><a href="{{ route('category.show', ['id'=>$category->id]) }}">{{ $category->name }}</a></td>
                                        <td>
                                            <a href="{{ route('category.edit', ['id'=>$category->id]) }}"><button class="btn btn-success"><i class="fa fa-edit"></i> Edit</button></a>
                                            <form action="{{ route('category.destroy', ['id'=>$category->id]) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                            
                                </tbody>
                                @endforeach
                                <!-- Table body -->
                            </table>
                            <!-- Table  -->

                            {{ $categories->links() }}

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->


        </div>
        <!--/.Card-->
    </main>
    <!--Main layout-->
@endsection
