@extends('layouts.header')
@section('main-container')
    <section class="service bouncelnLeft">
        <div class="container">
            <div class="row">

                <div class="col-sm-10 col-md-offset-1 padding">

                    <div class="col-md-12 padding modal_header">
                        <div class="col-md-11">
                            <div class="media-body quick_view_name">
                                <h2 class="text-center"> Security Course </h2>
                            </div>

                        </div>

                    </div>


                    <div class="col-md-12">

                        <div class="stepwizard">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                    <p> Personal Information </p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled">2</a>
                                    <p>Academic Information</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-default btn-circle"
                                       disabled="disabled">5</a>
                                    <p>End</p>
                                </div>
                            </div>
                        </div>
                        <form role="form" action="{{route('ITsecurity.store')}}" method="post"
                              enctype="multipart/form-data">
                            <div class="row setup-content" id="step-1">
                                {{csrf_field()}}


                                <div class="col-md-12 full_form_box">
                                    <h4>Personal Information</h4>

                                    <div class="col-md-12 modal_form_box">

                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <input maxlength="100" type="text" name="application_name"
                                                       required="required" class="form-control"
                                                       placeholder="Application Name"/>
                                            </div>
                                        </div>

                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <input maxlength="100" type="text" name="father" required="required"
                                                       class="form-control" placeholder="Father's Name"/>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <input maxlength="100" type="text" name="email" required="required"
                                                       class="form-control" placeholder="Email"/>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <input maxlength="100" type="text" name="mobile" required="required"
                                                       class="form-control" placeholder="Mobile"/>
                                            </div>
                                        </div>

                                        <div class="col-xs-3">
                                            <div class="form-group">
                                                <input maxlength="100" type="date" name="date_of_birth"
                                                       required="required" class="form-control"
                                                       placeholder="Date of Birth"/>
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <div class="form-group">
                                                <input maxlength="100" name="nationality" type="text"
                                                       required="required" class="form-control"
                                                       placeholder="Nationality"/>
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <div class="form-group">
                                                <input maxlength="100" type="text" name="religion" required="required"
                                                       class="form-control" placeholder="Religion"/>
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <div class="form-group">
                                                <input maxlength="100" type="text" name="blood" required="required"
                                                       class="form-control" placeholder="Blodd Group"/>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="present_address"
                                                          placeholder="Present Address"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="parmanent_address"
                                                          placeholder="Parmanent Address"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 padding">
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-3 control-label">Gender
                                                    : </label>
                                                <div class="col-sm-9">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="gender" id="inlineRadio2"
                                                               value="Male"> Male
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="gender" id="inlineRadio3"
                                                               value="Female"> Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-5 control-label"> Marital
                                                    Status : </label>
                                                <div class="col-sm-7">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="marital" id="inlineRadio2"
                                                               value="Single"> Single
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="marital" id="inlineRadio3"
                                                               value="Married"> Married
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="form-group">
                                                Application photo :
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <div class="form-group">
                                                <input type="file" name="user_image" required="required"/>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <button class="btn btn-primary nextBtn btn-sm pull-right next_btn" type="button">
                                        Next
                                    </button>
                                </div>

                            </div>

                            @if (session('ITsecurity'))
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="alert alert-success">
                                        <strong>   {{ session('ITsecurity') }}</strong>
                                    </div>
                                </div>
                            @endif


                            <div class="row setup-content" id="step-2">
                                <div class="col-xs-12">
                                    <div class="col-md-12">

                                        <div class="col-md-12 full_form_box">
                                            <h4>Academic Information</h4>

                                            <div class="col-md-12 modal_form_box">


                                                <div class="col-md-6 col-md-offset-3 padding">
                                                    <P>Student</P>

                                                    <div class="col-xs-12">
                                                        <div class="form-group">
                                                            <input type="text" name="institute_name"
                                                                   placeholder="Institute name" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12">
                                                        <div class="form-group">
                                                            <input type="text" name="department"
                                                                   placeholder="Department" class="form-control">


                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <div class="form-group">
                                                            <input maxlength="100" type="text" name="session_year"
                                                                   required="required" class="form-control"
                                                                   placeholder="session"/>
                                                        </div>
                                                    </div>


                                                </div>


                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button class="btn btn-primary nextBtn btn-sm pull-right next_btn"
                                                    type="button">Next
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="row setup-content" id="step-3">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <h3> Finish</h3>
                                        <div class="col-md-12">
                                            <input class="btn btn-primary  btn-sm pull-right next_btn" type="submit"
                                                   name="security_course_submit" value="Finish">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>


                </div>


            </div>
        </div>
    </section>
    <script type="text/javascript">


        $(document).ready(function () {

            // Custom method to validate username
            $.validator.addMethod("usernameRegex", function (value, element) {
                return this.optional(element) || /^[a-zA-Z0-9]*$/i.test(value);
            }, "Username must contain only letters, numbers");
            $(".next").click(function () {
                var form = $("#myform");
                form.validate({
                    errorElement: 'span',
                    errorClass: 'help-block',
                    highlight: function (element, errorClass, validClass) {
                        $(eleme
                        n
                        t
                    ).
                        closest('.form-group').addCl
                        a
                        ss("h   a   s-e         r   r o       r ");
                    },
                    unhighlight: funct i on(eleme n t, errorClass, validClass)
                {
                    $(element).closest('.form-group').removeClass("has-error");
                }
            ,
                rules: {
                    username: {
                        required: true,
                            usernameRegex
                    :
                        true,
                            minlength
                    :
                        6,
                    }
                ,
                    password : {
                        required: true,
                    }
                ,
                    conf_password : {
                        required: true,
                            equalTo
                    :
                        '#password',
                    }
                ,
                    company:{
                        required: true,
                    }
                ,
                    url:{
                        required: true,
                    }
                ,
                    name: {
                        required: true,
                            minlength
                    :
                        3,
                    }
                ,
                    email: {
                        required: true,
                            minlength
                    :
                        3,
                    }
                ,
                }
            ,
                messages: {
                    username: {
                        required: "Username required",
                    }
                ,
                    password : {
                        required: "Password required",
                    }
                ,
                    conf_password : {
                        required: "Password required",
                            equalTo
                    :
                        "Password don't match",
                    }
                ,
                    name: {
                        required: "Name required",
                    }
                ,
                    email: {
                        required: "Email required",
                    }
                ,
                }
            })
                ;
                if (form.valid() === true) {
                    if ($('#account_information').is(":visible")) {
                        current_fs = $('#account_information');
                        next_fs = $('#company_information');
                    } else if ($('#company_information').is(":visibl e")) {
                        curren
                        t_fs = $('#company_information');
                        next_fs = $('#personal_information');
                    }

                    next_fs.show();
                    current_fs.hide();
                }
            });
            $('#previous').click(function () {
                if ($('#company_information').is(":visible")) {
                    current_fs = $('#company_information');
                    next_fs = $('#account_information');
                } else if ($('#personal_information').is(": visi ble")) {
                    current_fs = $('#personal_information');
                    next_fs = $('#company_information');
                }
                next_fs.show();
                current_fs.hide();
            }); //@naresh action dynamic childs             var next_exp = 0;
            $("#add-more1").click(function (e) {
                e.preventDefault();
                var addto = "#fielda" + next_exp;
                var addRemove = "#fielda" + (next_exp);
                next_exp = next_exp + 1;
                var newInp = ' <div id="fielda' + n
                ext
                _exp + '"  n ame="field1' + next_exp + '"><div class="form-group"><label class="col-md-3">Job Title</label><div class="col-md-7"><input type="text"  name="job_tit[]" id="job_tit" class="form-control" placeholder="e.g. Java/php Developer" required> </div><br><br><br><!-- Text input--><div class="form-group"><label class="col-md-3">Company</label><div class="col-md-7"><input type="text"  name="company[]" id="company" class="form-control" placeholder="" required> </div> <div><br><br><!-- Text input--><div class="form-group"><label class="col-md-3">City</label> <div class="col-md-7"><input type="text"  name="city[]" id="city" class="form-control" placeholder="" required></div></div><br><br><!-- Text input--><div class="form-group"><label class="col-md-3">Time period</label><div class="col-md-8"><div class="col-md-3"><select class="form-control"  name="work_from[]" ><option value="1995">    1995 </option><option value="1996">  1996    </option><option value="1997">  1997    </option><option value="1998">  1998    </option><option value="1999">  1999    </option><option value="2000">  2000    </option><option value="2001">  2001    </option><option value="2002">  2002    </option><option value="2003">  2003    </option><option value="2004">  2004    </option><option value="2005">  2005    </option><option value="2006">  2006    </option><option value="2007">  2007    </option><option value="2008">  2008    </option><option value="2009">  2009    </option><option value="2010">  2010    </option><option value="2011">  2011    </option><option value="2012">  2012    </option><option value="2013">  2013    </option><option value="2014">  2014    </option><option value="2015">  2015    </option><option value="2016">  2016    </option></select></div><div class="col-md-1"><label>To</label></div><div class="col-md-3"><select class="form-control"  name="work_to[]" ><option value="1980">    1980    </option><option value="2000">  2000    </option><option value="2001">  2001    </option><option value="2002">  2002    </option><option value="2003">  2003    </option><option value="2004">  2004    </option><option value="2005">  2005    </option><option value="2006">  2006    </option><option value="2007">  2007    </option><option value="2008">  2008    </option><option value="2009">  2009    </option><option value="2010">  2010    </option><option value="2011">  2011    </option><option value="2012">  2012    </option><option value="2013">  2013    </option><option value="2014">  2014    </option><option value="2015">  2015    </option><option value="2016">  2016    </option><option value="2017">  2017    </option><option value="2018">  2018    </option><option value="2019">  2019    </option><option value="2020">  2020    </option></select></div></div></div><br><br><div class="form-group"><input type="checkbox" name="cur_work[]" value="cur_work"> I currently work here<br></div><br><hr></div>';
                var newInput = $(newInp);

                var removeBtn = '<button id="remove' + (next_exp - 1) + '" class="btn btn-danger remove-me" >Remove</button></div></div><div id="field"><br>';
                var removeButton = $(removeBtn);
                $(addto).after(newInput);
                $(addRemove).after(removeButton);
                $("#fielda" + next_exp).attr('data-source', $(addto).attr('data-source'));
                $("#count").val(next_exp);

                $('.remove-me').click(function (e) {
                    e.preventDefault();
                    var fieldNum = this.id.charAt(this.id.length - 1);
                    var fieldID = "#fielda" + fieldNum;
                    $(this).remove();
                    $(fieldID).remove();
                });
            });


            //@naresh action dynamic childs
            var nextedu = 0;
            $("#add-more").click(function (e) {
                e.preventDefault();
                var addto = "#field" + nextedu;
                var addRemove = "#field" + (nextedu);
                nextedu = nextedu + 1;
                var newIn = ' <div id="field' + nextedu + '" name="field' + nextedu + '"><div class="form-group"><label class="col-md-3">Education level</label><div class="col-md-7"><select class="form-control"  name="edu_level[]" ><option value="1">High school or equivalent</option><option value="2">Diploma</option><option value="3">Higher National Diploma</option><option value="4">Bachelos</option><option value="5">Masters</option><option value="6">Doctorate</option></select></div></div><br><br><br><!-- Text input--><div class="form-group"><label class="col-md-3">Field of Study</label><div class="col-md-7"><input type="text"  name="field_stu[]" id="field_stu" class="form-control" placeholder="e.g. Computer Science, Intellectual Property,Psychology." required> </div></div><br><br><!-- Text input--><div class="form-group"><label class="col-md-3">University</label><div class="col-md-7"><input type="text"  name="university[]" id="university" class="form-control" placeholder="" required></div></div><br><br><!-- Text input--><div class="form-group"><label class="col-md-3">Time period</label><div class="col-md-8"><div class="col-md-3"><select class="form-control"  name="edu_from[]" ><option value="1995">    1995    </option><option value="1996">    1996    </option><option value="1997">  1997    </option><option value="1998">  1998    </option><option value="1999">  1999    </option><option value="2000">  2000    </option><option value="2001">  2001    </option><option value="2002">  2002    </option><option value="2003">  2003    </option><option value="2004">  2004    </option><option value="2005">  2005    </option><option value="2006">  2006    </option><option value="2007">  2007    </option><option value="2008">  2008    </option><option value="2009">  2009    </option><option value="2010">  2010    </option><option value="2011">  2011    </option><option value="2012">  2012    </option><option value="2013">  2013    </option><option value="2014">  2014    </option><option value="2015">  2015    </option><option value="2016">  2016    </option></select></div><div class="col-md-1"><label>To</label></div><div class="col-md-3"><select class="form-control"  name="edu_to[]" ><option value="1980"> 1980    </option><option value="2000">  2000    </option><option value="2001">  2001    </option><option value="2002">  2002    </option><option value="2003">  2003    </option><option value="2004">  2004    </option><option value="2005">  2005    </option><option value="2006">  2006    </option><option value="2007">  2007    </option><option value="2008">  2008    </option><option value="2009">  2009    </option><option value="2010">  2010    </option><option value="2011">  2011    </option><option value="2012">  2012    </option><option value="2013">  2013    </option><option value="2014">  2014    </option><option value="2015">  2015    </option><option value="2016">  2016    </option><option value="2017">  2017    </option><option value="2018">  2018    </option><option value="2019">  2019    </option><option value="2020">  2020    </option></select></div></div></div> <br><hr></div>';
                var newInput = $(newIn);

                var removeBtn = '<button id="remove' + (nextedu - 1) + '" class="btn btn-danger remove-me" >Remove</button></div></div><div id="field">';
                var removeButton = $(removeBtn);
                $(addto).after(newInput);
                $(addRemove).after(removeButton);
                $("#field" + nextedu).attr('data-source', $(addto).attr('data-source'));
                $("#count").val(nextedu);

                $('.remove-me').click(function (e) {
                    e.preventDefault();
                    var fieldNum = this.id.charAt(this.id.length - 1);
                    var fieldID = "#field" + fieldNum;
                    $(this).remove();
                    $(fieldID).remove();
                });
            });


        });
    </script>


    <script type="text/javascript">

        $(document).ready(function () {

            var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn');
            allWells.hide();
            navListItems.click(function (e) {
                e.preventDefault();
                var $target = $($(this).attr('href')),
                    $item = $(this);
                if (!$item.hasClass('disabled')) {
                    navListItems.removeClass('btn-primary').addClass('btn-default');
                    $item.addClass('btn-primary');
                    allWells.hide();
                    $target.show();
                    $target.find('input:eq(0)').focus();
                }
            });
            allNextBtn.click(function () {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;
                $(".form-group").removeClass("has-error");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }

                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            });
            $('div.setup-panel div a.btn-primary').trigger('click');
        });


    </script>

@endsection

