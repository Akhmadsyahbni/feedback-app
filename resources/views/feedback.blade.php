@extends('layouts.app')
@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Feedback</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section" style="min-height: 500px">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Datatables</h5>
                
                        <!-- Table with stripped rows -->
                        <table id="myTable" class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">No Kamar</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($feedback as $key => $item)
                                <tr>
                                    <th scope="row">
                                        {{ ($feedback->currentPage() - 1) * $feedback->perPage() + $loop->iteration }}
                                    </th>
                                    <td>{{ $item->no_kamar }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>
                                        <!-- Uncomment and use the following if needed -->
                                        {{-- <a href="{{ route('admin.keluarga.edit_keluarga', ['id' => $item->id]) }}" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a> --}}
                                        <a href="#" class="btn btn-sm btn-info">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                
                        <div class="d-flex justify-content-end">
                            {{ $feedback->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
@endsection