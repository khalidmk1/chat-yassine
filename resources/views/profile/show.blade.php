@extends('master.master_page')




@section('content')

<style>
    .social-link {
    width: 30px;
    height: 30px;
    border: 1px solid #ddd;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #666;
    border-radius: 50%;
    transition: all 0.3s;
    font-size: 0.9rem;
}

.social-link:hover, .social-link:focus {
    background: #ddd;
    text-decoration: none;
    color: #555;
}   
</style>
    <div class="page-content">

        <div class="container">
            <div class="row text-center">

                <!-- Team item -->

               
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img
                            src="https://bootstrapious.com/i/snippets/sn-team/teacher-4.jpg" alt="" width="100"
                            class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">{{$user->name}}</h5><span class="small text-uppercase text-muted">
                            {{$user->email}}
                        </span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="{{route('profile.edit')}}" class="social-link">
                                 <i class="icon-md" data-feather="edit"></i></a></li>   
                        </ul>
                    </div>
                </div><!-- End -->
             
                
            </div>
        </div>
    </div>
@endsection

