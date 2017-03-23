<?php 
 
/********************************************************************
Post Cotent Featured 1
*********************************************************************/
function xecuter_content_featured_1() {  
	$count=0;
	$query = xecuter_query();
	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		if($count<=2){
			echo'<article class="rd-post-item rd-col-1-2">';
				xecuter_post_module_3('rd-post-1-2','xecuter_big',xecuter_data('excerpt'),xecuter_data('meta_category'));
			echo'</article>';
		}else{
			echo'<article class="rd-post-item rd-col-1-4">';
				xecuter_post_module_3('rd-post-1-4','xecuter_large',false,xecuter_data('meta_category'));
			echo'</article>';
		}
 	endwhile; 
	endif;  
}
/********************************************************************
Post Cotent Featured 2
*********************************************************************/
function xecuter_content_featured_2() {  
 	$count=0;
  	$query = xecuter_query();
	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
	if($count==1){
		echo'<article class="rd-post-item rd-col-1-2">';
			xecuter_post_module_3('rd-post-1-2','xecuter_big',xecuter_data('excerpt'),xecuter_data('meta_category'));
		echo'</article>';
	}else{
		echo'<article class="rd-post-item rd-col-1-4">';
			xecuter_post_module_3('rd-post-1-4','xecuter_large',false,xecuter_data('meta_category'));
		echo'</article>';
	}
	endwhile; 
	endif;   
}
/********************************************************************
Post Cotent Featured 3
*********************************************************************/
function xecuter_content_featured_3() {  
 	$count=0;
  	$query = xecuter_query();
	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		if($count==1){
			echo'<article class="rd-post-item rd-col-2-3">';
				xecuter_post_module_3('rd-post-2-3','xecuter_big',xecuter_data('excerpt'),xecuter_data('meta_category'));
			echo'</article>';
		}else{
			echo'<article class="rd-post-item rd-col-1-3">';
				xecuter_post_module_3('rd-post-1-3','xecuter_large',false,xecuter_data('meta_category'));
			echo'</article>';
		}
	endwhile; 
	endif;  
}
/********************************************************************
Post Cotent Featured 4
*********************************************************************/
function xecuter_content_featured_4() {  
 	$count=0;
  	$query = xecuter_query();
	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
   		if($count<=3){
			echo'<article class="rd-post-item rd-col-1-3">';
				xecuter_post_module_3('rd-post-1-3','xecuter_large',false,xecuter_data('meta_category'));
			echo'</article>';
		}else{
			echo'<article class="rd-post-item rd-col-1-4">';
				xecuter_post_module_3('rd-post-1-4','xecuter_large',false,xecuter_data('meta_category'));
			echo'</article>';
		}
	endwhile; 
	endif;  
}
/********************************************************************
Post Cotent Grid 1
*********************************************************************/
function xecuter_content_grid_1() {  
 	$count=0;
  	$query = xecuter_query();
	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
   		if($count==1){
			echo'<article class="rd-post-item">';
		}
			xecuter_post_module_2('rd-col-1-2 rd-post-1-2','xecuter_big',xecuter_data('excerpt'),xecuter_data('meta_category'));
 		if($count==2){$count=0;
 			echo'</article>';
		}
	endwhile; 
	endif;
	wp_reset_postdata(); 
 }
add_action( 'wp_ajax_xecuter_content_grid_1', 'xecuter_content_grid_1' );
add_action( 'wp_ajax_nopriv_xecuter_content_grid_1', 'xecuter_content_grid_1' );
/********************************************************************
Post Cotent Grid 2
*********************************************************************/
function xecuter_content_grid_2() { 
	$count=0;
  	$query = xecuter_query();
	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		if($count==1){
			echo'<article class="rd-post-item">';
		}
			xecuter_post_module_2('rd-col-1-3 rd-post-1-3','xecuter_large',xecuter_data('excerpt'),xecuter_data('meta_category'));
 		if($count==3){$count=0;
 			echo'</article>';
		}
	endwhile; 
	endif; 
 	wp_reset_postdata(); 
}
add_action( 'wp_ajax_xecuter_content_grid_2', 'xecuter_content_grid_2' );
 add_action( 'wp_ajax_nopriv_xecuter_content_grid_2', 'xecuter_content_grid_2' );
/********************************************************************
Post Cotent Grid 3
*********************************************************************/
function xecuter_content_grid_3() {  
 	$count=0;
  	$query = xecuter_query();
	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;$counts =    wp_count_posts()->publish; 
		if($count==1){
			echo'<article class="rd-post-item">';
		}
			xecuter_post_module_2('rd-col-1-4 rd-post-1-4','xecuter_large',xecuter_data('excerpt'), xecuter_data('meta_category'));
 		if($count==4){$count=0;
 			echo'</article>';
		}
	endwhile; 
	endif;  
	wp_reset_postdata(); 	 
}
add_action('wp_ajax_nopriv_xecuter_content_grid_3', 'xecuter_content_grid_3');
add_action('wp_ajax_xecuter_content_grid_3', 'xecuter_content_grid_3');
/********************************************************************
Post Cotent List 1
*********************************************************************/
function xecuter_content_list_1() {  
  	$count=0;
  	$query = xecuter_query();
	  	if( $query->have_posts() ) : 
		while ( $query->have_posts() ) : $query->the_post(); $count++;
   		if($count==1){
			echo'<article class="rd-post-item">';
		}
			xecuter_post_module_1( 'rd-col-1-2 rd-post-1-2' ,'xecuter_medium',true,xecuter_data('meta_category'));
			
		if($count==2){$count=0;
 			echo'</article>';
		}
			 
		endwhile; 
		endif;  
}
add_action('wp_ajax_nopriv_xecuter_content_list_1', 'xecuter_content_list_1');
add_action('wp_ajax_xecuter_content_list_1', 'xecuter_content_list_1');
/********************************************************************
Post Cotent List 2
*********************************************************************/
 function xecuter_content_list_2() {  
 	$count=0;
  	$query = xecuter_query();
	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		if($count==1){
			echo'<article class="rd-post-item">';
		}
 			xecuter_post_module_1( 'rd-col-1-3 rd-post-1-3' ,'xecuter_small',false,false);
  		if($count==3){$count=0;
 			echo'</article>';
		}
	endwhile; 
	endif;  
}
add_action('wp_ajax_nopriv_xecuter_content_list_2', 'xecuter_content_list_2');
add_action('wp_ajax_xecuter_content_list_2', 'xecuter_content_list_2');
/********************************************************************
Post Main Slider 1
*********************************************************************/
function xecuter_main_slider_1() {  
 	$count=0;
	$query = xecuter_query();
 	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		echo'<article class="rd-post-item ">';
			xecuter_post_module_3('rd-post-1-1 rd-ratio60','full',xecuter_data('excerpt'),xecuter_data('meta_category'));
		echo'</article>';
  	endwhile; 
	endif; 
}
/********************************************************************
Post Main Slider 2
*********************************************************************/
function xecuter_main_slider_2() {  
	$count=0;
	$query = xecuter_query();
 	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		echo'<article class="rd-post-item">';
			xecuter_post_module_3('rd-post-1-2','xecuter_large',false,xecuter_data('meta_category'));
		echo'</article>';
	endwhile; 
	endif; 
}
/********************************************************************
Post Main Slider 3
*********************************************************************/
function xecuter_main_slider_3() {  
 	$count=0;
	$query = xecuter_query();
	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		echo'<article class="rd-post-item">';
			xecuter_post_module_3('rd-post-1-3','xecuter_large',false,xecuter_data('meta_category'));
		echo'</article>';
  	endwhile; 
	endif; 
}
/********************************************************************
Post Main Slider 4
*********************************************************************/
function xecuter_main_slider_4() {  
	$count=0;
	$query = xecuter_query();
 	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		echo'<article class="rd-post-item ">';
			xecuter_post_module_3('rd-post-1-2 rd-ratio135','xecuter_big',false,xecuter_data('meta_category'));
		echo'</article>';
	endwhile; 
	endif; 
}
/********************************************************************
Post Main Featured 1
*********************************************************************/
function xecuter_main_featured_1() {  
	$count=0;
	$query = xecuter_query();
	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		if($count<=2){
			echo'<article class="rd-post-item rd-col-1-2">';
			xecuter_post_module_3('rd-post-1-2','xecuter_large',false, xecuter_data('meta_category'));
			echo'</article>';
		}else{
			echo'<article class="rd-post-item rd-col-1-3">';
			xecuter_post_module_3('rd-post-1-3','xecuter_medium',false, xecuter_data('meta_category'));
			echo'</article>';
		}
	endwhile; 
	endif;  
}
/********************************************************************
Post Main Featured 2
*********************************************************************/
function xecuter_main_featured_2() {  
 	$count=0;
	$query = xecuter_query();
 	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		if($count<=1){
			echo'<article class="rd-post-item rd-col-2-3">';
			xecuter_post_module_3('rd-post-2-3','xecuter_big',xecuter_data('excerpt'), xecuter_data('meta_category'));
			echo'</article>';
		}else{
			echo'<article class="rd-post-item rd-col-1-3">';
			xecuter_post_module_3('rd-post-1-3','xecuter_medium',false, xecuter_data('meta_category'));
			echo'</article>';
		}
 	endwhile; 
	endif;  
}
/********************************************************************
Post Main Featured 3
*********************************************************************/
function xecuter_main_featured_3() {  
	$count=0;
	$query = xecuter_query();
	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
 			echo'<article class="rd-post-item rd-col-1-3">';
			xecuter_post_module_3('rd-post-1-3','xecuter_medium',false, xecuter_data('meta_category'));
			echo'</article>';
			 
			
	endwhile; 
	endif;  
}
/********************************************************************
Post Main Grid 1
*********************************************************************/
function xecuter_main_grid_1() {  
	$count=0;
	$query = xecuter_query();
	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		echo'<article class="rd-post-item">';
 			xecuter_post_module_2('rd-post-1-1','xecuter_big',xecuter_data('excerpt'),xecuter_data('meta_category'));
		echo'</article>';
	endwhile; 
	endif;  
}
add_action('wp_ajax_nopriv_xecuter_main_grid_1', 'xecuter_main_grid_1');
add_action('wp_ajax_xecuter_main_grid_1', 'xecuter_main_grid_1');

/********************************************************************
Post Main Grid 2
*********************************************************************/
function xecuter_main_grid_2() {  
	$count=0;
	$query = xecuter_query();
	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		if($count==1){
			echo'<article class="rd-post-item">';
		}
			xecuter_post_module_2( 'rd-col-1-2 rd-post-1-2' ,'xecuter_large',xecuter_data('excerpt'),xecuter_data('meta_category') );
		if($count==2){$count=0;
 			echo'</article>';
		}
	endwhile; 
	endif;  
} 
add_action('wp_ajax_nopriv_xecuter_main_grid_2', 'xecuter_main_grid_2');
add_action('wp_ajax_xecuter_main_grid_2', 'xecuter_main_grid_2');
/********************************************************************
Post Main Grid 3
*********************************************************************/
function xecuter_main_grid_3() {  
	$count=0;
	$query = xecuter_query();

	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		if($count==1){
			echo'<article class="rd-post-item">';
		}		 
			xecuter_post_module_2( 'rd-col-1-3 rd-post-1-3' ,'xecuter_medium',xecuter_data('excerpt'),xecuter_data('meta_category'));
		if($count==3){$count=0;
 			echo'</article>';
		}
 	endwhile; 
	endif;  		 
} 
add_action('wp_ajax_nopriv_xecuter_main_grid_3', 'xecuter_main_grid_3');
add_action('wp_ajax_xecuter_main_grid_3', 'xecuter_main_grid_3');
/********************************************************************
Post Main List 1
*********************************************************************/
function xecuter_main_list_1() {  
 	$count=0;
	$query = xecuter_query();
 	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		echo'<article class="rd-post-item">';
 			xecuter_post_module_1('rd-post-1-1 rd-col-1-1','xecuter_large',true,xecuter_data('meta_category'));
		echo'</article>';
 	endwhile; 
	endif;  
}
add_action('wp_ajax_nopriv_xecuter_main_list_1', 'xecuter_main_list_1');
add_action('wp_ajax_xecuter_main_list_1', 'xecuter_main_list_1'); 
/********************************************************************
Post Main List 2
*********************************************************************/
function xecuter_main_list_2() {  
	$count=0;
	$query = xecuter_query();
	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		if($count==1){
			echo'<article class="rd-post-item">';
		}
 			xecuter_post_module_1('rd-col-1-2 rd-post-1-2','xecuter_small',false,false);
		if($count==2){$count=0;
 			echo'</article>';
		}
	endwhile; 
	endif;  
} 
add_action('wp_ajax_nopriv_xecuter_main_list_2', 'xecuter_main_list_2');
add_action('wp_ajax_xecuter_main_list_2', 'xecuter_main_list_2'); 
/********************************************************************
Post Main List 3
*********************************************************************/
function xecuter_main_list_3() {  
 	$count=0;
	$query = xecuter_query();
 	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		if($count==1){
			echo'<article class="rd-post-item">';
				xecuter_post_module_1('rd-post-1-1 rd-col-1-1','xecuter_large',true,xecuter_data('meta_category'));
  			echo'</article>';
		} else {
			if($count==2){
				echo'<article class="rd-post-item">';
			}
 				xecuter_post_module_1('rd-col-1-2 rd-post-1-2','xecuter_small',false,false);
			if($count==3){$count=1;
 				echo'</article>';
			}
		}	
	endwhile; 
	endif;  
} 
/********************************************************************
Post Center Slider 1
*********************************************************************/ 
function xecuter_center_slider_1() {  
 	$count=0;
	$query = xecuter_query();
	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		echo'<article class="rd-post-item">';
			xecuter_post_module_3('rd-post-1-1','xecuter_big',xecuter_data('excerpt'),xecuter_data('meta_category'));
		echo'</article>';
	endwhile; 
	endif; 
}
/********************************************************************
Post Center Slider 2
*********************************************************************/
function xecuter_center_slider_2() {  
 	$count=0;
	$query = xecuter_query();
 	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		echo'<article class="rd-post-item">';
			xecuter_post_module_3('rd-post-1-2','xecuter_large',false,xecuter_data('meta_category'));
		echo'</article>';
	endwhile; 
	endif; 
}
/********************************************************************
Post Center Slider 3
*********************************************************************/
function xecuter_center_slider_3() {  
 	$count=0;
	$query = xecuter_query();
	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		echo'<article class="rd-post-item ">';
			xecuter_post_module_3('rd-post-1-1 rd-ratio135','xecuter_big',false,xecuter_data('meta_category'));
		echo'</article>';
 	endwhile; 
	endif; 
}
/********************************************************************
Post Center Slider 2
*********************************************************************/
function xecuter_center_featured_1() {  
	$count=0;
	$query = xecuter_query();
	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		if($count<=1){
			echo'<article class="rd-post-item">';
				xecuter_post_module_3('rd-post-1-1','xecuter_big',xecuter_data('excerpt'),xecuter_data('meta_category'));
			echo'</article>';
		}else{
			echo'<article class="rd-post-item rd-col-1-2">';
				xecuter_post_module_3('rd-post-1-2','xecuter_large',false,xecuter_data('meta_category'));
			echo'</article>';
		}
	endwhile; 
	endif;  
}
/********************************************************************
Post Center Grid 1
*********************************************************************/
function xecuter_center_grid_1() {  
	$count=0;
	$query = xecuter_query();
	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		echo'<article class="rd-post-item">';
 			xecuter_post_module_2('rd-post-1-1 rd-col-1-1','xecuter_big',xecuter_data('excerpt'),xecuter_data('meta_category'));
		echo'</article>';
	endwhile; 
	endif;  
} 
add_action('wp_ajax_nopriv_xecuter_center_grid_1', 'xecuter_center_grid_1');
add_action('wp_ajax_xecuter_center_grid_1', 'xecuter_center_grid_1');
/********************************************************************
Post Center Grid 2
*********************************************************************/
function xecuter_center_grid_2() {  
 	$count=0;
	$query = xecuter_query();
	if( $query->have_posts() ) : 
		while ( $query->have_posts() ) : $query->the_post(); $count++;
		if($count==1){
			echo'<article class="rd-post-item">';
		}
			xecuter_post_module_2( 'rd-col-1-2 rd-post-1-2' ,'xecuter_medium',xecuter_data('excerpt'),xecuter_data('meta_category') );
			
		if($count==2){$count=0;
 			echo'</article>';
		}
			
	endwhile; 
	endif;  
} 
add_action('wp_ajax_nopriv_xecuter_center_grid_2', 'xecuter_center_grid_2');
add_action('wp_ajax_xecuter_center_grid_2', 'xecuter_center_grid_2');
/********************************************************************
Post Center List 1
*********************************************************************/
function xecuter_center_list_1() {  
	$count=0;
	$query = xecuter_query();
 	if( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); $count++;
		echo'<article class="rd-post-item">';
 			xecuter_post_module_1( 'rd-post-1-1 rd-col-1-1' ,'xecuter_large',true,xecuter_data('meta_category'));
		echo'</article>';
	endwhile; 
	endif;  
} 
add_action('wp_ajax_nopriv_xecuter_center_list_1', 'xecuter_center_list_1');
add_action('wp_ajax_xecuter_center_list_1', 'xecuter_center_list_1');
/********************************************************************
Post Center ADS
*********************************************************************/
function xecuter_ads() {
	global $xecuter_data;
	if( !empty($xecuter_data[ 'newwindow' ]) ){ $newwindow = '_blank'; }else{$newwindow= '';}
	if( !empty($xecuter_data[ 'nofollow' ]) ){ $nofollow = 'nofollow'; }else{$nofollow= '';}
    $image = isset( $xecuter_data[ 'image' ] ) ? $xecuter_data[ 'image' ]: '';
 	$ads_url = isset( $xecuter_data[ 'ads_url' ] ) ? $xecuter_data[ 'ads_url' ]: '';
	if( !empty($xecuter_data[ 'resize' ]) ){ $resize = 'rd-resize'; }else{$resize= '';}
      echo  '<div class="rd-ads '.esc_attr($resize).'">';
     	echo '<a href="'.esc_url($ads_url).'"   rel="'.esc_attr($nofollow).'" target="'.esc_attr($newwindow).'">';
    		echo '<img alt="ads" src="'.$image.'" />';
  		echo '</a>'; 		
 	echo '</div>'  ;  
}
?>