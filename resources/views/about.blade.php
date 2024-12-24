<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nước hoa chính hãng</title>
    <link rel="icon" href="http://127.0.0.1:8000/assets/images/logo/logo-brand-web.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<style>
    h1{
        color: #46382F;
    }
    p{
        color: #4D5562;
        font-size: 18px;
        line-height: 1.6; 
    }
    .nav-bread{
        box-sizing: border-box;
        width: 100%;
        max-width: 100%;
        padding: 10px ;
        position: relative; 
        margin: 0 auto ;
        background-color: #EEE9E9;
    }
    .bread-list li:nth-child(2){
        margin: 0px 3px 0px 3px;
    }
    .bread-list li:nth-child(3){
        color: #C96F3B;
    }
    .bread-content{
        width: 100%;
        margin: 0 auto;
        max-width: 123rem;
    }
    .bread-list{
        display: flex;
        align-items: center;
        text-align: center;
    }
    .blog{
        margin-top: 50px;
        margin-bottom: 50px;

    }
    .blog-content{
        width: 980px;
        margin: 0 auto;
        
    }
    .blog-content>h1{
        padding-left: 40px;
    }
    .blog-list{
        border-top: 0.1rem solid #E5E7EB;
    }
    .blog-img-1{
        padding: 2px;
        max-width: 610px;
        width: 100%;
        height: 950px;
        margin: 0 auto;
        outline: 0.5px solid #E5E7EB;
    }
    .blog-img-1>img{
        width: 100%;
        height: 95%;
        object-fit: cover;
    }
    .blog-img-1 p{
        margin-top: 2px;
        text-align: center;
    }
    .blog-img-2{
        padding: 2px;
        max-width: 700px;
        width: 100%;
        height: 460px;
        margin: 0 auto;
        outline: 0.5px solid #E5E7EB;
    }
    .blog-img-2>img{
        width: 100%;
        height: 93%;
        object-fit: cover;
    }
    .blog-img-2 p{
        margin-top: 2px;
        text-align: center;
    }
    .blog-info {
    background-color: #f8f5f5;
    padding: 20px;
    margin: 0 auto;
    border-radius: 12px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    max-width: 400px;
    font-family: Arial, sans-serif;
    }

    .blog-info ul {
        list-style-type: none;
        padding: 0;
    }

    .blog-info li {
        margin-bottom: 10px;
        font-size: 16px;
    }


    .blog-info li {
        color: #b72d2d;
    }
    .blog-info li a {
        color: #b72d2d;
    }
    .blog-info li a:hover {
        text-decoration: underline;
    }
    .blog-info li span {
        font-weight: bold;
        color: black;
    }
    .menu-mega.active{
        opacity: 1;
        visibility: visible;
    }
    .brand-list.active li {
        border: none;
    }
    .brand-list.active li a{
        color: black;
    }
    .tintuc> .menu-mega.active{
        border: none;
    }
    .tintuc> .menu-mega.active .menu-list>li{
        border: none;
    }
    .tintuc> .menu-mega.active .menu-list>li>a{
        color: black;
    }
    @media (max-width: 1001px) {
    .blog-content {
        width: 100%;
        padding: 20px;
        max-width: 100%; 
        box-sizing: border-box;
    }
    .blog-list{
        padding: 0;
    }
    }
    @media (max-width: 631px) {
    .blog-item img{
        width: 100%;
        height: auto;
    }
    .blog-img-1,.blog-img-2{
        width: 100%;
        height: auto;
    }
    }
    @media (max-width: 408px) {
        .blog-content>h1{
            padding: 0;
        }

    }
</style>
<body>
@include('header')
   <main>
   <section class="nav-bread">
    <div class="bread-content">
        <ul class="bread-list">
            <li><a href="{{ route('form') }}">Home </a></li>
            <li><img src="http://127.0.0.1:8000/assets/images/logo/arrow.png"alt=""></li>
            <li>Giới thiệu về TUANHALAN</li>
        </ul>
    </div>
   </section>
   <section class="blog">
    <div class="blog-content">
        <h1>Giới thiệu về TUANHALAN</h1>
        <ul class="blog-list">
            <li class="blog-item">
                <p>Đến với <span style="font-weight: bold; color: #4D5562;">TUANHALAN</span>, mỗi mùi hương đều là một trải nghiệm độc đáo, khác biệt, mang đến cho bạn sự phong phú và đa dạng trong từng khoảnh khắc. Nếu bạn là một tín đồ mùi hương và đang tìm kiếm một hương thơm phù hợp với cá tính, sở thích cá nhân, hãy ghé ngay TUANHALAN để đắm chìm trong thế giới nước hoa đầy mê hoặc và quyến rũ.</p>
                <p style="font-weight: bold;">CEO Chung Thành – Người sáng lập TUANHALAN</p>
                <div class="blog-img-1">
                    <img src="http://127.0.0.1:8000/assets/images/giamdoc/anh5.webp" alt="">
                    <p>CEO Francis Kurkdjian – Doanh nhân đứng sau TUANHALAN</p>
                </div>
                <p>“Francis đến với việc kinh doanh nước hoa một cách rất tình cờ, bắt đầu chỉ vì muốn cơ thể luôn mang theo mùi thơm mà mình yêu thích. Theo thời gian, thói quen sử dụng nước hoa trở thành sở thích và đam mê. Từng loại nước hoa mình sưu tầm và nghiên cứu không chỉ mang đến hương thơm mà còn chứa đựng những ý nghĩa sâu sắc. Chúng giúp mỗi người tự tin hơn, thể hiện cá tính và màu sắc riêng biệt, đồng thời tác động tích cực đến cảm xúc, làm cho cuộc sống trở nên lạc quan hơn, yêu thế giới xung quanh hơn…” – CEO Francis Kurkdjian chia sẻ.</p>
            </li>
            <li class="blog-item">
                <h2>Chàng trai đam mê mùi hương</h2>
                <div class="blog-img-1">
                    <img src="http://127.0.0.1:8000/assets/images/giamdoc/anh4.jpg" alt="">
                    <p>Chàng trai đam mê mùi hương</p>
                </div>
                <p>Vì quá yêu thích các mùi hương cũng như sự quyến rũ của các dòng nước hoa, CEO Francis Kurkdjian đã dành rất nhiều thời gian, công sức tìm hiểu, nghiên cứu về thị trường nước hoa để có thể giới thiệu đến khách hàng những dòng nước hoa cao cấp nhất. Kinh doanh nước hoa là một lĩnh vực đặc thù, đòi hỏi người kinh doanh không chỉ có khả năng kinh doanh đơn thuần mà còn cần trở thành một “nghệ sĩ” đích thực trong việc thường thức hương liệu.</p>
            </li>
            <li class="blog-item">
                <h2>Hành trình trở thành doanh nhân tài năng đứng sau TUANHALAN</h2>
                <div class="blog-img-2">
                    <img src="http://127.0.0.1:8000/assets/images/giamdoc/anh3.webp" alt="">
                    <p>Hành trình đi đến thành công của CEO Francis Kurkdjian không hề “dải hoa hồng”</p>
                </div>
                <p>Để hiện thực hóa niềm đam mê và có thể lan tỏa những giá trị đặc sắc của nước hoa, CEO Francis Kurkdjian đã xây dựng cửa hàng TUANHALAN. Bắt đầu kinh doanh từ năm 2017, anh Thành chính thức có cửa hàng đầu tiên tại Armenia, Pháp. Với những nỗ lực không ngừng, CEO Francis Kurkdjian đã thành công biến đam mê thành hiện thực. Sinh năm 1969 , ở tuổi 26, Francis Kurkdjian đã có hơn 7 năm kinh nghiệm trong ngành kinh doanh nước hoa, một công việc không chỉ đơn thuần là nguồn thu nhập mà còn là tình yêu và tâm huyết tuổi trẻ.</p>
            </li>
            <li class="blog-item">
                <p>TUANHALAN không chỉ là một cửa hàng nước hoa, mà còn là biểu tượng của sự tinh tế, niềm đam mê và lòng kiên định của một chàng doanh nhân nhiệt huyết.</p>
                <h1>TUANHALAN – Thiên đường nước hoa chính hãng</h1>
                <div class="blog-img-1">
                    <img src="http://127.0.0.1:8000/assets/images/giamdoc/anh5.jpg" alt="">
                    <p>TUANHALAN là tâm huyết và tất cả sự đam mê</p>
                </div>
                <p>Bước chân vào cửa hàng TUANHALAN, bạn sẽ choáng ngợp bởi không gian sang trọng, hiện đại cùng nhiều chai nước hoa đến từ các thương hiệu đình đám thế giới như Roja Parfums, Clive Christian, Argos Fragrances, Matiere Premiere, Liquides Imaginaires, Atelier Materi, Prada, Versace,… Chúng tôi liên tục cập nhật các xu hướng mùi hương với nhiều dòng nước hoa chính hãng đến từ các thương hiệu nổi tiếng nhất.</p>
                <p>Từng chai nước hoa đều được tuyển chọn kỹ lưỡng, đảm bảo nguồn gốc chính hãng, chất lượng cao cấp, nói KHÔNG với hàng Fake, hàng nhái. Tại TUANHALAN, bạn có thể thỏa sức khám phá và trải nghiệm những mùi hương độc đáo, đa dạng, từ hương thơm nhẹ nhàng, thanh tao đến hương thơm nồng nàn, quyến rũ.</p>
            </li>
            <li class="blog-item">
                <h2>Mua sắm đẳng cấp tại TUANHALAN</h2>
                <div class="blog-img-2">
                    <img src="http://127.0.0.1:8000/assets/images/giamdoc/anh6.jpg" alt="">
                    <p>Tư vấn tận tình, trải nghiệm mua sắm tốt nhất tại TUANHALAN</p>
                </div>
                <p>TUANHALAN không chỉ đơn thuần là một nơi bán nước hoa, mà còn là điểm đến cho những ai muốn tìm kiếm sự tư vấn chuyên nghiệp từ đội ngũ nhân viên am hiểu về mùi hương. Với niềm đam mê và sự tận tâm, chúng tôi sẽ giúp bạn lựa chọn được mùi hương phù hợp nhất với cá tính, sở thích và phong cách cá nhân. Showroom trưng bày đa dạng các dòng nước hoa cao cấp, được bài trí trong không gian sang trọng và tinh tế, cho phép khách hàng tự do thử nghiệm sản phẩm và chìm đắm trong thế giới hương thơm của riêng mình.</p>
                <p>Mỗi góc nhỏ trong Showroom đều có thể khơi gợi nguồn cảm hứng cho khách hàng, mang đến những trải nghiệm sang trọng, tinh tế và nhẹ nhàng. Tại đây, việc mua nước hoa không chỉ là quá trình trao đổi mua – bán, mà còn là một hành trình tìm kiếm và khẳng định giá trị độc đáo của mỗi khách hàng.</p>
            </li>
            <li class="blog-item">
                <h2>Quyền lợi của khách hàng đặt lên hàng đầu</h2>
                <p>Chúng tôi cam kết mang đến dịch vụ khách hàng hoàn hảo, chuyên nghiệp. Nước hoa chính hãng được biết đến là sản phẩm có giá trị cao và cần bảo quản kỹ lưỡng. Tuy nhiên, cửa hàng chúng tôi vẫn áp dụng chính sách đổi trả sản phẩm trong vòng 15 ngày kể từ ngày mua hàng nếu phát hiện hàng lỗi, hư hỏng hoặc giao sai mẫu. Tại TUANHALAN, chất lượng sản phẩm và sự hài lòng của khách hàng luôn được chú trọng hàng đầu.</p>
                <div class="blog-img-2">
                    <img src="http://127.0.0.1:8000/assets/images/giamdoc/anh7.jpg" alt="">
                    <p>Cam kết 100% nước hoa chính hãng</p>
                </div>
                <p>Nếu khách hàng phát hiện bất kỳ dấu hiệu nào về hàng giả hoặc sản phẩm không đạt chuẩn, chúng tôi sẽ đền bù 100% tổng giá trị đơn hàng. Đồng thời, mỗi chai nước hoa cũng đều được kiểm tra và bảo quản cẩn thận, đảm bảo mọi sản phẩm đến tay khách hàng đều đạt chất lượng hoàn hảo. Với những cam kết về chất lượng, TUANHALAN mong muốn mang lại những trải nghiệm mua sắm tuyệt vời, không chỉ là sự thoải mái và tiện lợi, mà còn là cơ hội để sở hữu những sản phẩm cao cấp với giá cả phải chăng.</p>
                <p>Đến với TUANHALAN là đắm chìm trong thế giới mùi hương quyến rũ, tinh tế, đến với những trải nghiệm trọn vẹn và hài lòng nhất. Chúc quý khách mua sắm như ý và sở hữu những chai nước hoa độc nhất tại “phòng triển lãm mùi hương” TUANHALAN.</p>
            </li>
        </ul>
    </div>
    <div class="blog-info">
        <ul>
            <li><span style="color: #9c8679;">CÔNG TY TNHH TUANHALAN</span></li>
            <li><span>Website:</span> <a href="http://127.0.0.1:8000/">http://127.0.0.1:8000/</a></li>
            <li><span>Địa chỉ:</span> 232 Bình Triều, Thăng Bình, Quảng Nam</li>
            <li><span>Email:</span> <a href="mailto:tuandiep.230205@gmail.com">tuandiep.230205@gmail.com</a></li>
            <li><span>Hotline:</span> 0917513519</li>
        </ul>
    </div>
   </section>
    <div class="fixed-nav">
            <ul class="fixed-nav-list">    
                <li class="fixed-nav-item"> <a class="link-items" href="tel:0917513519"><i class="fa-solid fa-phone-volume"></i></a></li>
                <li class="fixed-nav-item"> <a class="link-items" href=""><i class="fa-brands fa-facebook-messenger"></i></a></li>
                <li class="fixed-nav-item">
                    <div class="back-to-top"> <i class="fa-solid fa-arrow-up"></i></div>
                </li>
            </ul>
    </div>
   </main>
   <script src="http://127.0.0.1:8000/assets/js/scriptabout.js"></script>
   @include('footer')  
</body>
</html>