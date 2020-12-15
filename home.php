
    <div class="hero-wrap js-fullheight" style="background-image: url('<?php echo web_root; ?>plugins/jobportal/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We have over <span class="number" data-number="850000">0</span> offer for you!</p>
            <h1 class="mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span>Amid struggles in creating  business and starting careers, lies us your bridge.</span></h1>

            <div class="ftco-search">
              <div class="row">
                <div class="col-md-12 nav-link-wrap">
                  <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find a Job</a>  
                  </div>
                </div>
                <div class="col-md-12 tab-wrap">
                  
                  <div class="tab-content p-4" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                   
                        <form  class="search-job" action="index.php?q=result&searchfor=advancesearch" method="POST"> 
                        <div class="row">
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-briefcase"></span></div>
                                <input type="text"  name="SEARCH" class="form-control" placeholder="eg. Receptionist">
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="select-wrap">
                                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                  <select name="CATEGORY" class="form-control">
                                    <option value="">Category</option>
                                    <?php
                                      $sql = "SELECT * FROM `tblcategory`";
                                      $mydb->setQuery($sql);
                                      $res = $mydb->loadResultList();
                                      foreach ($res as $row) { 
                                        echo '<option>'.$row->CATEGORY.'</option>';
                                      }
                                    ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-map-marker"></span></div>
                                 <select  name="COMPANY" class="form-control">
                                    <option value="">Company</option>
                                   <?php
                                      $sql = "SELECT * FROM tblcompany";
                                      $mydb->setQuery($sql);
                                      $res = $mydb->loadResultList();
                                      foreach ($res as $row) { 
                                        echo '<option>'.$row->COMPANYNAME.'</option>';
                                      }
                                    ?>
                                  </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <input type="submit" value="Search" class=" btn btn-success">
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>

                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-resume"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">JOBS</h3>
                <p>The average person puts only 25% of his energy into his work.
                The world takes off its hat to those who put in more than 50% of their capacity,
                and stands on its head for those few and far between souls who devote 100%.</p>
              </div>    
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-collaboration"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">USER FRIENDLY</h3>
                <p>Usability is not only about ease of use but also about bringing something meaningful, having an objective in common with the user.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-promotions"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">GREAT CAREER</h3>
                <p>Find out what you like doing best and get someone to pay you for doing it.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-employee"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">EASY TO SEARCH</h3>
                <p>Procrastination makes easy things hard, hard things harder.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-counter">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Categories work wating for you</span>
            <h2 class="mb-4"><span>Current</span> Job Posts</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 ftco-animate">
            <ul class="category">
              <li><a href="#">Nurse<span><br>Available</span></a></li>
              <li><a href="#">Secetary <span><br>Available</span></a></li>
              <li><a href="#">Receptionist<span><br>Available</span></a></li>
              <li><a href="#">Cleaner <span> <br>Available</span></a></li>
            </ul>
          </div>
          <div class="col-md-3 ftco-animate">
            <ul class="category">
              <li><a href="#">Teachers <span ><br>Available</span></a></li>
              <li><a href="#">Accountant <span ></span><br>Available</a></li>
              <li><a href="#">Marketing Director <span> <br>Available</span></a></li>
              <li><a href="#">Mechanical Engineer  <span> <br>Available</span></a></li>
            </ul>
          </div>
          <div class="col-md-3 ftco-animate">
            <ul class="category">
              <li><a href="#">Computer System Analyst <span ><br>Available</span></a></li>
              <li><a href="#">Financial Manager <span ><br>Available</span></a></li>
              <li><a href="#">Bus Drivers <span ><br>Available</span></a></li>
              <li><a href="#">Hairdresser <span ><br>Available</span></a></li>
            </ul>
          </div>
          <div class="col-md-3 ftco-animate">
            <ul class="category">
              <li><a href="#">Sales Manager <span><span ><br>Available</span></span></a></li>
              <li><a href="#">Architect<span ><br>Available</span></a></li>
              <li><a href="#">Sales Representative <span><br>Available</span></a></li>
              <li><a href="#">Restaurant Cook <span ><br>Available</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

  <!--  /a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section> -->  
       
   
      <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Testimonial</span>
            <h2 class="mb-4"><span>Happy</span> Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo web_root; ?>plugins/jobportal/images/prince_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">FINDAWORK has helped transformed the way you connect with business platforms to inspire people and secure technology infrasturcture and also to involve workers accelerate innovations as instruments for free-flowing productivity.</p>
                    <p class="name"> ONYEBUCHI PRINCE</p>
                    <span class="position">Fullstack Developer</span>
                  </div>
                </div>
              </div>
               <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo web_root; ?>plugins/jobportal/images/bg_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">"The present situation of unployment is scary, some lack the confidence, will, and direction to steer forward.FINDAWORK has helped solved the problem between organizations getting those they need and the public free will in searching for the jobs they deserve..</p>
                    <p class="name">ISAAC EMETI</p>
                    <span class="position">Director</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo web_root; ?>plugins/jobportal/images/presh_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Those who are already being oppressed in their present job may not have the time to succesfully go out and pursue the job the deserve, FINDAWORK has helped put business firms, workers, and resources to work in service of an inclusive future, where ideology gives everyone the tools to thrive.</p>
                    <p class="name">PRECIOUS NZUBECHUKWE NGWUBE</p>
                    <span class="position">Software Developer.</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo web_root; ?>plugins/jobportal/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">"Well this project is really amazing because it helps to solve a whole lots of problems that is associated with nigeria today most especially the youths when it comes to looking for job, so to me its not just a product but a perfect solution."</p>
                    <p class="name">EJIMNKEONYE ONYEKACHUKWU</p>
                    <span class="position">Software Developer</span>
                  </div>
                </div>
              </div>
             
               <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo web_root; ?>plugins/jobportal/images/bg_4.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">"I am truly pleased with the site and the positive vibes it has brought to my jeo political area, helping alot of youth in the street and the life of crime."</p>
                    <p class="name">CLEMENT SOMTOCHUKWU NWABUEZE</p>
                    <span class="position">Fullstack Developer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Our Blog</span>
            <h2><span>Recent</span> Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3">
                <div class="meta mb-2">
                  <div><a href="#">December 2, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Jobs you are qualified for</a></h3>
               <p>If you were able to believe in santa clause for like 8 years, you can believe in your self fro like 5 minutes.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text mt-3">
                <div class="meta mb-2">
                  <div><a href="#">December 2, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Jobs that are avaliable</a></h3>
               <p>Don't tell me how talented you are. Tell me how hard you work</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text mt-3">
                <div class="meta mb-2">
                  <div><a href="#">December 2, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Jobs that you want</a></h3>
               <p>Choose a job you love, and you will never have to work a day in your life.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
              </a>
              <div class="text mt-3">
                <div class="meta mb-2">
                  <div><a href="#">December 2, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Let today be the start of something new</a></h3>
               <p>No matter how hard the past is, you can always begin again.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    