@extends('master');

@section('title')
Image Details
@endsection

@section('content')
<div class="container mt-5">

<a href="{{route('home')}}" class="btn btn-primary">Back</a>
    <h3 class="text-center py-5">Uploaded Images Details Here</h3>
    <table class="table table-bordered table-striped mt-3">

        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card card-body">

                            <h5><img src="{{asset($imageInfo->image)}}" height="500" width="400" alt=""></h5>
                            <h5>Image name: {{$imageInfo->name}}</h5>
                            <h6>Image Details: {{$imageInfo->details}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </table>
</div>

@endsection
