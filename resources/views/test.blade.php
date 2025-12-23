<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender Interaktif</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
        }

        h2 {
            margin-bottom: 10px;
        }

        .calendar-container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            font-size: 16px;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        td {
            background-color: #fff;
            cursor: pointer;
        }

        td:hover {
            background-color: #f1f1f1;
        }

        .highlight {
            background-color: #ffcccb !important;
            font-weight: bold;
        }

        .calendar-nav {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .btn {
            background-color: #007bff;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="calendar-container">
        <h2 id="calendar-title">Kalender</h2>
        <div class="calendar-nav">
            <button class="btn" onclick="prevMonth()">Sebelumnya</button>
            <button class="btn" onclick="nextMonth()">Berikutnya</button>
        </div>
        <table id="calendar">
            <thead>
                <tr>
                    <th>Minggu</th>
                    <th>Senin</th>
                    <th>Selasa</th>
                    <th>Rabu</th>
                    <th>Kamis</th>
                    <th>Jumat</th>
                    <th>Sabtu</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    <script>
        let today = new Date();
        let currentMonth = today.getMonth();
        let currentYear = today.getFullYear();

        // Daftar tanggal yang ingin diberi warna
        let highlightedDates = {
            "2025-02-14": "Valentine's Day",
            "2025-02-20": "Liburan",
            "2025-02-25": "Deadline"
        };

        function generateCalendar(year, month) {
            console.log('tahun : ' + year);
            console.log('bulan : ' + month);
            let calendarBody = document.querySelector("#calendar tbody");
            calendarBody.innerHTML = ""; // Hapus isi sebelumnya

            let firstDay = new Date(year, month, 1).getDay(); // Hari pertama bulan ini
            let daysInMonth = new Date(year, month + 1, 0).getDate(); // Jumlah hari dalam bulan ini

            document.getElementById("calendar-title").textContent = `Kalender ${getMonthName(month)} ${year}`;

            let row = document.createElement("tr");

            for (let i = 0; i < firstDay; i++) {
                let emptyCell = document.createElement("td");
                row.appendChild(emptyCell);
            }

            for (let day = 1; day <= daysInMonth; day++) {
                if (row.children.length === 7) {
                    calendarBody.appendChild(row);
                    row = document.createElement("tr");
                }

                let cell = document.createElement("td");
                cell.textContent = day;

                // Cek apakah tanggal ini ada di daftar highlight
                let dateString = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
                if (highlightedDates[dateString]) {
                    cell.classList.add("highlight");
                    cell.title = highlightedDates[dateString]; // Tooltip
                }

                row.appendChild(cell);
            }

            if (row.children.length > 0) {
                calendarBody.appendChild(row);
            }
        }

        function prevMonth() {
            currentMonth--;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            generateCalendar(currentYear, currentMonth);
        }

        function nextMonth() {
            currentMonth++;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            generateCalendar(currentYear, currentMonth);
        }

        function getMonthName(month) {
            const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
            return months[month];
        }

        generateCalendar(currentYear, currentMonth);
    </script>
</body>

</html>