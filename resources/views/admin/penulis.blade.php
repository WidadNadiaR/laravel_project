@extends("layout.appadmin")

@ections("content")
        <div class="row">
            <div class="col-6">
            <h2>Input Penulis </h2>
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="namaBuku" class="form-label">Nama Kategori </label>
                        <input type="text" class="form-control" name="judul" >
                    </div>
                    <div class="mb-3">
                        <label for="nmpengarang" class="form-label">Deskripsi Kategori</label>
                        <input type="text" class="form-control" name="judul" >
</div>
<div class="mb-3">
                        <input type="submit" value="Input Data Buku" class="btn btn-primary" name="btnInputBukuGambar">
                    </div>

                     
@endsection