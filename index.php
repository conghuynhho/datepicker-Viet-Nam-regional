<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../jquery-ui.min.css">
  <script src="../jquery.js"></script>
  <script src="../jquery-ui.min.js"></script>
  <script>
    jQuery(function($) {
      $.datepicker.regional["vi-VN"] = {
        closeText: "Đóng",
        prevText: "Trước",
        nextText: "Sau",
        currentText: "Hôm nay",
        monthNames: ["Tháng một", "Tháng hai", "Tháng ba", "Tháng tư", "Tháng năm", "Tháng sáu", "Tháng bảy", "Tháng tám", "Tháng chín", "Tháng mười", "Tháng mười một", "Tháng mười hai"],
        monthNamesShort: ["Một", "Hai", "Ba", "Bốn", "Năm", "Sáu", "Bảy", "Tám", "Chín", "Mười", "Mười một", "Mười hai"],
        dayNames: ["Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy"],
        dayNamesShort: ["CN", "Hai", "Ba", "Tư", "Năm", "Sáu", "Bảy"],
        dayNamesMin: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
        weekHeader: "Tuần",
        dateFormat: "dd/mm/yy",
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ""
      };

      $.datepicker.setDefaults($.datepicker.regional["vi-VN"]);
    });
    $(function() {
      $('#datepicker').datepicker({
        dateFormat: "dd-mm-yy",
        minDate: new Date(2020, 9, 12),
        showMonthAfterYear: true,

      });
    })
  </script>
  <title>Document</title>
</head>

<body>
  <form action="">
    <input type="text" name="" id="datepicker">
  </form>
</body>

</html>