<div id="sliderpro1" class="slider-pro main-slider">
    <div class="sp-slides">
        <div class="sp-slide"> <img class="sp-image" src="assets/media/main-slider/1.jpg"
                                    data-src="assets/media/main-slider/1.jpg"
                                    data-retina="assets/media/main-slider/1.jpg" alt="img"/>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="700" data-vertical="1"
                 data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
                <div class="main-slider__inner text-center">
                    <div class="main-slider__title" >Studycomp.Com</div>
                    <div class="main-slider__subtitle ">Online Assignment</div>
                </div>
            </div>
        </div>
        <div class="sp-slide"> <img class="sp-image" src="assets/media/main-slider/2.jpg"
                                    data-src="assets/media/main-slider/2.jpg"
                                    data-retina="assets/media/main-slider/2.jpg" alt="img"/>
            <div class="item-wrap sp-layer  sp-padding" data-horizontal="200" data-vertical="30"
                 data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
                <div class="main-slider__inner">
                    <div class="main-slider__title" >Studycomp.Com</div>
                    <div class="main-slider__subtitle ">Online Assignment</div>
                </div>
            </div>
        </div>


    </div>
</div>
<div class="col-md-3"style="border-radius:5px; padding: 15px;margin-top: -37%;margin-right: 4%;float: right;background-color: rgba(0, 1, 24,0.48)">
    <form method="post" action="send_attachments.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group"> 
                    <input type="text" id="text_tag_input" style="color: black;opacity: 5" name="subtitle" value="" class="form-control fancybox input-sm" placeholder="Select Topic" required href="#inline1" onClick="test();">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group"> 
                    <input type="text" name="date1" id="datetimepicker11" style="color: black" class="form-control input-sm" placeholder="Due Date" required href="#inline1">                
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group"> 
                    <input type="email" id="email" style="color: black" name="email" value="" class="form-control input-sm" placeholder="Enter Valid Email" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group"> 
                    <input type="number" name="phone" id="phone" style="color: black" class="form-control input-sm" placeholder="Enter Phone no" required>                
                </div>
            </div>  

            <div class="col-md-12">
                <div class="form-group">
                    <textarea id="msg" class="form-control input-sm bg_clr" style="color: black" rows="3" name="quesdetail" placeholder="Message here..." required></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <label class="btn btn-default" onclick="open_att()">Attach File</label>                
                </div>
                <div class="form-group col-md-6 ">
                    <input type="submit" value="Send"  class="btn btn-primary pull-right" style="border-radius: 2px; font-size: 13px; background: #02cc8b; border: none; box-shadow: none;" />
                </div>
            </div> 
            <div id="att1" class="col-sm-12 col-md-12" style="display: none">
                <div  class="col-md-6 pull-left" ><input type="file" name="file[]" id="f1"></div>  
                <input type="hidden" id="t1" class="hd">
                <div class="col-md-6 pull-right"><button type="button" style="float: right; background: none; border: none" onclick="cancel('d1')"><u>Cancel</u></button></div>    
            </div>             
            <div id="att2" class="col-sm-12 col-md-12" style="display: none">
                <div  class="col-md-6 pull-left" ><input type="file" name="file[]" id="f2"></div>  
                <input type="hidden" id="t2" class="hd">
                <div class="col-md-6 pull-right"><button type="button" style="float: right; background: none; border: none" onclick="cancel('d2')"><u>Cancel</u></button></div>    
            </div>             
            <div id="att3" class="col-sm-12 col-md-12" style="display: none">
                <div  class="col-md-6 pull-left" ><input type="file" name="file[]" id="f3"></div> 
                <input type="hidden" id="t3" class="hd">
                <div class="col-md-6 pull-right"><button type="button" style="float: right; background: none; border: none" onclick="cancel('d3')"><u>Cancel</u></button></div>    
            </div>             
            <div id="att4" class="col-sm-12 col-md-12" style="display: none">
                <div  class="col-md-6 pull-left" ><input type="file" name="file[]" id="f4"></div>   
                <input type="hidden" id="t4" class="hd">
                <div class="col-md-6 pull-right"><button type="button" style="float: right; background: none; border: none" onclick="cancel('d4')"><u>Cancel</u></button></div>    
            </div>             
            <div id="att5" class="col-sm-12 col-md-12" style="display: none">
                <div  class="col-md-6 pull-left" ><input type="file" name="file[]" id="f5"></div>   
                <input type="hidden" id="t5" class="hd">
                <div class="col-md-6 pull-right"><button type="button" style="float: right; background: none; border: none" onclick="cancel('d5')"><u>Cancel</u></button></div>    
            </div>             

        </div>
    </form>
</div>
<script>
    $(document).ready(function () {
        $(".hd").val('');
    });
    function send() {
        var topic = $("#text_tag_input").val();
        var date = $("#datetimepicker11").val();
        var msg = $("#msg").val();
        var f1 = $("#f1").val();
        var f2 = $("#f2").val();
        var f3 = $("#f3").val();
        var f4 = $("#f4").val();
        var f5 = $("#f5").val();

        $.ajax({
            type: "POST",
            url: 'sendmail.php',
            data: {topic: topic, date: date, msg: msg, f1: f1, f2: f2, f3: f3, f4: f4, f5: f5},
            success: function (data)
            {
                alert(data);
            }
        });
    }

</script>
<script>
    function open_att() {
        var t_box1 = $("#t1").val();
        var t_box2 = $("#t2").val();
        var t_box3 = $("#t3").val();
        var t_box4 = $("#t4").val();
        var t_box5 = $("#t5").val();
        if (t_box1 == '') {
            $("#att1").show();
            $("#t1").val('s1');
        } else if (t_box2 == '') {
            $("#att2").show();
            $("#t2").val('s2');
        } else if (t_box3 == '') {
            $("#att3").show();
            $("#t3").val('s3');
        } else if (t_box4 == '') {
            $("#att4").show();
            $("#t4").val('s4');
        } else if (t_box5 == '') {
            $("#att5").show();
            $("#t5").val('s5');
        }
    }
    function cancel(va) {
//        alert(va);
        if (va == 'd1') {
            $("#att1").hide();
            $("#t1").val('');
            $("#f1").val('');
        }
        if (va == 'd2') {
            $("#att2").hide();
            $("#t2").val('');
            $("#f2").val('');
        }
        if (va == 'd3') {
            $("#att3").hide();
            $("#t3").val('');
            $("#f3").val('');
        }
        if (va == 'd4') {
            $("#att4").hide();
            $("#t4").val('');
            $("#f4").val('');
        }
        if (va == 'd5') {
            $("#att5").hide();
            $("#t5").val('');
            $("#f5").val('');
        }
    }

</script>
<!-- Button trigger modal -->
<script>
    function test() {
        document.getElementById('inline1').style.display = 'block';
    }

    function select1(a)
    {

        document.getElementById('text_tag_input').value = a;
        //alert(a);
        // document.getElementById('bg').style.display='none';
        if (a == "")
        {
            document.getElementById('inline1').style.display = 'block';
        } else
        {
            // document.getElementById('inline1').style.display='none';
            $.fancybox.close();
        }

    }
    $(".header").click(function () {
        $.fancybox.close();
    });

</script>
<!-- Pop Up -->
<style>
    #parentVerticalTab ul li a {
        font-size:11px;
    }
    #parentVerticalTab h3 {
        font-size:18px;
    }
</style>
<!-- Modal -->
<div id="inline1" style="display: none">
    <div id="parentVerticalTab">
        <ul class="resp-tabs-list hor_1">
            <li class="resp-tab-item hor_1 resp-tab-active">Science/Math</li>
            <li>Accounting</li>
            <li>Finance</li>
            <li>Engineering</li>
            <li>Computer Science</li>
            <li>Humanities</li>
            <li>Management</li>
            <li>Economics</li>
            <li>Statistics</li>
        </ul>
        <div class="resp-tabs-container hor_1"> 
            <!-- Science and Math -->
            <div class="resp-tab-content hor_1 resp-tab-content-active" style="overflow:scroll">
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Maths</h3>
                            <ul>
                                <li><a href="javascript:select1('Applied Mathematics');"><i class="fa fa-angle-double-right"></i><span>Applied Mathematics</span></a></li>
                                <li><a href="javascript:select1('Calculus');"><i class="fa fa-angle-double-right"></i><span>Calculus</span> </a></li>
                                <li><a href="javascript:select1('Pre-Calculus');"><i class="fa fa-angle-double-right"></i><span>Pre-Calculus </span></a></li>
                                <li><a href="javascript:select1('Algebra');"><i class="fa fa-angle-double-right"></i><span>Algebra </span></a></li>
                                <li><a href="javascript:select1('Linear Algebra');"><i class="fa fa-angle-double-right"></i>Linear Algebra </a></li>
                                <li><a href="javascript:select1('Geometry');"><i class="fa fa-angle-double-right"></i><span>Geometry </span></a></li>
                                <li><a href="javascript:select1('Trigonometry');"><i class="fa fa-angle-double-right"></i><span>Trigonometry </span></a></li>
                                <li><a href="javascript:select1('Topology');"><i class="fa fa-angle-double-right"></i><span>Topology</span> </a></li>
                                <li><a href="javascript:select1('other');"><i class="fa fa-angle-double-right"></i><span>other</span> </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3> Advanced Mathematics</h3>
                            <ul>
                                <li><a href="javascript:select1('Data Modeling');"><i class="fa fa-angle-double-right"></i><span>Data Modeling</span></a></li>
                                <li><a href="javascript:select1('Bessel Functions');"><i class="fa fa-angle-double-right"></i><span>Bessel Functions</span> </a></li>
                                <li><a href="javascript:select1('Differential Equation');"><i class="fa fa-angle-double-right"></i><span>Differential Equation </span></a></li>
                                <li><a href="javascript:select1('String Theory');"><i class="fa fa-angle-double-right"></i><span>String Theory </span></a></li>
                                <li><a href="javascript:select1('Matrix Algebra');"><i class="fa fa-angle-double-right"></i>Matrix Algebra </a></li>
                                <li><a href="javascript:select1('Abstract/Modern Algebra');"><i class="fa fa-angle-double-right"></i><span>Abstract/Modern Algebra </span></a></li>
                                <li><a href="javascript:select1('Integral Equation');"><i class="fa fa-angle-double-right"></i><span>Integral Equation </span></a></li>
                                <li><a href="javascript:select1('Advanced Geometry');"><i class="fa fa-angle-double-right"></i><span>Advanced Geometry</span> </a></li>
                                <li><a href="javascript:select1('Engineering Mathematics');"><i class="fa fa-angle-double-right"></i><span>Engineering Mathematics</span> </a></li>
                                <li><a href="javascript:select1('Engineering Mathematics');"><i class="fa fa-angle-double-right"></i><span>Engineering Mathematics</span> </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i><span>Others</span> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Physics</h3>
                            <ul>
                                <li><a href="javascript:select1('Classical Physics');"><i class="fa fa-angle-double-right"></i><span>Classical Physics</span></a></li>
                                <li><a href="javascript:select1('Bessel Functions');"><i class="fa fa-angle-double-right"></i><span>Quantum Physics</span> </a></li>
                                <li><a href="javascript:select1('Thermodynamics');"><i class="fa fa-angle-double-right"></i><span>Thermodynamics </span></a></li>
                                <li><a href="javascript:select1('General Physics');"><i class="fa fa-angle-double-right"></i><span>General Physics </span></a></li>
                                <li><a href="javascript:select1('Electromagnetic Theory');"><i class="fa fa-angle-double-right"></i>Electromagnetic Theory </a></li>
                                <li><a href="javascript:select1('Waves and Sound');"><i class="fa fa-angle-double-right"></i><span>Waves and Sound </span></a></li>
                                <li><a href="javascript:select1('Statistical Mechanics');"><i class="fa fa-angle-double-right"></i><span>Statistical Mechanics</span></a></li>
                                <li><a href="javascript:select1('Calculus based Physics ');"><i class="fa fa-angle-double-right"></i><span>Calculus based Physics </span> </a></li>
                                <li><a href="javascript:select1('Algebra based Physics');"><i class="fa fa-angle-double-right"></i><span>Algebra based Physics</span> </a></li>
                                <li><a href="javascript:select1('Theory of Relativity ');"><i class="fa fa-angle-double-right"></i><span>Theory of Relativity </span> </a></li>
                                <li><a href="javascript:select1('Optics');"><i class="fa fa-angle-double-right"></i><span>Optics</span> </a></li>
                                <li><a href="javascript:select1('Astronomy ');"><i class="fa fa-angle-double-right"></i><span>Astronomy </span> </a></li>
                                <li><a href="javascript:select1('other');"><i class="fa fa-angle-double-right"></i><span>other</span> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Biology</h3>
                            <ul>
                                <li><a href="javascript:select1('Advanced Biology');"><i class="fa fa-angle-double-right"></i><span>Advanced Biology</span></a></li>
                                <li><a href="javascript:select1('Applied Biology');"><i class="fa fa-angle-double-right"></i><span>Applied Biology</span> </a></li>
                                <li><a href="javascript:select1('General Biology');"><i class="fa fa-angle-double-right"></i><span>General Biology </span></a></li>
                                <li><a href="javascript:select1('Zoology');"><i class="fa fa-angle-double-right"></i><span>Zoology </span></a></li>
                                <li><a href="javascript:select1('Genetics');"><i class="fa fa-angle-double-right"></i>Genetics </a></li>
                                <li><a href="javascript:select1('Microbiology');"><i class="fa fa-angle-double-right"></i><span>Microbiology </span></a></li>
                                <li><a href="javascript:select1('Microchemistry');"><i class="fa fa-angle-double-right"></i><span>Microchemistry</span></a></li>
                                <li><a href="javascript:select1('Biotechnology ');"><i class="fa fa-angle-double-right"></i><span>Biotechnology </span> </a></li>
                                <li><a href="javascript:select1('Botany');"><i class="fa fa-angle-double-right"></i><span>Botany</span> </a></li>
                                <li><a href="javascript:select1('Anatomy ');"><i class="fa fa-angle-double-right"></i><span>Anatomy </span> </a></li>
                                <li><a href="javascript:select1('Optics');"><i class="fa fa-angle-double-right"></i><span>Immunology</span> </a></li>
                                <li><a href="javascript:select1('Others ');"><i class="fa fa-angle-double-right"></i><span>Others </span> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Chemistry</h3>
                            <ul>
                                <li><a href="javascript:select1('Physical Chemistry');"><i class="fa fa-angle-double-right"></i><span>Physical Chemistry</span></a></li>
                                <li><a href="javascript:select1('Organic Chemistry');"><i class="fa fa-angle-double-right"></i><span>Organic Chemistry</span> </a></li>
                                <li><a href="javascript:select1('Inorganic Chemistry');"><i class="fa fa-angle-double-right"></i><span>Inorganic Chemistry </span></a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i><span>Others </span></a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3>Earth Science</h3>
                            <ul>
                                <li><a href="javascript:select1('Geography');"><i class="fa fa-angle-double-right"></i><span>Geography</span></a></li>
                                <li><a href="javascript:select1('Geomorphology');"><i class="fa fa-angle-double-right"></i><span>Geomorphology</span> </a></li>
                                <li><a href="javascript:select1('Climatology');"><i class="fa fa-angle-double-right"></i><span>Climatology </span></a></li>
                                <li><a href="javascript:select1('Environmental Geography ');"><i class="fa fa-angle-double-right"></i><span>Environmental Geography </span></a></li>
                                <li><a href="javascript:select1('Oceanology');"><i class="fa fa-angle-double-right"></i><span>Oceanology</span></a></li>
                                <li><a href="javascript:select1('Geophysics');"><i class="fa fa-angle-double-right"></i><span>Geophysics</span> </a></li>
                                <li><a href="javascript:select1('Geology');"><i class="fa fa-angle-double-right"></i><span>Geology </span></a></li>
                                <li><a href="javascript:select1('Geotechnical Studies');"><i class="fa fa-angle-double-right"></i><span>Geotechnical Studies </span></a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i><span>Others </span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end of accounting --> 
            <!-- Finance -->
            <div>
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Financial Accounting</h3>
                            <ul>
                                <li><a href="javascript:select1('Accounting Equation');"><i class="fa fa-angle-double-right"></i><span>Accounting Equation</span></a></li>
                                <li><a href="javascript:select1('Accounting: Concepts and Principles');"><i class="fa fa-angle-double-right"></i><span>Accounting: Concepts and Principles</span> </a></li>
                                <li><a href="javascript:select1('Climatology');"><i class="fa fa-angle-double-right"></i><span>Climatology </span></a></li>
                                <li><a href="javascript:select1('Environmental Geography ');"><i class="fa fa-angle-double-right"></i><span>Environmental Geography </span></a></li>
                                <li><a href="javascript:select1('Oceanology');"><i class="fa fa-angle-double-right"></i><span>Oceanology</span></a></li>
                                <li><a href="javascript:select1('Geophysics');"><i class="fa fa-angle-double-right"></i><span>Geophysics</span> </a></li>
                                <li><a href="javascript:select1('Geology');"><i class="fa fa-angle-double-right"></i><span>Geology </span></a></li>
                                <li><a href="javascript:select1('Geotechnical Studies');"><i class="fa fa-angle-double-right"></i><span>Geotechnical Studies </span></a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i><span>Others </span></a></li>
                                <li><a href="javascript:select1('Geography');"><i class="fa fa-angle-double-right"></i><span>Geography</span></a></li>
                                <li><a href="javascript:select1('Geomorphology');"><i class="fa fa-angle-double-right"></i><span>Geomorphology</span> </a></li>
                                <li><a href="javascript:select1('Climatology');"><i class="fa fa-angle-double-right"></i><span>Climatology </span></a></li>
                                <li><a href="javascript:select1('Environmental Geography ');"><i class="fa fa-angle-double-right"></i><span>Environmental Geography </span></a></li>
                                <li><a href="javascript:select1('Oceanology');"><i class="fa fa-angle-double-right"></i><span>Oceanology</span></a></li>
                                <li><a href="javascript:select1('Geophysics');"><i class="fa fa-angle-double-right"></i><span>Geophysics</span> </a></li>
                                <li><a href="javascript:select1('Geology');"><i class="fa fa-angle-double-right"></i><span>Geology </span></a></li>
                                <li><a href="javascript:select1('Geotechnical Studies');"><i class="fa fa-angle-double-right"></i><span>Geotechnical Studies </span></a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i><span>Others </span></a></li>
                                <li><a href="javascript:select1('Geography');"><i class="fa fa-angle-double-right"></i><span>Geography</span></a></li>
                                <li><a href="javascript:select1('Geomorphology');"><i class="fa fa-angle-double-right"></i><span>Geomorphology</span> </a></li>
                                <li><a href="javascript:select1('Climatology');"><i class="fa fa-angle-double-right"></i><span>Climatology </span></a></li>
                                <li><a href="javascript:select1('Environmental Geography ');"><i class="fa fa-angle-double-right"></i><span>Environmental Geography </span></a></li>
                                <li><a href="javascript:select1('Oceanology');"><i class="fa fa-angle-double-right"></i><span>Oceanology</span></a></li>
                                <li><a href="javascript:select1('Geophysics');"><i class="fa fa-angle-double-right"></i><span>Geophysics</span> </a></li>
                                <li><a href="javascript:select1('Geology');"><i class="fa fa-angle-double-right"></i><span>Geology </span></a></li>
                                <li><a href="javascript:select1('Geotechnical Studies');"><i class="fa fa-angle-double-right"></i><span>Geotechnical Studies </span></a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i><span>Others </span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Managerial Accounting</h3>
                            <ul>
                                <li><a href="javascript:select1('Performance Management');"><i class="fa fa-angle-double-right"></i>Performance Management </a></li>
                                <li><a href="javascript:select1('Decision Making');"><i class="fa fa-angle-double-right"></i>Decision Making</a></li>
                                <li><a href="javascript:select1('Incremental Analysis: Make or Buy, Special Order');"><i class="fa fa-angle-double-right"></i>Incremental Analysis: Make or Buy, Special Order </a></li>
                                <li><a href="javascript:select1('Pricing');"><i class="fa fa-angle-double-right"></i>Pricing </a></li>
                                <li><a href="javascript:select1('Budget Planning');"><i class="fa fa-angle-double-right"></i>Budget Planning </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3>Advanced Accounting</h3>
                            <ul>
                                <li><a href="javascript:select1('Equity Method of Investment');"><i class="fa fa-angle-double-right"></i>Equity Method of Investment </a></li>
                                <li><a href="javascript:select1('Consolidation Statements');"><i class="fa fa-angle-double-right"></i>Consolidation Statements </a></li>
                                <li><a href="javascript:select1('Partnership');"><i class="fa fa-angle-double-right"></i>Partnership </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Auditing</h3>
                            <ul>
                                <li><a href="javascript:select1('Professional and Regulatory Organization');"><i class="fa fa-angle-double-right"></i>Professional and Regulatory Organization</a></li>
                                <li><a href="javascript:select1('Internal Control');"><i class="fa fa-angle-double-right"></i>Internal Control </a></li>
                                <li><a href="javascript:select1('Audit Evidence');"><i class="fa fa-angle-double-right"></i>Audit Evidence </a></li>
                                <li><a href="javascript:select1('Sampling');"><i class="fa fa-angle-double-right"></i>Sampling </a></li>
                                <li><a href="javascript:select1('Management Fraud');"><i class="fa fa-angle-double-right"></i>Management Fraud </a></li>
                                <li><a href="javascript:select1('Forensic Accounting');"><i class="fa fa-angle-double-right"></i>Forensic Accounting </a></li>
                                <li><a href="javascript:select1('Auditing Revenue and Cycle');"><i class="fa fa-angle-double-right"></i>Auditing Revenue and Cycle </a></li>
                                <li><a href="javascript:select1('Auditors Report');"><i class="fa fa-angle-double-right"></i>Auditors Report </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3>Others</h3>
                            <ul>
                                <li><a href="javascript:select1('Accounting Information System');"><i class="fa fa-angle-double-right"></i>Accounting Information System </a></li>
                                <li><a href="javascript:select1('Accounting for Government');"><i class="fa fa-angle-double-right"></i>Accounting for Government </a></li>
                                <li><a href="javascript:select1('Taxation');"><i class="fa fa-angle-double-right"></i>Taxation </a></li>
                                <li><a href="javascript:select1('International Financial Reporting Standards');"><i class="fa fa-angle-double-right"></i>International Financial Reporting Standards </a></li>
                                <li><a href="javascript:select1('Accounting Standard Codifications');"><i class="fa fa-angle-double-right"></i>Accounting Standard Codifications </a></li>
                                <li><a href="javascript:select1('Statement of Financial Concepts');"><i class="fa fa-angle-double-right"></i>Statement of Financial Concepts </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3> Cost Management</h3>
                            <ul>
                                <li><a href="javascript:select1('Cost Concept');"><i class="fa fa-angle-double-right"></i>Cost Concept</a></li>
                                <li><a href="javascript:select1('Cost Volume Profit Analysis');"><i class="fa fa-angle-double-right"></i>Cost Volume Profit Analysis </a></li>
                                <li><a href="javascript:select1('Break Even Analysis');"><i class="fa fa-angle-double-right"></i>Break Even Analysis </a></li>
                                <li><a href="javascript:select1('Variable Costing');"><i class="fa fa-angle-double-right"></i>Variable Costing </a></li>
                                <li><a href="javascript:select1('Absorption Costing');"><i class="fa fa-angle-double-right"></i>Absorption Costing</a></li>
                                <li><a href="javascript:select1('ABC Costing');"><i class="fa fa-angle-double-right"></i>ABC Costing</a></li>
                                <li><a href="javascript:select1('Process  Costing');"><i class="fa fa-angle-double-right"></i>Process  Costing </a></li>
                                <li><a href="javascript:select1('Job Costing');"><i class="fa fa-angle-double-right"></i>Job Costing</a></li>
                                <li><a href="javascript:select1('Budgeting');"><i class="fa fa-angle-double-right"></i>Budgeting </a></li>
                                <li><a href="javascript:select1('Variance Analysis');"><i class="fa fa-angle-double-right"></i>Variance Analysis</a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end of accounting --> 
            <!-- Finance -->
            <div>
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Corporate Finance</h3>
                            <ul>
                                <li><a href="javascript:select1('Financial Statement Analysis');"><i class="fa fa-angle-double-right"></i>Financial Statement Analysis </a></li>
                                <li><a href="javascript:select1('Financial Planning and Forecasting');"><i class="fa fa-angle-double-right"></i>Financial Planning and Forecasting </a></li>
                                <li><a href="javascript:select1('Ratio Analysis');"><i class="fa fa-angle-double-right"></i>Ratio Analysis </a></li>
                                <li><a href="javascript:select1('Time Value of Money');"><i class="fa fa-angle-double-right"></i>Time Value of Money</a></li>
                                <li><a href="javascript:select1('Bond Valuation');"><i class="fa fa-angle-double-right"></i>Bond Valuation </a></li>
                                <li><a href="javascript:select1('Stock Valuation');"><i class="fa fa-angle-double-right"></i>Stock Valuation </a></li>
                                <li><a href="javascript:select1('Capital Budgeting');"><i class="fa fa-angle-double-right"></i>Capital Budgeting </a></li>
                                <li><a href="javascript:select1('Risk and Return');"><i class="fa fa-angle-double-right"></i>Risk and Return </a></li>
                                <li><a href="javascript:select1('Cost of Capital');"><i class="fa fa-angle-double-right"></i>Cost of Capital </a></li>
                                <li><a href="javascript:select1('Working Capital Management');"><i class="fa fa-angle-double-right"></i>Working Capital Management </a></li>
                                <li><a href="javascript:select1('Cash and Liquidity Management');"><i class="fa fa-angle-double-right"></i>Cash and Liquidity Management </a></li>
                                <li><a href="javascript:select1('Credit and Inventory Management');"><i class="fa fa-angle-double-right"></i>Credit and Inventory Management </a></li>
                                <li><a href="javascript:select1('Leasing');"><i class="fa fa-angle-double-right"></i>Leasing </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3> Risk Management</h3>
                            <ul>
                                <li><a href="javascript:select1('Risk Management Techniques');"><i class="fa fa-angle-double-right"></i>Risk Management Techniques </a></li>
                                <li><a href="javascript:select1('Insurance');"><i class="fa fa-angle-double-right"></i>Insurance </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>International Financial Management</h3>
                            <ul>
                                <li><a href="javascript:select1('International Flow of Funds');"><i class="fa fa-angle-double-right"></i>International Flow of Funds </a></li>
                                <li><a href="javascript:select1('Derivatives');"><i class="fa fa-angle-double-right"></i>Derivatives </a></li>
                                <li><a href="javascript:select1('Exchange Rate');"><i class="fa fa-angle-double-right"></i>Exchange Rate </a></li>
                                <li><a href="javascript:select1('Exposures');"><i class="fa fa-angle-double-right"></i>Exposures </a></li>
                                <li><a href="javascript:select1('Hedging');"><i class="fa fa-angle-double-right"></i>Hedging </a></li>
                                <li><a href="javascript:select1('Swaps');"><i class="fa fa-angle-double-right"></i>Swaps </a></li>
                                <li><a href="javascript:select1('Arbitrage');"><i class="fa fa-angle-double-right"></i>Arbitrage </a></li>
                                <li><a href="javascript:select1('Forex');"><i class="fa fa-angle-double-right"></i>Forex </a></li>
                                <li><a href="javascript:select1('Options');"><i class="fa fa-angle-double-right"></i>Options </a></li>
                                <li><a href="javascript:select1('Futures');"><i class="fa fa-angle-double-right"></i>Futures </a></li>
                                <li><a href="javascript:select1('Forwards');"><i class="fa fa-angle-double-right"></i>Forwards </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Others</h3>
                            <ul>
                                <li><a href="javascript:select1('Investment Analysis and Portfolio Management');"><i class="fa fa-angle-double-right"></i>Investment Analysis and Portfolio Management </a></li>
                                <li><a href="javascript:select1('Personal Finance');"><i class="fa fa-angle-double-right"></i>Personal Finance </a></li>
                                <li><a href="javascript:select1('Merger and Acquisition');"><i class="fa fa-angle-double-right"></i>Merger and Acquisition </a></li>
                                <li><a href="javascript:select1('Behavioral Finance');"><i class="fa fa-angle-double-right"></i>Behavioral Finance </a></li>
                                <li><a href="javascript:select1('Business Valuation and Analysis');"><i class="fa fa-angle-double-right"></i>Business Valuation and Analysis </a></li>
                                <li><a href="javascript:select1('Financial Markets and Institutes');"><i class="fa fa-angle-double-right"></i>Financial Markets and Institutes </a></li>
                                <li><a href="javascript:select1('Entrepreneurial Finance');"><i class="fa fa-angle-double-right"></i>Entrepreneurial Finance </a></li>
                                <li><a href="javascript:select1('Public Finance');"><i class="fa fa-angle-double-right"></i>Public Finance </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end of accounting --> 
            <!-- Finance -->
            <div>
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Mechanical Engineering</h3>
                            <ul>
                                <li><a href="javascript:select1('Fluid Mechanics');"><i class="fa fa-angle-double-right"></i>Fluid Mechanics </a></li>
                                <li><a href="javascript:select1('Thermodynamics');"><i class="fa fa-angle-double-right"></i>Thermodynamics </a></li>
                                <li><a href="javascript:select1('Strength of Materials');"><i class="fa fa-angle-double-right"></i>Strength of Materials </a></li>
                                <li><a href="javascript:select1('Kinematics');"><i class="fa fa-angle-double-right"></i>Kinematics </a></li>
                                <li><a href="javascript:select1('Design and Drafting');"><i class="fa fa-angle-double-right"></i>Design and Drafting </a></li>
                                <li><a href="javascript:select1('Fluid Dynamics');"><i class="fa fa-angle-double-right"></i>Fluid Dynamics </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3> Civil Engineering</h3>
                            <ul>
                                <li><a href="javascript:select1('Truss');"><i class="fa fa-angle-double-right"></i>Truss</a></li>
                                <li><a href="javascript:select1('Structures');"><i class="fa fa-angle-double-right"></i>Structures </a></li>
                                <li><a href="javascript:select1('Materials Engineering');"><i class="fa fa-angle-double-right"></i>Materials Engineering </a></li>
                                <li><a href="javascript:select1('Surveying &amp; Analysis');"><i class="fa fa-angle-double-right"></i>Surveying &amp; Analysis </a></li>
                                <li><a href="javascript:select1('Concrete Creation');"><i class="fa fa-angle-double-right"></i>Concrete Creation </a></li>
                                <li><a href="javascript:select1('Geotechnical Design');"><i class="fa fa-angle-double-right"></i>Geotechnical Design </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Electrical Engineering</h3>
                            <ul>
                                <li><a href="javascript:select1('Electrical Machines');"><i class="fa fa-angle-double-right"></i>Electrical Machines </a></li>
                                <li><a href="javascript:select1('Electrical Measurement');"><i class="fa fa-angle-double-right"></i>Electrical Measurement </a></li>
                                <li><a href="javascript:select1('Power');"><i class="fa fa-angle-double-right"></i>Power </a></li>
                                <li><a href="javascript:select1('Signals &amp; Systems');"><i class="fa fa-angle-double-right"></i>Signals &amp; Systems </a></li>
                                <li><a href="javascript:select1('Communication Engineering');"><i class="fa fa-angle-double-right"></i>Communication Engineering </a></li>
                                <li><a href="javascript:select1('Solid State Devices');"><i class="fa fa-angle-double-right"></i>Solid State Devices </a></li>
                                <li><a href="javascript:select1('Control System');"><i class="fa fa-angle-double-right"></i>Control System </a></li>
                                <li><a href="javascript:select1('Digital Electronics');"><i class="fa fa-angle-double-right"></i>Digital Electronics </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Chemical Engineering</h3>
                            <ul>
                                <li><a href="javascript:select1('Fluid Flow');"><i class="fa fa-angle-double-right"></i>Fluid Flow </a></li>
                                <li><a href="javascript:select1('Quantitative Relations between Transfer Processes');"><i class="fa fa-angle-double-right"></i>Quantitative Relations between Transfer Processes </a></li>
                                <li><a href="javascript:select1('Nanotechnology');"><i class="fa fa-angle-double-right"></i>Nanotechnology </a></li>
                                <li><a href="javascript:select1('Biomedical Engineering');"><i class="fa fa-angle-double-right"></i>Biomedical Engineering </a></li>
                                <li><a href="javascript:select1('Preparation of Chemical Reactor');"><i class="fa fa-angle-double-right"></i>Preparation of Chemical Reactor </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Programming Languages</h3>
                            <ul>
                                <li><a href="javascript:select1('Programming in C,C++');"><i class="fa fa-angle-double-right"></i>Programming in C,C++ </a></li>
                                <li><a href="javascript:select1('Programming in Java');"><i class="fa fa-angle-double-right"></i>Programming in Java </a></li>
                                <li><a href="javascript:select1('Programming in .NET');"><i class="fa fa-angle-double-right"></i>Programming in .NET </a></li>
                                <li><a href="javascript:select1('Internet Programming');"><i class="fa fa-angle-double-right"></i>Internet Programming </a></li>
                                <li><a href="javascript:select1('Programming in Python');"><i class="fa fa-angle-double-right"></i>Programming in Python</a></li>
                                <li><a href="javascript:select1('Programming in Assembly Language');"><i class="fa fa-angle-double-right"></i>Programming in Assembly Language </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3> Data Structures</h3>
                            <ul>
                                <li><a href="javascript:select1('Stacks and Queues');"><i class="fa fa-angle-double-right"></i>Stacks and Queues </a></li>
                                <li><a href="javascript:select1('Trees');"><i class="fa fa-angle-double-right"></i>Trees </a></li>
                                <li><a href="javascript:select1('Linkers');"><i class="fa fa-angle-double-right"></i>Linkers</a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3>Software Engineering</h3>
                            <ul>
                                <li><a href="javascript:select1('Software Requirements Analysis and Specifications');"><i class="fa fa-angle-double-right"></i>Software Requirements Analysis and Specifications</a></li>
                                <li><a href="javascript:select1('Software Project Management Concepts');"><i class="fa fa-angle-double-right"></i>Software Project Management Concepts </a></li>
                                <li><a href="javascript:select1('Software Design');"><i class="fa fa-angle-double-right"></i>Software Design </a></li>
                                <li><a href="javascript:select1('System Design');"><i class="fa fa-angle-double-right"></i>System Design </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Computer Network Security</h3>
                            <ul>
                                <li><a href="javascript:select1('Cryptography');"><i class="fa fa-angle-double-right"></i>Cryptography </a></li>
                                <li><a href="javascript:select1('IP Security Architecture');"><i class="fa fa-angle-double-right"></i>IP Security Architecture </a></li>
                                <li><a href="javascript:select1('Network Management Security');"><i class="fa fa-angle-double-right"></i>Network Management Security </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3>Information Technology</h3>
                            <ul>
                                <li><a href="javascript:select1('Assemblers');"><i class="fa fa-angle-double-right"></i>Assemblers </a></li>
                                <li><a href="javascript:select1('Compilers');"><i class="fa fa-angle-double-right"></i>Compilers </a></li>
                                <li><a href="javascript:select1('Interpreters');"><i class="fa fa-angle-double-right"></i>Interpreters </a></li>
                                <li><a href="javascript:select1('Linkers');"><i class="fa fa-angle-double-right"></i>Linkers </a></li>
                                <li><a href="javascript:select1('Network Topologies');"><i class="fa fa-angle-double-right"></i>Network Topologies </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Automata or Computation</h3>
                            <ul>
                                <li><a href="javascript:select1('Modules of Computation');"><i class="fa fa-angle-double-right"></i>Modules of Computation </a></li>
                                <li><a href="javascript:select1('Turing Machine');"><i class="fa fa-angle-double-right"></i>Turing Machine </a></li>
                                <li><a href="javascript:select1('Complexity');"><i class="fa fa-angle-double-right"></i>Complexity </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3>Database Management System</h3>
                            <ul>
                                <li><a href="javascript:select1('ER-Modeling');"><i class="fa fa-angle-double-right"></i>ER-Modeling </a></li>
                                <li><a href="javascript:select1('SQL/PSQL');"><i class="fa fa-angle-double-right"></i>SQL/PSQL </a></li>
                                <li><a href="javascript:select1('Oracle');"><i class="fa fa-angle-double-right"></i>Oracle </a></li>
                                <li><a href="javascript:select1('Data Normalization');"><i class="fa fa-angle-double-right"></i>Data Normalization </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Computer Graphics and Multimedia Applications</h3>
                            <ul>
                                <li><a href="javascript:select1('Clipping');"><i class="fa fa-angle-double-right"></i>Clipping </a></li>
                                <li><a href="javascript:select1('Geometrical Transformations');"><i class="fa fa-angle-double-right"></i>Geometrical Transformations </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3>Computer Architecture</h3>
                            <ul>
                                <li><a href="javascript:select1('Register, Transfer and Micro Operations');"><i class="fa fa-angle-double-right"></i>Register, Transfer and Micro Operations </a></li>
                                <li><a href="javascript:select1('Basic Computer Organizations and Design');"><i class="fa fa-angle-double-right"></i>Basic Computer Organizations and Design </a></li>
                                <li><a href="javascript:select1('Computer Arithmetic');"><i class="fa fa-angle-double-right"></i>Computer Arithmetic </a></li>
                                <li><a href="javascript:select1('Memory Organization');"><i class="fa fa-angle-double-right"></i>Memory Organization </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Design and Analysis of Algorithms</h3>
                            <ul>
                                <li><a href="javascript:select1('Mathematical Preliminaries');"><i class="fa fa-angle-double-right"></i>Mathematical Preliminaries </a></li>
                                <li><a href="javascript:select1('Dynamic Programming');"><i class="fa fa-angle-double-right"></i>Dynamic Programming </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3>Networking</h3>
                            <ul>
                                <li><a href="javascript:select1('OSI and TCP/IP Models');"><i class="fa fa-angle-double-right"></i>OSI and TCP/IP Models </a></li>
                                <li><a href="javascript:select1('Digital Transmission');"><i class="fa fa-angle-double-right"></i>Digital Transmission </a></li>
                                <li><a href="javascript:select1('Data Link Control Protocols');"><i class="fa fa-angle-double-right"></i>Data Link Control Protocols </a></li>
                                <li><a href="javascript:select1('ISDN');"><i class="fa fa-angle-double-right"></i>ISDN </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Operating System</h3>
                            <ul>
                                <li><a href="javascript:select1('Memory Management');"><i class="fa fa-angle-double-right"></i>Memory Managementg </a></li>
                                <li><a href="javascript:select1('Virtual Memory');"><i class="fa fa-angle-double-right"></i>Virtual Memory </a></li>
                                <li><a href="javascript:select1('Deadlocks');"><i class="fa fa-angle-double-right"></i>Deadlocks </a></li>
                                <li><a href="javascript:select1('Device Management');"><i class="fa fa-angle-double-right"></i>Device Management </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Linux Environment</h3>
                            <ul>
                                <li><a href="javascript:select1('UNIX');"><i class="fa fa-angle-double-right"></i>UNIX </a></li>
                                <li><a href="javascript:select1('LINUX');"><i class="fa fa-angle-double-right"></i>LINUX </a></li>
                                <li><a href="javascript:select1('LINUX File System');"><i class="fa fa-angle-double-right"></i>LINUX File System </a></li>
                                <li><a href="javascript:select1('Multiprocessing');"><i class="fa fa-angle-double-right"></i>Multiprocessing </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end of accounting --> 
            <!-- Finance -->
            <div>
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Sociology</h3>
                            <ul>
                                <li><a href="javascript:select1('Origin and Development');"><i class="fa fa-angle-double-right"></i>Origin and Development </a></li>
                                <li><a href="javascript:select1('Nature and Scope');"><i class="fa fa-angle-double-right"></i>Nature and Scope </a></li>
                                <li><a href="javascript:select1('Social Change');"><i class="fa fa-angle-double-right"></i>Social Change </a></li>
                                <li><a href="javascript:select1('Socialization');"><i class="fa fa-angle-double-right"></i>Socialization </a></li>
                                <li><a href="javascript:select1('Social Group');"><i class="fa fa-angle-double-right"></i>Social Group </a></li>
                                <li><a href="javascript:select1('Social Control');"><i class="fa fa-angle-double-right"></i>Social Control </a></li>
                                <li><a href="javascript:select1('Social Problem');"><i class="fa fa-angle-double-right"></i>Social Problem</a></li>
                                <li><a href="javascript:select1('Research Method');"><i class="fa fa-angle-double-right"></i>Research Method </a></li>
                                <li><a href="javascript:select1('Social Mobility');"><i class="fa fa-angle-double-right"></i>Social Mobility </a></li>
                                <li><a href="javascript:select1('Social interaction');"><i class="fa fa-angle-double-right"></i>Social interaction </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3> Psychology</h3>
                            <ul>
                                <li><a href="javascript:select1('Basic Concepts');"><i class="fa fa-angle-double-right"></i>Basic Concepts </a></li>
                                <li><a href="javascript:select1('Hereditary and Environment');"><i class="fa fa-angle-double-right"></i>Hereditary and Environment </a></li>
                                <li><a href="javascript:select1('Learning');"><i class="fa fa-angle-double-right"></i>Learning</a></li>
                                <li><a href="javascript:select1('Memory and forgetting');"><i class="fa fa-angle-double-right"></i>Memory and forgetting </a></li>
                                <li><a href="javascript:select1('Intelligence');"><i class="fa fa-angle-double-right"></i>Intelligence </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Foreign language</h3>
                            <ul>
                                <li><a href="javascript:select1('French');"><i class="fa fa-angle-double-right"></i>French </a></li>
                                <li><a href="javascript:select1('German');"><i class="fa fa-angle-double-right"></i>German </a></li>
                                <li><a href="javascript:select1('Spanish');"><i class="fa fa-angle-double-right"></i>Spanish </a></li>
                                <li><a href="javascript:select1('Grammer');"><i class="fa fa-angle-double-right"></i>Grammer </a></li>
                                <li><a href="javascript:select1('Basic Vocabulary');"><i class="fa fa-angle-double-right"></i>Basic Vocabulary </a></li>
                                <li><a href="javascript:select1('Specialized Vocabulary');"><i class="fa fa-angle-double-right"></i>Specialized Vocabulary </a></li>
                                <li><a href="javascript:select1('Travel Vocabulary');"><i class="fa fa-angle-double-right"></i>Travel Vocabulary </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3>Essay Writing</h3>
                            <ul>
                                <li><a href="javascript:select1('Introduction');"><i class="fa fa-angle-double-right"></i>Introduction </a></li>
                                <li><a href="javascript:select1('Conclusion');"><i class="fa fa-angle-double-right"></i>Conclusion </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Article Writing</h3>
                            <ul>
                                <li><a href="javascript:select1('Introduction');"><i class="fa fa-angle-double-right"></i>Introduction</a></li>
                                <li><a href="javascript:select1('Body');"><i class="fa fa-angle-double-right"></i>Body </a></li>
                                <li><a href="javascript:select1('Headline');"><i class="fa fa-angle-double-right"></i>Headline </a></li>
                                <li><a href="javascript:select1('Conclusion');"><i class="fa fa-angle-double-right"></i>Conclusion </a></li>
                                <li><a href="javascript:select1('Resource');"><i class="fa fa-angle-double-right"></i>Resource </a></li>
                                <li><a href="javascript:select1('Resource box');"><i class="fa fa-angle-double-right"></i>Resource box </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3>Narrative Writing</h3>
                            <ul>
                                <li><a href="javascript:select1('Introduction');"><i class="fa fa-angle-double-right"></i>Introduction </a></li>
                                <li><a href="javascript:select1('Personal Narrative');"><i class="fa fa-angle-double-right"></i>Personal Narrative </a></li>
                                <li><a href="javascript:select1('Imaginative Narrative Writing ');"><i class="fa fa-angle-double-right"></i>Imaginative Narrative Writing </a></li>
                                <li><a href="javascript:select1('Narrative Essay');"><i class="fa fa-angle-double-right"></i>Narrative Essay </a></li>
                                <li><a href="javascript:select1('Format of Narrative Writing');"><i class="fa fa-angle-double-right"></i>Format of Narrative Writing </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Descriptive Writing</h3>
                            <ul>
                                <li><a href="javascript:select1('Characteristics');"><i class="fa fa-angle-double-right"></i>Characteristics </a></li>
                                <li><a href="javascript:select1('Format');"><i class="fa fa-angle-double-right"></i>Format </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3>Proofreading</h3>
                            <ul>
                                <li><a href="javascript:select1('Professional Proofreading');"><i class="fa fa-angle-double-right"></i>Professional Proofreading </a></li>
                                <li><a href="javascript:select1('Self Proofreading');"><i class="fa fa-angle-double-right"></i>Self Proofreading </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end of accounting --> 
            <!-- Finance -->
            <div>
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Supply Chain Management/Operations Management</h3>
                            <ul>
                                <li><a href="javascript:select1('Design of Product and Services');"><i class="fa fa-angle-double-right"></i>Design of Product and Services </a></li>
                                <li><a href="javascript:select1('Process Technology');"><i class="fa fa-angle-double-right"></i>Process Technology </a></li>
                                <li><a href="javascript:select1('Enterprise Resource Planning');"><i class="fa fa-angle-double-right"></i>Enterprise Resource Planning </a></li>
                                <li><a href="javascript:select1('JIT/Lean Production');"><i class="fa fa-angle-double-right"></i>JIT/Lean Production </a></li>
                                <li><a href="javascript:select1('Linear Programming');"><i class="fa fa-angle-double-right"></i>Linear Programming </a></li>
                                <li><a href="javascript:select1('PERT');"><i class="fa fa-angle-double-right"></i>PERT </a></li>
                                <li><a href="javascript:select1('Logistics');"><i class="fa fa-angle-double-right"></i>Logistics</a></li>
                                <li><a href="javascript:select1('Six Sigma');"><i class="fa fa-angle-double-right"></i>Six Sigma </a></li>
                                <li><a href="javascript:select1('Total Quality Management');"><i class="fa fa-angle-double-right"></i>Total Quality Management </a></li>
                                <li><a href="javascript:select1('Material Resource Planning');"><i class="fa fa-angle-double-right"></i>Material Resource Planning </a></li>
                                <li><a href="javascript:select1('Decision Tree');"><i class="fa fa-angle-double-right"></i>Decision Tree </a></li>
                                <li><a href="javascript:select1('Value Engineering');"><i class="fa fa-angle-double-right"></i>Value Engineering</a></li>
                                <li><a href="javascript:select1('Inventory Management and Control');"><i class="fa fa-angle-double-right"></i>Inventory Management and Control </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3>IT Management</h3>
                            <ul>
                                <li><a href="javascript:select1('Organizing IT Structure');"><i class="fa fa-angle-double-right"></i>Organizing IT Structure </a></li>
                                <li><a href="javascript:select1('Knowledge Management');"><i class="fa fa-angle-double-right"></i>Knowledge Management </a></li>
                                <li><a href="javascript:select1('Information System');"><i class="fa fa-angle-double-right"></i>Information System </a></li>
                                <li><a href="javascript:select1('E-Business, E-Commerce');"><i class="fa fa-angle-double-right"></i>E-Business, E-Commerce </a></li>
                                <li><a href="javascript:select1('Business Intelligence');"><i class="fa fa-angle-double-right"></i>Business Intelligence</a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Marketing Management</h3>
                            <ul>
                                <li><a href="javascript:select1('Marketing Strategy and Plan');"><i class="fa fa-angle-double-right"></i>Marketing Strategy and Plan </a></li>
                                <li><a href="javascript:select1('Environmental Scanning');"><i class="fa fa-angle-double-right"></i>Environmental Scanning </a></li>
                                <li><a href="javascript:select1('Market Research');"><i class="fa fa-angle-double-right"></i>Market Research </a></li>
                                <li><a href="javascript:select1('Consumer Behaviour');"><i class="fa fa-angle-double-right"></i>Consumer Behaviour </a></li>
                                <li><a href="javascript:select1('Market Segmentation and Targeting');"><i class="fa fa-angle-double-right"></i>Market Segmentation and Targeting </a></li>
                                <li><a href="javascript:select1('Brand Management');"><i class="fa fa-angle-double-right"></i>Brand Management </a></li>
                                <li><a href="javascript:select1('Retail Management');"><i class="fa fa-angle-double-right"></i>Retail Management </a></li>
                                <li><a href="javascript:select1('Product Management');"><i class="fa fa-angle-double-right"></i>Product Management </a></li>
                                <li><a href="javascript:select1('Managing Services, Service Marketing');"><i class="fa fa-angle-double-right"></i>Managing Services, Service Marketing </a></li>
                                <li><a href="javascript:select1('Marketing Communication');"><i class="fa fa-angle-double-right"></i>Marketing Communication </a></li>
                                <li><a href="javascript:select1('Marketing Mix');"><i class="fa fa-angle-double-right"></i>Marketing Mix </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3>Strategic Management</h3>
                            <ul>
                                <li><a href="javascript:select1('Five Force Model');"><i class="fa fa-angle-double-right"></i>Five Force Model </a></li>
                                <li><a href="javascript:select1('External Environment Scanning');"><i class="fa fa-angle-double-right"></i>External Environment Scanning </a></li>
                                <li><a href="javascript:select1('Internal Environment Analysis');"><i class="fa fa-angle-double-right"></i>Internal Environment Analysis </a></li>
                                <li><a href="javascript:select1('Competitors Analysis');"><i class="fa fa-angle-double-right"></i>Competitors Analysis </a></li>
                                <li><a href="javascript:select1('Business level Strategy / Generic Strategies');"><i class="fa fa-angle-double-right"></i>Business level Strategy / Generic Strategies </a></li>
                                <li><a href="javascript:select1('Corporate Level Strategy');"><i class="fa fa-angle-double-right"></i>Corporate Level Strategy </a></li>
                                <li><a href="javascript:select1('Acquisition and Restructuring');"><i class="fa fa-angle-double-right"></i>Acquisition and Restructuring </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Business Law and Ethics</h3>
                            <ul>
                                <li><a href="javascript:select1('Employment Laws');"><i class="fa fa-angle-double-right"></i>Employment Laws</a></li>
                                <li><a href="javascript:select1('Anti-Trust Laws');"><i class="fa fa-angle-double-right"></i>Anti-Trust Laws </a></li>
                                <li><a href="javascript:select1('Business Laws');"><i class="fa fa-angle-double-right"></i>Business Laws </a></li>
                                <li><a href="javascript:select1('Contract');"><i class="fa fa-angle-double-right"></i>Contract </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3> Human Resource Management</h3>
                            <ul>
                                <li><a href="javascript:select1('Organization Behavior');"><i class="fa fa-angle-double-right"></i>Organization Behavior </a></li>
                                <li><a href="javascript:select1('Human Resource Planning');"><i class="fa fa-angle-double-right"></i>Human Resource Planning </a></li>
                                <li><a href="javascript:select1('Compensation and Benefit');"><i class="fa fa-angle-double-right"></i>Compensation and Benefit</a></li>
                                <li><a href="javascript:select1('Training and Development');"><i class="fa fa-angle-double-right"></i>Training and Development </a></li>
                                <li><a href="javascript:select1('Organization Culture');"><i class="fa fa-angle-double-right"></i>Organization Culture </a></li>
                                <li><a href="javascript:select1('Strategic Human Resource Management');"><i class="fa fa-angle-double-right"></i>Strategic Human Resource Management </a></li>
                                <li><a href="javascript:select1('Leadership');"><i class="fa fa-angle-double-right"></i>Leadership </a></li>
                                <li><a href="javascript:select1('Motivation');"><i class="fa fa-angle-double-right"></i>Motivation </a></li>
                                <li><a href="javascript:select1('Employee and Labor Relations');"><i class="fa fa-angle-double-right"></i>Employee and Labor Relations </a></li>
                                <li><a href="javascript:select1('Performance Appraisal');"><i class="fa fa-angle-double-right"></i>Performance Appraisal </a></li>
                                <li><a href="javascript:select1('Conflict and Negotiation');"><i class="fa fa-angle-double-right"></i>Conflict and Negotiation </a></li>
                                <li><a href="javascript:select1('Managing Organization Change');"><i class="fa fa-angle-double-right"></i>Managing Organization Change </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Others</h3>
                            <ul>
                                <li><a href="javascript:select1('International Business');"><i class="fa fa-angle-double-right"></i>International Business </a></li>
                                <li><a href="javascript:select1('Business Communication');"><i class="fa fa-angle-double-right"></i>Business Communication </a></li>
                                <li><a href="javascript:select1('Health Care Management');"><i class="fa fa-angle-double-right"></i>Health Care Management </a></li>
                                <li><a href="javascript:select1('Hospitality Management');"><i class="fa fa-angle-double-right"></i>Hospitality Management </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                                <li><a href="javascript:select1('Business Ethics');"><i class="fa fa-angle-double-right"></i>Business Ethics</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end of accounting --> 
            <!-- Finance -->
            <div>
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Micro Economics</h3>
                            <ul>
                                <li><a href="javascript:select1('Demand and Supply');"><i class="fa fa-angle-double-right"></i>Demand and Supply </a></li>
                                <li><a href="javascript:select1('Equilibrium of Demand and Supply');"><i class="fa fa-angle-double-right"></i>Equilibrium of Demand and Supply </a></li>
                                <li><a href="javascript:select1('Price Elasticity');"><i class="fa fa-angle-double-right"></i>Price Elasticity </a></li>
                                <li><a href="javascript:select1('Income Elasticity');"><i class="fa fa-angle-double-right"></i>Income Elasticity </a></li>
                                <li><a href="javascript:select1('Cross Price Elasticity');"><i class="fa fa-angle-double-right"></i>Cross Price Elasticity </a></li>
                                <li><a href="javascript:select1('Consumer Surplus');"><i class="fa fa-angle-double-right"></i>Consumer Surplus </a></li>
                                <li><a href="javascript:select1('Producer Surplus');"><i class="fa fa-angle-double-right"></i>Producer Surplus </a></li>
                                <li><a href="javascript:select1('Externalities');"><i class="fa fa-angle-double-right"></i>Externalities </a></li>
                                <li><a href="javascript:select1('Law of Diminishing Marginal Utility');"><i class="fa fa-angle-double-right"></i>Law of Diminishing Marginal Utility </a></li>
                                <li><a href="javascript:select1('Pure Competition');"><i class="fa fa-angle-double-right"></i>Pure Competition </a></li>
                                <li><a href="javascript:select1('Monopoly');"><i class="fa fa-angle-double-right"></i>Monopoly </a></li>
                                <li><a href="javascript:select1('Oligopoly');"><i class="fa fa-angle-double-right"></i>Oligopoly </a></li>
                                <li><a href="javascript:select1('Monopolistic Competition');"><i class="fa fa-angle-double-right"></i>Monopolistic Competition </a></li>
                                <li><a href="javascript:select1('Labour Markets and Wage Determination');"><i class="fa fa-angle-double-right"></i>Labour Markets and Wage Determination </a></li>
                                <li><a href="javascript:select1('Anti-Trust Laws');"><i class="fa fa-angle-double-right"></i>Anti-Trust Laws </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Macro Economics</h3>
                            <ul>
                                <li><a href="javascript:select1('National Income');"><i class="fa fa-angle-double-right"></i>National Income </a></li>
                                <li><a href="javascript:select1('Gross Domestic Product');"><i class="fa fa-angle-double-right"></i>Gross Domestic Product </a></li>
                                <li><a href="javascript:select1('Unemployment');"><i class="fa fa-angle-double-right"></i>Unemployment </a></li>
                                <li><a href="javascript:select1('Inflation');"><i class="fa fa-angle-double-right"></i>Inflation </a></li>
                                <li><a href="javascript:select1('Keynesian Model');"><i class="fa fa-angle-double-right"></i>Keynesian Model </a></li>
                                <li><a href="javascript:select1('IS-LM Model');"><i class="fa fa-angle-double-right"></i>IS-LM Model </a></li>
                                <li><a href="javascript:select1('Multiplier Effect');"><i class="fa fa-angle-double-right"></i>Multiplier Effect </a></li>
                                <li><a href="javascript:select1('Aggregate Expenditure Model');"><i class="fa fa-angle-double-right"></i>Aggregate Expenditure Model </a></li>
                                <li><a href="javascript:select1('Aggregate Demand and Aggregate Supply');"><i class="fa fa-angle-double-right"></i>Aggregate Demand and Aggregate Supply </a></li>
                                <li><a href="javascript:select1('AD-AS Model');"><i class="fa fa-angle-double-right"></i>AD-AS Model </a></li>
                                <li><a href="javascript:select1('Monetary Policy');"><i class="fa fa-angle-double-right"></i>Monetary Policy </a></li>
                                <li><a href="javascript:select1('Fiscal Policy');"><i class="fa fa-angle-double-right"></i>Fiscal Policy </a></li>
                                <li><a href="javascript:select1('Interest Rates');"><i class="fa fa-angle-double-right"></i>Interest Rates </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>International Economics</h3>
                            <ul>
                                <li><a href="javascript:select1('Trade Theories');"><i class="fa fa-angle-double-right"></i>Trade Theories </a></li>
                                <li><a href="javascript:select1('Comparative Advantage');"><i class="fa fa-angle-double-right"></i>Comparative Advantage </a></li>
                                <li><a href="javascript:select1('Absolute Advantage');"><i class="fa fa-angle-double-right"></i>Absolute Advantage </a></li>
                                <li><a href="javascript:select1('Heckscher-Ohlin Theory');"><i class="fa fa-angle-double-right"></i>Heckscher-Ohlin Theory </a></li>
                                <li><a href="javascript:select1('Foreign Direct Investment');"><i class="fa fa-angle-double-right"></i>Foreign Direct Investment </a></li>
                                <li><a href="javascript:select1('Tariffs and Subsidies');"><i class="fa fa-angle-double-right"></i>Tariffs and Subsidies </a></li>
                                <li><a href="javascript:select1('Trade Policy');"><i class="fa fa-angle-double-right"></i>Trade Policy </a></li>
                                <li><a href="javascript:select1('Economic Integration');"><i class="fa fa-angle-double-right"></i>Economic Integration </a></li>
                                <li><a href="javascript:select1('Balance of Payment');"><i class="fa fa-angle-double-right"></i>Balance of Payment </a></li>
                                <li><a href="javascript:select1('Exchange Rate');"><i class="fa fa-angle-double-right"></i>Exchange Rate </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Others</h3>
                            <ul>
                                <li><a href="javascript:select1('Econometrics');"><i class="fa fa-angle-double-right"></i>Econometrics </a></li>
                                <li><a href="javascript:select1('Environmental Economics');"><i class="fa fa-angle-double-right"></i>Environmental Economics </a></li>
                                <li><a href="javascript:select1('Health Care Economics');"><i class="fa fa-angle-double-right"></i>Health Care Economics </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end of accounting --> 
            <!-- Finance -->
            <div>
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Basics of Statistics</h3>
                            <ul>
                                <li><a href="javascript:select1('Theory of probability');"><i class="fa fa-angle-double-right"></i>Theory of probability </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3>Sampling Theory</h3>
                            <ul>
                                <li><a href="javascript:select1('Simple Random Sampling');"><i class="fa fa-angle-double-right"></i>Simple Random Sampling </a></li>
                                <li><a href="javascript:select1('Stratified Random Sampling');"><i class="fa fa-angle-double-right"></i>Stratified Random Sampling </a></li>
                                <li><a href="javascript:select1('Systematic Sampling');"><i class="fa fa-angle-double-right"></i>Systematic Sampling </a></li>
                                <li><a href="javascript:select1('Cluster Sampling');"><i class="fa fa-angle-double-right"></i>Cluster Sampling </a></li>
                                <li><a href="javascript:select1('Double sampling');"><i class="fa fa-angle-double-right"></i>Double sampling </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3>Applied Statistics</h3>
                            <ul>
                                <li><a href="javascript:select1('Index Numbers');"><i class="fa fa-angle-double-right"></i>Index Numbers </a></li>
                                <li><a href="javascript:select1('Vital Statistics');"><i class="fa fa-angle-double-right"></i>Vital Statistics </a></li>
                                <li><a href="javascript:select1('tatistical Quality Control');"><i class="fa fa-angle-double-right"></i>tatistical Quality Control </a></li>
                                <li><a href="javascript:select1('Psychological and Institutional Statistics');"><i class="fa fa-angle-double-right"></i>Psychological and Institutional Statistics </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3>Others</h3>
                            <ul>
                                <li><a href="javascript:select1('Linear models');"><i class="fa fa-angle-double-right"></i>Linear models </a></li>
                                <li><a href="javascript:select1('Biostatistics');"><i class="fa fa-angle-double-right"></i>Biostatistics </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Descriptive Statistics</h3>
                            <ul>
                                <li><a href="javascript:select1('Charts and diagrams');"><i class="fa fa-angle-double-right"></i>Charts and diagrams </a></li>
                                <li><a href="javascript:select1('Variance');"><i class="fa fa-angle-double-right"></i>Variance </a></li>
                                <li><a href="javascript:select1('Standard deviation');"><i class="fa fa-angle-double-right"></i>Standard deviation </a></li>
                                <li><a href="javascript:select1('Skewness');"><i class="fa fa-angle-double-right"></i>Skewness </a></li>
                                <li><a href="javascript:select1('Kurtosis');"><i class="fa fa-angle-double-right"></i>Kurtosis </a></li>
                                <li><a href="javascript:select1('Percentiles and Quartiles');"><i class="fa fa-angle-double-right"></i>Percentiles and Quartiles </a></li>
                                <li><a href="javascript:select1('Tree Diagrams');"><i class="fa fa-angle-double-right"></i>Tree Diagrams </a></li>
                                <li><a href="javascript:select1('Coefficient of Variance');"><i class="fa fa-angle-double-right"></i>Coefficient of Variance </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3>Central Tendency</h3>
                            <ul>
                                <li><a href="javascript:select1('Men');"><i class="fa fa-angle-double-right"></i>Men </a></li>
                                <li><a href="javascript:select1('Median');"><i class="fa fa-angle-double-right"></i>Median </a></li>
                                <li><a href="javascript:select1('Mode');"><i class="fa fa-angle-double-right"></i>Mode </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Hypothesis Testing</h3>
                            <ul>
                                <li><a href="javascript:select1('T,F,Z distibutions');"><i class="fa fa-angle-double-right"></i>T,F,Z distibutions </a></li>
                                <li><a href="javascript:select1('Chi square distributions');"><i class="fa fa-angle-double-right"></i>Chi square distributions </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3>ANOVA</h3>
                            <ul>
                                <li><a href="javascript:select1('Applications of ANOVA');"><i class="fa fa-angle-double-right"></i>Applications of ANOVA </a></li>
                                <li><a href="javascript:select1('Design of Experiments');"><i class="fa fa-angle-double-right"></i>Design of Experiments </a></li>
                                <li><a href="javascript:select1('Factorial Experiments');"><i class="fa fa-angle-double-right"></i>Factorial Experiments </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Regression</h3>
                            <ul>
                                <li><a href="javascript:select1('Correlation, Regression');"><i class="fa fa-angle-double-right"></i>Correlation, Regression</a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3>Time Series Analysis</h3>
                            <ul>
                                <li><a href="javascript:select1('Forecasting');"><i class="fa fa-angle-double-right"></i>Forecasting </a></li>
                                <li><a href="javascript:select1('Exponential smoothing');"><i class="fa fa-angle-double-right"></i>Exponential smoothing </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                        <div class="topics-lists mr_b15">
                            <h3>Stochastic processes</h3>
                            <ul>
                                <li><a href="javascript:select1('Markov Analysis');"><i class="fa fa-angle-double-right"></i>Markov Analysis </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="topics-lists mr_b15">
                            <h3>Operational Research</h3>
                            <ul>
                                <li><a href="javascript:select1('Decision Making');"><i class="fa fa-angle-double-right"></i>Decision Making </a></li>
                                <li><a href="javascript:select1('Queuing Theory');"><i class="fa fa-angle-double-right"></i>Queuing Theory </a></li>
                                <li><a href="javascript:select1('Simulation');"><i class="fa fa-angle-double-right"></i>Simulation </a></li>
                                <li><a href="javascript:select1('Game Theory');"><i class="fa fa-angle-double-right"></i>Game Theory </a></li>
                                <li><a href="javascript:select1('Assignment Problem');"><i class="fa fa-angle-double-right"></i>Assignment Problem </a></li>
                                <li><a href="javascript:select1('Transportation Problem');"><i class="fa fa-angle-double-right"></i>Transportation Problem </a></li>
                                <li><a href="javascript:select1('Project evaluation and review technique and Critical path(CPM_PERT analysis)');"><i class="fa fa-angle-double-right"></i>Project evaluation and review technique and Critical path(CPM_PERT analysis) </a></li>
                                <li><a href="javascript:select1('Simplex');"><i class="fa fa-angle-double-right"></i>Simplex </a></li>
                                <li><a href="javascript:select1('Inventory management');"><i class="fa fa-angle-double-right"></i>Inventory management </a></li>
                                <li><a href="javascript:select1('Others');"><i class="fa fa-angle-double-right"></i>Others </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /end of Finance --> 
    </div>
</div>
<script src="js/jquery.simplyscroll.min.js"></script> 
<script type="text/javascript">
    (function ($) {
        $(function () {
            $("#scroller").simplyScroll({orientation: 'vertical', customClass: 'vert'});
        });
    })(jQuery);
</script> 

<!-- Fancy box with tab menu --> 
<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script> 
<script type="text/javascript">
    $(document).ready(function () {
        $('.fancybox').fancybox();
    });
</script> 
<script src="js/easyResponsiveTabs.js"></script> 
<script type="text/javascript">
    $(document).ready(function () {
        // Child Tab
        $('#ChildVerticalTab_1').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true,
            tabidentify: 'ver_1', // The tab groups identifier
            activetab_bg: '#fff', // background color for active tabs in this group
            inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
            active_border_color: '#c1c1c1', // border color for active tabs heads in this group
            active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
        });

        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'horizontal', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function (event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>

<!--date picker code-->

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./picker/jquery.datetimepicker.css"/>
    </head>
    <body>


<!--<script src="./picker/jquery.js"></script>-->
        <script src="./picker/build/jquery.datetimepicker.full.js"></script>
        <script>
            $.datetimepicker.setLocale('en');

            $('#datetimepicker_format').datetimepicker({value: '2015/04/15 05:03', format: $("#datetimepicker_format_value").val()});
            console.log($('#datetimepicker_format').datetimepicker('getValue'));

            $("#datetimepicker_format_change").on("click", function (e) {
                $("#datetimepicker_format").data('xdsoft_datetimepicker').setOptions({format: $("#datetimepicker_format_value").val()});
            });
            $("#datetimepicker_format_locale").on("change", function (e) {
                $.datetimepicker.setLocale($(e.currentTarget).val());
            });

            $('#datetimepicker').datetimepicker({
                dayOfWeekStart: 1,
                lang: 'en',
                disabledDates: ['1986/01/08', '1986/01/09', '1986/01/10'],
                startDate: '1986/01/05'
            });
            $('#datetimepicker').datetimepicker({value: '2015/04/15 05:03', step: 10});

            $('.some_class').datetimepicker();

            $('#default_datetimepicker').datetimepicker({
                formatTime: 'H:i',
                formatDate: 'd.m.Y',
                //defaultDate:'8.12.1986', // it's my birthday
                defaultDate: '+03.01.1970', // it's my birthday
                defaultTime: '10:00',
                timepickerScrollbar: false
            });

            $('#destroy').click(function () {
                if ($('#datetimepicker6').data('xdsoft_datetimepicker')) {
                    $('#datetimepicker6').datetimepicker('destroy');
                    this.value = 'create';
                } else {
                    $('#datetimepicker6').datetimepicker();
                    this.value = 'destroy';
                }
            });
            var logic = function (currentDateTime) {
                if (currentDateTime && currentDateTime.getDay() == 6) {
                    this.setOptions({
                        minTime: '11:00'
                    });
                } else
                    this.setOptions({
                        minTime: '8:00'
                    });
            };

            var dateToDisable = new Date();
            dateToDisable.setDate(dateToDisable.getDate() + 2);
            $('#datetimepicker11').datetimepicker({
                beforeShowDay: function (date) {
        //		if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
        //			return [false, ""]
        //		}

                    return [true, ""];
                }
            });
        </script>
</html>

<!--date picker code-->