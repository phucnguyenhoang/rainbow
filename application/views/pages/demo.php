<div class="container">
    <div class="main-content">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php if (!empty($message)) : ?>
                    <div class="alert alert-<?php echo ($success ? 'success' : 'danger'); ?> alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo $message; ?>
                    </div>
                <?php endif; ?>
                <p><?php echo lang('request_text'); ?></p><br>
                <form class="form-horizontal" id="frmDemo" method="post" action="<?php echo base_url('request-demonstration'); ?>" novalidate>
                    <div class="form-group">
                        <label for="txtFullName" class="col-sm-2 control-label required"><?php echo lang('frm_full_name'); ?></label>
                        <div class="col-sm-10">
                            <input type="text" name="fullName" class="form-control required" id="txtFullName" placeholder="<?php echo lang('frm_full_name'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtAddress" class="col-sm-2 control-label required"><?php echo lang('frm_address'); ?></label>
                        <div class="col-sm-10">
                            <input type="text" name="address" class="form-control required" id="txtAddress" placeholder="<?php echo lang('frm_address'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtCity" class="col-sm-2 control-label required"><?php echo lang('frm_city'); ?></label>
                        <div class="col-sm-10">
                            <input type="text" name="city" class="form-control required" id="txtCity" placeholder="<?php echo lang('frm_city'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtCountry" class="col-sm-2 control-label"><?php echo lang('frm_country'); ?></label>
                        <div class="col-sm-10">
                            <input type="text" name="country" class="form-control" id="txtCountry" placeholder="<?php echo lang('frm_country'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtEmail" class="col-sm-2 control-label required"><?php echo lang('frm_email'); ?></label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="txtEmail" placeholder="<?php echo lang('frm_email'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtPhoneNumber" class="col-sm-2 control-label required"><?php echo lang('frm_phone_number'); ?></label>
                        <div class="col-sm-10">
                            <input type="text" name="phoneNumber" class="form-control required" id="txtPhoneNumber" placeholder="<?php echo lang('frm_phone_number'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label required"><?php echo lang('frm_demo_language'); ?></label>
                        <div class="col-sm-10 checkbox">
                            <div>
                                <label>
                                    <input type="checkbox" name="lang[]" id="chkEnglish" value="English"> English
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="checkbox" name="lang[]" id="chkKhmer" value="Khmer"> Khmer
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10 checkbox">
                            <strong><?php echo lang('frm_individual_text'); ?></strong>
                            <div>
                                <label>
                                    <input type="checkbox" name="individual[]" value="frm_allergies_and_asthma"> <?php echo lang('frm_allergies_and_asthma'); ?>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="checkbox" name="individual[]" value="frm_carpeting"> <?php echo lang('frm_carpeting'); ?>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="checkbox" name="individual[]" value="frm_hard_surface_floor_care"> <?php echo lang('frm_hard_surface_floor_care'); ?>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="checkbox" name="individual[]" value="frm_dust_removal"> <?php echo lang('frm_dust_removal'); ?>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="checkbox" name="individual[]" value="frm_pets"> <?php echo lang('frm_pets'); ?>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="checkbox" name="individual[]" value="frm_children"> <?php echo lang('frm_children'); ?>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="checkbox" name="individual[]" value="frm_mattress_and_pillow"> <?php echo lang('frm_mattress_and_pillow'); ?>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtHowDid" class="col-sm-2 control-label"><?php echo lang('frm_how_did_you_hear_about_us'); ?></label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="howDid" id="txtHowDid" placeholder="<?php echo lang('frm_how_did_you_hear_about_us'); ?>"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary"><?php echo lang('frm_send'); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>