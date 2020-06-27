    <!--=== Header ===-->    
<?php include "header.php"; ?>  
    <!--=== End Header ===-->  

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">অভিযোগ প্রতিকার ব্যবস্থা সিটিজেন -এ স্বাগতম</h1>
                <hr>
                <p>সরকারি সেবা প্রাপ্তিতে যে কোন অসন্তোষ বা অভিযোগ আপনি সহজেই এ ওয়েবসাইটের মাধ্যমে কর্তৃপক্ষের নিকট উপস্থাপন করতে পারেন। এটি মন্ত্রিপরিষদ বিভাগ, বাংলাদেশ সরকার কর্তৃক পরিচালিত কেন্দ্রীয় অভিযোগ ব্যবস্থাপনার একটি অনলাইন প্ল্যাটফর্ম। </p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll"> বিস্তারিত দেখুন</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">অভিযোগ নিষ্পত্তি  ব্যবস্থাপনা সিটিজেন সম্পর্কে জেনে নিন!</h2>
                    <hr class="light">
                    <p class="text-faded">অভিযোগ নিষ্পত্তি ব্যবস্থা সিটিজেন -এ আপনাকে আবারো  স্বাগতম। এই ব্যবস্থাপনা দ্বারা আপনি যে কোনও অভিযোগ ঊর্ধ্বতন কর্মকর্তাকে প্রেরণ করতে পারবেন।

এ ক্ষেত্রে প্রথমে আপনাকে এ ওয়েবসাইটে নিবন্ধন করতে হবে। অনলাইন নিয়ন্ত্রক প্যানেল দ্বারা অভিযোগকারীগণ তাঁদের অভিযোগ নিষ্পত্তির হালনাগাদ তথ্য জানতে পারবেন। অভিযোগ দাখিল করার জন্য আপনার নির্ধারিত কনট্রোল 

প্যানেল দ্বারা আপনার বিষয়বস্তু উল্লেখ করে সংরক্ষণ করুন। অতঃপর আপনি একটি প্রচ্ছদ-পত্রের মাধ্যমে আপনার অভিযোগের সারমর্ম উপস্থাপন করবেন।</p>
                    <a href="<?php echo base_url();?>index.php/user/add_complain_user" class="page-scroll btn btn-default btn-xl sr-button">অভিযোগ দাখিল করুন</a>
                </div>
            </div>
        </div>
    </section>

<section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">আপনার সেবায় আছে সিটিজেন </h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3><a href="<?php echo base_url();?>index.php/user/add_complain_user">অভিযোগ স্থাপন</a></h3>
                        <p class="text-muted">আপনার অভিযোগটি দাখিল করুন ।</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3><a href="#">তথ্য</a></h3>
                        <p class="text-muted">ব্যবস্থাপনা সম্পর্কিত বিস্তারিত তথ্য জানুন</p>
                    </div>
                </div>
                
                 <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa fa-comment text-primary sr-icons"></i>
                        <h3><a href="#">সচরাচর জিজ্ঞাসা</a></h3>
                        <p class="text-muted">সাধারন প্রশ্নোত্তর জানতে ক্লিক করুন এখানে।।</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa fa-question-circle text-primary sr-icons"></i>
                        <h3><a href="<?php echo base_url();?>index.php/user/add_contact">মতামত</a></h3>
                        <p class="text-muted"> আপনার মতামত জানান । </p>
                    </div>
                </div> 
            </div>
        </div>
    </section>


    <section class="bg-primary" id="depthead">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"> কর্তৃপক্ষ প্রধান লগইন</h2>
                    <hr class="light">
                    <p class="text-faded">আপনি অনুমোদিত কর্তৃপক্ষের প্রধান হলে এখানে লগইন করুন। </br> সতর্কতাঃ এ অংশটি সাধারণের ব্যবহারের জন্য নয়।</p>
                    <a href="<?php echo base_url();?>index.php/logindepthead" class="page-scroll btn btn-default btn-xl sr-button">লগইন করুন</a>
                </div>
            </div>
        </div>
    </section>


    <section id="deptemp">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"> কর্তৃপক্ষ কর্মচারী লগইন</h2>
                    <hr class="services">
                    <p class="text-center">আপনি অনুমোদিত কর্তৃপক্ষের কর্মচারী হলে এখানে লগইন করুন। </br> সতর্কতাঃ এ অংশটি সাধারণের ব্যবহারের জন্য নয়।</p>
                    <a href="<?php echo base_url();?>index.php/logindeptemp" class="page-scroll btn btn-primary btn-xl sr-button">লগইন করুন</a>
                </div>
            </div>
        </div>
    </section>

        <section class="bg-primary" id="member">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"> সংসদ সদস্য লগইন</h2>
                    <hr class="light">
                    <p class="text-faded">আপনি অনুমোদিত সংসদ সদস্য হলে এখানে লগইন করুন। </br> সতর্কতাঃ এ অংশটি সাধারণের ব্যবহারের জন্য নয়।</p>
                    <a href="<?php echo base_url();?>index.php/loginmember" class="page-scroll btn btn-default btn-xl sr-button">লগইন করুন</a>
                </div>
            </div>
        </div>
    </section>


    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-3 col-sm-6">
                    <a href="<?php echo (rsc.'user_resource/img/portfolio/fullsize/1.jpg') ?>" class="portfolio-box">
                        <img src="<?php echo (rsc.'user_resource/img/portfolio/thumbnails/1.jpg') ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    আপনার এলাকায় ভাঙ্গা রাস্তা থাকলে অভিযোগ করুন
                                </div>
                                <div class="project-name">
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="<?php echo (rsc.'user_resource/img/portfolio/fullsize/2.jpg') ?>" class="portfolio-box">
                        <img src="<?php echo (rsc.'user_resource/img/portfolio/thumbnails/2.jpg') ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    কোথাও দুর্ঘটনা ঘটলে আমাদের জানান
                                </div>
                                <div class="project-name">
                                   
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="<?php echo (rsc.'user_resource/img/portfolio/fullsize/3.jpg')  ?>" class="portfolio-box">
                        <img src="<?php echo (rsc.'user_resource/img/portfolio/thumbnails/3.jpg') ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    কোথাও ভাঙ্গা রেললাইন থাকলে আমাদের জানান
                                </div>
                                <div class="project-name">
                                   
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="<?php echo (rsc.'user_resource/img/portfolio/fullsize/4.jpg') ?>" class="portfolio-box">
                        <img src="<?php echo (rsc.'user_resource/img/portfolio/thumbnails/4.jpg') ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                   কেউ খাবারে ভেজাল দিলে আমাদের জানান
                                </div>
                                <div class="project-name">
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                
            </div>

            <div class="row no-gutter popup-gallery">
                <div class="col-lg-3 col-sm-6">
                    <a href="<?php echo (rsc.'user_resource/img/portfolio/fullsize/5.jpg') ?>" class="portfolio-box">
                        <img src="<?php echo (rsc.'user_resource/img/portfolio/thumbnails/5.jpg') ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    আপনার এলাকায় পানি সরবরাহে সমস্যা থাকলে আমাদের জানান
                                </div>
                                <div class="project-name">
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="<?php echo (rsc.'user_resource/img/portfolio/fullsize/6.jpg') ?>" class="portfolio-box">
                        <img src="<?php echo (rsc.'user_resource/img/portfolio/thumbnails/6.jpg') ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    লঞ্চে অতিরিক্ত যাত্রী বহন করলে আমাদের জানান
                                </div>
                                <div class="project-name">
                                   
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="<?php echo (rsc.'user_resource/img/portfolio/fullsize/7.jpg')  ?>" class="portfolio-box">
                        <img src="<?php echo (rsc.'user_resource/img/portfolio/thumbnails/7.jpg') ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    আপনার এলাকায় বিদ্যুৎ ঘাটতি থাকলে আমাদের জানান
                                </div>
                                <div class="project-name">
                                   
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="<?php echo (rsc.'user_resource/img/portfolio/fullsize/8.jpg') ?>" class="portfolio-box">
                        <img src="<?php echo (rsc.'user_resource/img/portfolio/thumbnails/8.jpg') ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                   কোথাও বাল্যবিবাহ হতে দেখলে আমাসের জানান
                                </div>
                                <div class="project-name">
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                
            </div>



        </div>
    </section>









    <!--=== Header ===-->    
<?php include "footer.php"; ?>  
    <!--=== End Header ===-->  