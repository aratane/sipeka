<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Surat Pengantar Kerja Praktek</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5;
        }

        header {
            background-color: #0072C6;
            color: #FFF;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            margin: 0;
        }

        p {
            margin: 0 0 10px 0;
        }

        .separator {
            border-top: 1px solid #CCC;
            margin: 20px 0;
        }

        footer {
            background-color: #EEE;
            padding: 10px;
            font-size: 12px;
            text-align: center;
            color: #777;
        }
    </style>
</head>

<body onload="window.print()">
    @foreach ($mahasiswa as $data)
        <header>
            <h1>Surat Pengantar Kerja Praktek</h1>
            <p>Fakultas Teknik Universitas Contoh</p>
            <p>Jalan Contoh No. 1, Kota Contoh, Provinsi Contoh</p>
            <p>Telp. (022) 1234567 | Fax. (022) 1234568 | Email: info@contoh.ac.id</p>
        </header>

        <div>
            <p>Nomor : SPKP/FakTek/05/2023</p>
            <p>Lampiran : -</p>
            <p>Perihal : Pengantar Kerja Praktek</p>
        </div>

        <div>
            <p>Kepada Yth.</p>
            <p>Bapak/Ibu Pimpinan</p>
            <p>PT Contoh Jaya</p>
            <p>Jalan Raya Contoh No. 2</p>
            <p>Kota Contoh</p>
        </div>

        <div>
            <p>Dengan hormat,</p>
            <p>Sehubungan dengan adanya tugas kerja praktek yang akan diikuti oleh mahasiswa Fakultas Teknik Universitas
                Contoh, dengan ini kami bermaksud untuk memberikan surat pengantar kerja praktek bagi mahasiswa
                tersebut.
            </p>
            <p>Adapun data mahasiswa yang akan melaksanakan kerja praktek adalah sebagai berikut:</p>
            <table>
                <tr>
                    <td width="200">Nama Lengkap</td>
                    <td width="10">:</td>
                    <td>{{ $data->Nm_Mahasiswa }}</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>{{ $data->NIM }}</td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>:</td>
                    <td>{{ $data->Prodi }}</td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td>:</td>
                    <td>7</td>
                </tr>
            </table>
            <p>Kerja praktek akan dilaksanakan mulai tanggal 1 Juni 2023 sampai dengan 31 Juli 2023.</p>
            <p>Kami berharap Bapak/Ibu dapat memberikan kesempatan kepada mahasiswa kami untuk dapat mengikuti kerja
                praktek
                di perusahaan Bapak/Ibu. Kami yakin mahasiswa kami akan dapat memberikan kontribusi yang positif bagi
                perusahaan Bapak/Ibu.</p>
            <p>Demikian surat pengantar kerja praktek ini kami sampaikan. Atas perhatian dan kerjasamanya, kami ucapkan
                terima kasih.</p>
        </div>

        <div class="separator"></div>

        <footer>
            <p>Fakultas {{ $data->Fakultas }} Universitas Contoh</p>
            <p>Jalan Contoh No. 1, Kota Contoh, Provinsi Contoh</p>
            <p>Telp. (022) 1234567 | Fax. (022) 1234568 | Email: info@contoh.ac.id</p>
        </footer>
    @endforeach
</body>

</html>
