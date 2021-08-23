@extends('cms.index')
@section('judul')
SIBESTRO - Detail Wawancara S1
@endsection
@section('detail-wawancara-s1')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          @foreach($datadiri as $data)
            <h1>Detail Data {{$data->name}}</h1>
          @endforeach
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Administrasi</a></li>
              <li class="breadcrumb-item active">Detail Administrasi S1</li>
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
                <h3 class="card-title">Detail Data Administrasi</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row">
              <div class="col-md-10">
              <table width="100%" style="padding:4px;">
                    <tr>
                        <td><b>Data Diri<b></td>
                        @foreach($datadiri as $dd)
                        <tr>
                            <td width="30%">Nama Lengkap</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dd->name}}</td>
                        </tr>
                        <tr>
                            <td width="15%">Jenis Kelamin</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dd->jenis_kelamin}}</td>
                        </tr>
                        <tr>
                            <td width="15%">Tempat/Tanggal Lahir</td>
                            <td width="2%">:</td>
                            @if($dd->tanggal_lahir==null)
                            <td></td>
                            @else
                            <td width="60%">{{$dd->tempat_lahir}}/ {{date('d M Y',strtotime($dd->tanggal_lahir))}}</td>
                            @endif
                        </tr>
                        <tr>
                            <td width="15%">Agama</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dd->agama}}</td>
                        </tr>
                        <tr>
                            <td width="15%">Alamat Sesuai KK</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dd->alamat_kk}}</td>
                        </tr>
                        <tr>
                            <td width="15%">Alamat Tinggal</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dd->alamat_user}}</td>
                        </tr>
                        <tr>
                            <td width="15%">Nomer Telp Pribadi</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dd->no_telp}}</td>
                        </tr>
                        <tr>
                            <td width="15%">Email</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dd->email}}</td>
                        </tr>
                        @endforeach
                        
                    </tr>
                    <tbody>
                        
                    </tbody>
                </table>
                </div>
                <div class="col-md-2">
                @foreach($fotodiri as $fd)
                <img src="{{asset('dist/img/fotodiri')}}/{{$fd->nama_file}}"style="height:200px;width:100px">
                @endforeach
                </div>
                </div>
                <br>
                <table width="100%" style="padding:4px;">
                    <tr>
                        <td><b>Data Keluarga<b></td>
                        @foreach($datakeluarga as $dk)
                        <tr>
                            <td width="24%"><b>{{$dk->jenis}}<b></td>
                            <td width="2%"></td>
                            <td width="60%"></td>
                        </tr>
                        <tr>
                            <td width="24%">Nama {{$dk->jenis}}</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dk->nama}}</td>
                        </tr>
                        <tr>
                            <td width="15%">Pekerjaan</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dk->pekerjaan}}</td>
                        </tr>
                        <tr>
                            <td width="15%">No HP {{$dk->jenis}}</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dk->no_telp}}</td>
                        </tr>
                      
                        <tr>
                            <td width="15%">Penghasilan {{$dk->jenis}} </td>
                            <td width="2%">:</td>
                            <td width="60%">@currency($dk->penghasilan)</td>
                        </tr>
                        @endforeach
                        
                        @foreach($datatanggungan as $dt)
                        <tr>
                            <td width="15%">Jumlah Tanggungan</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dt->jumlah}}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td width="15%" style="vertical-align:top">Data Saudara</td>
                            <td width="2%" style="vertical-align:top">:</td>
                            <td width="60%">
                            @if($jumlahsaudara==0)
                            Tidak Punya Saudara
                            @else
                           
                            <table class="table table-bordered table-striped">
                  <thead>
                      
                  <tr>
                    <th>Anak Ke</th>
                    <th>Nama Saudara</th>
                    <th>Usia</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php $no=1 ?>
                      @foreach($datasaudara as $ds)
                  <tr>
                    <td>{{$ds->anak_ke}}</td>
                    <td>{{$ds->nama_saudara}}
                    </td>
                    <td>{{$ds->umur}} Tahun</td>
                    <td>{{$ds->pendidikan}}</td>
                    <td>
                    {{$ds->pekerjaan}}
                    </td>
                  </tr>
                  @endforeach

                  </tbody>
                    <tfoot>
                    
                    </tfoot>
                      </table>
                            </td>
                        </tr>
                        
                    </tr>
                    <tbody>
                        
                    </tbody>
                    @endif
                </table>
                <br>
                <table width="100%" style="padding:4px;">
                    <tr>
                        <td><b>Rumah Tinggal Keluarga<b></td>
                        @foreach($datarumah as $dr)
                        <tr>
                            <td width="24%">Kepemilikan</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dr->kepemilikan}}</td>
                        </tr>
                        <tr>
                            <td width="15%">Luas Bangunan</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dr->luas_bangunan}} m&sup2;</td>
                        </tr>
                        <tr>
                            <td width="15%">Luas Tanah</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dr->luas_tanah}} m&sup2;</td>
                        </tr>
                        <tr>
                            <td width="15%">Jumlah Orang Tinggal</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dr->jumlah_orang}}</td>
                        </tr>
                        <tr>
                            <td width="15%">Sumber Air</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dr->sumber_air}}</td>
                        </tr>
                        @if($dr->value_listrik==null)
                        <tr>
                            <td width="15%">Sumber Listrik</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dr->sumber_listrik}}</td>
                        </tr>
                        @else
                        <tr>
                            <td width="15%">Sumber Listrik</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dr->sumber_listrik}} {{$dr->value_listrik}} Watt</td>
                        </tr>
                        @endif
                        @if($dr->transportasi_harian=='Lainnya')
                        <tr>
                            <td width="15%">Transportasi Harian</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dr->value_transportasi}}</td>
                        </tr>
                        @else
                        <tr>
                            <td width="15%">Transportasi Harian</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dr->transportasi_harian}}</td>
                        </tr>
                        @endif
                        <tr>
                            <td width="15%">Email</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dd->email}}</td>
                        </tr>
                        @endforeach
                        
                    </tr>
                    <tbody>
                        
                    </tbody>
                </table>
              
              <br>
              <b>Riwayat Pendidikan</b>
              <table class="table table-bordered table-striped">
                  <thead>
                      
                  <tr>
                    <th>No</th>
                    <th>Pendidikan</th>
                    <th>Nama Sekolah</th>
                    <th>Kota/Kabupaten</th>
                    <th>Tahun Lulus</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php $no=1 ?>
                      @foreach($datariwayatpendidikan as $drp)
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td>{{$drp->jenjang}}
                    </td>
                    <td>{{$drp->nama_sekolah}}</td>
                    <td>{{$drp->lokasi}}</td>
                    <td>
                    {{$drp->tahun_lulus}}
                    </td>
                  </tr>
                  @endforeach

                  </tbody>
                    <tfoot>
                    
                    </tfoot>
                      </table>
                            </td>
                        </tr>
                        
                    </tr>
                    <tbody>
                        
                    </tbody>
               
                </table>
              <br>
              <table width="100%" style="padding:4px;">
                    <tr>
                        <td><b>Pendidikan Asal SMA</b></td>
                        @foreach($sekolah as $sk)
                        <tr>
                            <td width="24%">Nama Sekolah</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$sk->nama_sekolah}}</td>
                        </tr>
                        <tr>
                            <td width="24%">Alamat Sekolah</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$sk->alamat}}</td>
                        </tr>
                        <tr>
                            <td width="24%">No Telp</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$sk->no_telp}}</td>
                        </tr>
                        <tr>
                            <td width="24%" style="vertical-align:top">Rata-Rata Nilai Rapor</td>
                            <td width="2%" style="vertical-align:top">:</td>
                            <td width="60%">
                            <table>
                            @foreach($datanilairapor as $rapor)
                              <tr>
                                  <td>Kelas {{$rapor->kelas}} , SMT {{$rapor->semester}}</td>
                                  <td >&nbsp; : &nbsp;</td>
                                  <td>{{$rapor->nilai}}</td>
                                  <td width="20%"></td>
                                  <td>Peringkat</td>
                                  <td >&nbsp; : &nbsp;</td>
                                  @if($rapor->peringkat==null)
                                  <td>-</td>
                                  @else
                                  <td>{{$rapor->peringkat}}</td>
                                  @endif
                                 
                              </tr>
                              @endforeach
                            </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="24%">Rata-rata nilai UN</td>
                            <td width="2%">:</td>
                            @foreach($nilaiun as $un)
                            <td width="60%">{{$un->nilai}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td width="24%">Rata-rata nilai US</td>
                            <td width="2%">:</td>
                            @foreach($nilaius as $us)
                            <td width="60%">{{$us->nilai}}</td>
                            @endforeach
                        </tr>
                        @endforeach
                        
                    </tr>
                    <tbody>
                        
                    </tbody>
                </table>

                <br>
              <table width="100%" style="padding:4px;">
                    <tr>
                        <td><b>Data Pendidikan S1</b></td>
                        @foreach($datapendidikans1 as $dps1)
                        <tr>
                            <td width="24%">Nama Universitas</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dps1->universitas}}</td>
                        </tr>
                        <tr>
                            <td width="24%">Fakultas / Jurusan</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dps1->fakultas}} / {{$dps1->nama_jurusan}}</td>
                        </tr>
                        <tr>
                            <td width="24%">Jalur Penerimaan</td>
                            <td width="2%">:</td>
                            <td width="60%">{{$dps1->penerimaan}}</td>
                        </tr>

                        @endforeach
                        
                    </tr>
                    <tbody>
                        
                    </tbody>
                </table>

                <br>
                <b>Prestasi Akademik</b>
              <table class="table table-bordered table-striped">
                  <thead>
                  
                  <tr>
                    <th>No</th>
                    <th>Prestasi</th>
                    <th>Tingkat</th>
                    <th>Tahun</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php $no=1 ?>
                      @foreach($dataprestasi as $dpa)
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td>{{$dpa->prestasi}}
                    </td>
                    <td>{{$dpa->tingkat}}</td>
                    <td>{{$dpa->tahun}}</td>
                
                  </tr>
                  @endforeach

                  </tbody>
                    <tfoot>
                    
                    </tfoot>
                      </table>
                            </td>
                        </tr>
                        
                    </tr>
                    <tbody>
                        
                    </tbody>
               
                </table>
                <br>
                <br>
                <h4>Kelengkapan Berkas</h4>
                <b>Foto Rumah</b>
                <br>
                <div class="row">
                @foreach($fotorumah as $fr)
                  <div class="col-md-2">
                    <div>
                    <a href="{{asset('dist/img/fotorumah')}}/{{$fr->nama_file}}" data-toggle="lightbox" data-title="{{$fr->jenis}}" data-gallery="gallery">
                          <img src="{{asset('dist/img/fotorumah')}}/{{$fr->nama_file}}" style="height:200px;width:200px" class="img-fluid mb-2" alt="{{$fr->jenis}}"/>
                    </a> </div>
                   </div>
                @endforeach
                </div>
                <br>

                <b>Bukti Penerimaan</b>
                <br>
                <div class="row">
                @foreach($buktipenerimaan as $bktp)
                  <div class="col-md-2">
                    <div>
                    <a href="{{asset('dist/img/buktipenerimaan')}}/{{$bktp->nama_file}}" data-toggle="lightbox" data-title="Bukti Penerimaan" data-gallery="gallery">
                          <img src="{{asset('dist/img/buktipenerimaan')}}/{{$bktp->nama_file}}" style="height:200px;width:200px" class="img-fluid mb-2" alt="{{$fr->jenis}}"/>
                    </a> </div>
                   </div>
                @endforeach
                </div>
                <br>
                <b>Bukti Pembayaran UKT Semester 1</b>
                <br>
                @foreach($buktiukt as $bu)
                <embed src="{{ asset('berkas/ukt')}}/{{$bu->nama_file}}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf"width="70%" height="1000px"/>
                @endforeach
                <br>
                
                <br>
                <b>Identitas Diri dan Keluarga</b>
                <br>
                
                @foreach($berkasidentitas as $bi)
                  <embed src="{{asset('berkas/identitas')}}/{{$bi->nama_file}}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf"width="70%" height="1000px"/>
                @endforeach
                <br>
                <br>
      
                <b>Surat Keterangan Tidak Mampu</b>
                <br>
                @foreach($sktm as $SKTM)
                <embed src="{{asset('berkas/sktm')}}/{{$SKTM->nama_file}}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf"width="70%" height="1000px"/>
                @endforeach
                <br>
                <br>
               
                <b>Tagihan</b>
                <div class="row">
                @foreach($buktitagihan as $bt)
                  <div class="col-md-4">
                    <div>
                    <h6>{{$bt->jenis}}</h6>
                    <embed src="{{asset('berkas/tagihan')}}/{{$bt->nama_file}}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%"height="500px"/>
                    </div>
                   </div>
                @endforeach
                </div>
                <br>
                <br>
               

                <b>Bantuan Sosial</b>
                <div class="row">
                @foreach($bansos as $bss)
                  <div class="col-md-4">
                    <div>
                    <h6>{{$bss->jenis}}</h6>
                    <embed src="{{asset('berkas/bansos')}}/{{$bss->nama_file}}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%"height="500px"/>
                    </div>
                   </div>
                @endforeach
                </div>
                <br>
                <br>

                <b>Ijazah SKHU</b>
                <div class="row">
                @foreach($ijazahskhu as $ijz)
                  <div class="col-md-4">
                    <div>
                    <h6>{{$ijz->jenis}}</h6>
                    <embed src="{{asset('berkas/ijazahskhu')}}/{{$ijz->nama_file}}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%"height="500px"/>
                    </div>
                   </div>
                @endforeach
                </div>
                <br>
                <br>

                <b>Penghasilan Orang Tua</b>
                <br>
                @foreach($penghasilan as $phs)
                <embed src="{{asset('berkas/penghasilan')}}/{{$phs->nama_file}}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf"width="70%" height="1000px"/>
                @endforeach
                <br>
                <br>

                <b>Rapor</b>
                <br>
                @foreach($berkasrapor as $rpr)
                <embed src="{{asset('berkas/rapor')}}/{{$rpr->nama_file}}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf"width="70%" height="1000px"/>
               @endforeach
                <br>
                <br>
                

               
                <b>Surat Pernyataan Keaslian Data</b>
                <br>
                @foreach($suratpernyataan as $srp)
                <embed src="{{asset('berkas/suratpernyataan')}}/{{$srp->nama_file}}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf"width="70%" height="1000px"/>
                @endforeach
                <br>
                <br>
                
             
                
              
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
   



@endsection