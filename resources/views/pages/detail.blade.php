@extends('layouts.master')

@section('content')
<!-- SIDEBAR -->
        <div class="sidebar col-xs-4">
        	
            
            <!-- ABOUT ME -->                  
            <div class="widget about-me">
            	<div class="ab-image">
                	<img src="{{asset('blog_assets/img/about-me.jpg')}}" alt="about me">
                    <div class="ab-title">About Me</div>
                </div>
                <div class="ad-text">
                	<p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <span class="signing"><img src="{{asset('blog_assets/img/signing.png')}}" alt="signing"></span>
                </div>
            </div>


            <!-- LATEST POSTS -->                              
            <div class="widget latest-posts">
            	<h3 class="widget-title">
                	Latest Posts
                </h3>
                <div class="posts-container">
                
                	<div class="item">
                    	<img src="{{asset('blog_assets/img/latest-posts-1.jpg')}}" alt="post 1" class="post-image">
                        <div class="info-post">
                        	<h5><a href="#">MAECENAS <br> CONSECTETUR</a></h5>
                        	<span class="date">07 JUNE 2016</span>	
                        </div> 
                        <div class="clearfix"></div>   
                    </div>

                	<div class="item">
                    	<img src="{{asset('blog_assets/img/latest-posts-1.jpg')}}" alt="post 2" class="post-image">
                        <div class="info-post">
                        	<h5><a href="#">MAURIS SIT AMET</a></h5>
                        	<span class="date">06 JUNE 2016</span>                       	
                        </div> 
                        <div class="clearfix"></div>   
                    </div>

                	<div class="item">
                    	<img src="{{asset('blog_assets/img/latest-posts-1.jpg')}}" alt="post 3" class="post-image">
                        <div class="info-post">
                        	<h5><a href="#">NAM EGET <br> PULVINAR ANTE</a></h5>
                        	<span class="date">05 JUNE 2016</span>                        	
                        </div> 
                        <div class="clearfix"></div>   
                    </div>

                	<div class="item">
                    	<img src="{{asset('blog_assets/img/latest-posts-1.jpg')}}" alt="post 4" class="post-image">
                        <div class="info-post">
                        	<h5><a href="#">VIVAMUS ET TURPIS LACINIA</a></h5>
                        	<span class="date">04 JUNE 2016</span>                     	
                        </div>    
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
            </div>


            <!-- FOLLOW US -->                              
            <div class="widget follow-us">
            	<h3 class="widget-title">
                	Follow Us
                </h3>
            	<div class="follow-container">
                    <a href="#"><i class="icon-facebook5"></i></a>
                    <a href="#"><i class="icon-twitter4"></i></a>
                    <a href="#"><i class="icon-google-plus"></i></a>
                    <a href="#"><i class="icon-vimeo4"></i></a>
                    <a href="#"><i class="icon-linkedin2"></i></a>                
                </div>
            	<div class="clearfix"></div>
            </div>            


            <!-- TAGS -->                              
            <div class="widget tags">
            	<h3 class="widget-title">
                	Tags
                </h3>
            	<div class="tags-container">
                    <a href="#">Audio</a>
                    <a href="#">Travel</a>
                    <a href="#">Food</a>
                    <a href="#">Event</a>
                    <a href="#">Wordpress</a>
                    <a href="#">Video</a>
                    <a href="#">Design</a>
                    <a href="#">Sport</a>
                    <a href="#">Blog</a>
                    <a href="#">Post</a> 
                    <a href="#">Img</a>
                    <a href="#">Masonry</a>                                    
                </div>
            	<div class="clearfix"></div>
            </div> 


            <!-- ADVERTISING -->                              
            <div class="widget advertising">
				<div class="advertising-container">
                	<img src="{{asset('blog_assets/img/350x300.png')}}" alt="banner 350x300">
                </div>
			</div>


            <!-- NEWSLETTER -->                              
            <div class="widget newsletter">
            	<h3 class="widget-title">
                	Newsletter
                </h3>
            	<div class="newsletter-container">
					<h4>DO NOT MISS OUR NEWS</h4>
                    <p>Sign up and receive the <br> latest news of our company</p> 
                    <form>
                       <input type="email" class="newsletter-email" placeholder="Your email address...">
                       <button type="submit" class="newsletter-btn">Send</button>
                  	</form>                                  
                </div>
            	<div class="clearfix"></div>
            </div>  
            
        </div> <!-- #SIDEBAR -->


    	<!-- CONTENT -->
    	<div class="content col-xs-8">
        
        
        	<!-- ARTICLE 1 -->        
        	<article>
            	<div class="post-image">
                	<img src="{{asset('blog_assets/img/img-post-1.jpg')}}" alt="post image 1"> 
                </div>
                <div class="post-text">
                    <h2>Page with Left Sidebar</h2>
                </div>                 
                <div class="post-text text-content">                  
                	<div class="text"><p>Sed ut massa tristique, vehicula tellus in, fringilla ligula. Phasellus dignissim est sed egestas fringilla. Vivamus egestas nec dolor vitae egestas. Nulla a ante odio. Vestibulum lobortis tincidunt nulla non varius. Fusce ornare, ante nec ullamcorper scelerisque, <a href="#">nisl erat sollicitudin lacus</a>, ac sodales ligula sem eu risus. Fusce laoreet interdum eros, nec finibus mi rutrum eu.
					<br><br>
					Nulla at sem in nisi pulvinar porta consequat a quam. Proin vehicula placerat est, vulputate dapibus elit scelerisque sit amet. Sed at condimentum justo, accumsan molestie ligula. Phasellus porttitor urna sit amet lorem rutrum luctus ut molestie nulla. Nulla facilisi. Pellentesque quis nibh ut arcu bibendum tincidunt.             	
					</p>                    
                    <div class="gallery">
                    	<div class="item-gallery-left">
                        	<img src="{{asset('blog_assets/img/img-post-gallery-1.jpg')}}">
                            <img src="{{asset('blog_assets/img/img-post-gallery-2.jpg')}}">
                        </div>
                        <div class="item-gallery-center">
                        	<img src="{{asset('blog_assets/img/img-post-gallery-big.jpg')}}">
                        </div>	
                        <div class="item-gallery-right">    
                            <img src="{{asset('blog_assets/img/img-post-gallery-3.jpg')}}">
                            <img src="{{asset('blog_assets/img/img-post-gallery-4.jpg')}}">
                    	</div>	
                            <div class="clearfix"></div> 
                    </div>
                    <ul class="bullet">
                    	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                        <li>Integer lorem quam, interdum id nulla vel, varius lacinia metus</li>
                        <li>Nunc quis elit scelerisque, dapibus sem et, venenatis nunc</li>
                        <li>Proin eu laoreet augue. Aenean at rutrum nibh</li>
                    </ul>
                    <p>Nullam tristique massa faucibus, sodales sapien ac, tincidunt dolor. Quisque ut lobortis lectus, non suscipit ante. Duis lectus metus, consequat vitae ante et, ullamcorper scelerisque nisl. 
					<br><br>
					Nullam tristique massa faucibus, sodales sapien ac, tincidunt dolor. Quisque ut lobortis lectus, non suscipit ante. Phasellus et aliquet velit. Donec in dui vitae tellus sodales dapibus non quis libero. 
                    Quisque nec tortor ac ligula sagittis rutrum in a felis.
                 	<br><br>
                    <quote>“ Vestibulum at justo ante. Fusce finibus pretium aliquam. Sed pharetra purus at augue faucibus sagittis. 
                    Interdum et malesuada fames ac ante ipsum primis in faucibus. ”</quote><br><br>
                    Quisque euismod sapien vel neque tincidunt vulputate. Duis nulla elit, mollis eu fringilla euinterdum vel libero. 
                    Phasellus quis felis tempor, vulputate juquis, ullamcorper nisi.</p>
                    
                    <div class="clearfix"></div>
                    </div>
                </div>

            
       	 	</article>

        
        </div>
        
   		<div class="clearfix"></div>

@endsection;