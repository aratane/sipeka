<!DOCTYPE html>
<html>

<head>
    <title>Kartu Rencana Studi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        .course-card {
            background-color: #f2f2f2;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .course-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .course-code {
            font-size: 16px;
            color: #888;
            margin-bottom: 5px;
        }

        .course-details {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .course-description {
            font-size: 14px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body onload="window.print()">
    <h1>Kartu Rencana Studi</h1>

    <div class="course-card">
        <div class="course-title">Mata Kuliah 1</div>
        <div class="course-code">MK001</div>
        <div class="course-details">
            <div><strong>Semester:</strong> 2</div>
            <div><strong>SKS:</strong> 3</div>
            <div><strong>Dosen:</strong> Profesor ABC</div>
            <div><strong>Jadwal:</strong> Senin, 08:00 - 10:00</div>
        </div>
        <div class="course-description">Deskripsi Mata Kuliah 1</div>
    </div>

    <div class="course-card">
        <div class="course-title">Mata Kuliah 2</div>
        <div class="course-code">MK002</div>
        <div class="course-details">
            <div><strong>Semester:</strong> 3</div>
            <div><strong>SKS:</strong> 4</div>
            <div><strong>Dosen:</strong> Profesor XYZ</div>
            <div><strong>Jadwal:</strong> Rabu, 13:00 - 16:00</div>
        </div>
        <div class="course-description">Deskripsi Mata Kuliah 2</div>
    </div>

    <div class="course-card">
        <div class="course-title">Mata Kuliah 3</div>
        <div class="course-code">MK003</div>
        <div class="course-details">
            <div><strong>Semester:</strong> 4</div>
            <div><strong>SKS:</strong> 2</div>
            <div><strong>Dosen:</strong> Profesor LMN</div>
            <div><strong>Jadwal:</strong> Kamis, 09:00 - 11:00</div>
        </div>
        <div class="course-description">Deskripsi Mata Kuliah 3</div>
    </div>

</body>

</html>
