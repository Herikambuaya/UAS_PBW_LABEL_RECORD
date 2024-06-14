@extends('layouts/main')
@section('title', "Form Add Label Record")
@section('artikel')
<div class="card">
    <div class="card-header"></div>
    <div class="card-body">
        <form action="/save" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Label Name</label>
                <input type="text" name="lableName" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="adress" class="form-control" required>
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" name="city" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Country</label>
                <input type="text" name="country" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Established Year</label>
                <input type="number" min="1900" max="{{ date('Y') }}" name="establishedYear" class="form-control" required>
            </div>
            <div class="form-group">
                <label>CEO</label>
                <input type="text" name="ceo" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Contact</label>
                <input type="text" name="contact" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Website</label>
                <input type="url" name="website" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Music Genre</label>
                <input type="text" name="musicGenre" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Famous Artists</label>
                <input type="text" name="famousArtists" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Number of Albums</label>
                <input type="number" min="0" name="numberOfAlbums" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Revenue</label>
                <input type="number" min="0" name="revenue" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
