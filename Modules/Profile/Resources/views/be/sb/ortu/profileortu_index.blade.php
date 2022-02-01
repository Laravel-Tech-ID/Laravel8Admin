@extends(config('app.be_layout').'.main')
@section('content')
            @if(session('error'))
                <div class="card shadow bg-danger text-white" style="margin-bottom:20px;">
                    <div class="card-body" style="overflow-x:auto;padding:10px;">{!! session('error') !!}</div>
                </div>
            @endif
            @if(session('success'))
                <div class="card shadow bg-success text-white" style="margin-bottom:20px;">
                    <div class="card-body" style="overflow-x:auto;padding:10px;">{!! session('success') !!}</div>
                </div>
            @endif

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Orang Tua {{$personal->user->name}} Management</h1>
            <div class="d-none d-sm-inline-block">
                <a href="{{ route('admin.profile.ortu.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Tambah Data Orang Tua</a>    
                <a href="{{ route('admin.dashboard.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-chevron-left fa-sm text-white-50"></i> Kembali</a>    
            </div>
          </div>
          <!-- Content Row -->
          <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Orang Tua {{$personal->user->name}} List</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body" style="overflow-x:auto;padding:20px;">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="25%">Nama Orang Tua</th>
                                    <th width="25%">Hubungan Keluarga</th>
                                    <th width="25%">Keterangan</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <td>{{($datas->currentPage() - 1) * $datas->perPage() + $loop->iteration}}</td>
                                        <td>{{ $data->user->name }}</td>
                                        <td>{{ $data->jenis }}</td>
                                        <td>{{ $data->ket }}</td>
                                        <td align="center">
                                          <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Action
                                            </button>
                                            <div class="dropdown-menu">
                                              <a href="{{ route('admin.profile.ortu.edit',$data->id) }}" class="dropdown-item">Edit</a>
                                              <form action="{{ route('admin.profile.ortu.destroy',$data->id) }}" method="post">
                                                <input type="submit" value="Delete" class="dropdown-item" onclick="return confirm('Confirm Delete')"/>
                                                @method('DELETE')
                                                @csrf
                                              </form>                                              
                                            </div>
                                          </div>
                                        </td>
                                    </tr>
                                @endforeach
                              </tbody>
                        </table>        
                        <div class="d-none d-sm-inline-block" style="float:right;">
                          {{ $datas->appends(request()->input())->links('vendor.pagination.bootstrap-4') }}
                        </div>          
                      </div>
                  </div>                
            </div>
        </div>
        @endsection