@extends('master');

@section('title')
Image Upload
@endsection

@section('content')
    <div class="container mt-5">
        <h4 style="color:green">{{session('message')}}</h4>
        <h2 class="text-center mb-4">Upload an Image Info</h2>

        <!-- Image Upload Form -->
        <form action="{{route('upload.image')}}" method="POST" enctype="multipart/form-data" class="mb-5">
            @csrf
            <div class="row g-2 align-items-center">
                <div class="col-md-10">
                    <input type="text" name="name" class="form-control" required placeholder="Image Name">
                </div>
                <div class="col-md-10">
                    <textarea name="details" id="" cols="30" rows="3" class="form-control" placeholder="Image Details"></textarea>
                </div>
                <div class="col-md-10">
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Upload Image Info</button>
                </div>
            </div>
        </form>
        <!-- Uploaded Images Table -->
        <h3 class="text-center">Uploaded Images Will Be Shown Here</h3>
        <table class="table table-bordered table-striped mt-3">
            <thead class="table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image Preview</th>
                    <th scope="col">Image Name</th>
                    <th scope="col">Image Details</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example row; replace with dynamic data -->
                @foreach($imageInfos as $imageInfo)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td><img src="{{asset($imageInfo->image)}}" height="100" width="100" alt=""></td>
                    <td scope="row">{{$imageInfo->name}}</td>
                    <td scope="row">{!! Str::limit($imageInfo->details, 80) !!} </td>
                    <td>
                        <a href="{{route('image.details', ['id' => $imageInfo->id])}}" class="btn btn-success">Details</a>
                        <a href="{{route('image.delete', ['id' => $imageInfo->id])}}" class="btn btn-danger" onclick=" return confirm('Are You Sure Want To Delete This!')">Delete</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
