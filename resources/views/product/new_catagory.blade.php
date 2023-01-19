@extends('layouts.master')
@section('mainContent')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
     
             

            
            <!-- /.card-header -->
            
<div id="page-wrapper">
    <div id="page-inner">
        
        <!-- /. ROW  -->
        <hr />
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                    @if($message = Session::get('success'))
                <div class="alert alert-success">
                    {{$message}}
                </div>
                @endif 
                        <!-- jquery validation -->
                        <div class="card card-primary">

                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="request" action="{{route('add_catagory')}}" method="post"
                                enctype="multipart/form-data" class="main_form">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Catagory Name</label>
                                        <input type="text" name="name" placeholder="product name" class="form-control"style="background-color:#EEEEEE;" id="exampleInputPassword1">

                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Catagory Image</label>
                                        <input type="file" name="image" class="form-control"style="background-color:#EEEEEE;" id="exampleInputPassword1">

                                    </div>
                                    
                                    

                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>

                </div>
                <!-- /.row -->
            </div>

    </div>
    <!-- /. ROW  -->


    <!-- /. ROW  -->
</div>
            <!-- /.card-body -->
         
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->



@endsection