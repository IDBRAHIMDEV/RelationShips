@extends('layout')

    @section('content')
        <div class="container">
        <div class="row">
            <div class="col-6">Create a category</div>
            <div class="col-6 text-right">
                <a href="/category" class="btn btn-link">Back tio list</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6 mx-auto">
                <form action="/category" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="label">Label</label>
                        <input name="label" id="label" placeholder="New label" type="text" class="form-control"></div>
                    <button class="btn btn-success btn-block">Add new category</button>
                </form>
            </div>
        </div>
    </div>
    @endsection

    
</body>
</html>