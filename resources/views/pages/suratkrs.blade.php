<html>

<head>
    <title>KARTU RENCANA STUDI</title>
</head>
<table width=80% align=center>
    <tr>
        <th>
            <font size="4">SEKOLAH TINGGI MANAJEMEN INFORMATIKA DAN KOMPUTER<br>
                (STMIK) Royal Kisaran,Sumatra Utara<br>
                <font size="2">Jl.Prof.H.M.Yamin No 173 Kab Asahan,Telp :0623-41079,Fax 0623-42366.<br>
                    <font size="2">Homepage:www.royal.ac.id,webside:stmik.royal.ac.id,email:stmik@royal.ac.id
                    </font><br>
        </th>
    </tr>
</table>
<hr width=75%>
<th>
    <p align="center">
        <font size="5"><u><b>KARTU RENCANA STUDI</b></u>
    </p>
    </font>

    <body bgcolor="#D7E7F3" onload="window.print()">
        <font face="verdana">
            @foreach ($mahasiswa as $data)
                <table border="0" cellpadding="0" border color="black">
                    <tr>
                        <td align="left">
                            <font size="2">Tahun Akademik
                        </td>
                        <td>
                            <font size="2"><b>:20172/Tahun Akademik 20172</b>
                        </td>
                    </tr>
                    <td align="left">
                        <font size="2">NIM
                    </td>
                    <td>
                        <font size="2"><b>:{{ $data->NIM }}</b>
                    </td>
                    </tr>
                    <td align="left">
                        <font size="2">Nama
                    </td>
                    <td>
                        <font size="2"><b>:{{ $data->Nm_Mahasiswa }}</b>
                    </td>
                    </tr>
                    <tr>
                        <td align="left">
                            <font size="2">Program Studi
                        </td>
                        <td>
                            <font size="2"><b>:{{ $data->Prodi }}</b>
                        </td>
                    </tr>
                    <tr>
                        <td align="left">
                            <font size="2">Fakultas:
                        </td>
                        <td>
                            <font size="2"><b>:{{ $data->Fakultas }}</b>
                        </td>
                    </tr>
                </table>
                <table>
                    <table border="1" style="border-collapse: collapse" bgcolor="white" bordercolor="black"
                        cellpadding="8" width="100%">
                        <tr bgcolor="white">
                            <td><b>NO</b></td>
                            <td><b>Smt</b></td>
                            <td><b>Kelas</b></td>
                            <td><b>KodeMK</b></td>
                            <td><b>Mata Kuliah</b></td>
                            <td><b>SKS</b></td>
                            <td><b>Dosen</b></td>
                            <td><b>Hari</b></td>
                            <td><b>Jam</b></td>
                        </tr>
                        <tr>
                            <td align="center">1</td>
                            <td align="center">3</td>
                            <td>SI S1 3H</td>
                            <td>SIKK316</td>
                            <td>Interaksi Manusia dan Komputer</td>
                            <td align="center">2</td>
                            <td>EDI KURNIAWAN,S.Kom,M.Kom</td>
                            <td>Jumat</td>
                            <td>08.00</td>
                        </tr>
                        <tr>
                            <td align="center">2</td>
                            <td align="center">3</td>
                            <td>SI S1 3H</td>
                            <td>SIKK319</td>
                            <td>Pengetahuan Bisnis</td>
                            <td align="center">2</td>
                            <td>GUNAWAN SYAHPUTRA,S.Kom,MBA</td>
                            <td>Kamis</td>
                            <td>09.55</td>
                        </tr>
                        <tr>
                            <td align="center">3</td>
                            <td align="center">3</td>
                            <td>SI S1 3H</td>
                            <td>SIKK317</td>
                            <td>Desain Web</td>
                            <td align="center">3</td>
                            <td>KHAIRIL ANWAR,SE,S.Kom,M.kom</td>
                            <td>Sabtu</td>
                            <td>08.00</td>
                        </tr>
                        <tr>
                            <td align="center">4</td>
                            <td align="center">3</td>
                            <td>SI S1 3H</td>
                            <td>SIKK313</td>
                            <td>Sistem Berkas/Arsip dan Akses</td>
                            <td align="center">3</td>
                            <td>AFRISAWATI,S.Kom</td>
                            <td>Sabtu</td>
                            <td>10.45</td>
                        </tr>
                        <tr>
                            <td align="center">5</td>
                            <td align="center">3</td>
                            <td>SI S1 3H</td>
                            <td>SIKK315</td>
                            <td>Sistem Operasi</td>
                            <td align="center">3</td>
                            <td>AHMAD MUHAZIR,M.Kom</td>
                            <td>Selasa</td>
                            <td>08.00</td>
                        </tr>
                        <tr>
                            <td align="center">6</td>
                            <td align="center">3</td>
                            <td>SI S1 3H</td>
                            <td>SIKK318</td>
                            <td>Pemograman Berorientasi Objek</td>
                            <td align="center">3</td>
                            <td>NOFRIADI,M.Kom</td>
                            <td>Selasa</td>
                            <td>10.45</td>
                        </tr>
                        <tr>
                            <td align="center">7</td>
                            <td align="center">3</td>
                            <td>SI S1 3H</td>
                            <td>SIKK314</td>
                            <td>Komunikasi Data</td>
                            <td align="center">2</td>
                            <td>MASITAH HANDAYANI,M.Kom</td>
                            <td>Senin</td>
                            <td>08.00</td>
                        </tr>
                        <tr>
                            <td align="center">8</td>
                            <td align="center">3</td>
                            <td>SI S1 3H</td>
                            <td>SIKK310</td>
                            <td>Struktur Data</td>
                            <td align="center">3</td>
                            <td>ARRIDHA ZIKRA SYAH,S.Kom,M.Kom</td>
                            <td>Senin</td>
                            <td>10.45</td>
                        </tr>
                    </table>
                    <table border="0" cellpadding="8" bordercolor="black">
                        <tr>
                            <td align="left">
                                <font size="1">Total SKS yang diambil
                            </td>
                            <td>
                                <font size="1"><b>:21</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="left">
                                <font size="1">Maximum SKS yang boleh diambil
                            </td>
                            <td>
                                <font size="1"><b>:24</b>
                            </td>
                        </tr>
                        <table border="0" cellspacing="0">
                            <tr>
                                <td width="300">
                                    <center>
                                        <font face="Arial Rounded MT Bold" font size="2">
                                            Mengetahui,<br><br><br><br><br>
                                            <p><b><u>William Ramdhan,M.Kom</u></b><br>Ka.Prodi Sistem Informasi
                                </td>
                                <td width="750">
                                    <center>
                                        <font face="Arial Rounded MT Bold" font size="2">
                                            Menyetujui,<br><br><br><br><br>
                                            <p><b><u>Ihsan Maulana</u></b><br>Pembimbing Akademik
                                </td>
                                <td width="110"><img src="picture design.jpg" style="width:100px; height:90px;"
                                        border="2px"></td>
                                <td width="190" height="120">
                                    <center>
                                        <font face="Arial Rounded MT Bold" font size="2">
                                            Kisaran,<br>27-Sep-2017<br><br><br><br><br><b><u>Ahmad Amin
                                                    Matondang</u></b><br>Mahasiswa
                                </td>
                            </tr>
                        </table>

                        <br>
                        <font face="Arial Rounded MT Bold" font size="2">Catatan:</font>
                        <ul type="disk">
                            <li>
                                <font face="Arial Rounded MT Bold" font size="2">1 Lembar untuk Mahasiswa.
                            </li>
                            <li>
                                <font face="Arial Rounded MT Bold" font size="2">
                                    <font face="Arial Rounded MT Bold" font size="2">1 Lembar untuk Akademik.
                            </li>
                            <li>
                                <font face="Arial Rounded MT Bold" font size="2">Simpan KRS ini sebaik mungkin di
                                    tempat
                                    yang aman, karena akan diminta kembali pada saat<br>
                                    Pengambilan Mata Kuliah Skripsi
                            </li>
            @endforeach
    </body>

</html>
