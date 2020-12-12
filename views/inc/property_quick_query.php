<?php defined('BASEPATH') or exit('No direct access allowed'); ?>

        <div class="card card-primary mt-5">
            <h6 class="card-header bg-primary text-white text-uppercase">
                <i class="fa fa-info-circle mr-2    "></i>Request More Information
            </h6>  
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-sm-6 col-lg-5 bg-light p-4">
                        <table class="table table-lg small">
                            <tbody>
                                <tr>
                                    <td><i class="fa fa-map-marker mr-2"></i>Address</td>
                                    <td class="text-right"><a href="https://maps.google.com/maps?ll=28.424781,77.03476&z=16&t=m&hl=en&gl=IN&mapclient=embed&cid=8314065135655872180" target="_blank" rel="nofollow">Sector-48, Gurgaon</a></td>
                                </tr>  
                                <tr>
                                    <td><i class="fa fa-phone mr-2"></i>Phone</td>
                                    <td class="text-right"><a href="tel:+919811422554">(+91) 9811422554</a></td>
                                </tr>  
                                <tr>
                                    <td><i class="fab fa-whatsapp mr-2"></i>Whatsapp</td>
                                    <td class="text-right"><a href="https://wa.me/919811422554" target="_blank" rel="nofollow">(+91) 9811422554</a></td>
                                </tr>   
                                <tr>
                                    <td><i class="fa fa-envelope mr-2"></i>Email</td>
                                    <td class="text-right"><a href="mailto:shivani.mresstate@gmail.com">shivani.mresstate@gmail.com</a></td>
                                </tr>  
                                <tr class="border-bottom">
                                    <td><i class="fa fa-globe mr-2"></i>Website</td>
                                    <td class="text-right"><a href="https://markrealesstate.com">markrealesstate.com</a></td>
                                </tr>   
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-6 col-lg-7 bg-light p-4">
                        <?=get_template('inc/contact_form');?>
                    </div>
                </div>
            </div>
        </div>