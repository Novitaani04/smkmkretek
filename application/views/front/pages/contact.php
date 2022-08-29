<div style="background:#212121;width:100%;height: 100px;"></div>
<section class="w3l-contact-1 py-5" id="contact">
        <div class="contacts-9 py-lg-5 py-md-4">
            <div class="container">
                <?php
                 foreach($contact as $value):
                ?>
                <div class="d-grid contact-view mb-5 pb-lg-5">
                    <div class="cont-details">
                        <div class="contactct-fm-text text-left mb-md-5 mb-4">
                            <div class="header-title mb-md-5 mt-4">
                                <!-- <span class="sub-title">Find Us</span> -->
                                <h3 class="hny-title text-left">Contact </h3>
                            </div>
                        </div>
                        <div class="cont-top">
                            <div class="cont-left text-center">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Phone number</h6>
                                <p><a href="telepon"><?=$value->telepon?></a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-envelope-o"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Send Email</h6>
                                <p><a href="email" class="mail"><?=$value->email?></a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Office Address</h6>
                                <p class="pr-lg-5"><?=$value->alamat?></p>
                            </div>
                        </div>
                    </div>
                    <div class="map-content-9">
                        <div class="contactct-fm map-content-9 pl-lg-4">
                            <div class="contactct-fm-text text-left">
                                <div class="header-title mb-md-5 mt-4">
                                    <!-- <span class="sub-title">Contact Us</span> -->
                                    <h3 class="hny-title text-left">Contact Us</h3>
                                </div>
                                <!-- <p class="mb-sm-5 mb-4">Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
                                    consectetur adipisicing.</p> -->
                            </div>
                            <form action="<?=base_url('admin/Pesan/add_new_data_user')?>" method="post">
                                <div class="twice-two">
                                    <input type="text" class="form-control" name="nama" id="w3lName"
                                        placeholder="Name" required="">
                                    <input type="email" class="form-control" name="email" id="w3lSender"
                                        placeholder="Email" required="">
                            </div>
                                <textarea name="pesan" class="form-control" id="w3lMessage" placeholder="Message"
                                    required=""></textarea>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary btn-style mt-4">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="map-iframe">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3951.1685942794256!2d110.3133911!3d-7.9815179!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7b00130761f6d9%3A0x44559777792fcdf1!2sSmp%20Muhammadiyah%20Kretek!5e0!3m2!1sen!2sid!4v1661738256150!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                       
                </div>
            <?php
                endforeach;
            ?>

            </div>
    </section>