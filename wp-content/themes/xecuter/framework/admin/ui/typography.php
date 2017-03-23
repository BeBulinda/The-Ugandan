<?php
$of_options[] = array( 	"name" 		=> esc_html__('Typography' , 'xecuter'),
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES."typography.png",
				); 
				
// Google Fonts
$of_options[] = array( 	"name" 		=> esc_html__('Google Fonts' , 'xecuter'),
 						"type" => "title"
				);
					
$of_options[] = array( 	"name" 		=> esc_html__('Exmple Google Font' , 'xecuter'),
						"desc" 		=> esc_html__('Some description font' , 'xecuter'),
						"id" 		=> "g_select",
						"desc" 		=> esc_html__('Select a font' , 'xecuter'),
						"type" 		=> "select_google_font",
						"preview" 	=> array(	"text" => esc_html__('This is my preview text!' , 'xecuter'),
												"size" => "30px"
									),
						"options" 	=> $google_fonts,
 				);	
							
$of_options[] = array( 	"name" 		=> esc_html__('Font Family Body' , 'xecuter'),
						"id"     	=> "xecuter_body_google_font_family",
 						"type" 		=> "select",
						"options" 	=> $google_fonts,
 				);	
										
$of_options[] = array( 	"name" 		=> esc_html__('Font Family Logo' , 'xecuter'),
						"id"     	=> "xecuter_logo_google_font_family",
 						"type" 		=> "select",
						"options" 	=> $google_fonts,
 				);	

 
				
// Standard Fonts
$of_options[] = array( 	"name" 		=> esc_html__('Standard Fonts' , 'xecuter'),
 						"type" 		=> "title"
				);
					
$of_options[] = array( 	"name" 		=> esc_html__('Exmple Standard Font' , 'xecuter'),
						"desc" 		=> esc_html__('Some description font' , 'xecuter'),
						"id" 		=> "s_select",
						"std" 		=> "",
						"type" 		=> "select_google_font",
						"preview" 	=> array(
										"text" => esc_html__('This is my preview text!' , 'xecuter'), 
										"size" => "30px" 
						),
						"options" 	=> $standard_fonts,
						 
				);	
									
$of_options[] = array( 	"name" 		=> esc_html__('Font Family Body' , 'xecuter'),
						"id"     	=> "xecuter_body_font_family",
 						"type" 		=> "select",
						"options" 	=> $standard_fonts,
 				);	
									
$of_options[] = array( 	"name" 		=> esc_html__('Font Family Logo' , 'xecuter'),
						"id"     	=> "xecuter_logo_font_family",
 						"type" 		=> "select",
						"options" 	=> $standard_fonts,
 				);	 
 
					 
// Font Size
$of_options[] = array( 	"name" 		=> esc_html__('Font Size' , 'xecuter'),
						"type" 		=> "title"
					);
 
 					
$of_options[] = array( 	"name" 		=> esc_html__('Font Size in Main Head' , 'xecuter'),
						"desc" 		=> esc_html__('In pixels' , 'xecuter'),
						"id" 		=> "xecuter_masthead_font_size",
						"type" 		=> "select",
						"options" 	=> $of_options_font_size,
				);
				
 $of_options[] = array( "name" 		=> esc_html__('Font Size in Top Header' , 'xecuter'),
						"desc" 		=> esc_html__('In pixels' , 'xecuter'),
						"id" 		=> "xecuter_navplus_font_size",
						"type" 		=> "select",
						"options" 	=> $of_options_font_size,
				);
				
$of_options[] = array( 	"name" 		=> esc_html__('Font Size Breadcrumbs' , 'xecuter'),
						"desc" 		=> esc_html__('In pixels' , 'xecuter'),
						"id" 		=> "xecuter_breadcrumbs_font_size",
						"type" 		=> "select",
						"options" 	=> $of_options_font_size,
				);
				
$of_options[] = array( 	"name" 		=> esc_html__('Font Size Title Box' , 'xecuter'),
						"desc" 		=> esc_html__('In pixels' , 'xecuter'),
						"id" 		=> "xecuter_title_font_size",
						"type" 		=> "select",
						"options" 	=> $of_options_font_size,
 						 
				);	 
				
 
$of_options[] = array( 	"name" 		=> esc_html__('Font Size Article Text' , 'xecuter'),
						"desc" 		=> esc_html__('In pixels' , 'xecuter'),
						"id" 		=> "xecuter_font_size_article",
						"type" 		=> "select",
						"options" 	=> $of_options_font_size,
				);								 							
 
 // Font Line Heights

$of_options[] = array( 	"name" 		=> esc_html__('Font Line Heights' , 'xecuter'),
						"type" 		=> "title"
				); 
$of_options[] = array( 	"name" 		=> esc_html__('Line Height Article Text' , 'xecuter'),
						"desc" 		=> esc_html__('In pixels' , 'xecuter'),
						"id" 		=> "xecuter_article_line_height",
						"options" 	=> $of_options_line_hieght,
						"type" 		=> "select" 
				);	 
		
?>