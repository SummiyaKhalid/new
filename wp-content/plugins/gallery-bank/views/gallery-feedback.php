<?php
if(!defined("ABSPATH")) exit; //exit if accessed directly
switch($gb_role)
{
	case "administrator":
		$user_role_permission = "manage_options";
	break;
	case "editor":
		$user_role_permission = "publish_pages";
	break;
	case "author":
		$user_role_permission = "publish_posts";
	break;
}
if (!current_user_can($user_role_permission))
{
	return;
}
else
{
	?>
	<div class="custom-message green" style="display: block;margin-top:30px">
		<div style="padding: 4px 0;">
			<p style="font:12px/1.0em Arial !important;font-weight:bold;">If you have any Feature Request which you would like to have in your plugin, please fill in the below form. We assure you that soon this will be taken care off!</p>
		</div>
	</div>
	<form id="frm_feedback" class="layout-form">
		<div id="poststuff" style="width: 99% !important;">
			<div id="post-body" class="metabox-holder">
				<div id="postbox-container-2" class="postbox-container">
					<div id="advanced" class="meta-box-sortables">
						<div id="gallery_bank_get_started" class="postbox" >
							<div class="handlediv" data-target="#ux_edit_album" title="Click to toggle" data-toggle="collapse"><br></div>
							<h3 class="hndle"><span><?php _e("Feature Requests", gallery_bank); ?></span></h3>
							<div class="inside">
								<div id="ux_feedback" class="gallery_bank_layout">
									<a class="btn btn-inverse" href="admin.php?page=gallery_bank"><?php _e("Back to Albums", gallery_bank); ?></a>
									<div class="separator-doubled"></div>
									<div id="email_success_message" class="custom-message green" style="display: none;">
										<span>
											<strong><?php _e("Email has been sent successfully.", gallery_bank); ?></strong>
										</span>
									</div>
									<div class="fluid-layout">
										<div class="layout-span12">
											<div class="widget-layout">
												<div class="widget-layout-title">
													<h4><?php _e("Feature Requests / Suggestions", gallery_bank); ?></h4>
												</div>
												<div class="widget-layout-body">
													<div class="layout-control-group">
														<label class="layout-control-label"><?php _e("Name", gallery_bank); ?> : <span class="error">*</span></label>
														<div class="layout-controls">
															<input type="text" class="layout-span12" name="ux_name" id="ux_name" placeholder="<?php _e("Enter your Name", gallery_bank); ?>"/>
														</div>
													</div>
													<div class="layout-control-group">
														<label class="layout-control-label"><?php _e("Email Id", gallery_bank); ?> : <span class="error">*</span></label>
														<div class="layout-controls">
															<input type="text" class="layout-span12" name="ux_email" id="ux_email" placeholder="<?php _e("Enter your Email Address", gallery_bank); ?>"/>
														</div>
													</div>
													<div class="layout-control-group">
														<label class="layout-control-label"><?php _e("Feature Requests / Suggestions", gallery_bank); ?> : <span class="error">*</span></label>
														<div class="layout-controls">
															<textarea rows="5" class="layout-span12" name="ux_suggestion" id="ux_suggestion" placeholder="<?php _e("Enter your Feature Requests / Suggestions", gallery_bank); ?>"></textarea>
														</div>
													</div>
													<div class="layout-control-group">
														<div class="layout-controls">
															<button type="submit" class="btn btn-danger"><?php _e("Send", gallery_bank); ?></button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<script type="text/javascript">
		var url = "http://tech-banker.com/feedbacks.php";
		var suggestion_array = [];
		jQuery("#frm_feedback").validate
		({
			rules:
			{
				ux_name :
				{
					required: true
				},
				ux_email:
				{
					required: true,
					email: true
				},
				ux_suggestion:
				{
					required: true
				}
			},
			submitHandler: function()
			{
				suggestion_array.push(jQuery("#ux_name").val());
				suggestion_array.push(jQuery("#ux_email").val());
				suggestion_array.push(jQuery("#ux_suggestion").val());
				jQuery.post(url,
				{
					data : JSON.stringify(suggestion_array),
					param: "gallery_feedbacks",
					action: "feedbacks"
				},
				function (data)
				{
					jQuery("#email_success_message").css("display", "block");
					setTimeout(function () {
						jQuery("#email_success_message").css("display", "none");
						window.location.href = "admin.php?page=gallery_bank_feature_request";
					}, 2000);
				});
			}
		});
	</script>
	<?php
}
?>
