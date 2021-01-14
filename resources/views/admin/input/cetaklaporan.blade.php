<!DOCTYPE html>
<html lang="en">


<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,  initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            table.static {
                position: relative;
                /* left: 3%; */
                border: 1px solid #543535;
            }
            
        </style>
        <title>Cetak Data Kurikulum</title>

</head>
<body>
                    <div class="form-group">
                        <p align="center"><b>Laporan data Kurikulum</b>

                        </p>
                        <table class="static" align="center" rules="all" border="1px" style="width: 95%"> 
                        <tr>
                   
                   <th><center>No</center></th>
                  <th><center>KODE MATAKULIAH </center></th>
                  <th><center>SEMESTER</center></th>
                  <th><center>PRODI </center></th>
                  <th><center>TAHUN ANGKATAN </center></th>
    
                </tr>
                @foreach ($cetaklaporan as $lapo => $cetaklaporan)
                <tr>
                <td>{{ $lapo+1 }}</td>
			    <td>{{ $cetaklaporan->kode_matakuliah }}</td>
			    <td>{{ $cetaklaporan->semester }}</td>
                <td>{{ $cetaklaporan->prodi }}</td>
                <td>{{ $cetaklaporan->tahun_angkatan }}</td>

                </tr>
                @endforeach
                        </table>
                    </div>
                    <script type="text/javascript">
                    window.print();
                     </script>
</body>
</body>
</html>