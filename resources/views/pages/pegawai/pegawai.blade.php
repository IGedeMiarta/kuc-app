@extends('layouts.pagesmain')

{{-- @extends('layouts.partials.headerlink') --}}
@section('content')
    <div class="card radius-15">
        <div class="card-header border-bottom-0">
            <div class="d-lg-flex align-items-center">
                <div>
                    <h5 class="mb-2 mb-lg-0">header</h5>
                </div>

            </div>
        </div>
        <div class="card-body ">
            <div class="card-body radius-10 border">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>JenKel</th>
                                <th>Hp</th>
                                <th>Status</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawai as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->Nama }}</td>
                                    <td>{{ $item->jabatan->NamaJabatan }}</td>
                                    <td>{{ $item->Jenis_Kelamin }}</td>
                                    <td>{{ $item->Telpon }}</td>
                                    <td><a href="javascript:;"
                                            class="btn btn-sm  @if ($item->StatusPegawai == 'Kontrak')
                                            btn-light-info
                                        @else 
                                            btn-light-success
                                        @endif btn-block radius-30">{{ $item->StatusPegawai }}</a>
                                    </td>
                                    <td>
                                        <a href="/pegawai-detail/{{ $item->NIP }}"
                                            class="btn btn-sm btn-light-primary radius-10">Detail</a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
