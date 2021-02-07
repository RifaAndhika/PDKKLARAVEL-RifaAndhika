<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
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
    <div class="col-6"><h1>Data Siswa</h1></div>
    <div class="col-6"><button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
Tambah Data Siswa
    </button>
    </div> 

<table class="table table-hover">
<tr>
    <th>NO</th>
    <th>NAMA</th>
    <th>JURUSAN</th>
    <th>JENIS KELAMIN</th>
    <th>AGAMA</th>
    <th>EMAIL</th>
    <th>ALAMAT</th>
    <th>AKSI</th>
    
    </tr>
    <?php $i = 1; ?>
        @foreach($data_siswa as $siswa)
        <tr>
        <td>{{$i++}}</td>
  
    <td>{{$siswa->nama}}</td>
    <td>{{$siswa->jurusan}}</td>
    <td>{{$siswa->jenis_kelamin}}</td>
    <td>{{$siswa->agama}}</td>
    <td>{{$siswa->email}}</td>
    <td>{{$siswa->alamat}}</td>
    <td>
        <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning bt-sm">Edit</a></td>
    

  

    </tr>

@endforeach

</table>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/siswa/create" method="POST">
      {{csrf_field()}}
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
    <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Jurusan">
  </div>

  <select class="form-select" aria-label="Default select example">
  <option selected>Pilih Jenis Kelamin</option>
  <option value="L">Laki-Laki</option>
  <option value="P">Perempuan</option>
</select>


<div  class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Agama</label>
    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="agama">
  </div>


  <div  class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="Email">
  </div>
 
  <div  class="form-floating">
  <textarea name="alamat" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Alamat</label>
</div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>