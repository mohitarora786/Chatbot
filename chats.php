<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shared Equipment Availability Calendar</title>
    <style>
        /* Add CSS for styling the calendar here */
    </style>
</head>
<body>
    <h1>Shared Equipment Availability Calendar</h1>
    <div id="calendar"></div>

    <script>
        // Sample data for equipment availability
        const equipmentAvailability = {
            '2023-11-07': true,  // Equipment is available on this date
            '2023-11-10': false, // Equipment is not available on this date
            // Add more dates and availability status as needed
        };

        const calendar = document.getElementById('calendar');
        
        // Function to generate the calendar
        function generateCalendar() {
            const currentDate = new Date();
            const currentYear = currentDate.getFullYear();
            const currentMonth = currentDate.getMonth();

            const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

            let calendarHTML = '<table>';
            calendarHTML += '<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>';
            calendarHTML += '<tr>';
            
            let dayCount = 0;

            for (let i = 1; i <= daysInMonth; i++) {
                dayCount++;
                let date = `${currentYear}-${(currentMonth + 1).toString().padStart(2, '0')}-${i.toString().padStart(2, '0')}`;
                let isAvailable = equipmentAvailability[date] === true;
                let cellClass = isAvailable ? 'available' : 'unavailable';

                calendarHTML += `<td class="${cellClass}">${i}</td>`;

                if (dayCount === 7) {
                    dayCount = 0;
                    calendarHTML += '</tr><tr>';
                }
            }

            calendarHTML += '</tr></table>';
            calendar.innerHTML = calendarHTML;
        }

        // Call the function to generate the calendar
        generateCalendar();
    </script>
</body>
</html>
