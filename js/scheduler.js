$(document).ready(function () {
    // prepare the data
    var source =
            {
                dataType: "json",
                dataFields: [
                    {name: 'id', type: 'string'},
                    {name: 'description', type: 'string'},
                    {name: 'location', type: 'string'},
                    {name: 'subject', type: 'string'},
                    {name: 'calendar', type: 'string'},
                    {name: 'start', type: 'date', format: "yyyy-MM-dd HH:mm"},
                    {name: 'end', type: 'date', format: "yyyy-MM-dd HH:mm"}
                ],
                id: 'id',
                url: "data.php?usedwidget=roomsscheduler"
            };
    var adapter = new $.jqx.dataAdapter(source);

    $("#scheduler").jqxScheduler({
        date: new $.jqx.date('todayDate'),
        width: 1024,
        height: 683,
        source: adapter,
        showLegend: true,
        appointmentOpacity: 0.6,
        editDialogCreate: function (dialog, fields, editAppointment) {
            fields.repeatContainer.hide();
            fields.statusContainer.hide();
            fields.timeZoneContainer.hide();
            fields.colorContainer.hide();
            fields.allDayContainer.hide();
            fields.resourceLabel.html("Suite")            
            fields.subjectLabel.html("Your Name");
            fields.locationLabel.html("Your Email");
            fields.fromLabel.html("First Day");
            fields.toLabel.html("Last Day");
        },
        ready: function () {
            $("#scheduler").jqxScheduler('ensureAppointmentVisible', 'id');
        },
        resources:
                {
                    colorScheme: "scheme05",
                    dataField: "calendar",
                    source: new $.jqx.dataAdapter(source)
                },
        appointmentDataFields:
                {
                    from: "start",
                    to: "end",
                    id: "id",
                    description: "description",
                    location: "place",
                    subject: "subject",
                    resourceId: "calendar",
                    active: "active"
                },
        view: 'monthView',
        views: ['monthView']
    });
    $("#scheduler").on('appointmentDelete', function (event) {
        var args = event.args;
        var appointment = args.appointment;

    });

    $("#scheduler").on('appointmentAdd', function (event) {
        var args = event.args;
        var appointment = args.appointment;
        var id = appointment.id;
        var from = new $.jqx.date($('#scheduler').jqxScheduler('getAppointmentProperty', appointment.id, 'from')).toString();
        var to = new $.jqx.date($('#scheduler').jqxScheduler('getAppointmentProperty', appointment.id, 'to')).toString();
        var description = $("#scheduler").jqxScheduler('getAppointmentProperty', appointment.id, 'description').toString();
        var location = $("#scheduler").jqxScheduler('getAppointmentProperty', appointment.id, 'location').toString();
        var loc = document.location.href.match(/[^\/]+$/)[0];
        var resource = "";
            if (loc === "onebed.php") {
                resource = "One Bedroom Suite";
            } else {
                resource = "Three Bedroom Suite";
            }
        var subject = $("#scheduler").jqxScheduler('getAppointmentProperty', appointment.id, 'subject').toString();

        $.ajax({
            url: 'data.php',
            type: 'POST',
            data: {
                "addData": true,
                "id": id,
                "from": from,
                "to": to,
                "description": description,
                "location": location,
                "subject": subject,
                "resource": resource
            }, success: function (data) {
                $("#scheduler").jqxScheduler('setAppointmentProperty', id, 'subject', 'Single Bedroom Booked');
                $("#scheduler").jqxScheduler('setAppointmentProperty', id, 'location', 'noreply@lakeofthewoodsvacationrentals.com');
                $("#scheduler").jqxScheduler('setAppointmentProperty', id, 'readOnly', true);
                alert("Please watch your email for Owner\' response to your scheduling.\n If your email is entered correctly the Owner will contact you\n\n"+ data);
            }});
    });
});