@extends('layout')

    @section('content')

    <div class="container">

        <div class="row">
            <div class="col-6">
                <h1>List of categories</h1>
            </div>
            <div class="col-6 text-right">
               <a href="/category/create" class="btn btn-success">New</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                        <td>{{ $category->label }} <span class="badge ml-3 badge-success">{{$category->posts->count()}}</span></td>
                            <td>{{ $category->created_at }}</td>
                            <td class="text-right">
                                <a href="" class="btn btn-warning btn-sm">Edit</a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <ul class="list-group">
                                    @foreach( $category->posts as $post)
                                <li class="list-group-item">
                                    <h3>{{$post->title}}</h3>
                                    <p>{{$post->body}}</p>
                                    <em>{{$post->created_at}}</em> 
                                </li>
                                @endforeach


                            
                                </ul>
                                
                            </td>
        
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection