<?php 
  require "component/header/header-contact.php";
?>
<!-- Home -->

<div class="home">
  <div 
  	class="home_background parallax-window" 
	data-parallax="scroll" 
	data-image-src="assets/images/hinhnen/the-coliseum-1928274__340.jpg" 
	data-speed="0.8">
  </div>
  <div class="container">
	<div class="row">
	  <div class="col">
		<div class="home_content">
		  <div class="home_content_inner">
			<div class="home_title">Liên hệ</div>
			<div class="home_breadcrumbs">
			  <ul class="home_breadcrumbs_list">
			  	<li class="home_breadcrumb">
				  <a href="?page=home">Home</a>
			  	</li>
			  	<li class="home_breadcrumb">Liên hệ</li>
			  </ul>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</div>

<!-- Contact -->
<div class="contact">
  <div class="container">
	<div class="row">
	  <div class="col">
		<div class="contact_title">Liên hệ với chúng tôi</div>
		<div class="contact_subtitle">hãy nói xin chào</div>
	  </div>
	</div>
	<div class="row contact_content">
	  <div class="col-lg-5">
		<div class="contact_text">
		  <p>Aveiro Travel là du lịch trên khắp cả nước Việt nam và cả Thế giới, kinh doanh đa dạng các tour du lịch khác nhau. </p>
		</div>
		<div class="contact_info">
		  <div class="contact_info_box">i</div>
		  <div class="contact_info_container">
			<div class="contact_info_content">
			  <ul>
				<li>Địa chỉ: Đường Z115 - xã Quyết Thắng TP. Thái Nguyên – Tỉnh Thái Nguyên</li>
				<li>Phone: 0966245700</li>
				<li>Email: aveirotravel@gmail.com</li>
			  </ul>
			</div>					
		  </div>
		</div>
	  </div>
	  <div class="col-lg-7">
		<div class="contact_form_container">
		  <form action="#" id="contact_form" class="clearfix">
			<input 
			  id="contact_input_name" 
			  class="contact_input contact_input_name" 
			  type="text" 
			  placeholder="Tên" 
			  required="required"
			  data-error="Name is required."
			>
			<input 
			  id="contact_input_email" 
			  class="contact_input contact_input_email" 
			  type="text" 
			  placeholder="E-mail"
			  required="required" 
			  data-error="E-mail is required."
			>
			<input 
			  id="contact_input_subject" 
			  class="contact_input contact_input_subject" type="text" 
			  placeholder="Tiêu đề"
			>
			<textarea 
			  id="contact_input_message" class="contact_message_input contact_input_message" name="message"
			  placeholder="Nội dung" 
			  required="required" 
			  data-error="Please, write us a message.">
		    </textarea>
			<button 
			  id="contact_send_btn" 
			  type="submit" 
			  class="contact_send_btn trans_200" 
			  value="Submit"
			>
			  Gửi đi
			  <i class="fa-solid fa-paper-plane"></i>
			</button>
		  </form>
		</div>
      </div>
	</div>
	<div class="row contact_map">
	  <!-- Google Map -->
	  <iframe 
	  	src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8975.55082495084!2d105.806423!3d21.585019!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31352738b1bf08a3%3A0x515f4860ede9e108!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiAmIFRydXnhu4FuIHRow7RuZyBUaMOhaSBOZ3V5w6pu!5e1!3m2!1svi!2sus!4v1635789965439!5m2!1svi!2sus" 
	  	width="100%" 
	  	height="450" 
	  	style="border:0;" 
	  	allowfullscreen="" 
	  	loading="lazy">
	  </iframe>
  	</div>
  </div>
</div>


<?php 
  require "./component/footer/footer.php";
?> 