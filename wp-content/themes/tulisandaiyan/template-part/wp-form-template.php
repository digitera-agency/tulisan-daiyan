<?php 
if ( class_exists( 'WPForms_Template', false ) ) :
/**
 * Waitlist
 * Template for WPForms.
 */
class WPForms_Template_waitlist extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Waitlist';

		// Template slug
		$this->slug = 'waitlist';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'fields' => array (
		1 => array (
			'id' => '1',
			'type' => 'email',
			'label' => 'Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Your email address',
			'default_value' => false,
			'css' => 'min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6',
			'label_hide' => '1',
			'sublabel_hide' => '1',
		),
	),
	'field_id' => 6,
	'settings' => array (
		'form_title' => 'Waitlist',
		'submit_text' => 'Join Waitlist',
		'form_class' => 'inline-fields',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => '{admin_email}',
				'subject' => 'New Entry: Blank Form',
				'sender_name' => 'Tulisan by Daiyan',
				'sender_address' => '{admin_email}',
				'message' => '{all_fields}',
				'file_upload_attachment_fields' => array (
				),
				'entry_csv_attachment_entry_information' => array (
				),
				'entry_csv_attachment_file_name' => 'entry-details',
			),
		),
		'confirmations' => array (
			1 => array (
				'name' => 'Default Confirmation',
				'type' => 'message',
				'message' => '<p>Thanks for contacting us! We will be in touch with you shortly.</p>',
				'message_scroll' => '1',
				'page' => '2',
				'message_entry_preview_style' => 'basic',
			),
		),
		'antispam' => '1',
		'anti_spam' => array (
			'time_limit' => array (
				'duration' => '3',
			),
			'country_filter' => array (
				'action' => 'allow',
				'country_codes' => array (
				),
				'message' => 'Sorry, this form does not accept submissions from your country.',
			),
			'keyword_filter' => array (
				'message' => 'Sorry, your message can\'t be submitted because it contains prohibited words.',
			),
		),
		'form_tags' => array (
		),
	),
	'meta' => array (
		'template' => 'waitlist',
	),
);
	}
}
new WPForms_Template_waitlist();
endif;

?>