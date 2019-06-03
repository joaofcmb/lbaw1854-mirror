<div id="side-profile" class="col-lg-4 px-0 mt-4 mb-4 order-1 order-lg-12 d-flex align-items-center">
    <div class="container pb-4 my-auto">
        <div class="row justify-content-center">
            <div id="profile-picture" class="col-  mx-auto">
                <img class="profile-img rounded-circle" src="{{ file_exists('img/profile/33.png') ? asset('img/profile/33.png') :  asset('img/profile/33.jpeg')}}" width="250" height="250"
                        alt="User Photo">
                <div id="upload-profile-picture" class="text-center">
                    <i class="fas fa-camera"></i>
                    <p>Update</p>
                </div>
                <form id="upload-profile-picture-form" method="post" action="{{ route('upload-picture') }}" enctype="multipart/form-data" style="display: none;">
                    {{ csrf_field() }}

                    <input type="file" name="picture" class="form-control-file" id="upload-profile-picture-file">
                    <input id="upload-profile-picture-form-submit" type="submit">
                </form>
            </div>
        </div>
        <div class="row justify-content-center pt-4 pb-3">
            <div id="name-container" class=" col-8 col-md-5 align-self-center text-center">
                <h5>{{ $user->username }}</h5>
            </div>
        </div>
        <div class="row justify-content-center mx-3 pt-3">
            <div id="biography" class="p-3">
                <h5>Biography 
                    @isset($isInfo)
                        <i id="edit-biography" class="fas fa-edit ml-2 float-right"></i>
                    @endisset 
                </h5>
                <p id="{{ $user->id }}" class="pt-2 mb-0">{{ $user->biography }}</p>
            </div>
        </div>
    </div>
</div>

@isset ($isInfo)
</div>
<div id="background-button" class="row col-1 p-0">
    <div class="col-12 text-right p-0">
        <a href="" class="btn px-2 py-1" role="button">
            <i class="fa fa-camera" aria-hidden="true"></i>
        </a>
    </div>
</div>
@endisset