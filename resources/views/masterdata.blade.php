@extends('layouts.main')
@section('title', 'MasterData')
@section('artikel')
<div class="card">
    <div class="card-header">
        <a href="/masterdata/form-add" class="btn btn-primary">
            <i class="bi bi-plus-square"></i> Label
        </a>
    </div>
    <div class="card-body">
        @if (session('alert'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session('alert') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div style="overflow-x: auto;">
            <table id="example" class="table table-bordered " style="width: 100%;">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Label Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Established Year</th>
                        <th>CEO</th>
                        <th>Contact</th>
                        <th>Website</th>
                        <th>Music Genre</th>
                        <th>Famous Artists</th>
                        <th>Number of Albums</th>
                        <th>Revenue</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lr as $idx => $l)
                        <tr>
                            <td>{{ $idx + 1 }}</td>
                            <td>{{ $l->lableName }}</td>
                            <td>{{ $l->adress }}</td>
                            <td>{{ $l->city }}</td>
                            <td>{{ $l->country }}</td>
                            <td>{{ $l->establishedYear }}</td>
                            <td>{{ $l->ceo }}</td>
                            <td>{{ $l->contact }}</td>
                            <td>{{ $l->website }}</td>
                            <td>{{ $l->musicGenre }}</td>
                            <td>{{ $l->famousArtists }}</td>
                            <td>{{ $l->numberOfAlbums }}</td>
                            <td>{{ $l->revenue }}</td>
                            <td>
                                <a href="/form-edit/{{ $l->id }}" class="btn btn-success bi bi-pencil"></a>
                                <a href="/delete/{{ $l->id }}" class="btn btn-danger bi bi-trash"></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
