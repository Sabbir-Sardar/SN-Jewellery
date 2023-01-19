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
                            <form id="request" action="{{route('add_product')}}" method="post"
                                enctype="multipart/form-data" class="main_form">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Name</label>
                                        <input type="text" name="name" placeholder="product name" class="form-control"style="background-color:#EEEEEE;" id="exampleInputPassword1">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Karet</label>
                                        <input type="text" name="karet" placeholder="karet" class="form-control"style="background-color:#EEEEEE;" id="exampleInputPassword1">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Weight</label>
                                        <input type="text" name="weight" placeholder="weight" class="form-control"style="background-color:#EEEEEE;" id="exampleInputPassword1">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Thickness</label>
                                        <input type="text" name="thickness" placeholder="thickness" class="form-control"style="background-color:#EEEEEE;" id="exampleInputPassword1">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Height</label>
                                        <input type="text" name="height" placeholder="height" class="form-control"style="background-color:#EEEEEE;" id="exampleInputPassword1">

                                    </div>
                                    <div class="form-group" style="margin-top:30px;">
                                    <label for="exampleInputPassword1">Catagory</label>
                                    <select name="catagory" style="padding:5px 20px 5px 20px;margin-left:20px;border: 1px solid #C4C4C4; border-radius:5px;background-color:#EEEEEE;">
                                        <option selected>Select Catagory</option>
                                        <?php $i=0 ?>
          @foreach ($test as $value)
                                         <option value="{{$value->id}}"> {{$value->name}}</option>
                                         
                                         @endforeach
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Price</label>
                                        <input type="number" name="price" placeholder="* price" class="form-control"style="background-color:#EEEEEE;" id="exampleInputPassword1">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Delivery Time</label>
                                        <input type="number" name="delivery_time" placeholder="* days" class="form-control"style="background-color:#EEEEEE;" id="exampleInputPassword1">

                                    </div>
                                    
                                   
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"> Image</label>
                                        <input type="file" name="image" class="form-control"style="background-color:#EEEEEE;" id="exampleInputPassword1">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Code</label>
                                        <input type="text" name="product_code"placeholder="code"style="background-color:#EEEEEE;" class="form-control"
                                            id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">About</label>
                                        <input type="text" name="about" placeholder="about" class="form-control"style="background-color:#EEEEEE;" id="exampleInputPassword1">

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