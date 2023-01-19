@extends('layouts.master')
@section('mainContent')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          
            
            <!-- /.card-header -->
            <div class="row">
            <?php $i=0 ?>
          @foreach ($test as $value)
        
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="panel panel-back noti-box">

                    <div class="card">
                        <img src="{{($value->image)}}" style="margin:auto; width:120px;height:150px">
                        
                        <p class="title">{{$value->name}} </p>
                        <a href=""><button class="btnnn" >Details</button></a>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  <style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
    }

    .title {
        color: grey;
        font-size: 18px;
    }

    .btnnn {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: #764432;
        background-color: #E69D4A;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    a {
        text-decoration: none;
        font-size: 14px;
        color: black;
    }

    button:hover,
    a:hover {
        background-color: #8DC6C3;
        opacity: 0.8;
    }
</style>


@endsection