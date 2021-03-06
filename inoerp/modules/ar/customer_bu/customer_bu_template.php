<form action=""  method="post" id="customer_bu"  name="customer_bu">
 <div id ="form_header"><span class="heading"><?php echo gettext('Customer BU Assignment') ?></span>
  <div class="tabContainer">
  <ul class="column header_field"><?php $f = new inoform(); ?>
    <li><?php $f->l_text_field_dr_withSearch('ar_customer_bu_id') ?><a name="show" href="?ar_customer_bu_id=" class="show ar_customer_bu_id">
      <i class='fa fa-refresh'></i></a> 
    </li>
    <li><label>Customer Id</label><span class="button"><a href="form.php?class_name=ar_customer&mode=<?php echo $mode; ?>&ar_customer_id=
                                                          <?php echo $$class->ar_customer_id; ?>"><?php echo $$class->ar_customer_id; ?></a></span>
      <?php echo form::hidden_field('ar_customer_id', $$class->ar_customer_id); ?>
    </li>
    <li><?php $f->l_text_field_d('org_id'); ?></li>      
    <li><?php $f->l_text_field_d('org'); ?></li>      
    <li><?php $f->l_text_field_d('customer_number'); ?></li>      
    <li><?php $f->l_text_field_d('customer_name'); ?></li>      
    <li><?php $f->l_status_field_d('status'); ?></li>      
    <li><?php $f->l_text_field_d('rev_enabled_cb'); ?></li>      
    <li><?php $f->l_text_field_d('rev_number'); ?></li>      
   </ul>
   </div>
 </div>
 <div id ="form_line" class="form_line"><span class="heading"><?php echo gettext('Customer BU Details') ?></span>
  <div id="tabsLine">
   <ul class="tabMain">
    <li><a href="#tabsLine-1"><?php echo gettext('Accounts') ?></a></li>
    <li><a href="#tabsLine-2"><?php echo gettext('Finance') ?> </a></li>
    <li><a href="#tabsLine-3"><?php echo gettext('Profile') ?> </a></li>
    <li><a href="#tabsLine-4"><?php echo gettext('Sales') ?> </a></li>
    <li><a href="#tabsLine-5"><?php echo gettext('Attachments') ?></a></li>
    <li><a href="#tabsLine-6"><?php echo gettext('Contact') ?></a></li>
   </ul>
   <div class="tabContainer">
    <div id="tabsLine-1" class="tabContent">
     <ul class="column header_field"> 
      <li><?php $f->l_ac_field_d('receivable_ac_id', '', 'A'); ?></li>
      <li><?php $f->l_ac_field_d('revenue_ac_id', '', 'I'); ?></li>
      <li><?php $f->l_ac_field_d('tax_ac_id', '', 'L'); ?></li>
      <li><?php $f->l_ac_field_d('freight_ac_id', '', 'I'); ?></li>
      <li><?php $f->l_ac_field_d('clearing_ac_id', '', 'X'); ?></li>
      <li><?php $f->l_ac_field_d('unbilled_receivable_ac_id', '', 'A'); ?></li>
      <li><?php $f->l_ac_field_d('unearned_revenue_ac_id', '', 'L'); ?></li>
      </ul>
      <!--end of tab1 div three_column-->
    </div> 
    <div id="tabsLine-2" class="tabContent">
     <div> 
      <ul class="column header_field">
       <li><?php $f->l_select_field_from_object('currency', option_header::currencies(), 'option_line_code', 'option_line_code', $$class->currency, 'currency', $readonly); ?>       </li>
       <li><?php $f->l_select_field_from_object('payment_term_id', payment_term::find_all(), 'payment_term_id', 'payment_term', $$class->payment_term_id, 'payment_term_id', $readonly, '', ''); ?>       </li>
       <li><?php $f->l_text_field_d('finance_profile_id'); ?> </li>
       <li><?php $f->l_text_field_d('payment_method_id'); ?> </li>
       <li><?php $f->l_text_field_d('bank_id'); ?> </li>
       <li><?php $f->l_text_field_d('bank_account_id'); ?> </li>
      </ul>
     </div>
    </div> 
    <!--end of tab1-->
    <div id="tabsLine-3" class="tabContent">
     <div class="first_rowset"> 
      <ul class="column header_field">
       <li><?php $f->l_text_field_d('profile_id'); ?> </li>
      </ul>
     </div>
    </div>


    <div id="tabsLine-4" class="tabContent">
     <ul class="column five_column"> 
      <li><?php $f->l_text_field_d('order_type_id'); ?> </li>
      <li><?php $f->l_text_field_d('price_list_id'); ?> </li>
      <li><?php $f->l_text_field_d('internal_org_id'); ?> </li>
      <li><?php $f->l_text_field_d('fob'); ?> </li>
      <li><?php $f->l_text_field_d('freight_terms'); ?> </li>
      <li><?php $f->l_text_field_d('transportation'); ?> </li>
      <li><?php $f->l_text_field_d('country_of_origin'); ?> </li>
     </ul>
    </div>

    <div id="tabsLine-5" class="tabContent">
     <div id="show_attachment" class="show_attachment">
      <div id="file_upload_form">
       <ul class="inRow asperWidth">
        <li><input type="file" id="attachments" class="attachments" name="attachments[]" multiple/></li>
        <li> <input type="button" value="Attach" form="file_upload" name="attach_submit" id="attach_submit" class="submit button"></li>
        <li class="show_loading_small"><img alt="Loading..." src="<?php echo HOME_URL; ?>themes/images/small_loading.gif"/></li>
       </ul>
      </div>
      <div id="uploaded_file_details"></div>
      <?php echo file::attachment_statement($file); ?>
     </div>
    </div>
    <!--end of tab4(purchasing)!!! start of MFG tab-->
    <div id="tabsLine-6" class="tabContent">

    </div>
   </div>

  </div>
 </div>
</form>