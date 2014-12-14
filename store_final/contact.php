 <?php $titulo="Contact"; ?>
<?php include ("template_top.inc"); ?>


<!-- Content section -->        
<section class="main">
    
    <!-- Static page 1 -->
    <section class="static_page_1">


        <div class="container">
            <div class="row">
                <div class="span12">
                    <section class="static-page">
                        <div class="row-fluid">
      
                            <div class="span12">
                                <div class="content">
                                    <h1>Get in touch!</h1>
                                    <p class="lead">Our opening hours are Monday to Friday &mdash; 9:00 to 18:00 GMT</p>
                                    <!-- <p>For <strong>hosting</strong> and <strong>support</strong>, please visit our <a href="http://laboutique.ticksy.com" target="_blank">support board</a>. Oh and don’t forget to check out our amazing <a href="http://themeforest.net/user/Tfingi" target="_blank"><strong>La Boutique <em>Pro</em></strong></a> theme.</p> -->
                                    <hr />
                                    <h3>Contacts</h3>
                                    <div class="map" style="height: 320px; width: 100%; background-color: #F0F0F0;" data-address="16 Clocktower Mews, Newmarket, CB8 8LL, UK" data-zoom="12">&nbsp;</div>
                                    <hr />
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <h5><em class="icon-map-marker icon-larger"></em> La Boutique</h5>
                                            <p>Clocktower Mews<br />Newmarket CB8 8LL<br />United Kingdom</p>
                                        </div>
                                        <div class="span4">
                                            <h5><em class="icon-phone icon-larger"></em> Call us</h5>
                                            <p>Well, don't really call us as we do not offer telephone support :)<br /><strong>+44 1234 567 890</strong></p>
                                        </div>
                                        <div class="span4">
                                            <h5><em class="icon-medkit icon-larger"></em> Support</h5>
                                            <p>A dedicated team provides timely and effective <a href="http://laboutique.ticksy.com" target="_blank">support</a> whenever you need a hand getting things right.</p>
                                        </div>
                                    </div>
                                    <hr />

                                    <form id="form" enctype="multipart/form-data" action="#" method="post" />
                                        
                                        <h3>Send us a message</h3>

                                        <div class="row-fluid">
                                            <div class="span6">
                                                <div class="control-group">
                                                    <label for="name" class="control-label">Name</label>
                                                    <div class="controls">
                                                        <input type="text" name="name" id="name" value="" class="span12" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="span6">
                                                <div class="control-group">
                                                    <label for="email" class="control-label">Email</label>
                                                    <div class="controls">
                                                        <input type="text" name="email" id="email" value="" class="span12" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row-fluid">
                                            <div class="span6">
                                                <div class="control-group">
                                                    <label for="subject" class="control-label">Subject</label>
                                                    <div class="controls">
                                                        <input type="text" name="subject" id="subject" value="" class="span12" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="span6">
                                                <div class="control-group">
                                                    <label for="order_no" class="control-label">Order number</label>
                                                    <div class="controls">
                                                        <input type="text" name="order_no" id="order_no" value="" class="span12" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row-fluid">
                                            <div class="span12">
                                                <div class="control-group">
                                                    <label for="message" class="control-label">Message</label>
                                                    <div class="controls">
                                                        <textarea name="message" id="message" class="span12"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row-fluid">
                                            <div class="span12">
                                                <button class="btn btn-primary">
                                                    Send message
                                                </button>
                                            </div>
                                        </div>

                                    </form>                         
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>    
    <!-- End Static page 1 -->  
</section>
<!-- End class="main" -->


<?php include ("template_bottom.inc"); ?>