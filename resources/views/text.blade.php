<main  id="main" class="">
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
</main>
<!-- @elseif(isset($cartItems))
            <div class="col-md-8">
                <h4>Giỏ Hàng của Bạn</h4>
                @foreach($cartItems as $item)
                    <div class="cart-item">
                        <h5>{{ $item->name }}</h5>
                        <img src="{{ asset('assets/images/anhnuochoa/all/' . $item->image) }}" alt="{{ $item->name }}" style="width: 100px;">
                        <p>Đơn giá: {{ number_format($item->giaTienLon) }} ₫</p>
                        <p>Số lượng: {{ $item->quantity }}</p>
                        <p>Thành tiền: {{ number_format($item->giaTienLon * $item->quantity) }} ₫</p>
                    </div>
                @endforeach
            </div>
        @endif
        <div class="col-md-4">
            <h4>Thanh Toán và Giao Hàng</h4>
            <form action="{{ route('checkout.process', ['id' => $product->id]) }}" method="POST">
                @csrf
                <input type="hidden" name="so-luong" value="{{ $quantity }}">
                <div class="form-group">
                    <label for="full_name">Họ và tên *</label>
                    <input type="text" class="form-control" id="full_name" name="full_name" required>
                </div>

                <div class="form-group">
                    <label for="address">Địa chỉ *</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>

                <div class="form-group">
                    <label for="phone">Số điện thoại *</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="notes">Ghi chú đơn hàng (tùy chọn)</label>
                    <textarea class="form-control" id="notes" name="notes"></textarea>
                </div>

                <hr>
                
                <div class="summary">
                    <p>Tạm tính (1 sản phẩm): {{ number_format($totalPrice) }} ₫</p>
                    <p>Giao hàng: Miễn phí ship mọi đơn hàng</p>
                    <p>Tổng: {{ number_format($totalPrice) }} ₫</p>
                </div>

                <div class="payment-method">
                    <label>Chọn phương thức thanh toán:</label><br>
                    <input type="radio" id="cash_on_delivery" name="payment_method" value="cash_on_delivery" checked>
                    <label for="cash_on_delivery">Trả tiền mặt khi nhận hàng</label><br>

                    <input type="radio" id="bank_transfer" name="payment_method" value="bank_transfer">
                    <label for="bank_transfer">Chuyển khoản ngân hàng</label><br>

                    <input type="radio" id="qr_transfer" name="payment_method" value="qr_transfer">
                    <label for="qr_transfer">Chuyển khoản ngân hàng (Quét mã QR)</label>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Đặt Hàng</button>
            </form>
        </div>
    </div>
</div> -->