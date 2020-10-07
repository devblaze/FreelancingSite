@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Your Profile</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <form method="POST" action="">
                                <div class="form-row mb-4">
                                    <div class="col-3">
                                        <img src="https://images.unsplash.com/photo-1494548162494-384bba4ab999?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" class="img-thumbnail" alt="Profile Image">
                                    </div>
                                    <div class="col align-self-end">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                       aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose Profile Picture</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row mb-3">
                                    <div class="col">
                                        <label for="name">Name</label>
                                        <input name="name" class="form-control" type="text" placeholder="Name" value="{{ Auth::user()->name }}" disabled>
                                    </div>
                                    <div class="col">
                                        <label for="surname">Surname</label>
                                        <input name="surname" class="form-control" type="text" placeholder="Surname" value="{{ Auth::user()->surname }}" disabled>
                                    </div>
                                </div>

                                <div class="form-row mb-1">
                                    <div class="col">
                                        <label for="dob">Date of Birth</label>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col">
                                        <select id="disabledSelect" class="form-control" disabled>
                                            <option>Year</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select id="disabledSelect" class="form-control" disabled>
                                            <option>Month</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select id="disabledSelect" class="form-control" disabled>
                                            <option>Day</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row mb-3">
                                    <div class="col">
                                        <label for="phone">Phone</label>
                                        <input name="phone" class="form-control" type="text" placeholder="Phone" value="{{ Auth::user()->phone }}">
                                    </div>
                                    <div class="col">
                                        <label for="mobile">Mobile</label>
                                        <input name="mobile" class="form-control" type="text" placeholder="Mobile" value="{{ Auth::user()->mobile }}">
                                    </div>
                                </div>

                                <div class="form-row mb-3">
                                    <div class="col">
                                        <label for="country" class="col-form-label">Country</label>
                                        <input name="country" type="text" class="form-control" placeholder="Country" value="{{ Auth::user()->country }}" disabled>
                                    </div>

                                </div>

                                <div class="form-row mb-3">
                                    <label></label>
                                    <div class="col-5">
                                        <label for="city">City</label>
                                        <input name="city" type="text" class="form-control" placeholder="City" value="{{ Auth::user()->city }}">
                                    </div>
                                    <div class="col-4">
                                        <label for="address">Adress</label>
                                        <input name="address" type="text" class="form-control" placeholder="Address" value="{{ Auth::user()->address }}">
                                    </div>
                                    <div class="col">
                                        <label for="post_code">Zip</label>
                                        <input name="post_code" type="text" class="form-control" placeholder="Post Code" value="{{ Auth::user()->post_code }}">
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
                                <button class="btn btn-primary" type="submit">Request Update</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
