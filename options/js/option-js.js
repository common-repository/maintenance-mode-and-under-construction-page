/*Admin options pannal data value*/
	function weblizar_rmmuc_option_data_save(name, security) 
	{ 	//tinyMCE.triggerSave();
		var weblizar_settings_save= "#weblizar_rmmuc_settings_save_"+name;
		var weblizar_theme_options = "#weblizar_rmmuc_"+name;
		var weblizar_settings_save_success = ".success-msg";
		var weblizar_loding = ".msg-overlay";		
		jQuery(weblizar_loding).show();	
		jQuery(weblizar_settings_save).val("1");        
	    jQuery.ajax({
				url:'?page=rmmuc-weblizar',
				type:'post',
				data : jQuery(weblizar_theme_options).serialize() + "&security=" + security,
				 success : function(data)
				 { 
				 	jQuery(weblizar_settings_save_success).show();
					jQuery(weblizar_settings_save_success).fadeOut(2000);
					jQuery(weblizar_loding).fadeOut(3000);					
				 }			
		});
	}	
/*Admin options value reset */
	function weblizar_rmmuc_option_data_reset(name, security) 
	{  
		var r=confirm("Do you want reset setting?")
		if (r==true)
		{		var weblizar_settings_save= "#weblizar_rmmuc_settings_save_"+name;
				var weblizar_theme_options = "#weblizar_rmmuc_"+name;
				var weblizar_loding = ".msg-overlay";
				var weblizar_settings_save_reset = ".reset-msg";
				jQuery(weblizar_loding).show();
				jQuery(weblizar_settings_save).val("2");
				jQuery.ajax({
				   url:'?page=rmmuc-weblizar',
				   type:'post',
				   data : jQuery(weblizar_theme_options).serialize() + "&security=" + security,
				   success : function(data){
					jQuery(weblizar_settings_save_reset).show();
					jQuery(weblizar_settings_save_reset).fadeOut(2000);
					jQuery(weblizar_loding).fadeOut(3000);
					window.location = '?page=rmmuc-weblizar';
				}			
			});
		} else  {
		alert("Action is cancelled.");  }		
	}

/*Layout swapping options value Save and reset */

jQuery(document).ready(function(){	
	
	//onclick Appearance Option settings saved js
	jQuery('#weblizar_rmmuc_option_data_save_appearance_option').click(function(){ 
		
		var weblizar_settings_save_success = ".success-msg";
		var weblizar_loding = ".msg-overlay";		
		var rmmuc_hidden_box_id= "#weblizar_rmmuc_settings_save_appearance_option";
		var layout_form_id = "#weblizar_rmmuc_appearance_option";				
		jQuery(weblizar_loding).show();
			jQuery(rmmuc_hidden_box_id).val("1");
			jQuery.ajax({
			   url:'?page=rmmuc-weblizar',
			   type:'post',
			   data : jQuery(layout_form_id).serialize(),
			   success: function(data) 
				{	
					jQuery(weblizar_settings_save_success).show();
					jQuery(weblizar_settings_save_success).fadeOut(3000);
					jQuery(weblizar_loding).fadeOut(4000);
					window.location = '?page=rmmuc-weblizar';
				}
			});
	});
	
	
	//drag drop tabs
	jQuery('#page_layout_swap .sortable-list').sortable({ connectWith: '#page_layout_swap .sortable-list' });	
	
	// Get items id you can chose
	function weblizartems(weblizar)
	{
		var columns = [];
		jQuery(weblizar + ' div.sortable-list').each(function(){
			columns.push(jQuery(this).sortable('toArray').join(','));
		});
		return columns.join('|');
	}
	
	//onclick check id
	jQuery('#weblizar_home_layout_save_pagelayoutmanger').click(function(){
		var security = jQuery("#security").val();		
		var data = weblizartems('#page_layout_swap');		
		var dataStringfirst = 'rmmuc_layout_data='+ data + "&security=" + security;							
		jQuery('#weblizar_loding_layoutmanger_image').show();
		var weblizar_settings_save_success = ".success-msg";
		var weblizar_loding = ".msg-overlay";		
		jQuery(weblizar_loding).show();	
		var url = '?page=rmmuc-weblizar';				 
			jQuery.ajax({
				dataType : 'html',
				type: 'POST',
				url : url,
				data : dataStringfirst,
				complete : function() {  },
				success: function(data) 
				{	
					jQuery(weblizar_settings_save_success).show();
					jQuery(weblizar_settings_save_success).fadeOut(3000);
					jQuery(weblizar_loding).fadeOut(4000);
				}
		});
	});

	/*Admin options value reset */
	jQuery('#weblizar_home_layout_reset_pagelayoutmanger').click(function(){
		var r=confirm("Do you want reset your theme setting!")
		if (r==true)
		{
			var security = jQuery("#security").val();
			var rmmuc_hidden_box_id= "#weblizar_rmmuc_settings_save_pagelayoutmanger";
			var layout_form_id = "#weblizar_rmmuc_pagelayoutmanger";
			var weblizar_loding = ".msg-overlay";
			var weblizar_settings_save_reset = ".reset-msg";
			jQuery(weblizar_loding).show();
				jQuery(rmmuc_hidden_box_id).val("2");
				jQuery.ajax({
				   url:'?page=rmmuc-weblizar',
				   type:'post',
				   data : jQuery(layout_form_id).serialize()+ "&security=" + security,
				   success: function(data) 
					{	
						jQuery(weblizar_settings_save_reset).show();
						jQuery(weblizar_settings_save_reset).fadeOut(3000);
						jQuery(weblizar_loding).fadeOut(4000);
						window.location = '?page=rmmuc-weblizar';
					}
				});
		} else {
		alert("Action is cancelled.");  }		
	});																
	jQuery('#weblizar_rmmuc_option_data_restored').click(function(){ 		
	var r=confirm("Do you want reset all plugin settings as default!")
		if (r==true)
		{
			var security = jQuery("#security").val();
			var weblizar_settings_save_success = ".success-msg";		
			var weblizar_loding = ".msg-overlay";				
			var rmmuc_hidden_box_id= "#weblizar_rmmuc_settings_all_restored_settings_option";		
			var layout_form_id = "#weblizar_rmmuc_advance_settings_option";					
			jQuery(weblizar_loding).show();			
			jQuery(rmmuc_hidden_box_id).val("2");			
				jQuery.ajax({			   
				url:'?page=rmmuc-weblizar',			  
				type:'post',			   
				data : jQuery(layout_form_id).serialize() + "&security=" + security,					   
					success: function(data) 				
						{						
							jQuery(weblizar_settings_save_success).show();					
							jQuery(weblizar_settings_save_success).fadeOut(3000);					
							jQuery(weblizar_loding).fadeOut(4000);					
							window.location = '?page=rmmuc-weblizar';				
						}			
				});		
			} else {
					alert("Action is cancelled.");  
				}
	});	
});			
	
/*Subscriber Form options JS*/
	jQuery(document).ready(function(){
	/*Download All User list from subscribe data table */
	jQuery('#weblizar_rmmuc_subscriber_users_all_download').click(function(){
		var rmmuc_hidden_box_id= "#weblizar_rmmuc_subscriber_users_action";
		var layout_form_id = "#weblizar_rmmuc_subscribe_form";				
		var weblizar_settings_download_success = ".download-msg";
		var weblizar_loding = ".msg-overlay";	
		jQuery(weblizar_loding).show();	
		jQuery(rmmuc_hidden_box_id).val('1');
		jQuery.ajax({
		   url:'?page=rmmuc-weblizar',
		   type:'post',
		   data : jQuery(layout_form_id).serialize(),
		   success : function(data){
			jQuery(weblizar_settings_download_success).show();
			jQuery(weblizar_settings_download_success).fadeOut(3000);
			jQuery(weblizar_loding).fadeOut(4000);
			}
		});			
	});	
/*Download Subscribed User list from subscribe data table */
	jQuery('#weblizar_rmmuc_subscriber_users_subscribed_download').click(function(){
		var rmmuc_hidden_box_id= "#weblizar_rmmuc_subscriber_users_action";
		var layout_form_id = "#weblizar_rmmuc_subscribe_form";				
		var weblizar_settings_download_success = ".download-msg";
		var weblizar_loding = ".msg-overlay";	
		jQuery(weblizar_loding).show();	
		jQuery(rmmuc_hidden_box_id).val('2');
		jQuery.ajax({
		   url:'?page=rmmuc-weblizar',
		   type:'post',
		   data : jQuery(layout_form_id).serialize(),
		   success : function(data){
			jQuery(weblizar_settings_download_success).show();
			jQuery(weblizar_settings_download_success).fadeOut(3000);
			jQuery(weblizar_loding).fadeOut(4000);
			
			}
		});			
	});	
/*Download Pending User list from subscribe data table */
	jQuery('#weblizar_rmmuc_subscriber_users_pending_download').click(function(){
		var rmmuc_hidden_box_id= "#weblizar_rmmuc_subscriber_users_action";
		var layout_form_id = "#weblizar_rmmuc_subscribe_form";				
		var weblizar_settings_download_success = ".download-msg";
		var weblizar_loding = ".msg-overlay";	
		jQuery(weblizar_loding).show();	
		jQuery(rmmuc_hidden_box_id).val('3');
		jQuery.ajax({
		   url:'?page=rmmuc-weblizar',
		   type:'post',
		   data : jQuery(layout_form_id).serialize(),
		   success : function(data){
			jQuery(weblizar_settings_download_success).show();
			jQuery(weblizar_settings_download_success).fadeOut(3000);
			jQuery(weblizar_loding).fadeOut(4000);			
			}
		});			
	});	

});	
	
	
/*Subscriber options value Removed */
	jQuery(document).ready(function(){
	/*Mail Send to User as selected options actions */
	jQuery('#submit_subscriber').click(function(){
		var r=confirm("Are you sure to mail sent to selected subscriber?")
		if (r==true)
		{
			var slected_options= "#subscriber_users_mail_option";			
			var rmmuc_hidden_box_id= "#weblizar_rmmuc_submit_subscriber";
			var layout_form_id = "#weblizar_rmmuc_subscribe_form";				
			var weblizar_settings_removed_success = ".send_mail-msg";
			var weblizar_loding = ".msg-overlay";	
				jQuery(weblizar_loding).show();	
				if(jQuery(slected_options).val()=='all_users')
				{
					jQuery(rmmuc_hidden_box_id).val('1');
				}else if(jQuery(slected_options).val()=='selected_users')
				{
					jQuery(rmmuc_hidden_box_id).val('2');
				}else if(jQuery(slected_options).val()=='pending_users')
				{
					jQuery(rmmuc_hidden_box_id).val('3');
				}else if(jQuery(slected_options).val()=='active_users')
				{
					jQuery(rmmuc_hidden_box_id).val('4');
				}else if(jQuery(slected_options).val()=='already_mailed_users')
				{
					jQuery(rmmuc_hidden_box_id).val('5');
				}
				jQuery.ajax({
					url:'?page=rmmuc-weblizar',
					type:'post',
					data : jQuery(layout_form_id).serialize(),
					success : function(data){
					jQuery(weblizar_settings_removed_success).show();
					jQuery(weblizar_settings_removed_success).fadeOut(3000);
					jQuery(weblizar_loding).fadeOut(4000);
					}
				});
		} else {
		alert("Action is cancelled.");  }	
	});
		
	/*Remove any record from subscribe data table */
	
	jQuery('#remove-sub').click(function(){
		var r=confirm("Are you sure to delete selected subscriber records?")
		if (r==true)
		{
			var rmmuc_hidden_box_id= "#weblizar_rmmuc_submit_subscriber";
			var layout_form_id = "#weblizar_rmmuc_subscribe_form";				
			var weblizar_settings_removed_success = ".remove-msg";
			var weblizar_loding = ".msg-overlay";	
				jQuery(weblizar_loding).show();	
				jQuery(rmmuc_hidden_box_id).val('6');
				jQuery.ajax({
				   url:'?page=rmmuc-weblizar',
				   type:'post',
				   data : jQuery(layout_form_id).serialize(),
				   success : function(data){
					jQuery(weblizar_settings_removed_success).show();
					jQuery(weblizar_settings_removed_success).fadeOut(3000);
					jQuery(weblizar_loding).fadeOut(4000);
					//window.location = '?page=rmmuc-weblizar';
					}
				});
		} else {
		alert("Action is cancelled.");  }	
	});
	
	/*Removed All Subscribed User from subscribe data table */
	jQuery('#remove-all-subs').click(function(){
		var r=confirm("Are you sure to delete all subscriber records?")
		if (r==true)
		{
			var rmmuc_hidden_box_id= "#weblizar_rmmuc_submit_subscriber";
			var layout_form_id = "#weblizar_rmmuc_subscribe_form";				
			var weblizar_settings_deleted_success = ".deleted-msg";
			var weblizar_loding = ".msg-overlay";	
			jQuery(weblizar_loding).show();	
			jQuery(rmmuc_hidden_box_id).val('7');
			jQuery.ajax({
			   url:'?page=rmmuc-weblizar',
			   type:'post',
			   data : jQuery(layout_form_id).serialize(),
			   success : function(data){
				jQuery(weblizar_settings_deleted_success).show();
				jQuery(weblizar_settings_deleted_success).fadeOut(3000);
				jQuery(weblizar_loding).fadeOut(4000);
				//window.location = '?page=rmmuc-weblizar';
				}
			});	
		} else {
		alert("Action is cancelled.");  }
	});		
});	

/*Theme Activate options JS */
	jQuery(document).ready(function(){
	/*Remove any record from subscribe data table */
	jQuery("#theme-activation").click(function(){
		var r=confirm("Do you want to activate this?")
		if (r==true)
		{
			var rmmuc_hidden_box_id= "#weblizar_rmmuc_settings_save_template_option";
			var layout_form_id = "#weblizar_rmmuc_template_option";				
			var weblizar_settings_removed_success = ".theme-activation-msg";
			var weblizar_loding = ".msg-overlay";	
				jQuery(weblizar_loding).show();	
				jQuery(rmmuc_hidden_box_id).val('1');
				jQuery.ajax({
				   url:'?page=rmmuc-weblizar',
				   type:'post',
				   data : jQuery(layout_form_id).serialize(),
				   success : function(data){
					jQuery(weblizar_settings_removed_success).show();
					jQuery(weblizar_settings_removed_success).fadeOut(3000);
					jQuery(weblizar_loding).fadeOut(4000);	
					window.location = '?page=rmmuc-weblizar';
					}
				});
		} else {
		alert("Action is cancelled.");  }	
	});	
});	

	
// js to active the link of option pannel
 jQuery(document).ready(function() {
	 var rangeval='';
	 jQuery('.rmmuc_range').click(function(){
	 var p= jQuery(this).val(); 
	 rangeval = jQuery(this).nextAll('input');
	 rangeval.val(p);
	 
}); 


	if(getCookie('currentabChild')!=""){
		jQuery('ul.options_tabs li a#'+getCookie('currentabChild')).parent().addClass('currunt');
		jQuery('ul li.active ul').slideDown();
	}else if(getCookie('currentab')!=""){
		jQuery('ul.options_tabs li a#'+getCookie('currentab')).parent().addClass('currunt active');
		jQuery('ul.options_tabs li a#'+getCookie('currentab')).addClass('active');
		jQuery('ul.options_tabs li:first-child').removeClass('active');
	}else{
		jQuery('ul li.active ul').slideDown();
		}
	// menu click	
	jQuery('#nav > li > a').click(function(){		
		if (jQuery(this).attr('class') != 'active')
		{ 		
			jQuery('#nav li ul').slideUp(350);
			jQuery(this).next().slideToggle(350);
			jQuery('#nav li a').removeClass('active');
			jQuery(this).addClass('active');
		  
			jQuery('ul.options_tabs li').removeClass('active');
			jQuery(this).parent().addClass('active');		
			var divid =  jQuery(this).attr("id");
			document.cookie="currentabChild=;expires="+Date(jQuery.now());
			document.cookie="currentab="+divid;
			var add="div#option-"+divid;
			var strlenght = add.length;
			
			if(strlenght<17)
			{	
				var add="div#option-ui-id-"+divid;
				var ulid ="#ui-id-"+divid;
				jQuery('ul.options_tabs li li ').removeClass('currunt');
				jQuery(ulid).parent().addClass('currunt');	
			}			
			jQuery('div.ui-tabs-panel').addClass('deactive').fadeIn(1000);
			jQuery('div.ui-tabs-panel').removeClass('active');
			jQuery(add).removeClass('deactive');		
			jQuery(add).addClass('active');		
		}
	});
	
	// child submenu click
	jQuery('ul.options_tabs li li ').click(function() {			
		jQuery('ul.options_tabs li li ').removeClass('currunt');
		jQuery(this).addClass('currunt');
		var option_name =  jQuery(this).children("a").attr("id");
		document.cookie="currentab=;expires="+Date(jQuery.now());
		document.cookie="currentabChild="+option_name;
		var option_add="div#option-"+option_name;
		jQuery('div.ui-tabs-panel').addClass('deactive').fadeIn(1000);
		jQuery('div.ui-tabs-panel').removeClass('active');
		jQuery(option_add).removeClass('deactive');		
		jQuery(option_add).addClass('active');
		
	});
	if(getCookie('currentab')!=""){
			var divid = getCookie('currentab');
			var add="div#option-"+divid;
			var strlenght = add.length;
			
			if(strlenght<17)
			{	
				var add="div#option-ui-id-"+divid;
				var ulid ="#ui-id-"+divid;
				jQuery('ul.options_tabs li li ').removeClass('currunt');
				jQuery(ulid).parent().addClass('currunt');	
			}			
			jQuery('div.ui-tabs-panel').addClass('deactive').fadeIn(1000);;
			jQuery('div.ui-tabs-panel').removeClass('active');
			jQuery(add).removeClass('deactive');		
			jQuery(add).addClass('active');	
		}else if(getCookie('currentabChild')!=""){
			var option_name = getCookie('currentabChild');
			var option_add="div#option-"+option_name;
		jQuery('div.ui-tabs-panel').addClass('deactive').fadeIn(1000);;
		jQuery('div.ui-tabs-panel').removeClass('active');
		jQuery(option_add).removeClass('deactive');		
		jQuery(option_add).addClass('active');
		
		}

/* function modifyOffset() {
    var el, newPoint, newPlace, offset, siblings, k;
    width    = this.offsetWidth;
    newPoint = (this.value - this.getAttribute("min")) / (this.getAttribute("max") - this.getAttribute("min"));
    offset   = -1;
    if (newPoint < 0) { newPlace = 0;  }
    else if (newPoint > 1) { newPlace = width; }
    else { newPlace = width * newPoint + offset; offset -= newPoint;}
    siblings = this.parentNode.childNodes;
    for (var i = 0; i < siblings.length; i++) {
        sibling = siblings[i];
        if (sibling.id == this.id) { k = true; }
        if ((k == true) && (sibling.nodeName == "OUTPUT")) {
            outputTag = sibling;
        }
    }
    outputTag.style.left       = newPlace + "px";
    outputTag.style.marginLeft = offset + "%";
    outputTag.innerHTML        = this.value;
}

function modifyInputs() {
    
    var inputs = document.getElementsByTagName("input");
    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].getAttribute("type") == "range") {
            inputs[i].onchange = modifyOffset;

            // the following taken from http://stackoverflow.com/questions/2856513/trigger-onchange-event-manually
            if ("fireEvent" in inputs[i]) {
                inputs[i].fireEvent("onchange");
            } else {
                var evt = document.createEvent("HTMLEvents");
                evt.initEvent("change", false, true);
                inputs[i].dispatchEvent(evt);
            }
        }
    }
}

modifyInputs();
 */
		
	/* Function to get cookie */
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}

	/********media-upload******/
	// media upload js
	var uploadID = ''; /*setup the var*/
	jQuery('.upload_image_button').click(function() {
		uploadID = jQuery(this).prev('input'); /*grab the specific input*/
		formfield = jQuery('.upload').attr('name');
		tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
		
		window.send_to_editor = function(html)
		{	imgurl = jQuery(html).attr('src');
			uploadID.val(imgurl); /*assign the value to the input*/
			tb_remove();
		};		
		return false;
	});		
});


 


// iphone switch
jQuery(document).ready(function() {
    jQuery('.color').colorPicker();
    // Switch Click
		jQuery('.Switch').click(function() {
			
			// Check If Enabled (Has 'On' Class)
			if (jQuery(this).hasClass('On')){
				
				// Try To Find Checkbox Within Parent Div, And Check It
				jQuery(this).parent().find('input:checkbox').attr('checked', true);
				
				// Change Button Style - Remove On Class, Add Off Class
				jQuery(this).removeClass('On').addClass('Off');
				
			} else { // If Button Is Disabled (Has 'Off' Class)
			
				// Try To Find Checkbox Within Parent Div, And Uncheck It
				jQuery(this).parent().find('input:checkbox').attr('checked', false);
				
				// Change Button Style - Remove Off Class, Add On Class
				jQuery(this).removeClass('Off').addClass('On');
				
			}
			
		});
		
		// Loops Through Each Toggle Switch On Page
		jQuery('.Switch').each(function() {
			
			// Search of a checkbox within the parent
			if (jQuery(this).parent().find('input:checkbox').length){
				
				// This just hides all Toggle Switch Checkboxs
				// Uncomment line below to hide all checkbox's after Toggle Switch is Found
				 //$(this).parent().find('input:checkbox').hide();
				
				// For Demo, Allow showing of checkbox's with the 'show' class
				// If checkbox doesnt have the show class then hide it
				//if (!jQuery(this).parent().find('input:checkbox').hasClass("show")){ $(this).parent().find('input:checkbox').hide(); }
				// Comment / Delete out the above line when using this on a real site
				
				// Look at the checkbox's checkked state
				if (jQuery(this).parent().find('input:checkbox').is(':checked')){

					// Checkbox is not checked, Remove the 'On' Class and Add the 'Off' Class
					jQuery(this).removeClass('On').addClass('Off');
					
				} else { 
								
					// Checkbox Is Checked Remove 'Off' Class, and Add the 'On' Class
					jQuery(this).removeClass('Off').addClass('On');
					
				}
				
			}
			
		});
		
	});
	
jQuery(document).ready(function() {
	jQuery('[data-toggle="tooltip"]').tooltip({trigger: "hover"});  
	var bg= jQuery('#predefine_bg_image').val();
		jQuery('.bg-image-selection img').click(function() {
			var imgLink= jQuery(this).attr('src');
			jQuery('.bg-image-selection img').removeClass('rmmuc_active');
			jQuery(this).addClass('rmmuc_active');
			jQuery('#predefine_bg_image').val(imgLink);
		});		
});


jQuery(document).ready(function() {
	var selectid;
	jQuery('#template_bg_select').on('change',function(){
		selectid = jQuery(this).val();
		jQuery('.template-option').removeClass('active');
		jQuery('#'+selectid).addClass('active');
	});
});

// logo option js

jQuery(document).ready(function() {
	var selectid;
	jQuery('#site_logo').on('change',function(){
		selectid = jQuery(this).val();
		jQuery('.logo-option').removeClass('active');
		jQuery('#'+selectid).addClass('active');
	});
});


// Show page to user and role option js

jQuery(document).ready(function() {
	var select_userid;
	jQuery('#show_page_as').on('change',function(){
		select_userid = jQuery(this).val();
		jQuery('.show_page-option').removeClass('active');
		jQuery('#'+select_userid).addClass('active');
	});
});

// Social option js

function addInput() 
{	
  var social_links =jQuery('#total_Social_links').val();
  social_links++;
  jQuery('#rmmuc_social_fields').append('<div class="col-md-12 form-group" id="rmmuc_social-'+social_links+'"><label>Social Icon '+social_links+'</label><br/><div class="col-md-10"><input class="form-control" type="text" name="social_icon_'+social_links+'" id="social_icon_'+social_links+'"  value="fa fa-facebook" ></div><div class="col-md-2"><label><a href="#" data-toggle="tooltip" data-placement="right" title="Enter FontAwesome Social Icon Here"><i class="fa fa-info-circle tt-icon"></i></a></label></div><div class="col-md-10"><input class="form-control" type="text" name="social_link_'+social_links+'" id="social_link_'+social_links+'"  value="#" ><input data-toggle="toggle" data-offstyle="off" type="checkbox" id="link_tab_'+social_links+'" name="link_tab_'+social_links+'" ><label><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="Link Open Into New Tab"><i class="fa fa-info-circle tt-icon"></i></a></label></div><div class="col-md-2"><label><a href="#" data-toggle="tooltip" data-placement="right" title="Enter Social Link Here"><i class="fa fa-info-circle tt-icon"></i></a></label></div></div>');
  jQuery("#remove_button").show();
  jQuery('#total_Social_links').val(social_links);
}

function remove_field()
{
	var social_data =jQuery('#total_Social_links').val();
	if(social_data){
	jQuery("#rmmuc_social-"+social_data).remove();
	if (social_data==2)
	{
		jQuery("#remove_button").hide();
	}
	social_data=social_data-1;
	jQuery('#total_Social_links').val(social_data);
	} 
}


// Subscriber Form DataTable option js

jQuery(document).ready(function() {
    jQuery('#dataTables-example').DataTable({
            responsive: true
    });    

});

 
 
jQuery(document).ready(function() {
	
	// Template Selection option js
	jQuery('.site_template').click(function() {
		var template_select;
		jQuery('.site_template').removeClass('active');
		template_select = jQuery(this).attr('id');
		jQuery(this).addClass('active');		
		jQuery('#select_template').val(template_select);		
	});
	
	// rate it option js
	
	jQuery( '.rating-stars' ).find( 'a' ).hover(
		function() {
			jQuery( this ).nextAll( 'a' ).children( 'span' ).removeClass( 'dashicons-star-filled' ).addClass( 'dashicons-star-empty' );
			jQuery( this ).prevAll( 'a' ).children( 'span' ).removeClass( 'dashicons-star-empty' ).addClass( 'dashicons-star-filled' );
			jQuery( this ).children( 'span' ).removeClass( 'dashicons-star-empty' ).addClass( 'dashicons-star-filled' );
		}, function() {
			var rating = $( 'input#rating' ).val();
			if ( rating ) {
				var list = $( '.rating-stars a' );
				list.children( 'span' ).removeClass( 'dashicons-star-filled' ).addClass( 'dashicons-star-empty' );
				list.slice( 0, rating ).children( 'span' ).removeClass( 'dashicons-star-empty' ).addClass( 'dashicons-star-filled' );
			}
		}
	);
	
	var counter_default;
	jQuery('#counter_default').on('change',function(){
		counter_default = jQuery(this).val();
		jQuery('.counter-option').removeClass('active');
		jQuery('#'+counter_default).addClass('active');
	});

	var selectuser_list;
	jQuery('#user_sets').on('change',function(){
		selectuser_list = jQuery(this).val();
		jQuery('.all_users').hide();
		jQuery('.all_users.'+selectuser_list).show();
	});
	
	jQuery('select[multiple]').multiselect({																			    
			placeholder: 'Select options'
		});
		
	var select_ip;
	jQuery('#ip_selection_mode').on('change',function(){
		select_ip = jQuery(this).val();
		jQuery('.ip_redirect-option').removeClass('active');
		jQuery('#'+select_ip).addClass('active');
	});
	
	// Custom Template layout Color option js	
	jQuery('#custom_color_enable').change(function() {
		if (this.checked) {
			jQuery('.custom_color-option').addClass('active');
		} else {
			jQuery('.custom_color-option').removeClass('active');
		}
	});

	// Social option js	
	jQuery('#social_icons_onoff').change(function() {
		if (this.checked) {
			jQuery('.social-option').addClass('active');
		} else {
			jQuery('.social-option').removeClass('active');
		}
	});
	
	// subscriber form option js
	jQuery('#subscriber_form').change(function() {
		if (this.checked) {
			jQuery('.subscriber-option').addClass('active');
		} else {
			jQuery('.subscriber-option').removeClass('active');
		}
	});	
	
	
	// subscriber form select option js	
	jQuery('#confirm_email_subscribe').change(function() {
		if (this.checked) {
			jQuery('.form_select-option').addClass('active');
		} else {
			jQuery('.form_select-option').removeClass('active');
		}
	});	
	
	// subscriber form mailer select option js	 
	var subscribe_select;
	jQuery('#subscribe_select').on('change',function(){
		subscribe_select = jQuery(this).val();
		jQuery('.subscribe-option').removeClass('active');
		jQuery('#'+subscribe_select).addClass('active');
	});
	
	// contact us option js
	jQuery('#contact_form').change(function() {
		if (this.checked) {
			jQuery('.contact-option').addClass('active');
		} else {
			jQuery('.contact-option').removeClass('active');
		}
	});
		
	// layout change option js
	var layout_switchs;
	jQuery('#layout_status').on('change',function(){
		layout_switchs = jQuery(this).val();
		jQuery('.layout-options').removeClass('active');
		jQuery('.all_content_hide').removeClass('active');
		jQuery('#'+layout_switchs).addClass('active');
		jQuery('#'+layout_switchs+'.all_content_hide').addClass('active');
	});
	
	// Button Link change option js
	jQuery('#button_onoff').change(function() {
		if (this.checked) {
			jQuery('.button_show-option').addClass('active');
		} else {
			jQuery('.button_show-option').removeClass('active');
		}
	});	
	
	// Admin Link change option js
	jQuery('#link_admin').change(function() {
		if (this.checked) {
			jQuery('.link_admin-option').addClass('active');
		} else {
			jQuery('.link_admin-option').removeClass('active');
		}
	});	

	// Search Robots option js
	jQuery('#search_robots').change(function() {
		if (this.checked) {
			jQuery('.search-option').addClass('active');
		} else {
			jQuery('.search-option').removeClass('active');
		}
	});
	
	// about us option Link change option js
	jQuery('#about_us_option').change(function() {
		if (this.checked) {
			jQuery('.about-us-option').addClass('active');
		} else {
			jQuery('.about-us-option').removeClass('active');
		}
	});

	
	jQuery('#checkall').change(function () {
        if (jQuery(this).prop('checked')) {
            jQuery(".select_subs").prop("checked", true);
        }
        else {
            jQuery(".select_subs").prop("checked", false);
        }
    });
	jQuery('a.back-top').click(function() {
		jQuery('html, body').animate({
			scrollTop: 100
		}, 700);
		return false;
	});
	
});

/* for scroll arrow */
jQuery(window).scroll(function() {
	var amountScrolled = 300;
	if ( jQuery(window).scrollTop() > amountScrolled ) {
		jQuery('a.back-top').fadeIn('slow');
	} else {
		jQuery('a.back-top').fadeOut('slow');
	}
		
});