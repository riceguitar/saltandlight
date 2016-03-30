
								<div class="panel panel-default pastor-mail-panel">
									<div class="panel-body">
									<div class="text-center">
										<img src="<?php echo get_template_directory_uri() . '/img/plane.png'; ?>" class="plane" />
									</div>
									<form id="invite-pastor" method="post">

										<div class="form-field form-field-border">
											<label>To:</label>
											<input type="text" name="field-to" value="YourPastor@Church.com" />
										</div>
										<div class="form-field form-field-border">
											<label>Subject:</label>
											<input type="text" name="field-subject" value="A Great Resource for Our Church" />
										</div>

										<div class="form-field">
											<textarea name="field-message" rows="20">Dear (insert pastor’s name),

I want to share an opportunity with you that I am very excited about and think could be beneficial for our church.
 
EQUIP and John Maxwell have developed a strategy called Salt and Light for the purpose of adding value to people, transforming communities, and reaching people for Christ. I have looked over the content and I think these resources can really help us engage with people in our community that may never come to church. Also, these resources are totally FREE for churches!
 
The vision behind it all is for local churches to mobilize their lay leaders to become transformational leaders in the community by engaging with unsaved people in their own spheres of influence, adding value to them by facilitating roundtables with them, and seeking opportunities to share their faith.
 
Check out www.iequip.church to learn more and sample some of the content.
 
I’d love to talk more about our church getting involved if you are interested!

Thank you for your time,
(insert your name)</textarea>
										</div>

										<div class="text-center">
										<input type="submit" id="generate-email" onClick="_gaq.push(['_trackEvent', 'Page events', 'Click', 'Generate Email to Pastor']);"/>
										</div>
									</form>
									</div>
								</div>

<script>
	jQuery(function() {

	jQuery('#generate-email').click(function() {
	    Message = "mailto:" + jQuery('input[name=field-to]').val();
	    Message += "?subject=" + jQuery('input[name=field-subject]').val();
	    Message += "&body=" + encodeURIComponent(jQuery('textarea[name=field-message]').val());
	    console.log(Message);
	    location.href = Message;
		//window.open(Message);
	    return false;
	});

	});
</script>