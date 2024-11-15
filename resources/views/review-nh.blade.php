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
</style>
<body>
@include('header')
<main>
   <section class="nav-bread">
        <div class="bread-content">
            <ul class="bread-list">
                <li><a href="{{ route('form') }}">Home </a></li>
                <li><img src="http://127.0.0.1:8000/assets/images/logo/arrow.png"alt=""></li>
                <li>Đăng nhập</li>
            </ul>
        </div>
   </section>
   <div id="content" class="">
	    <div class="tin-tuc-left">
            <div class="heading-blog">
                <h1 class="title">
                    <strong>Kiến thức nước hoa</strong>
                </h1>
            </div>
        	<div id="post-list">
                <div class="post-item" >
			        <div class="col-inner">
            			<div class="box-image">
  						    <div class="image-cover" style="padding-top:56%;">
							    <a href="" class="plain" aria-label="M.I.S.S &#8211; Công thức nước hoa cho Phụ nữ khí chất">
								  <img fetchpriority="high" width="666" height="374" src="" class="" >
                                </a>
  							</div>
          					<div class="box-text text-left" >
					            <div class="box-text-inner">
                                    <h5 class="post-title is-large "><a href="" class="plain">M.I.S.S &#8211; Công thức nước hoa cho Phụ nữ khí chất</a></h5>
									<div class="is-divider"></div>
									<p class="from_the_blog_excerpt ">Bạn có biết rằng, những người phụ nữ hạnh phúc, thành công trong cuộc sống...</p>
					            </div>
					        </div>
						</div>
			        </div>
                </div>
            </div>
        <div class="tin-tuc-right">
		    <div id="secondary" class="widget-area ">
		    <form method="get" class="search-form-post" action="">
		        <div class="flex-row">
			        <div class="">
	   	                <input type="search" class="" placeholder="Tìm kiếm bài viết..." />
			            </div>
			        <div class="flex-col">
				        <button type="submit" class="" aria-label="Nộp">
				            <i class="icon-search" ></i>
                        </button>
			        </div>
		        </div>
                <input type="hidden" name="post_type" value="post">
            </form>
		    <span class="widget-title"><span>Bài viết mới nhất</span></div>
		    <ul>
				<li>
				    <a href="https://missi.com.vn/su-dang-yeu-trong-mat-missi/">Sự đáng yêu trong mắt Missi</a>
				</li>
				<li>
				    <a href="https://missi.com.vn/m-i-s-s-cong-thuc-nuoc-hoa-cho-phu-nu-khi-chat/">M.I.S.S &#8211; Công thức nước hoa cho Phụ nữ khí chất</a>
				</li>
				<li>
				    <a href="https://missi.com.vn/goi-y-9-nuoc-hoa-tang-sinh-nhat-cho-nu-noi-bat/">Gợi ý 9 nước hoa tặng sinh nhật cho nữ nổi bật nhất năm</a>
				</li>
				<li>
				    <a href="https://missi.com.vn/tui-minh-de-thuong-ma/">TỤI MÌNH DỄ THƯƠNG MÀ</a>
				</li>
				<li>
				    <a href="https://missi.com.vn/nhung-luu-y-khi-tang-nuoc-hoa-cho-ban-trai/">Những lưu ý khi tặng nước hoa cho bạn trai</a>
				</li>
				<li>
				    <a href="https://missi.com.vn/4-bi-quyet-tang-nuoc-hoa-tinh-te-cua-nguoi-phap/">4 Bí quyết tặng nước hoa tinh tế của người Pháp</a>
				</li>
				<li>
				    <a href="https://missi.com.vn/uu-dai-soc-con-gai-la-de-yeu-thuong/">ƯU ĐÃI SỐC &#8211; CON GÁI LÀ ĐỂ YÊU THƯƠNG</a>
				</li>
				<li>
				    <a href="https://missi.com.vn/bi-kip-tang-qua-20-thang-10-cho-phu-nu/">Bí kíp tặng quà 20 tháng 10 cho phụ nữ</a>
				</li>
			</ul>
		</div>
	</div>
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