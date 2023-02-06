jQuery(document).ready(function ($) {
    $('#users-table').DataTable({
        responsive: true,
        select: true,
        dom: 'B<"clear">lfrtip',
        buttons: [
            {
                extend: 'copy' , text: 'کپی'
            },
            {
                extend: 'excel' , text: 'خروجی اکسل'
            },
            {
                extend: 'pdf' , text: 'خروجی PDF'
            },
            {
                extend: 'csv' , text: 'خروجی CSV'
            },
            {
                extend: 'colvis' , text: 'فیلتر نمایش ستونها'
            },
            {
                extend: 'print' , text: 'پرینت'
            },
            {
                extend: 'selectAll' , text: 'انتخاب همه'
            },
            {
                extend: 'selectNone' , text: 'غیرفعال کردن انتخاب ها'
            },
            {
                extend: 'showSelected' , text: 'نماش موارد انتخاب شده'
            }
        ],
        language: {
            "decimal":        "",
            "emptyTable":     "داده ای در جدول موجود نیست!",
            "info":           "نمایش _START_ به _END_ از _TOTAL_ ورودی",
            "infoEmpty":      "نمایش 0 به 0 از 0 ورودی",
            "infoFiltered":   "(فبلتر شده از _MAX_ مجموع ورودی ها)",
            "infoPostFix":    "",
            "thousands":      ",",
            "lengthMenu":     "نمایش _MENU_ ورودی ها",
            "loadingRecords": "در حال بارگیری",
            "processing":     "",
            "search":         "جسجتو :",
            "zeroRecords":    "رکورد مشابهی یافت نشد",
            "paginate": {
                "first":      "اولین",
                "last":       "آخرین",
                "next":       "بعدی",
                "previous":   "قبلی"
            },
            "aria": {
                "sortAscending":  ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            }
        }
    });
});