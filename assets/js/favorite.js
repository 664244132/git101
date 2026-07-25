$(document).ready(function() {
    // ฟังก์ชันสำหรับสลับคลาส is-active ที่ปุ่ม Favorite
    $(".js-fav").on("click", function(e) {
        e.preventDefault(); // ป้องกันพฤติกรรมเริ่มต้นของปุ่ม
        $(this).find('.heart').toggleClass("is-active");
    });
});
