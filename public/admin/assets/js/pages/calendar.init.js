!(function ($) {
    "use strict";

    function CalendarApp() {}

    CalendarApp.prototype.init = function () {
        var updateEventModal = $('#exampleModal'),
            newEventModal = $('#event-modal'),
            calendarEl = document.getElementById('calendar'),
            selectedEvent = null;

        // Function to open modal for adding new event
        function openNewEventModal(start) {
            newEventModal.modal('show');
            newEventModal.find('#event-date').val(start.format('YYYY-MM-DD'));
            newEventModal.find('#event-time').val(start.format('HH:mm:ss'));
        }

        // Function to open modal for updating existing event
        function openUpdateEventModal(event) {
            updateEventModal.modal('show');
            // Use toISOString() or toJSON() for FullCalendar v5+
            updateEventModal.find('#hidden-rezervim-id').val(event.id);
            updateEventModal.find('#event-date').val(event.start.toISOString().substring(0, 10));
            updateEventModal.find('#event-time').val(event.start.toISOString().substring(11, 19));
            selectedEvent = event;
        }

        // FullCalendar configuration
        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ["bootstrap", "interaction", "dayGrid", "timeGrid"],
            editable: true,
            droppable: true,
            selectable: true,
            defaultView: "timeGridWeek",
            themeSystem: "bootstrap",
            header: {
                left: "prev,next today",
                center: "title",
                right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth",
            },
            eventClick: function (info) {
                openUpdateEventModal(info.event);
            },
            dateClick: function (info) {
                openNewEventModal(info.date);
            },
            events: function (fetchInfo, successCallback, failureCallback) {
                // Fetch events from the server
                $.ajax({
                    url: '/calendar', // Your endpoint to fetch events
                    method: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        var events = data.map(function (event) {
                            return {
                                id: event.id,
                                title: event.title,
                                start: event.start,
                                end: event.end,
                                // add other properties if necessary
                            };
                        });
                        successCallback(events);
                    },
                    error: function () {
                        failureCallback('Error fetching events');
                    }
                });
            },
            // other configurations...
        });

        calendar.render();

        // Event form submission for new events
        newEventModal.find('form').on("submit", function (e) {
            e.preventDefault();
            var formData = $(this).serialize();

            // AJAX call to add a new event
            $.ajax({
                url: '/kalendariii', // Your endpoint for adding events
                method: 'POST',
                data: formData,
                success: function () {
                    calendar.refetchEvents();
                    newEventModal.modal('hide');
                },
                error: function () {
                    // Handle error
                }
            });
        });

        // Event form submission for updating events
        updateEventModal.find('form').on("submit", function (e) {
            e.preventDefault();
            var formData = $(this).serialize();
        
            // Check if selectedEvent is not null
            if (selectedEvent) {
                $.ajax({
                    url: '/calendar/update/' + selectedEvent.id,
                    method: 'PUT',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function () {
                        calendar.refetchEvents();
                        updateEventModal.modal('hide');
                        selectedEvent = null; // Reset selectedEvent
                    },
                    error: function () {
                        // Handle error
                    }
                });
            } else {
                alert("No event selected for update.");
            }
        });

       // Define confirmDelete globally
    window.confirmDelete = function() {
        if (selectedEvent && confirm('A jeni te sigurt te fshini rezervimin?')) {
            $.ajax({
                url: '/delete/calendar/' + selectedEvent.id, // Use the ID from selectedEvent
                method: 'GET', // As per your route definition
                success: function (response) {
                    calendar.refetchEvents(); // Refresh the calendar
                    $('#exampleModal').modal('hide'); // Hide the modal
                    selectedEvent = null; // Reset selectedEvent
                    Swal.fire({
                        text: "Rezervimi u fshi me sukses!",
                        icon: "success"
                      });
                },
                error: function () {
                    alert('Error occurred while deleting the event.');
                }
            });
        } else {
            alert("Fshirja e rezervimit u ndalua!");
        }
    };
        
        // Additional event handlers...
    };

    // Initializing the CalendarApp
    $.CalendarApp = new CalendarApp();
    $.CalendarApp.init();
})(window.jQuery);
