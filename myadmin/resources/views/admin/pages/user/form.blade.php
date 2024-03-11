@extends('admin.layout.app')
@section('_content')
    <div class="content-wrapper " >
    <div class="container">
        <h1>Edit Profile</h1>
        <hr>
        <div class="row">
            <!-- left column -->
            <div class="col-md-3">
                <div class="text-center">
                    <img src="{{asset('projects/admin/images/profile.jpg')}}" width="300" height="300" alt="avatar">
                    <input type="file" class="form-control mt-2" name="">
                </div>
            </div>

            <!-- edit form column -->
            <div class="col-md-9 personal-info">
                @if (session('success'))
                    <div id="successMessage" class="alert alert-success">

                    </div>
                    <div class="alert alert-info alert-dismissable">
                        {{ session('success') }}
                    </div>
                    <script>
                        setTimeout(function() {
                            var successMessage = document.getElementById('successMessage');
                            if (successMessage) {
                                successMessage.remove();
                            }
                        }, 5000);
                    </script>
                @endif

                <h3>İstifadəçi məlumatları</h3>

                <form class="form-horizontal" role="form" action="{{route('user.store')}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group mt-3">
                        <label class="col-lg-3 control-label">Ad:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" placeholder="John" name="name">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label class="col-lg-3 control-label">Soyad:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" placeholder="Doe" name="surname">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" placeholder="testuser@gmail.com" name="email">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label class="col-lg-3 control-label">Mobil nömrə:</label>
                        <div class="col-lg-8">
                            <div class="ui-select">
                                <select id="user_time_zone" class="form-control" name="prefix">
                                    <option value="050">050</option>
                                    <option value="051">051</option>
                                    <option value="055">055</option>
                                    <option value="070">070</option>
                                    <option value="077">077</option>
                                    <option value="079">079</option>
                                </select>

                                <input  class="form-control" type="number" name="phone" class="input-class">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label class="col-md-3 control-label">Username:</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" placeholder="JohnDoe" name="username">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label class="col-md-3 control-label">Password:</label>
                        <div class="col-md-8">
                            <input class="form-control" type="password"  name="password">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8 mt-3">
                            <button class="btn btn-primary" >Yadda saxla</button>

                            <span></span>
                            <button class="btn btn-default">Cancel</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
