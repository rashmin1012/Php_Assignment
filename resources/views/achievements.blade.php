@extends('home')

@section('achieve')
    
    <!-- White .... Section 2 Main -->
	<div class="wrapper style2">
		<div class="title">Achievements</div>
			<div id="main" class="container">
					
			<!-- Image
			<a href="#" class="image featured">
				<img src="images/pic01.jpg" alt="" />
			</a>
			-->
			<!-- Post Section2 -->
			    <section id="features">
					<header class="style1">
						<h2>ACHIEVEMENTS</h2>
					</header>
					
                    
                    <div class="feature-list">
                    @foreach($my_blogs as $t)	
						<div class="row">
							
								<div class="6u">
									<section>
										<h3 class="icon fa-comment">{{$t->title}}</h3>
										<p>{{$t->descri_body}}</p>
									</section>
								</div>

                                <div class="4u">
					                <section class="highlight">
						                <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
                                        <h3><a href="#">Date : {{$t->achieve_date}}</a></h3>
						                <p>Image name : {{$t->image_name}}</p>
						                <ul class="actions">
							                <li><a href="#" class="button style1">Learn More</a></li>
						                </ul>
					                </section>
					            </div>
					    	
						</div>
                        @endforeach
                    </div>
                    

				</section>

			</div>
		</div>
    </div>

@endsection