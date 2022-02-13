@extends('admin.admin_master')
@section('admin')
    <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Manage Profile</h4>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="{{route('profile.store')}}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-12">

                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <h5>User Name <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control"
                                                                   value="{{$editData->name}}"
                                                                   required="" aria-invalid="false"> </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>User Email <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control"
                                                                   value="{{$editData->email}}"
                                                                   required="" aria-invalid="false"> </div>
                                                    </div>
                                                </div>
                                            </div><!--end Row -->


                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <h5>User mobile <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="mobile" class="form-control"
                                                                   value="{{$editData->mobile}}"
                                                                   required="" aria-invalid="false"> </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>User Address <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="address" class="form-control"
                                                                   value="{{$editData->address}}"
                                                                   required="" aria-invalid="false"> </div>
                                                    </div>
                                                </div>
                                            </div><!--end Row -->


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>User Gender <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="gender" id="select" required="" class="form-control" aria-invalid="false">
                                                                <option value=" " selected="" disabled="">Select Gender</option>
                                                                <option value="Male"
                                                                        {{$editData->gender == "Male" ? "selected":""}}
                                                                >Male</option>
                                                                <option value="Female"
                                                                        {{$editData->gender == "Female" ? "selected":""}}
                                                                >User</option>
                                                            </select>

                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Profile Image <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="file" name="image" class="form-control"
                                                                   value="{{ $editData->name }}"
                                                                   required="" aria-invalid="false" id="image"> </div>
                                                    </div>

                                                    <div class="form-group">

                                                        <div class="controls">
                                                            <img id="showImage"
                                                                 style="width: 100px;height:100px; border:1px solid #000000"
                                                                 src="{{(!empty($editData->image))?url('upload/user_images/'.$editData->image):
url('upload/no_image.jpg') }}"
                                                                    alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--end Row -->



                                        </div>
                                    </div>


                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-info mb-5" value="update">
                                    </div>
                                </form>

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </section>


        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                let reader=new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result)
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

    </script>



@endsection
