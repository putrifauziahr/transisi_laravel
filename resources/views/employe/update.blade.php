<html>

<div class="modal-body">
    <form action="/admin/tambahPetani" method="POST" onsubmit="return validasi_input(this)">
        {{csrf_field()}}

        <div class="form-group">
            <label>Nama</label>
            <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukan Nama">
            @error('nama')<div class="invalid-feedback">{{$message}}</div> @enderror
        </div>

        <div class="form-group">
            <label>Email</label>
            <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Masukan email">
            @error('email')<div class="invalid-feedback">{{$message}}</div> @enderror
        </div>

        <div class="form-group">
            <label>Company</label>
            <select name="id_company" class="form-control">
                <option value="pilih"> Pilih </option>
                @foreach($company as $p)
                <option value="{{ $p -> id_company}}">{{$p->desa}}</option>
                @endforeach
            </select>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </form>
</div>

</html>