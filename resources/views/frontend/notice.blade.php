@extends('frontend.components.layouts')
@section('content')
<style>
    .wrapper {
    width: 1100px;
    margin: 15px auto;
    box-sizing: border-box;
    padding: 0px 10px;
}
.main {
    display: block;
}
.main-contentxt-wrapper {
    text-align: center;
    margin-top: 50px;
}
.notice-board-main-wrapper> h1 {
    margin-bottom: 20px;
}

element.style {
}
.notice-board-main-wrapper> h1 span {
    color: #FF5722;
}
.notice-bord-table-wrapper {
    display: flex;
    flex-direction: column;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
    background-color: #fff;
    width: 100%;
    box-sizing: border-box;
}
.notice-body.notice-board-header {
    border-bottom: 0px;
    background: linear-gradient(40deg, #FF5722, #FF9800, #FF5722);
    color: #fff;
}
.notice-body {
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid #ddd;
    padding: 8px;
    align-items: center;
}
.notice-date-div, .notice-title-div, .notice-read-div {
    flex: 1;
    text-align: center;
    font-weight: bold;
    font-size: 18px;
}
.notice-read-div a {
    display: inline-block;
    background: linear-gradient(174deg, #0071cb, #00BCD4);
    box-shadow: 0px 2px 5px -2px #000;
    color: #fff;
    text-decoration: none !important;
    font-weight: normal;
    box-sizing: border-box;
    padding: 2px 13px;
    border-radius: 10px;
}
</style>
<div class="wrapper">
    <main>
        <div class="main-contentxt-wrapper">
            <div class="notice-board-main-wrapper">
				<h1>নোটিশ <span>বোর্ড</span></h1>
				<!-- start notice board -->
				<div class="notice-bord-table-wrapper">
					<!-- notice header -->
					<div class="notice-body notice-board-header">
						<div class="notice-date-div">
							তারিখ
						</div>
						<div class="notice-title-div">
							নোটিশ
						</div>
						<div class="notice-read-div">
							লিঙ্ক
						</div>
					</div>
					
					        <!-- start notice body -->
        <div class="notice-body">
            <div class="notice-date-div">
                ২৪ সেপ্টেম্বর ২০২৩            </div>
            <div class="notice-title-div">
                বৃহত্তর ছাত্র-ছাত্রীদের সহযোগিতা ও সহযোগিনী প্রশংসা সম্পর্কিত            </div>
            <div class="notice-read-div">
                <a href="#">বিজ্ঞপ্তিটি পড়ুন</a>
            </div>
        </div>
        <!-- end notice body -->
        <!-- start notice body -->
        <div class="notice-body">
            <div class="notice-date-div">
                ২৪ সেপ্টেম্বর ২০২৩            </div>
            <div class="notice-title-div">
                শ্রদ্ধাশ্রদ্ধ ছাত্র-ছাত্রীদের জন্য নোটিশ            </div>
            <div class="notice-read-div">
                <a href="#">বিজ্ঞপ্তিটি পড়ুন</a>
            </div>
        </div>
        <!-- end notice body -->
        <!-- start notice body -->
        <div class="notice-body">
            <div class="notice-date-div">
                ২৪ সেপ্টেম্বর ২০২৩            </div>
            <div class="notice-title-div">
                নোটিশের প্রসঙ্গে            </div>
            <div class="notice-read-div">
                <a href="#">বিজ্ঞপ্তিটি পড়ুন</a>
            </div>
        </div>
        <!-- end notice body -->
        <!-- start notice body -->
        <div class="notice-body">
            <div class="notice-date-div">
                ২৪ সেপ্টেম্বর ২০২৩            </div>
            <div class="notice-title-div">
                ছাত্রীদের দ্বিতীয় সেমেস্টার পরীক্ষা            </div>
            <div class="notice-read-div">
                <a href="#">বিজ্ঞপ্তিটি পড়ুন</a>
            </div>
        </div>
        <!-- end notice body -->
    <!-- Pagination -->
    <div class="pagination">
            </div>

					
				</div>
				<!-- end notice board -->
				
			</div>

        </div>
    </main>
</div>
@endsection