<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Page 1-1</a></li>
                <li><a href="#">Page 1-2</a></li>
                <li><a href="#">Page 1-3</a></li>
              </ul>
            </li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
          </ul>
<!--          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>-->
<ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
        </div>
      </div>
    </nav>
    
@yield('content')



<style>
    footer a{
        color:white;
        line-height: 2em;
    }
</style>
<footer style="background: #222222;
    color: white;">            <div id="cshero-footer-top" class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <aside id="text-2" class="widget widget_text"><h3 class="wg-title">About ISOC</h3>			<div class="textwidget"><div class="footer-information" style="text-align:justify">
Internet Society (ISOC) Pakistan Islamabad (PK IBD) Chapter is bring together members of Internet society to advance and promote the general purpose and guiding principles of ISOC by serving the interests of the global Internet community through a local presence. The Bylaws of ISOC Pakistan Islamabad Chapter are available.
</div></div>
		</aside>                    </div> <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3"><aside id="cms_recent_posts_events-3" class="widget cms-recent-posts"><h3 class="wg-title">Recent Events</h3>                                    <article class="recent-post-item clearfix post-1284 events type-events status-publish has-post-thumbnail hentry category-events-upcoming">
                                            <div class="featured-image">
                            <img width="100" height="70" src="https://www.isoc.pk/wp-content/uploads/2023/03/nic_event-100x70.jpeg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="https://www.isoc.pk/wp-content/uploads/2023/03/nic_event-100x70.jpeg 100w, https://www.isoc.pk/wp-content/uploads/2023/03/nic_event-770x537.jpeg 770w, https://www.isoc.pk/wp-content/uploads/2023/03/nic_event-470x330.jpeg 470w" sizes="(max-width: 100px) 100vw, 100px">                        </div>
                                        <div class="post-element">
                        <h5 class="entry-widget-title" style="margin: 0px"><a href="https://www.isoc.pk/events/universal-acceptance-ua-day/">Universal Acceptance UA Day</a></h5>
                    </div>
                </article>
                            <article class="recent-post-item clearfix post-1280 events type-events status-publish has-post-thumbnail hentry category-events-meetings">
                                            <div class="featured-image">
                            <img width="100" height="70" src="https://www.isoc.pk/wp-content/uploads/2023/03/agm-100x70.jpeg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="https://www.isoc.pk/wp-content/uploads/2023/03/agm-100x70.jpeg 100w, https://www.isoc.pk/wp-content/uploads/2023/03/agm-470x330.jpeg 470w" sizes="(max-width: 100px) 100vw, 100px">                        </div>
                                        <div class="post-element">
                        <h5 class="entry-widget-title" style="margin: 0px"><a href="https://www.isoc.pk/events/annual-general-assembly-meeting-2/">Annual General Assembly Meeting</a></h5>
                    </div>
                </article>
                            <article class="recent-post-item clearfix post-1253 events type-events status-publish has-post-thumbnail hentry">
                                            <div class="featured-image">
                            <img width="100" height="70" src="https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM-100x70.png" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM-100x70.png 100w, https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM-768x535.png 768w, https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM-1024x714.png 1024w, https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM-624x435.png 624w, https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM-470x330.png 470w, https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM-600x418.png 600w, https://www.isoc.pk/wp-content/uploads/2021/12/Screenshot-2021-12-09-at-11.32.57-PM.png 1564w" sizes="(max-width: 100px) 100vw, 100px">                        </div>
                                        <div class="post-element">
                        <h5 class="entry-widget-title" style="margin: 0px"><a href="https://www.isoc.pk/events/werise/">WeRISE</a></h5>
                    </div>
                </article>
                            <!-- END WIDGET -->
        </aside></div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">		<aside class="widget widget_recent_entries">		<h3 class="wg-title">recent news</h3>		<ul>
											<li>
					<a href="https://www.isoc.pk/2020/09/01/digital-connectivity-in-pakistan-by-mr-parvez-iftikhar-connect/">Digital Connectivity in Pakistan by Mr. Parvez Iftikhar connect</a>
									</li>
											<li>
					<a href="https://www.isoc.pk/2020/07/01/isoc-pakistan-chapter-training-program-2020/">ISOC pakistan chapter training-program-2020</a>
									</li>
											<li>
					<a href="https://www.isoc.pk/2020/06/26/pandemic-phishing-is-luring-many/">Pandemic phishing is luring many</a>
									</li>
											<li>
					<a href="https://www.isoc.pk/2020/06/08/building-a-wireless-community-network-tq-network-2020-chapters-training-program/">Building a Wireless Community Network (TQ Network) 2020 Chapters Training Program</a>
									</li>
					</ul>
		</aside></div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3"><aside id="text-6" class="widget widget_text"><h3 class="wg-title">Contact Us</h3>			<div class="textwidget"><ul class="contact-us">
<li><i class="fa fa-map-marker"></i>RISE – Suit # 7,  <br>Ground floor, <br>
Evacuee Trust Complex, <br>
Agha Khan Road F-5/1 Islamabad. </li>
<li><i class="fa fa-envelope-o"></i><a href="#">info@isoc.pk</a></li>
<li><i class="fa fa-phone"></i>(+92)3336519169</li>
</ul>
</div>
		</aside></div>
                </div>
            </div>
        </div>
                <div id="cshero-footer-bottom" class="footer-bottom">
             <div class="container">
                 <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 copyright">Copyright © 2019. All Rights Reserved.</div>
                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 social"><aside id="text-5" class="widget widget_text">			<div class="textwidget"><div style="float: right; line-height: 68px; font-family: 'Montserrat', sans-serif; text-transform: uppercase; font-size: 12px; letter-spacing: 0.25px; color: #999;">Design and Developed by: <a style="color: #fff;" href="http://ilogicspk.com/" rel="noopener"><strong>ILogics Pakistan</strong></a></div>
</div>
		</aside></div>
                 </div>
             </div>
        </div>
        </footer>
</body>
</html>
