$(document).ready(function() {
    $('#listData').DataTable({
        ajax: {
            url: 'table/ajax_list',
            type: 'POST'
        },
        "pageLength": 25,
        "processing": true,
        "serverSide": false,

        language: {
            "sProcessing": "กำลังดำเนินการ...",
            "sLengthMenu": "แสดง _MENU_ แถว",
            "sZeroRecords": "ไม่พบข้อมูล",
            "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
            "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
            "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
            "sInfoPostFix": "",
            "sSearch": "ค้นหา: ",
            "sUrl": "",
            "oPaginate": {
                "sFirst": "หน้าแรก",
                "sPrevious": "ก่อนหน้า",
                "sNext": "ถัดไป",
                "sLast": "หน้าสุดท้าย"
            }
        },
        buttons: ['copy', 'excel', 'pdf'],
        responsive: {
            details: {}
        }

    });

});