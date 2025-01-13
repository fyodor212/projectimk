const bookingCalendar = {
    init: function() {
        const calendar = new FullCalendar.Calendar(
            document.getElementById('bookingCalendar'), 
            {
                initialView: 'dayGridMonth',
                selectable: true,
                events: [
                    {
                        title: 'Dr. Andi',
                        start: '2024-01-10',
                        color: '#3498db'
                    },
                    {
                        title: 'Dr. Budi',
                        start: '2024-01-12',
                        color: '#2ecc71'
                    }
                ],
                dateClick: function(info) {
                    this.showTimeSlots(info.dateStr);
                }
            }
        );
        calendar.render();
    },

    showTimeSlots: function(date) {
        // Tampilkan slot waktu yang tersedia
        const slots = this.getAvailableSlots(date);
        this.renderTimeSlots(slots);
    }
}; 