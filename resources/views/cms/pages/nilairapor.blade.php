@extends('cms.index')
@section('nilai-rapor')
@section('judul')
SIBESTRO - Nilai Rapor
@endsection

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Nilai Rapor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              
              <li class="breadcrumb-item active">Nilai Rapor</li>
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
             <br>
              <!-- /.card-header -->
              <div class="card-body">
              @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
                </div>
              @endif
                <div>
        

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nilai Rapor</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              
              <form action ="{{route('tambah-nilai-rapor')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
             
              <div class="row">
                <div class="col-md-3">
                    @if(Auth::user()->role=="S1")
                    <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Kelas :</label>
                                <select class="form-control"  id="recipient-name"required name="kelas" >
                                    <option value>Pilih Kelas</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                    </div>
                    @else
                    <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Kelas :</label>
                                <select class="form-control"  id="recipient-name"required name="kelas" >
                                    <option value>Pilih Kelas</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                    </div>
                    @endif
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Semester :</label>
                                <select class="form-control"  id="recipient-name"required name="semester" >
                                    <option value>Pilih Semester</option>
                                    <option value="1">Ganjil</option>
                                    <option value="2">Genap</option>
                                   
                                </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nilai :</label>
                        <input type="number" required class="form-control" step="0.01"placeholder="Nilai" name="nilai">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Peringkat(kosongi jika tidak ada) :</label>
                        <input type="number"  class="form-control" placeholder="Peringkat" name="peringkat">
                    </div>
                </div>
                
              </div>
              
            
            
              
              <button type="submit" width="100%"class="btn btn-success" >Tambah</button>
            
              </form>
               </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      @if($total==0)
      <div></div>
      @else
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Nilai Rapor</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
      <table id="example2" class="table table-bordered table-striped">
                  <thead>
                      
                  <tr>
                    
                    <th>Kelas</th>
                    <th>Semester</th>
                    <th>Nilai</th>
                    <th>Peringkat</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                     @foreach($data as $d)
                  <tr>
                   
                    <td>{{$d->kelas}}
                    </td>
                    <td>{{$d->semester}}</td>
                    <td>{{$d->nilai}}</td>
                    <td>{{$d->peringkat}}</td>
                   

                   
                  
                    <td>
                     <button class="btn btn-danger"data-toggle="modal" data-target="#confirmModal{{$d->id}}" style="padding:3px 6px;"><i class="fa fa-trash"></i></button>
                   
                    </td>

                  <!-- confirmModal Hapus  -->
                  </div>
                    <div id="confirmModal{{$d->id}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                              <h4 class="modal-title">Konfirmasi</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  
                              </div>
                              <div class="modal-body">
                                  <a align="center" style="margin:0;">Anda Yakin Ingin Menghapus Data Ini?</a>
                              </div>
                              <div class="modal-footer">
                              <a href="{{route('delete-nilai-rapor',$d->id)}}"><button type="button" name="ok_button" id="ok_button" class="btn btn-danger btn-sm">Hapus</button></a>
                                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                  
                  </div>
                 
                  </tr>
                  @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                  
                    <th>Kelas</th>
                    <th>Semester</th>
                    <th>Nilai</th>
                    <th>Peringkat</th>
                    <th>Action</th>
                   
                  </tr>
                  </tfoot>
                  </table>
</div>
</div>
                  @endif
     
           
        
              
     
      <!-- /.container-fluid -->
    </section>
      
             
            </div>
           
           
          

</div>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

@endsection