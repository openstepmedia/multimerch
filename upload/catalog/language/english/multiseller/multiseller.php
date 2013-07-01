<?php

// **********
// * Global *
// **********
$_['ms_viewinstore'] = 'View in store';
$_['ms_publish'] = 'Publish';
$_['ms_unpublish'] = 'Unpublish';
$_['ms_edit'] = 'Edit';
$_['ms_download'] = 'Download';
$_['ms_create_product'] = 'Create product';
$_['ms_delete'] = 'Delete';
$_['ms_update'] = 'Update';

$_['ms_date_created'] = 'Date created';
$_['ms_date'] = 'Date';

$_['ms_button_submit'] = 'Submit';
$_['ms_button_add_special'] = 'Define a new special price';
$_['ms_button_add_discount'] = 'Define a new quantity discount';
$_['ms_button_generate'] = 'Generate images from PDF';
$_['ms_button_submit_request'] = 'Submit request';
$_['ms_button_save'] = 'Save';
$_['ms_button_cancel'] = 'Cancel';

$_['ms_button_select_image'] = 'Select image';
$_['ms_button_select_images'] = 'Select images';
$_['ms_button_select_files'] = 'Select files';

$_['ms_transaction_sale'] = 'Sale: %s (-%s commission)';
$_['ms_transaction_refund'] = 'Refund: %s';
$_['ms_transaction_listing'] = 'Product listing: %s (%s)';
$_['ms_transaction_signup']      = 'Signup fee at %s';
$_['ms_request_submitted'] = 'Your request is submitted';

$_['ms_totals_line'] = 'Currently %s sellers and %s products for sale!';

// Mails

// Seller
$_['ms_mail_greeting'] = "Hello %s,\n\n";
$_['ms_mail_ending'] = "\n\nRegards,\n%s";
$_['ms_mail_message'] = "\n\nMessage:\n%s";

$_['ms_mail_subject_seller_account_created'] = 'Seller account created';
$_['ms_mail_seller_account_created'] = <<<EOT
Your seller account at %s has been created!

You can now start adding your products.
EOT;

$_['ms_mail_subject_seller_account_awaiting_moderation'] = 'Seller account awaiting moderation';
$_['ms_mail_seller_account_awaiting_moderation'] = <<<EOT
Your seller account at %s has been created and is now awaiting moderation.

You will receive an email as soon as it is approved.
EOT;

$_['ms_mail_subject_product_awaiting_moderation'] = 'Product awaiting moderation';
$_['ms_mail_product_awaiting_moderation'] = <<<EOT
Your product %s at %s is awaiting moderation.

You will receive an email as soon as it is processed.
EOT;

$_['ms_mail_subject_product_purchased'] = 'New order';
$_['ms_mail_product_purchased'] = <<<EOT
Your product(s) have been purchased from %s.

Customer: %s (%s)

Products:
%s
Total: %s
EOT;

$_['ms_mail_subject_seller_contact'] = 'New customer message';
$_['ms_mail_seller_contact'] = <<<EOT
You have received a new customer message!

Name: %s

Email: %s

Product: %s

Message:
%s
EOT;

$_['ms_mail_product_purchased_info'] = <<<EOT
\n
Delivery address:

%s %s
%s
%s
%s
%s %s
%s
%s
EOT;

$_['ms_mail_subject_withdraw_request_submitted'] = 'Payout request submitted';
$_['ms_mail_withdraw_request_submitted'] = <<<EOT
We have received your payout request. You will receive your earnings as soon as it is processed.
EOT;

$_['ms_mail_subject_withdraw_request_completed'] = 'Payout completed';
$_['ms_mail_withdraw_request_completed'] = <<<EOT
Your payout request has been processed. You should now receive your earnings.
EOT;

$_['ms_mail_subject_withdraw_request_declined'] = 'Payout request declined';
$_['ms_mail_withdraw_request_declined'] = <<<EOT
Your payout request has been declined. Your funds have been returned to your balance at %s.
EOT;

$_['ms_mail_subject_transaction_performed'] = 'New transaction';
$_['ms_mail_transaction_performed'] = <<<EOT
New transaction has been added to your account at %s.
EOT;

// *********
// * Admin *
// *********
$_['ms_mail_admin_subject_seller_account_created'] = 'New seller account created';
$_['ms_mail_admin_seller_account_created'] = <<<EOT
New seller account at %s has been created!
EOT;

$_['ms_mail_admin_subject_seller_account_awaiting_moderation'] = 'New seller account awaiting moderation';
$_['ms_mail_admin_seller_account_awaiting_moderation'] = <<<EOT
New seller account at %s has been created and is now awaiting moderation.

You can process it in the Multiseller - Sellers section in back office.
EOT;

$_['ms_mail_admin_subject_product_created'] = 'New product added';
$_['ms_mail_admin_product_created'] = <<<EOT
New product %s has been added to %s.

You can view or edit it in back office.
EOT;

$_['ms_mail_admin_subject_new_product_awaiting_moderation'] = 'New product awaiting moderation';
$_['ms_mail_admin_new_product_awaiting_moderation'] = <<<EOT
New product %s has been added to %s and is awaiting moderation.

You can process it in the Multiseller - Products section in back office.
EOT;

$_['ms_mail_admin_subject_edit_product_awaiting_moderation'] = 'Product edited and awaiting moderation';
$_['ms_mail_admin_edit_product_awaiting_moderation'] = <<<EOT
Product %s at %s has been edited and is awaiting moderation.

You can process it in the Multiseller - Products section in back office.
EOT;

$_['ms_mail_admin_subject_withdraw_request_submitted'] = 'Payout request awaiting moderation';
$_['ms_mail_admin_withdraw_request_submitted'] = <<<EOT
New payout request has been submitted.

You can process it in the Multiseller - Finances section in back office.
EOT;

// Success
$_['ms_success_product_published'] = 'Product published';
$_['ms_success_product_unpublished'] = 'Product unpublished';
$_['ms_success_product_created'] = 'Product created';
$_['ms_success_product_updated'] = 'Product updated';
$_['ms_success_product_deleted'] = 'Product deleted';

// Errors
$_['ms_error_sellerinfo_nickname_empty'] = 'Nickname cannot be empty';
$_['ms_error_sellerinfo_nickname_alphanumeric'] = 'Nickname can only contain alphanumeric symbols';
$_['ms_error_sellerinfo_nickname_utf8'] = 'Nickname can only contain printable UTF-8 symbols';
$_['ms_error_sellerinfo_nickname_latin'] = 'Nickname can only contain alphanumeric symbols and diacritics';
$_['ms_error_sellerinfo_nickname_length'] = 'Nickname should be between 4 and 50 characters';
$_['ms_error_sellerinfo_nickname_taken'] = 'This nickname is already taken';
$_['ms_error_sellerinfo_company_length'] = 'Company name cannot be longer than 50 characters';
$_['ms_error_sellerinfo_description_length'] = 'Description cannot be longer than 1000 characters';
$_['ms_error_sellerinfo_paypal'] = 'Invalid PayPal address';
$_['ms_error_sellerinfo_terms'] = 'Warning: You must agree to the %s!';
$_['ms_error_file_extension'] = 'Invalid extension';
$_['ms_error_file_type'] = 'Invalid file type';
$_['ms_error_file_size'] = 'File too big';
$_['ms_error_file_upload_error'] = 'File upload error';
$_['ms_error_form_submit_error'] = 'Error occured when submitting the form. Please contact the store owner for more information.';
$_['ms_error_form_notice'] = 'Please check all form tabs for errors.';
$_['ms_error_product_name_empty'] = 'Product name cannot be empty';
$_['ms_error_product_name_length'] = 'Product name should be between %s and %s characters';
$_['ms_error_product_description_empty'] = 'Product description cannot be empty';
$_['ms_error_product_description_length'] = 'Product description should be between %s and %s characters';
$_['ms_error_product_tags_length'] = 'Line too long';
$_['ms_error_product_price_empty'] = 'Please specify a price for your product';
$_['ms_error_product_price_invalid'] = 'Invalid price';
$_['ms_error_product_price_low'] = 'Price too low';
$_['ms_error_product_category_empty'] = 'Please select a category';
$_['ms_error_product_image_count'] = 'Please upload at least %s image(s) for your product';
$_['ms_error_product_download_count'] = 'Please submit at least %s download(s) for your product';
$_['ms_error_product_image_maximum'] = 'No more than %s image(s) allowed';
$_['ms_error_product_download_maximum'] = 'No more than %s download(s) allowed';
$_['ms_error_product_message_length'] = 'Message cannot be longer than 1000 characters';
$_['ms_error_product_invalid_pdf_range'] = 'Please specify comma delimited (,) pages or page ranges using hyphens (-)';
$_['ms_error_product_attribute_required'] = 'This attribute is required';
$_['ms_error_product_attribute_long'] = 'This value can not be longer than %s symbols';
$_['ms_error_withdraw_amount'] = 'Invalid amount';
$_['ms_error_withdraw_balance'] = 'Not enough funds on your balance';
$_['ms_error_withdraw_minimum'] = 'Cannot withdraw less than minimum limit';
$_['ms_error_contact_email'] = 'Please specify a valid email address';
$_['ms_error_contact_captcha'] = 'Invalid captcha code';
$_['ms_error_contact_text'] = 'Message cannot be longer than 2000 characters';
$_['ms_error_contact_allfields'] = 'Please fill in all fields';

// Account - General
$_['ms_account_dashboard'] = 'Dashboard';
$_['ms_account_seller_account'] = 'Seller Account';
$_['ms_account_sellerinfo'] = 'Seller profile';
$_['ms_account_sellerinfo_new'] = 'New seller account';
$_['ms_account_newproduct'] = 'New product';
$_['ms_account_products'] = 'Products';
$_['ms_account_transactions'] = 'Transactions';
$_['ms_account_orders'] = 'Orders';
$_['ms_account_withdraw'] = 'Request payout';
$_['ms_account_badges'] = 'Badges';
$_['ms_account_badges_nobadges'] = 'No badges yet';

// Account - New product
$_['ms_account_newproduct_heading'] = 'New Product';
$_['ms_account_newproduct_breadcrumbs'] = 'New Product';
$_['ms_account_product_tab_general'] = 'General';
$_['ms_account_product_tab_specials'] = 'Special prices';
$_['ms_account_product_tab_discounts'] = 'Quantity discounts';
$_['ms_account_product_name_description'] = 'Name & Description';
$_['ms_account_product_name'] = 'Name';
$_['ms_account_product_name_note'] = 'Specify a name for your product';
$_['ms_account_product_description'] = 'Description';
$_['ms_account_product_description_note'] = 'Describe your product';
$_['ms_account_product_tags'] = 'Tags';
$_['ms_account_product_tags_note'] = 'Specify tags for your product.';
$_['ms_account_product_price_attributes'] = 'Price & Attributes';
$_['ms_account_product_price'] = 'Price';
$_['ms_account_product_price_note'] = 'Choose a price for your product';
$_['ms_account_product_listing_flat'] = 'Listing fee for this product is <span>%s</span>';
$_['ms_account_product_listing_percent'] = 'Listing fee for this product is based on the product price. Current listing fee: <span>%s</span>.';
$_['ms_account_product_listing_balance'] = 'This amount will be deducted from your seller balance.';
$_['ms_account_product_listing_paypal'] = 'You will be redirected to the PayPal payment page after product submission.';
$_['ms_account_product_listing_itemname'] = 'Product listing fee at %s';
$_['ms_account_product_category'] = 'Category';
$_['ms_account_product_category_note'] = 'Select category for your product';
$_['ms_account_product_enable_shipping'] = 'Enable shipping';
$_['ms_account_product_enable_shipping_note'] = 'Specify whether your product requires shipping';
$_['ms_account_product_quantity'] = 'Quantity';
$_['ms_account_product_quantity_note']    = 'Specify the quantity of your product';
$_['ms_account_product_files'] = 'Files';
$_['ms_account_product_download'] = 'Downloads';
$_['ms_account_product_download_note'] = 'Upload files for your product. Allowed extensions: %s';
$_['ms_account_product_push'] = 'Push updates to previous customers';
$_['ms_account_product_push_note'] = 'Newly added and updated downloads will be made available to previous customers';
$_['ms_account_product_image'] = 'Images';
$_['ms_account_product_image_note'] = 'Select images for your product. First image will be used as a thumbnail. You can change the order of the images by dragging them. Allowed extensions: %s';
$_['ms_account_product_message_reviewer'] = 'Message to the reviewer';
$_['ms_account_product_message'] = 'Message';
$_['ms_account_product_message_note'] = 'Your message to the reviewer';
$_['ms_account_product_priority'] = 'Priority';
$_['ms_account_product_date_start'] = 'Start date';
$_['ms_account_product_date_end'] = 'End date';
$_['ms_account_product_sandbox'] = 'Warning: The payment gateway is in \'Sandbox Mode\'. Your account will not be charged.';

// Account - Edit product
$_['ms_account_editproduct_heading'] = 'Edit Product';
$_['ms_account_editproduct_breadcrumbs'] = 'Edit Product';

// Account - Seller
$_['ms_account_sellerinfo_heading'] = 'Seller Profile';
$_['ms_account_sellerinfo_breadcrumbs'] = 'Seller Profile';
$_['ms_account_sellerinfo_nickname'] = 'Nickname';
$_['ms_account_sellerinfo_nickname_note'] = 'Specify your seller nickname.';
$_['ms_account_sellerinfo_description'] = 'Description';
$_['ms_account_sellerinfo_description_note'] = 'Describe yourself';
$_['ms_account_sellerinfo_company'] = 'Company';
$_['ms_account_sellerinfo_company_note'] = 'Your company (optional)';
$_['ms_account_sellerinfo_country'] = 'Country';
$_['ms_account_sellerinfo_country_dont_display'] = 'Do not display my country';
$_['ms_account_sellerinfo_country_note'] = 'Select your country.';
$_['ms_account_sellerinfo_avatar'] = 'Avatar';
$_['ms_account_sellerinfo_avatar_note'] = 'Select your avatar';
$_['ms_account_sellerinfo_paypal'] = 'Paypal';
$_['ms_account_sellerinfo_paypal_note'] = 'Specify your PayPal address';
$_['ms_account_sellerinfo_reviewer_message'] = 'Message to the reviewer';
$_['ms_account_sellerinfo_reviewer_message_note'] = 'Your message to the reviewer';
$_['ms_account_sellerinfo_terms'] = 'Accept terms';
$_['ms_account_sellerinfo_terms_note'] = 'I have read and agree to the <a class="colorbox" href="%s" alt="%s"><b>%s</b></a>';
$_['ms_account_sellerinfo_fee_flat'] = 'There is a signup fee of <span>%s</span> to become a seller at %s.';
$_['ms_account_sellerinfo_fee_balance'] = 'This amount will be deducted from your initial balance.';
$_['ms_account_sellerinfo_fee_paypal'] = 'You will be redirected to the PayPal payment page after form submission.';
$_['ms_account_sellerinfo_signup_itemname'] = 'Seller account registration at %s';
$_['ms_account_sellerinfo_saved'] = 'Seller account data saved.';

$_['ms_account_status'] = 'Your seller account status is: ';
$_['ms_account_status_tobeapproved'] = '<br />You will be able to use your account as soon as it is approved by the store owner.';
$_['ms_account_status_please_fill_in'] = 'Please complete the following form to create a seller account.';

$_['ms_seller_status_' . MsSeller::STATUS_ACTIVE] = 'Active';
$_['ms_seller_status_' . MsSeller::STATUS_INACTIVE] = 'Inactive';
$_['ms_seller_status_' . MsSeller::STATUS_DISABLED] = 'Disabled';
$_['ms_seller_status_' . MsSeller::STATUS_DELETED] = 'Deleted';
$_['ms_seller_status_' . MsSeller::STATUS_UNPAID] = 'Unpaid signup fee';

// Account - Products
$_['ms_account_products_heading'] = 'Your Products';
$_['ms_account_products_breadcrumbs'] = 'Your Products';
$_['ms_account_products_product'] = 'Product';
$_['ms_account_products_sales'] = 'Sales';
$_['ms_account_products_earnings'] = 'Earnings';
$_['ms_account_products_status'] = 'Status';
$_['ms_account_products_date'] = 'Date added';
$_['ms_account_products_action'] = 'Action';
$_['ms_account_products_noproducts'] = 'You don\'t have any products yet!';
$_['ms_account_products_confirmdelete'] = 'Are you sure you want to delete your product?';

$_['ms_product_status_' . MsProduct::STATUS_ACTIVE] = 'Active';
$_['ms_product_status_' . MsProduct::STATUS_INACTIVE] = 'Inactive';
$_['ms_product_status_' . MsProduct::STATUS_DISABLED] = 'Disabled';
$_['ms_product_status_' . MsProduct::STATUS_DELETED] = 'Deleted';
$_['ms_product_status_' . MsProduct::STATUS_UNPAID] = 'Unpaid listing fee';

// Account - Transactions
$_['ms_account_transactions_heading'] = 'Your Transactions';
$_['ms_account_transactions_breadcrumbs'] = 'Your Transactions';
$_['ms_account_transactions_balance'] = 'Your current balance:';
$_['ms_account_transactions_earnings'] = 'Your earnings to date:';
$_['ms_account_transactions_description'] = 'Description';
$_['ms_account_transactions_amount'] = 'Amount';
$_['ms_account_transactions_notransactions'] = 'You don\'t have any transactions yet!';

// Account - Orders
$_['ms_account_orders_heading'] = 'Your Orders';
$_['ms_account_orders_breadcrumbs'] = 'Your Orders';
$_['ms_account_orders_id'] = 'Order #';
$_['ms_account_orders_customer'] = 'Customer';
$_['ms_account_orders_products'] = 'Products';
$_['ms_account_orders_total'] = 'Total amount';
$_['ms_account_orders_noorders'] = 'You don\'t have any orders yet!';

// Account - Dashboard
$_['ms_account_dashboard_heading'] = 'Seller Dashboard';
$_['ms_account_dashboard_breadcrumbs'] = 'Seller Dashboard';
$_['ms_account_dashboard_orders'] = 'Last orders';
$_['ms_account_dashboard_comments'] = 'Last comments';
$_['ms_account_dashboard_overview'] = 'Overview';
$_['ms_account_dashboard_seller_group'] = 'Seller group';
$_['ms_account_dashboard_listing'] = 'Listing fee';
$_['ms_account_dashboard_sale'] = 'Sale fee';
$_['ms_account_dashboard_stats'] = 'Stats';
$_['ms_account_dashboard_balance'] = 'Current balance';
$_['ms_account_dashboard_total_sales'] = 'Total sales';
$_['ms_account_dashboard_total_earnings'] = 'Total earnings';
$_['ms_account_dashboard_sales_month'] = 'Sales this month';
$_['ms_account_dashboard_earnings_month'] = 'Earnings this month';
$_['ms_account_dashboard_nav'] = 'Quick navigation';
$_['ms_account_dashboard_nav_profile'] = 'Modify your seller profile';
$_['ms_account_dashboard_nav_product'] = 'Create a new product';
$_['ms_account_dashboard_nav_products'] = 'Manage your products';
$_['ms_account_dashboard_nav_orders'] = 'View your orders';
$_['ms_account_dashboard_nav_balance'] = 'View your balance records';
$_['ms_account_dashboard_nav_payout'] = 'Request your payout';

// Account - Comments
$_['ms_account_comments_name'] = 'Name';
$_['ms_account_comments_product'] = 'Product';
$_['ms_account_comments_comment'] = 'Comment';
$_['ms_account_comments_nocomments'] = 'You don\'t have any comments yet!';

// Account - Request withdrawal
$_['ms_account_withdraw_heading'] = 'Request Payout';
$_['ms_account_withdraw_breadcrumbs'] = 'Request Payout';
$_['ms_account_withdraw_balance'] = 'Your current balance:';
$_['ms_account_withdraw_balance_available'] = 'Available for withdrawal:';
$_['ms_account_withdraw_minimum'] = 'Minimum payout amount:';
$_['ms_account_balance_reserved_formatted'] = '-%s pending withdrawal';
$_['ms_account_balance_waiting_formatted'] = '-%s waiting period';
$_['ms_account_withdraw_description'] = 'Payout request via %s (%s) on %s';
$_['ms_account_withdraw_amount'] = 'Amount:';
$_['ms_account_withdraw_amount_note'] = 'Please specify the payout amount';
$_['ms_account_withdraw_method'] = 'Payment method:';
$_['ms_account_withdraw_method_note'] = 'Please select the payout method';
$_['ms_account_withdraw_method_paypal'] = 'PayPal';
$_['ms_account_withdraw_all'] = 'All earnings currently available';
$_['ms_account_withdraw_minimum_not_reached'] = 'Your total balance is less than the minimum payout amount!';
$_['ms_account_withdraw_no_funds'] = 'No funds to withdraw.';
$_['ms_account_withdraw_no_paypal'] = 'Please <a href="index.php?route=seller/account-profile">specify your PayPal address</a> first!';

// Product page - Seller information
$_['ms_catalog_product_sellerinfo'] = 'Seller information';
$_['ms_catalog_product_contact'] = 'Contact this seller';

// Product page - Comments
$_['ms_comments_post_comment'] = 'Post Comment';
$_['ms_comments_name'] = 'Name';
$_['ms_comments_note'] = '<span style="color: #FF0000;">Note:</span> HTML is not translated!';
$_['ms_comments_email'] = 'E-mail';
$_['ms_comments_comment'] = 'Comment';
$_['ms_comments_wait'] = 'Please Wait!';
$_['ms_comments_login_register'] = 'Please <a href="%s">login</a> or <a href="%s">register</a> to post a comment.';
$_['ms_comments_error_name'] = 'Please enter a name between %s and %s characters long';
$_['ms_comments_error_email'] = 'Please enter a valid email';
$_['ms_comments_error_comment_short'] = 'The comment body must be at least %s characters long';
$_['ms_comments_error_comment_long'] = 'The comment body cannot be longer than %s characters';
$_['ms_comments_error_captcha'] = 'Verification code does not match the image';
$_['ms_comments_success'] = 'Thank you for your comment.';
$_['ms_comments_captcha'] = 'Enter the code in the box below:';
$_['ms_comments_no_comments_yet'] = 'No comments added yet';
$_['ms_comments_tab_comments'] = 'Comments (%s)';
$_['ms_footer'] = '<br>MultiMerch Digital Marketplace by <a href="http://ffct.cc/">ffct.cc</a>';

// Catalog - Sellers list
$_['ms_catalog_sellers_heading'] = 'Sellers';
$_['ms_catalog_sellers_country'] = 'Country:';
$_['ms_catalog_sellers_website'] = 'Website:';
$_['ms_catalog_sellers_company'] = 'Company:';
$_['ms_catalog_sellers_totalsales'] = 'Sales:';
$_['ms_catalog_sellers_totalproducts'] = 'Products:';
$_['ms_sort_country_desc'] = 'Country (Z - A)';
$_['ms_sort_country_asc'] = 'Country (A - Z)';
$_['ms_sort_nickname_desc'] = 'Name (Z - A)';
$_['ms_sort_nickname_asc'] = 'Name (A - Z)';

// Catalog - Seller profile page
$_['ms_catalog_sellers'] = 'Sellers';
$_['ms_catalog_sellers_empty'] = 'There are no sellers yet.';
$_['ms_catalog_seller_profile_heading'] = '%s\'s profile';
$_['ms_catalog_seller_profile_breadcrumbs'] = '%s\'s profile';
$_['ms_catalog_seller_profile_products'] = 'Some of seller\'s products';
$_['ms_catalog_seller_profile_country'] = 'Country:';
$_['ms_catalog_seller_profile_website'] = 'Website:';
$_['ms_catalog_seller_profile_company'] = 'Company:';
$_['ms_catalog_seller_profile_totalsales'] = 'Total sales:';
$_['ms_catalog_seller_profile_totalproducts'] = 'Total products:';
$_['ms_catalog_seller_profile_view'] = 'View all %s\'s products';

// Catalog - Seller's products list
$_['ms_catalog_seller_products_heading'] = '%s\'s products';
$_['ms_catalog_seller_products_breadcrumbs'] = '%s\'s products';
$_['ms_catalog_seller_products_empty'] = 'This seller doesn\'t have any products yet!';

// Catalog - Carousel
$_['ms_carousel_sellers'] = 'Our sellers';
$_['ms_carousel_view'] = 'View all sellers';

// Catalog - Top sellers
$_['ms_topsellers_sellers'] = 'Top sellers';
$_['ms_topsellers_view'] = 'View all sellers';

// Catalog - New sellers
$_['ms_newsellers_sellers'] = 'New sellers';
$_['ms_newsellers_view'] = 'View all sellers';

// Catalog - Seller dropdown
$_['ms_sellerdropdown_sellers'] = 'Our sellers';
$_['ms_sellerdropdown_select'] = '-- Select a seller --';

// Catalog - Seller contact dialog
$_['ms_sellercontact_title'] = 'Contact seller';
$_['ms_sellercontact_name'] = 'Your name';
$_['ms_sellercontact_email'] = 'Your email';
$_['ms_sellercontact_text'] = 'Your message';
$_['ms_sellercontact_captcha'] = 'Captcha';
$_['ms_sellercontact_sendmessage'] = 'Send a message to %s';
$_['ms_sellercontact_success'] = 'Your message has been successfully sent';

// Account - PDF generator dialog
$_['ms_pdfgen_title'] = 'Generate images from PDF';
$_['ms_pdfgen_pages'] = 'Pages';
$_['ms_pdfgen_note'] = 'Select pages to generate images from. New images will be appended to the list of images on the product page.';
$_['ms_pdfgen_file'] = 'File';
?>
