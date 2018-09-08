<?php include 'templates/head.php' ?>

<main>
    <div class="container">
        <div id="wizard_container">
            <form name="example-1" id="wrapped" method="POST">
                <input id="website" name="website" type="text" value="">
                <!-- Leave for security protection, read docs for details -->
                <div id="middle-wizard">

                   <div class="step">
                        
                        <div class="row justify-content-center">
                        <div class="col-lg-8 col-lg-offset-2">
                                <div class="question_title">
                                     <h3 class="text-center">Please select image quality, product and click next down bellow</h3>
                                     
                                </div>
                                <div class="checkbox_questions text-center justify-content-between">
                                        <input name="web" type="checkbox" class="icheck  " value="yes">
                                        <label for="web">Web / Slide Show</label>
                                        <input name="pressure" type="checkbox" class="icheck  " value="yes">
                                        <label for="pressure">Pressure</label>
                                    </div>
                                 
                            </div>
                            <div class="col-lg-4">
                                <div class="item">
                                    <input  data-label="Building" id="answers_5_1" type="checkbox"
                                        name="answers_5[]"  >
                                    <label for="answers_5_1"><img src="img/produkte1.jpg" alt="" class="img-responsive"> <strong>Building</strong>Postea
                                        democritum mnesarchum ne nam, ad vim aperiri tractatos.</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="item">
                                    <input  id="answers_2_1" name="answers_5[]"
                                        type="checkbox" value="Estate" class="required">
                                    <label for="answers_2_1"><img src="img/produkte3.jpg" alt="" class="img-responsive"> <strong>Estate</strong>Postea democritum
                                        mnesarchum ne nam, ad vim aperiri tractatos.</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="item">
                                    <input  id="answer_2_3" name="answers_5[]"
                                        type="checkbox" value="Map" class="required">
                                    <label for="answer_2_3"><img src="img/produkte4.jpg" alt="" class="img-responsive"><i
                                            class="ribbon"><span>Popular</span></i> <strong>Map</strong>Postea democritum mnesarchum ne nam, ad vim aperiri
                                        tractatos.</label>
                                </div>
                            </div>
                            
                        </div>
                        <!-- /row-->
                    </div>
 
                    <div class="step">
                         
                        
                        <div class="row justify-content-center">
                        <div class="col-lg-8 col-lg-offset-2">
                                <div class="question_title">
                                     <h3 class="text-center">Select Image Quality and your plan</h3>
                                </div>
                                <div class="checkbox_questions text-center justify-content-between">
                                        <input name="webs" type="checkbox" class="icheck  " value="yes">
                                        <label for="webs">Web / Slide Show</label>
                                        <input name="pressures" type="checkbox" class="icheck  " value="yes">
                                        <label for="pressures">Pressure</label>
                                    </div>
                                 
                            </div>
                            <div class="col-lg-4 col-lg-offset-2">
                                <div class="item">
                                    <input  id="answers_6_1" type="checkbox"
                                        name="answers_5[]" value="Ground Plan">
                                    <label for="answers_6_1"><img src="img/produkte6.jpg" alt="" class="img-responsive"><strong>Ground Plan</strong>Postea
                                        democritum mnesarchum ne nam, ad vim aperiri tractatos.</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="item">
                                    <input   id="answers_3_1" name="answers_5[]"
                                        type="checkbox" value="Interior Details" class="required">
                                    <label for="answers_3_1"><img src="img/produkte5.jpg" alt="" class="img-responsive"><strong>Interior Details</strong>Postea democritum
                                        mnesarchum ne nam, ad vim aperiri tractatos.</label>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div> 

                    <!-- Last step ============================== -->
                    <div class="submit step">
                        <div class="question_title">
                            <h3 class="text-center">Upload some extra files if u have and complete the form</h3>
                            
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-lg-offset-2">
                            <div class="input-group image-preview">
                            <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                            <span class="input-group-btn">
                                <!-- image-preview-clear button -->
                                <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                    <span class="glyphicon glyphicon-remove"></span> Clear
                                </button>
                                <!-- image-preview-input -->
                                <div class="btn btn-default image-preview-input">
                                    <span class="glyphicon glyphicon-folder-open"></span>
                                    <span class="image-preview-input-title">Browse</span>
                                    <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                                </div>
                            </span>
                        </div>
                            </div>
                        </div>
                         
                        <div class="row justify-content-center mt-3">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="form-group">
                                <button type="button" class="btn btn-default btn-block">Add more files</button>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="box_general">
                                    <div class="form-group">
                                        <input type="text" name="first_last_name" class="required form-control"
                                            placeholder="First and Last name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="required form-control" placeholder="Your Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="telephone" class="form-control" placeholder="Your Telephone">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="projname" class="form-control" placeholder="Project Name">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="" id=""   rows="5"  placeholder="your message"></textarea>
                                    </div>
                                    <div class="checkbox_questions">
                                        <input name="terms" type="checkbox" class="icheck required" value="yes">
                                        <label>Please accept <a href="#" data-toggle="modal" data-target="#terms-txt">terms
                                                and conditions</a>.</label>
                                    </div>
                                </div> 
                            </div>
                        </div> 
                    </div>
                    <!-- /Last step ============================== -->
                </div>
                <!-- /middle-wizard -->
                <div id="bottom-wizard">
                    <div class="pull-right clearfix">
                        <button type="button" name="backward" class="backward">Backward </button>
                        <button type="button" name="forward" class="forward">Forward</button>
                        <button type="submit" name="process" class="submit">Submit</button>
                    </div>
                </div>
                <!-- /bottom-wizard -->
                <input type="hidden" id="hidden_total" name="hidden_total">
                <!-- /Hidden total input -->
            </form>
        </div>
        <!-- /Wizard container -->
    </div>
    <!-- /Container -->
</main>

<?php include 'templates/footer.php' ?>