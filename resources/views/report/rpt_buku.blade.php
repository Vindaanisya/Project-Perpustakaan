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
 <h3>Data Buku</h3>
</div>

<table>
    <tr class="title">
        <td>#</td>
        <td>Judul</td>
        <td>Pengarang</td>
        <td>Penerbit</td>
        <td>Kategori</td>
        <td>Halaman</td>
        <td>Edisi</td>
        <td>ISBN</td>
    </tr>
    @foreach($buku as $rsBuku)
    <tr>
        <td>{{ $rsBuku->kd_buku  }}</td>
        <td>{{ $rsBuku->judul }}</td>
        <td>{{ $rsBuku->nama_pengarang }}</td>
        <td>{{ $rsBuku->nama_penerbit }}</td>
        <td>{{ $rsBuku->nama_kategori }}</td>
        <td>{{ $rsBuku->halaman }}</td>
        <td>{{ $rsBuku->edisi }}</td>
        <td>{{ $rsBuku->ISBN }}</td>
    </tr>
    @endforeach

</table>