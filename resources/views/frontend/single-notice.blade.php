@extends('frontend.components.layouts')
@section('content')

<style>
.wrapper {
    width: 1100px;
    margin: 0px auto;
    box-sizing: border-box;
    padding: 0px 10px;
}
.notice-single-main-wrapper {
    display: grid;
    grid-template-columns: 3fr 1fr;
    column-gap: 20px;
    margin-top: 50px;
}
.notice-left-content-wrapper {
    width: 100%;
    overflow: hidden;
}
.notice-left-content-wrapper> article {
    box-sizing: border-box;
    padding: 20px;
    background: #fff;
    border: 1px solid #ddd;
}

element.style {
}
.notice-left-content-wrapper> article h1.entry-title {
    margin-bottom: 10px;
    padding-bottom: 10px;
    border-bottom: 1px solid #ffeae4;
    color: #464646;
    font-size: 28px;
}
.entry-content> p {
    padding-bottom: 20px;
    font-size: 18px;
    color: #000;
}
.notice-right-sidebar-wrapper {
    width: 100%;
}
.side-widget-title {
    background: linear-gradient(174deg, #FF9800, #FF5722);
    color: #fff;
    box-sizing: border-box;
    padding: 5px 10px;
    font-size: 22px;
}
.sidebar-widget-content {
    box-sizing: border-box;
    padding: 10px;
    background: #fff;
    border: 1px solid #ddd;
    border-top: none;
}
.sidebar-widget-content> ul {
    list-style-type: none;
    display: grid;
    grid-template-columns: 1fr;
    row-gap: 5px;
}

element.style {
}
.sidebar-widget-content> ul li {
    border-bottom: 1px solid #ddd;
    padding-bottom: 5px;
}
.sidebar-widget-content> ul li a {
    display: block;
    text-decoration: none;
    color: blue;
    font-size: 14px;
}
</style>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="wrapper">
			<div class="notice-single-main-wrapper">
				<div class="notice-left-content-wrapper">
					<article id="post-68" class="post-68 post_notice type-post_notice status-publish hentry">
						<header class="entry-header">
							<h1 class="entry-title">{{$notice->title}}</h1>
						</header>

						<div class="entry-content">
							<p>@php echo html_entity_decode($notice->notice) @endphp</p>
						</div>
					</article>
				</div>
				<div class="notice-right-sidebar-wrapper">
					<div class="sidebar-widget">
						<div class="side-widget-title">
							<i class="fa fa-bullhorn"></i><span> Latest Notice</span>
						</div>
						<div class="sidebar-widget-content">
                            <ul>
                                @foreach ($notices as $item)
                                <li><i class="fa fa-bullhorn"></i> <a href="{{route('single-notice',$item->id)}}">{{$item->title}}</a></li>
                                @endforeach
                            </ul>    
                        </div>
					</div>
				</div>
			</div>
		</div>
    </main>
</div>
@endsection