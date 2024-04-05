var table = $('#custom_table').DataTable({
    processing: false,
    searching: true,
    "bDestroy": true,
    dom: 'Bfrtip',
    paging: true,
    buttons: [
        {
            extend: 'csv',
            exportOptions: {
                columns: ':not(.no-export)' // Exclude columns with the class 'no-export'
            }
        },
        {
            extend: 'excel',
            exportOptions: {
                columns: ':not(.no-export)' // Exclude columns with the class 'no-export'
            }
        },
        {
            extend: 'print',
            exportOptions: {
                columns: ':not(.no-export)' // Exclude columns with the class 'no-export'
            }
        },
        {
            extend: 'pdf',
            exportOptions: {
                columns: ':not(.no-export)' // Exclude columns with the class 'no-export'
            }
        }
    ],
    initComplete: function (settings, json) {
        $('.table_card').removeClass('d-none');
        $('.table_spinner').addClass('d-none');
    }
});
