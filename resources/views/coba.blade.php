<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
                     
                      <tbody>
                      @foreach($alum as $a)
                        <tr>
                        <td>
                        {{$a->nim}}
                          </td>
                          <td>
                          {{$a->nama}}
                          </td>
                          <td>
                          {{$a->prodi}}
                          </td>
                          <td>
                          {{$a->tahunLulus}}
                          </td>
                          <td>
                          <a class="nav-link btn btn-info btn-sm" data-toggle="collapse" href="#coba{{$a->nim}}" aria-expanded="false" aria-controls="form-elements">
                            Detail
                          </a>
                          </td>
                          <td>
                          <a class="btn btn-success btn-sm" href="/editAlum/{{$a->nim}}">
                           <i class="ti-pencil"></i>
                          </a>
                          |
                          <a class="btn btn-danger btn-sm" href="/deleteAlum/{{$a->nim}}">
                           <i class="ti-trash"></i>
                          </a>
                          </td>
                          
                          
                        </tr>
                        
                        <tr class="collapse" id="coba{{$a->nim}}">
                        
                          <td colspan=2>
                          <h6>Data diri</h6>
                          <br>  
                          No Handphone : {{$a->noHp}}
                            <br>
                            <br>
                          Kota Lahir : {{$a->kotaLahir}}
                          <br>
                          <br>
                          Tangal Lahir : {{$a->tanggalLahir}}
                          <br>
                          <br>
                          Jenis Kelamin : {{$a->jk}}
                          <br>
                          <br>
                          Email : {{$a->email}}
                          <br>
                          <br>
                          <h6>Domisili</h6>
                          <br>
                          Provinsi : {{$a->provinsi}}
                          <br>
                          <br>
                          Kota : {{$a->kota}}
                          <br>
                          <br>
                          Alamat : {{$a->alamat}}
                          <br>
                          <br>
                          Kode Pos : {{$a->kodePos}}
                         
                          </td>
                          <td colspan=4>
                          <h6>Pekerjaan</h6>
                          <br>  
                          Nama Pekerajaan : {{$a->pekerjaan}}
                          <br>
                          <br>
                          Jenis Pekerajaan : {{$a->jp}}
                          <br>
                          <br>
                          Nama Perusahaan : {{$a->namaPerusahaan}}
                          <br>
                          <br>
                          Alamat Perusahaan : {{$a->alamatPerusahaan}}
                          </td>
                        </tr>
                        
               @endforeach
                      </tbody>
                    </table>
					

					@foreach($alum as $b)
                        <tr class="collapse" id="coba{{$b->nim}}">
                        
                          <td colspan=2>
                          <h6>Data diri</h6>
                          <br>  
                          No Handphone : {{$b->noHp}}
                            <br>
                            <br>
                          Kota Lahir : {{$b->kotaLahir}}
                          <br>
                          <br>
                          Tangal Lahir : {{$b->tanggalLahir}}
                          <br>
                          <br>
                          Jenis Kelamin : {{$b->jk}}
                          <br>
                          <br>
                          Email : {{$b->email}}
                          <br>
                          <br>
                          <h6>Domisili</h6>
                          <br>
                          Provinsi : {{$b->provinsi}}
                          <br>
                          <br>
                          Kota : {{$b->kota}}
                          <br>
                          <br>
                          Alamat : {{$b->alamat}}
                          <br>
                          <br>
                          Kode Pos : {{$b->kodePos}}
                         
                          </td>
                          <td colspan=4>
                          <h6>Pekerjaan</h6>
                          <br>  
                          Nama Pekerajaan : {{$b->pekerjaan}}
                          <br>
                          <br>
                          Jenis Pekerajaan : {{$b->jp}}
                          <br>
                          <br>
                          Nama Perusahaan : {{$b->namaPerusahaan}}
                          <br>
                          <br>
                          Alamat Perusahaan : {{$b->alamatPerusahaan}}
                          </td>
                        </tr>
                        @endforeach
             