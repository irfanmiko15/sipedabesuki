@extends('cms.index')
@section('data-rumah')
@section('judul')
SIBESTRO - Data Rumah
@endsection

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Rumah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              
              <li class="breadcrumb-item active">Data Rumah</li>
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
                <h3 class="card-title">Data Rumah</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              @if($total==0)
              <form action ="{{route('tambah-data-rumah')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="row">
              
                <div class="col-md-12">
                    <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Kepemilikan :</label>
                                    <select class="form-control"  id="recipient-name"required name="kepemilikan" >
                                        <option value>Pilih Jenis Kepemilikan</option>
                                        <option value="Sendiri" >Sendiri</option>
                                        <option value="Sewa Tahunan">Sewa Tahunan</option>
                                        <option value="Sewa Bulanan">Sewa Bulanan</option>
                                        <option value="Menumpang">Menumpang</option>
                                    </select>
                    </div>
                </div>
              </div>
              <div class="row">
              <div class="col-md-12">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Luas Tanah :</label>
                        <select class="form-control"  id="recipient-name"required name="luas_tanah" >
                                        <option value>Pilih Luas Tanah</option>
                                        <option value=">200" > >200 m&sup2; </option>
                                        <option value="100-200"> 100-200 m&sup2;</option>
                                        <option value="50-100" >50-100 m&sup2; </option>
                                        <option value="30-50" >30-50 m&sup2; </option>
                                        <option value="<30" > < 30 m&sup2; </option>
                        </select>
                    </div>
                </div>
              </div>
              <div class="row">
              <div class="col-md-12">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Luas Bangunan :</label>
                        <select class="form-control"  id="recipient-name"required name="luas_bangunan" >
                                        <option value>Pilih Luas Bangunan</option>
                                        <option value=">200" > >200 m&sup2; </option>
                                        <option value="100-200"> 100-200 m&sup2;</option>
                                        <option value="50-100" >50-100 m&sup2; </option>
                                        <option value="30-50" >30-50 m&sup2; </option>
                                        <option value="<30" > < 30 m&sup2; </option>
                        </select>
                    </div>
                </div>
              </div>
             
              <div class="row">
              <div class="col-md-12">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Jumlah Orang Tinggal :</label>
                        <input type="number" required class="form-control" placeholder="Jumlah Orang Tinggal"  name="jumlah_orang">
                    </div>
                </div>
              </div>
              <div class='row'>
                <div class="col-md-12">
                    <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Sumber Air :</label>
                                <select class="form-control"  id="recipient-name"required name="sumber_air" >
                                    <option value>Pilih Sumber Air</option>
                                    <option value="PDAM" >PDAM</option>
                                    <option value="Sumur Pribadi">Sumur Pribadi</option>
                                    <option value="Sumur Bersama">Sumur Bersama</option>
                                    <option value="Beli Air Tanki">Beli Air Tanki</option>
                                </select>
                    </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Sumber Listrik:</label>
                        <br>
                        <input type="radio" name="sumber_listrik" id="PLN" onchange=ceklistrik()required value="PLN">PLN &nbsp; <input type="text" name="value_listrik" id="value_listrik"/> Volt
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="sumber_listrik" onchange=ceklistrik() id="tidak_ada"required value="Tidak Ada">Tidak Ada
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Kendaraan Harian:</label>
                        <br>
                        <input type="radio" name="transportasi_harian" id="motor" onchange=cekkendaraan() required value="Motor">&nbsp;Motor <br>
                        <br>
                        <input type="radio" name="transportasi_harian"id="sepeda" onchange=cekkendaraan() required value="Sepeda">&nbsp;Sepeda <br>
                        <br>
                        <input type="radio" name="transportasi_harian" id="mobil" onchange=cekkendaraan() required value="Mobil">&nbsp;Mobil <br>
                        <br>
                        <input type="radio" name="transportasi_harian" id="kendaraan_umum" onchange=cekkendaraan() required value="Kendaraan Umum">&nbsp;Kendaraan Umum <br>
                        <br>
                        <input type="radio" name="transportasi_harian" id="lainnya" onchange=cekkendaraan() required value="Lainnya">Lainnya &nbsp; <input type="text" id="value_transportasi" name="value_kendaraan"/>
                       
                    </div>
                </div>
              </div>
              <div class="row">
              <div class="col-md-12">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Lama Menetap di Gresik :</label>
                        <input type="number" required class="form-control" placeholder="Lama Menetap"  name="lama_menetap">
                    </div>
                </div>
              </div>
             
             
            
            
              
              <button type="submit" width="100%"class="btn btn-success" >Simpan</button>
            
              </form>
              @else
              @foreach($data as $d)
              <form action ="{{route('update-data-rumah',$d->id)}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
             
              <div class="row">
              
              <div class="col-md-12">
                  <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Kepemilikan :</label>
                                  <select class="form-control"  id="recipient-name"required name="kepemilikan" >
                                      <option value>Pilih Jenis Kepemilikan</option>
                                      <option value="Sendiri"  <?php if($d->kepemilikan=='Sendiri') echo "selected" ?> >Sendiri</option>
                                      <option value="Sewa Tahunan" <?php if($d->kepemilikan=='Sewa Tahunan') echo "selected" ?>>Sewa Tahunan</option>
                                      <option value="Sewa Bulanan" <?php if($d->kepemilikan=='Sewa Bulanan') echo "selected" ?>>Sewa Bulanan</option>
                                      <option value="Menumpang" <?php if($d->kepemilikan=='Menumpang') echo "selected" ?>>Menumpang</option>
                                  </select>
                  </div>
              </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                  <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Luas Tanah :</label>
                      <select class="form-control"  id="recipient-name"required name="luas_tanah" >
                                      <option value>Pilih Luas Tanah</option>
                                      <option value=">200"<?php if($d->luas_tanah=='>200') echo "selected" ?> > >200 m&sup2; </option>
                                      <option value="100-200"<?php if($d->luas_tanah=='100-200') echo "selected" ?>> 100-200 m&sup2;</option>
                                      <option value="50-100"<?php if($d->luas_tanah=='>50-100') echo "selected" ?> >50-100 m&sup2; </option>
                                      <option value="30-50"<?php if($d->luas_tanah=='>30-50') echo "selected" ?> >30-50 m&sup2; </option>
                                      <option value="<30" <?php if($d->luas_tanah=='<30') echo "selected" ?>> < 30 m&sup2; </option>
                      </select>
                  </div>
              </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                  <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Luas Bangunan :</label>
                      <select class="form-control"  id="recipient-name"required name="luas_bangunan" >
                                      <option value>Pilih Luas Bangunan</option>
                                      <option value=">200"<?php if($d->luas_bangunan=='>200') echo "selected" ?> > >200 m&sup2; </option>
                                      <option value="100-200"<?php if($d->luas_bangunan=='100-200') echo "selected" ?>> 100-200 m&sup2;</option>
                                      <option value="50-100"<?php if($d->luas_bangunan=='>50-100') echo "selected" ?> >50-100 m&sup2; </option>
                                      <option value="30-50"<?php if($d->luas_bangunan=='>30-50') echo "selected" ?> >30-50 m&sup2; </option>
                                      <option value="<30" <?php if($d->luas_bangunan=='<30') echo "selected" ?>> < 30 m&sup2; </option>
                      </select>
                  </div>
              </div>
            </div>
           
            <div class="row">
            <div class="col-md-12">
                  <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Jumlah Orang Tinggal :</label>
                      <input type="number" required class="form-control" placeholder="Jumlah Orang Tinggal"  name="jumlah_orang" value="{{$d->jumlah_orang}}">
                  </div>
              </div>
            </div>
            <div class='row'>
              <div class="col-md-12">
                  <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Sumber Air :</label>
                              <select class="form-control"  id="recipient-name"required name="sumber_air" >
                                  <option value>Pilih Sumber Air</option>
                                  <option value="PDAM" <?php if($d->sumber_air=='PDAM') echo "selected" ?>>PDAM</option>
                                  <option value="Sumur Pribadi"<?php if($d->sumber_air=='Sumur Pribadi') echo "selected" ?>>Sumur Pribadi</option>
                                  <option value="Sumur Bersama" <?php if($d->sumber_air=='Sumur Bersama') echo "selected" ?>>Sumur Bersama</option>
                                  <option value="Beli Air Tanki" <?php if($d->sumber_air=='Beli Air Tanki') echo "selected" ?>>Beli Air Tanki</option>
                              </select>
                  </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Sumber Listrik:</label>
                      <br>
                      <input type="radio" name="sumber_listrik" onchange=ceklistrik() required id="PLN" value="PLN" <?php if($d->sumber_listrik=='PLN') echo "checked" ?>>PLN &nbsp; <input type="text" name="value_listrik" id="value_listrik" value="{{$d->value_listrik}}"/> Volt
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="radio" name="sumber_listrik"  onchange=ceklistrik() required id="tidak_ada" value="Tidak Ada" <?php if($d->sumber_listrik!='PLN') echo "checked" ?>>Tidak Ada
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Kendaraan Harian:</label>
                      <br>
                      <input type="radio" name="transportasi_harian" id ="motor"  onchange=cekkendaraan() required value="Motor"<?php if($d->transportasi_harian=='Motor') echo "checked" ?>>&nbsp;Motor <br>
                      <br>
                      <input type="radio" name="transportasi_harian" id="sepeda" onchange=cekkendaraan() required value="Sepeda"<?php if($d->transportasi_harian=='Sepeda') echo "checked" ?>>&nbsp;Sepeda <br>
                      <br>
                      <input type="radio" name="transportasi_harian" id="mobil" onchange=cekkendaraan() required value="Mobil"<?php if($d->transportasi_harian=='Mobil') echo "checked" ?>>&nbsp;Mobil <br>
                      <br>
                      <input type="radio" name="transportasi_harian" id="kendaraan_umum" onchange=cekkendaraan() required value="Kendaraan Umum"<?php if($d->transportasi_harian=='Kendaraan Umum') echo "checked" ?>>&nbsp;Kendaraan Umum <br>
                      <br>
                      <input type="radio" name="transportasi_harian" id="lainnya" onchange=cekkendaraan() required value="Lainnya" <?php if($d->transportasi_harian=='Lainnya') echo "checked" ?>>Lainnya &nbsp; <input type="text" name="value_transportasi" id="value_transportasi" value="{{$d->value_transportasi}}"/>
                     
                  </div>
              </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                  <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Lama Menetap di Gresik :</label>
                      <input type="number" required class="form-control" placeholder="Lama Menetap"  name="lama_menetap" value="{{$d->lama_menetap}}">
                  </div>
            </div>
            
            </div>
           
           
          
          
            
            <button type="submit" width="100%"class="btn btn-success" >Simpan</button>
          
            
              </form>
               @endforeach
              
             
              @endif
            

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
    <script>
    function cekkendaraan(){
      if(document.getElementById('lainnya').checked==true){
        document.getElementById("value_transportasi").required = true;
      }
      else if(document.getElementById('lainnya').checked==false){
        document.getElementById("value_transportasi").required = false;
      }
    }
    function ceklistrik(){
      if(document.getElementById('PLN').checked==true){
        document.getElementById("value_listrik").required = true;
      }
      else if(document.getElementById('PLN').checked==false){
        document.getElementById("value_listrik").required = false;
      }
    }
    </script>

@endsection