@extends('cms.index')
@section('detail-berkas')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIBESTRO| Detail Berkas</title>

 
</head>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Berkas</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Master Berkas</a></li>
              <li class="breadcrumb-item active">Detail Berkas</li>
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
                <h3 class="card-title">Detail Berkas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="height:100%">

              <dl>
                @foreach($data as $d)
                  <dt>Keterangan</dt>
                  <dd>{{$d->jenis}}</dd>
                  <dt>File</dt>
                  <dd></dd>
                  @if($d->jenjang=='SMA')
                  <embed src="{{ URL::to('/') }}/berkas/masterberkas/SMA/{{$d->nama_file}}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf"width="60%" height="1000px"/>
                  @else
                  <embed src="{{ URL::to('/') }}/berkas/masterberkas/S1/{{$d->nama_file}}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="60%" height="1000px" />
                  @endif
                @endforeach
                </dl>
               
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