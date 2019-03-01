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
        margin-bottom: 10px ;
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
 <h3>Peminjaman</h3>
</div>

<table>
    <tr class="title">
        <th>No Pinjam</th>
        <th>Tanggal Buku Kembali</th>
        <th>Judul</th>
        <th>Nama Peminjam</th>
    </tr>
    @foreach($pinjam as $rsPin)
                <tr>
                    <td>{{ $rsPin->no_pinjam }}</td>
                    <td>{{ $rsPin->tgl_kembali }}</td>   
                    <td>{{ $rsPin->judul }}</td>
                    <td>{{ $rsPin->nama }}</td>
                </tr>
     @endforeach

</table>