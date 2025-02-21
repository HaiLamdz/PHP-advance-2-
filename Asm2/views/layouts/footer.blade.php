</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com
            2020</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin
                templates</a> from Bootstrapdash.com</span>
    </div>
</footer>
<!-- partial -->
</div>
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{$_ENV['BASE_URL']}}/public/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{$_ENV['BASE_URL']}}/public/assets/vendors/chart.js/Chart.min.js"></script>
<script src="{{$_ENV['BASE_URL']}}/public/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="{{$_ENV['BASE_URL']}}/public/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="{{$_ENV['BASE_URL']}}/public/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{$_ENV['BASE_URL']}}/public/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{$_ENV['BASE_URL']}}/public/assets/js/off-canvas.js"></script>
<script src="{{$_ENV['BASE_URL']}}/public/assets/js/hoverable-collapse.js"></script>
<script src="{{$_ENV['BASE_URL']}}/public/assets/js/misc.js"></script>
<script src="{{$_ENV['BASE_URL']}}/public/assets/js/settings.js"></script>
<script src="{{$_ENV['BASE_URL']}}/public/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{$_ENV['BASE_URL']}}/public/assets/js/dashboard.js"></script>
<!-- End custom js for this page -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Lấy tất cả các menu có thể mở rộng
        let menus = document.querySelectorAll(".nav-link[data-toggle='collapse']");

        menus.forEach(menu => {
            let target = menu.getAttribute("href"); // ID của menu collapse (VD: #user-menu)
            let savedState = localStorage.getItem(target); // Kiểm tra trạng thái đã lưu

            if (savedState === "open") {
                document.querySelector(target).classList.add("show"); // Giữ menu mở
                menu.setAttribute("aria-expanded", "true"); // Cập nhật trạng thái
            }

            menu.addEventListener("click", function () {
                let isOpen = document.querySelector(target).classList.contains("show");

                if (isOpen) {
                    localStorage.setItem(target, "closed"); // Lưu trạng thái đóng
                } else {
                    localStorage.setItem(target, "open"); // Lưu trạng thái mở
                }
            });
        });
    });
</script>


</body>

</html>