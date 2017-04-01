<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="border-decor_top">
                <section class="section-default">
                    <section class="section_contacts-form">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="ui-title-block">Send <strong>Us Message</strong></h2>
                                    <div class="wrap-subtitle">
                                        <div class="ui-subtitle-block ui-subtitle-block_w-line">If you have some feedback or want to ask any questions</div>
                                    </div><!-- end wrap-title -->
                                    <form class="form-contact ui-form" action="#" method="post" onsubmit="return false" id="contactform">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" name="sub" placeholder="Subject">
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="email" name="email" placeholder="Email Address" required>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" name="phone" placeholder="Phone Number" maxlength="15">
                                            </div>
                                            <div class="col-xs-12">
                                                <textarea class="form-control" required rows="5" name="msg" placeholder="Write your message here...."></textarea>
                                                <button class="btn btn-primary btn-effect">SEND NOW</button>
                                            </div>
                                        </div>
                                    </form>
                                    <script>
                                        $('#contactform').submit(function () {
                                            var dat = $("#contactform").serialize();
                                            $.ajax({
                                                url: 'sendmail.php',
                                                type: 'POST',
                                                data: dat,
                                                success: function (msg)
                                                {
                                                    alert(msg);
                                                }
                                            });
                                        });
                                    </script>
                                </div><!-- end col -->
                                <div class="col-sm-4">
                                    <a href="tel:+1-877-778-8130" class="support">
                                        <img class="img-responsive" src="assets/media/support/1.jpg" height="248" width="330" alt="Foto">
                                        <div class="support__title" style="height: 70px;">
                                            <i class="icon stroke icon-Headset"></i>
                                            Call Us On : +1-877-778-8130
                                        </div>
                                    </a>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end container -->
                    </section><!-- end section_contacts-form -->
                </section>
            </div>
        </div>
    </div>
</div>