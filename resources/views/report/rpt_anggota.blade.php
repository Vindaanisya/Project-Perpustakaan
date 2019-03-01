<style>
    table{
        position: relative;
        border-collapse:collapse;
        width:100%;
    }
    table td{
        border: 1px solid #000;
        padding: 5px;
    }
    h1,h2,p{
        margin:0;
        text-align: center;
    }
    p{
        padding-bottom:15px;
        margin-bottom: 10px;
        border-bottom: 5px;
        border-bottom: 5px double #000;
    }

    .title{
        background-color: lightgreen;
    }

    .judul h3{
        border:2px solid;
        background-color: pink;
        text-align: center;
    }

    
</style>

<h1>V Library</h1>
<p>Jl Thamrin Madiun, Telp : 0123456789 , www.VLibrary.com</p>

<div class="judul">
 <h3>Data Anggota</h3>
</div>

<table>
    <tr class="title">
        <td width="3%">#</td>
        <td width="10%">No Anggota</td>
        <td width="30%">Nama</td>
        <td width="30%">Alamat</td>
        <td width="27%">Email</td>
    </tr>

    @foreach($anggota as $rsAngg)
    <tr>
        <td>{{ $rsAngg->kd_anggota }}</td>
        <td>{{ $rsAngg->no_anggota }}</td>
        <td>{{ $rsAngg->nama }}</td>
        <td>{{ $rsAngg->alamat }}</td>
        <td>{{ $rsAngg->email }}</td>
    </tr>
    @endforeach

</table>