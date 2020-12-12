<?php defined('BASEPATH') or exit('No direct access allowed'); ?>
<style type="text/css">
    body{
        letter-spacing: .3px;
    }
    a,a:hover,a:active,a:focus{
        text-decoration: none;
    }
    .container{
        max-width:1180px;
    }
    .topbarrs .rsi{
        display: flex;
        justify-content: flex-end;
    }

    .topbarrs .rsi li a{
        color:#ccc;
        padding:.5rem 0;
        border-right:1px solid var(--primary);
        width:2.6rem;
        font-size:.8rem;
    }
    .topbarrs .rsi li:first-child a{
        border-left:1px solid var(--primary);        
    }
    .topbarrs .rsi li a:hover{
        background:var(--dark);
    }
    .topbarrs .rsflash{
        padding-top:.35rem;
        padding-bottom:.35rem;
        display: inline-block;
        font-weight:600 ;
    }
    .rsnav .navbar-brand{
        padding:0;
    }
    .rsnav .navbar-brand img{
        max-height: 80px;
    }
    .rsnav .navbar-nav .nav-item .nav-link{
        color:#c6b89d ;
        font-size:.9rem;
        padding-left:1rem;
        padding-right:1rem;
    }
    @keyframes flash{
        0%,50%,to{
            opacity:1
        }
        25%,75%{
            opacity:0
        }
    }
    .rsflash{
        -webkit-animation-name:flash;
        animation-name:flash;
        animation-duration: 2s;
        -webkit-animation-duration: 2s;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
    }
</style>
        <div class="topbarrs bg-secondary border-bottom border-primary d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-6 text-left">
                        <a href="tel:+919811422554" class="text-white btn btn-primary rsflash rounded-0"><i class="fa fa-phone mr-2"></i>Call Us Today: +91-98114 22554</a>
                    </div>
                    <div class="col-6 text-right">
                        <ul class="rsi list-inline mb-0">
                            <li class="">
                                <a class="btn btn-sm" href="https://www.facebook.com/markrealesstate/" target="_blank" rel="nofollow"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="">
                                <a class="btn btn-sm" href="https://twitter.com/MEsstate" target="_blank" rel="nofollow"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="">
                                <a class="btn btn-sm" href="https://www.linkedin.com/company/mark-real-esstate-gurgaon/?viewAsMember=true" target="_blank" rel="nofollow"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="">
                                <a class="btn btn-sm" href="https://www.youtube.com/channel/UCekdRD9sqld4Yc7zxLPaTdQ?view_as=subscriber" target="_blank" rel="nofollow"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li class="">
                                <a class="btn btn-sm" href="https://in.pinterest.com/markrealesstateggn/" target="_blank" rel="nofollow"><i class="fab fa-pinterest"></i></a>
                            </li>
                            <li class="">
                                <a class="btn btn-sm" href="https://www.instagram.com/markrealesstate6/" target="_blank" rel="nofollow"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header class="sticky-top">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm rsnav">
                <div class="container">
                    <a class="navbar-brand font-weight-bold" href="#"><img src="<?=template_url('dist/images/logo.png');?>"/></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto ">
                            <li class="nav-item">
                                <a class="nav-link" href="<?=base_url();?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=base_url('about-us/');?>">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=base_url('blogs/');?>">Blogs</a>
                            </li>
                            <style type="text/css">
                            </style>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Properties</a>
                                <div class="dropdown-menu">
                                    <div class="row w-100">
                                        <div class="col-md-4 pb-2">
                                            <h6 class="text-uppercase title px-3">
                                                New Booking
                                            </h6>
                                            <a class="dropdown-item" href="<?=base_url('properties-list/www-markrealesstate-com/');?>">Trump Towers Delhi/NCR</a>
                                            <a class="dropdown-item" href="<?=base_url('properties-list/mahindra-luminare-sector-59-gurgaon/');?>">Mahindra Luminare</a>
                                            <a class="dropdown-item" href="<?=base_url('properties-list/dlf-the-crest-dlf-5/');?>">DLF Crest</a>
                                            <a class="dropdown-item" href="<?=base_url('properties-list/m3m-latitude/');?>">M3M Latitude</a>
                                            <a class="dropdown-item" href="#">M3M Golf Estate</a>
                                            <a class="dropdown-item" href="<?=base_url('properties-list/tata-primanti/');?>">Tata Primanti</a>
                                        </div>
                                        <div class="col-md-4 pb-2">
                                            <h6 class="text-uppercase title px-3">
                                                Resale
                                            </h6>
                                            <a class="dropdown-item" href="<?=base_url('properties-list/m3m-golf-estate/');?>">M3M Golf Estate</a>
                                            <a class="dropdown-item" href="<?=base_url('properties-list/m3m-latitude/');?>">M3M Latitude</a>
                                            <a class="dropdown-item" href="<?=base_url('properties-list/dlf-the-crest-dlf-5/');?>">DLF Crest</a>
                                        </div>
                                        <div class="col-md-4 pb-2">
                                            <h6 class="text-uppercase title px-3">
                                                Under Construction
                                            </h6>
                                            <a class="dropdown-item" href="<?=base_url('properties-list/idi-group-galaxy-green-arcade/');?>">M3M Heights</a>
                                            <a class="dropdown-item" href="<?=base_url('properties-list/m3m-latitude/');?>">M3M Latitude</a>
                                            <a class="dropdown-item" href="<?=base_url('properties-list/ambience-creacions/');?>">Ambience Creacions</a>
                                            <a class="dropdown-item" href="<?=base_url('properties-list/central-park-sohna-road/');?>">Central Park Sohna Road</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=base_url('achievements/');?>">Awards & Recognitions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=base_url('contact-us/');?>">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>