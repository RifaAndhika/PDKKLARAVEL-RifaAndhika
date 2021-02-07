<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>


    <div class="container">
    @if( session('sukses') )
    </div>
    <div class="alert alert-success" role="alert">
    {{session('sukses')}}
    </div>
    @endif
    <div class="row">
    <div class="col-lg-12">
    <form action="/siswa/{{$siswa->id}}/update" method="POST">
      {{csrf_field()}}
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama"
    value="{{$siswa -> nama}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
    <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Jurusan"
    value="{{$siswa -> jurusan}}">
  </div>


  <select class="form-select" aria-label="Default select example">
  <option value="L" @if ($siswa->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
  <option value="P" @if ($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
</select>


<div  class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Agama</label>
    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="agama"
    value="{{$siswa -> agama}}">
  </div>


  <div  class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="Email"
    value="{{$siswa -> email}}">
  </div>
 
  <div  class="form-floating">
  <textarea name="alamat" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{$siswa -> alamat}} </textarea>
  <label for="floatingTextarea2">Alamat</label>
</div>



      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-warning">Update</button>
      </div>
      </form>
      </div>
      </div>
      </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>


