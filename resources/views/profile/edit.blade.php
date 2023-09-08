{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}




@extends('master.master_page')

@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Profille </li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Profile Information</h6>

                        <form class="forms-sample" method="post" action="{{ route('profile.update') }}">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">name</label>
                                <input type="text" name="name" class="form-control" value="{{$user->name}}"
                                    required id="exampleInputUsername1" autocomplete="off" placeholder="Username">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email"  class="form-control" id="exampleInputEmail1" placeholder="Email" value="{{$user->email}}" required>
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Update</button>
                           
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Upadte Password</h6>

                        <form class="forms-sample" method="post" action="{{ route('password.update') }}">
                            @csrf
                            @method('put')
                    
                            
                            
                            <div class="row mb-3">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">current Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="current_password"
                                        autocomplete="off" placeholder="Password" name="current_password" value="{{$user->password}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">New Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password"
                                        autocomplete="off" name="password" placeholder="Password" name="current_password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Confirme Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password_confirmation"
                                        autocomplete="off" name="password" name="password_confirmation"  placeholder="Password" name="current_password">
                                </div>
                            </div>
                           
                            <button type="submit" class="btn btn-primary me-2">Change Password</button>
                         
                        </form>

                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
