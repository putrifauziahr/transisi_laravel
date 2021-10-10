<html>

<div class="modal-body">
    <form action="/postCreateCompany" method="POST" onsubmit="return validasi_input(this)" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <label>Nama</label>
            <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukan Nama">
            @error('nama')<div class="invalid-feedback">{{$message}}</div> @enderror
        </div>

        <div class="form-group">
            <label>Email</label>
            <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Masukan Email">
            @error('email')<div class="invalid-feedback">{{$message}}</div> @enderror
        </div>

        <div class="form-group">
            <label>Website</label>
            <input name="website" type="text" class="form-control @error('website') is-invalid @enderror" placeholder="Masukan Website">
            @error('website')<div class="invalid-feedback">{{$message}}</div> @enderror
        </div>

        <div class="form-group">
            <label>Logo</label>
            <input name="logo" type="file" class="form-control @error('logo') is-invalid @enderror">
            @error('logo')<div class="invalid-feedback">{{$message}}</div> @enderror
        </div>


        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </form>
</div>

</html>