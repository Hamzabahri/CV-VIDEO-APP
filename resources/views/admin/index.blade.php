@extends('admin.app')
@section('dash')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Entreprise</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
              <li class="breadcrumb-item active">dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste de l'entreprise</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                   
                    <th>Nom de l'entreprise</th>
                    <th>Directeur général</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    <th>Status</th>
                    <th>Action</th>
                   
                    
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($desc as $row)
                  <tr>
                    <td>{{$row->nom_entreprise}}</td>
                    <td>{{$row->prenom}} {{$row->nom}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->telephone}}</td>
                    <td>{{$row->adresse}}</td>
                    <td>
                      <div class="form-group">
                        <form name="activate_disactiveSTE" action="{{route("statut", ['id' => $row->id])}}" method="POST">
@csrf                         
                          <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                            <input type="checkbox" name="status_ste" @if($row->statut == "1") checked @endif
                            class="custom-control-input activate_disactiveSTE" id="customSwitch3_{{$row->id}}">
                            <label class="custom-control-label" for="customSwitch3_{{$row->id}}"></label>
                          </div>
                        </form>
                      
                      </div>
                  </td>
                    <td><a href="{{route('entreprise', ["id" => $row->id])}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block ">
                                <span class="mr-2 icon-lock_outline"></span>View</a></td>
                    
                    
                    
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    
                    <th>Entreprise</th>
                    <th>Directeur général</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    <th>Status</th>
                    <th>Action</th>
                   
                    
          
                  </tr>
                  </tfoot>
                </table>
                <br>    
              </div>
              <!-- /.card-body -->
            </div>

            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <input type="text" disabled >

@endsection