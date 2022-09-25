<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vtech
 */

?>

	<footer>
        <section class="footer-top position-relative">
            <div class="image position-relative"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer/footer.png" class="w-100" alt="footer"></div>
            <div class="description text-white text-center top-0 start-0 end-0 w-75">
                <h4 class="fs-4">Gọi cho chúng tôi và hoàn thành công việc</h4>
                <p class="lh-lg">Khi bạn thuê chúng tôi cho các dịch vụ xây dựng, bạn biết rằng bạn đang nhận được các chuyên gia có trình độ cao, những người có chuyên môn và kinh nghiệm để đảm bảo dự án của bạn được thực hiện đúng các chức năng.</p>
                <a href="#" class="btn text-white">Gọi Cho Chúng Tôi Hôm Nay</a>
            </div>
        </section>
        <section class="footer-bottom text-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <br/>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer/logo-footer.png" class="pt-5 pb-4" alt="logo-footer">
                        <p class="lh-lg">Công ty cổ phần Công nghệ Môi trường Vtech Việt Nam - GPDKKD số: 0108818707 - Nơi cấp: Sở Kế hoạch & Đầu tư Hà Nội - Ngày cấp: 12/07/2019</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer/footer-1.png" alt="footer-1"></div>
                            <div><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer/footer-2.png" alt="footer-1"></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <br/>
                        <h5 class="pt-5 pb-3">THÔNG TIN LIÊN HỆ</h5>
                        <p class="phone">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer/call.png" alt="footer-phone" class="pe-2">
                            <span>096.135.6686 </span>
                        </p>
                        <p class="email">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer/footer-5.png" alt="footer-email" class="pe-2">
                            <span>duocpham@xulinuocvtech.vn</span>
                        </p>
                        <p class="d-flex align-items-center">
                            <span class="flex-shrink-0"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer/footer-4.png" alt="footer-location" class="pe-2"></span>
                            <span class="flex-grow-1 ms-2">VPGD: 12A24 HH2B KĐT Linh Đàm,P. Hoàng Liệt, Q. Hoàng Mai, TP. Hà Nội</span>
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <br/>
                        <h5 class="pt-5 pb-3">QUY CHẾ HOẠT ĐỘNG TMĐT</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-3"><a href="#" class="nav-link p-0"><span class="d-inline-block bg-white rounded-circle mx-2" style="padding:2px"></span><span class="text-white">Quy chế hoạt động TMĐT</span></a></li>
                            <li class="nav-item mb-3"><a href="#" class="nav-link p-0"><span class="d-inline-block bg-white rounded-circle mx-2" style="padding:2px"></span><span class="text-white">Chính sách giao, chuyển hàng</span></a></li>
                            <li class="nav-item mb-3"><a href="#" class="nav-link p-0"><span class="d-inline-block bg-white rounded-circle mx-2" style="padding:2px"></span><span class="text-white">Chính sách đổi, trả hàng</span></a></li>
                            <li class="nav-item mb-3"><a href="#" class="nav-link p-0"><span class="d-inline-block bg-white rounded-circle mx-2" style="padding:2px"></span><span class="text-white">Chính sách bảo mật và Điều khoản</span></a></li>
                            <li class="nav-item mb-3"><a href="#" class="nav-link p-0"><span class="d-inline-block bg-white rounded-circle mx-2" style="padding:2px"></span><span class="text-white">Hướng dẫn mua hàng, thanh toán</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class="pt-3 mt-5 position-relative line-top pb-2">
                <div class="container">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <ul class="nav justify-content-end list-unstyled d-flex">
                            <li class="ms-3"><a class="text-muted" href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer/zalo.png" alt="zalo"></a></li>
                            <li class="ms-3"><a class="text-muted" href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer/fa.png" alt="facebook"></a></li>
                        </ul>
                        <div class="d-flex align-items-center">
                            <span class="mb-3 mb-md-0 text-muted">Copyright 2020 VTECH EJC, All Right Reserved</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/plugins/jquery-3.6.1.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/plugins/bootstrap@5.2.1/js/popper.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/plugins/bootstrap@5.2.1/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/plugins/swiper@8/swiper-bundle.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/jscript/swiper.js"></script>
</body>
</html>
