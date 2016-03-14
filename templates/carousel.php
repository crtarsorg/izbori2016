<?php  echo "alal"; ?>


<section class="container carousel-wrap">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">                            
                <a href="http://www.google.com">
                	<img src="static/images/3.jpg" alt="izbori-2016_infographic">
                </a>
            </div>

            <div class="item">
            	<a href="http://www.istinomer.rs">
                	<img src="static/images/1.jpg" alt="">
            	</a>
            </div>

            <div class="item">
              	<a href="http://www.istinomer.rs">
                	<img src="static/images/4.jpg" alt="">
            	</a>
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>