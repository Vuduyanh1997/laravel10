@extends('layouts.master')

@section('content')

<div class="content col-xs-12">

        
            <!-- ARTICLE 1 -->        
            <article>
                <div class="post-image">
                    <img src="{{asset('blog_assets/img/img-post-7.jpg')}}" alt="post image 1"> 
                </div>
                <div class="category">
                    <a href="#">Travel</a>
                </div>
                <div class="post-text">
                    <span class="date">07 Jun 2016</span>
                    <h2>MAECENAS CONSECTETUR</h2>
                </div>                 
                <div class="post-text text-content">
                    <div class="post-by">Post By <a href="#">AD-Theme</a></div>                    
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
                <div class="social-post">
                    <a href="#"><i class="icon-facebook5"></i></a>
                    <a href="#"><i class="icon-twitter4"></i></a>
                    <a href="#"><i class="icon-google-plus"></i></a>
                    <a href="#"><i class="icon-vimeo4"></i></a>
                    <a href="#"><i class="icon-linkedin2"></i></a>                  
                </div>
                
            
                <!-- NAVIGATION POST -->
                <div class="navigation-post">
                    <div class="prev-post">
                        <img src="{{asset('blog_assets/img/prev-post.jpg')}}">
                        <a href="#" class="prev">
                            <i class="icon-arrow-left8"></i> Previous Posts
                            <span class="name-post">DUIS FACILISIS AUGUE VITAE</span>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="next-post">                 
                        <a href="#" class="next">
                                Next Posts <i class="icon-arrow-right8"></i>                
                                <span class="name-post">DUIS FACILISIS AUGUE VITAE</span>
                        </a> 
                        <img src="{{asset('blog_assets/img/next-post.jpg')}}">  
                        <div class="clearfix"></div>             
                    </div>
                    <div class="clearfix"></div>
                </div>
                
                
                <!-- AUTHOR POST -->
                <div class="author-post-container">
                    <div class="author-post">
                        <div class="author-image">
                            <img src="{{asset('blog_assets/img/img-author.jpg')}}">
                        </div>
                        <div class="author-info">
                            <span class="author-name">LUCAS NEWAR</span>
                            <span class="author-description">Morbi gravida, sem non egestas ullamcorper, tellus ante laoreet nisl, id iaculis urna eros vel turpis curabitur. Nullam tristique massa faucibus, sodales sapien ac, tincidunt dolor.</span>
                            <span class="author-social">
                                <a href="#"><i class="icon-facebook5"></i></a>
                                <a href="#"><i class="icon-twitter4"></i></a>
                                <a href="#"><i class="icon-google-plus"></i></a>
                                <a href="#"><i class="icon-vimeo4"></i></a>
                                <a href="#"><i class="icon-linkedin2"></i></a>            
                            </span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                        
                </div>
                
                
                <!-- RELATED POSTS -->
                <div class="related-posts">
                        <h2>Related Article</h2>
                        <div class="related-item-container">
                            <div class="related-item">
                                <div class="related-image">
                                    <img src="{{asset('blog_assets/img/img-related-1.jpg')}}">
                                    <span class="related-category"><a href="#">Food</a></span>
                                </div>
                                <div class="related-text">
                                    <span class="related-date">03 JUNE 2016</span>
                                    <span class="related-title"><a href="#">TINCIDUNT SIT <br> ULTRICIES AMET</a></span>
                                </div>
                                <div class="related-author">
                                    Post by <a href="#">AD-THEME</a>
                                </div>
                            </div>
    
                            <div class="related-item">
                                <div class="related-image">
                                    <img src="{{asset('blog_assets/img/img-related-2.jpg')}}">
                                    <span class="related-category"><a href="#">TECHNOLOGY</a></span>
                                </div>
                                <div class="related-text">
                                    <span class="related-date">04 JUNE 2016</span>
                                    <span class="related-title"><a href="#">VIVAMUS ET <br> TURPIS LACINIA</a></span>
                                </div>
                                <div class="related-author">
                                    Post by <a href="#">AD-THEME</a>
                                </div>
                            </div>
                            
                            <div class="related-item">
                                <div class="related-image">
                                    <img src="{{asset('blog_assets/img/img-related-3.jpg')}}">
                                    <span class="related-category"><a href="#">Food</a></span>
                                </div>
                                <div class="related-text">
                                    <span class="related-date">01 JUNE 2016</span>
                                    <span class="related-title"><a href="#">CRAS IN NIBH NEC <br> SAPIEN BIBENDUM</a></span>
                                </div>
                                <div class="related-author">
                                    Post by <a href="#">AD-THEME</a>
                                </div>
                            </div>                                              
                        
                            <div class="clearfix"></div>
                        
                        </div>
                  </div>      
                        
                        
                  <!-- COMMENTS -->      
                  <div class="comments">
                            <h3>3 Comments</h3>
                            <div class="comments-list">
                                <div class="main-comment">
                                    <div class="comment-image-author">
                                        <img src="{{asset('blog_assets/img/img-author.jpg')}}">
                                    </div>
                                    <div class="comment-info">
                                        <div class="comment-name-date"><span class="comment-name">LUCAS NEWAR</span><span class="comment-date">June 2, 2016</span><div class="clearfix"></div></div>
                                        <span class="comment-description">Morbi gravida, sem non egestas ullamcorper, tellus ante laoreet nisl, id iaculis urna eros vel turpis curabitur. Donec in dui vitae tellus sodales dapibus non quis libero. Quisque nec tortor ac ligula sagittis rutrum in a felis. <i class="icon-arrow-right2"></i></span>                                
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="reply-comment">
                                    <span class="reply-line"></span>
                                    <div class="comment-image-author">
                                        <img src="{{asset('blog_assets/img/img-author.jpg')}}">
                                    </div>
                                    <div class="comment-info">
                                        <div class="comment-name-date"><span class="comment-name">LUCAS NEWAR</span><span class="comment-date">June 2, 2016</span><div class="clearfix"></div></div>
                                        <span class="comment-description">Morbi gravida, sem non egestas ullamcorper, tellus ante laoreet nisl, id iaculis urna eros vel turpis curabitur. Donec in dui vitae tellus sodales dapibus non quis libero. Quisque nec tortor ac ligula. <i class="icon-arrow-right2"></i></span>                                
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
    
                            <div class="comments-list">
                                <div class="main-comment">
                                    <div class="comment-image-author">
                                        <img src="{{asset('blog_assets/img/img-author.jpg')}}">
                                    </div>
                                    <div class="comment-info">
                                        <div class="comment-name-date"><span class="comment-name">LUCAS NEWAR</span><span class="comment-date">June 2, 2016</span><div class="clearfix"></div></div>
                                        <span class="comment-description">Morbi gravida, sem non egestas ullamcorper, tellus ante laoreet nisl, id iaculis urna eros vel turpis curabitur. Donec in dui vitae tellus sodales dapibus non quis libero. Quisque nec tortor ac ligula sagittis rutrum in a felis. <i class="icon-arrow-right2"></i></span>                                
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        
                </div>                                  
                
                
                <!-- COMMENT FORM -->
                <div class="comment-form">
                    <h3>Leavy a Reply</h3>
                    <span class="field-name">Your Name (required)</span>
                    <input type="text" class="name">
                    <span class="field-name">Your Name (required)</span>
                    <input type="text" class="email">
                    <span class="field-name">Your Message</span>
                    <textarea class="message"></textarea>
                    
                    <button type="submit">Send Comment</button>
                
                </div>
            
            
            </article>
        
        
        </div>
        
        <div class="clearfix"></div>

@endsection