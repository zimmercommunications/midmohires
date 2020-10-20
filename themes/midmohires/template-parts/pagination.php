<?php
/**
 *
 *
 * @package midmohires
 * @subpackage midmohires
 */

/**
 * Translators:
 * This text contains HTML to allow the text to be shorter on small screens.
 * The text inside the span with the class nav-short will be hidden on small screens.
 */
 function wpbeginner_numeric_posts_nav() {

     if( is_singular() )
         return;

     global $wp_query;

     /** Stop execution if there's only 1 page */
     if( $wp_query->max_num_pages <= 1 )
         return;

     $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
     $max   = intval( $wp_query->max_num_pages );

     /** Add current page to the array */
     if ( $paged >= 1 )
         $links[] = $paged;

     /** Add the pages around the current page to the array */
     if ( $paged >= 3 ) {
         $links[] = $paged - 1;
         $links[] = $paged - 2;
     }

     if ( ( $paged + 2 ) <= $max ) {
         $links[] = $paged + 2;
         $links[] = $paged + 1;
     }

     echo '<div class="navigation"><ul>' . "\n";

     /** Previous Post Link */
     if ( get_previous_posts_link() )
         printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

     /** Link to first page, plus ellipses if necessary */
     if ( ! in_array( 1, $links ) ) {
         $class = 1 == $paged ? ' class="active"' : '';

         printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

         if ( ! in_array( 2, $links ) )
             echo '<li>…</li>';
     }

     /** Link to current page, plus 2 pages in either direction if necessary */
     sort( $links );
     foreach ( (array) $links as $link ) {
         $class = $paged == $link ? ' class="active"' : '';
         printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
     }

     /** Link to last page, plus ellipses if necessary */
     if ( ! in_array( $max, $links ) ) {
         if ( ! in_array( $max - 1, $links ) )
             echo '<li>…</li>' . "\n";

         $class = $paged == $max ? ' class="active"' : '';
         printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
     }

     /** Next Post Link */
     if ( get_next_posts_link() )
         printf( '<li>%s</li>' . "\n", get_next_posts_link() );

     echo '</ul></div>' . "\n";

 }


//below is the original look of the pagination

}

 <div class="row">
     <div class="col-lg-12 mt-4 pt-2">
         <nav aria-label="Page navigation example">
             <ul class="pagination job-pagination mb-0 justify-content-center">
                 <li class="page-item disabled">
                     <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                         <i class="mdi mdi-chevron-double-left f-15"></i>
                     </a>
                 </li>
                 <li class="page-item active"><a class="page-link" href="#">1</a></li>
                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                 <li class="page-item"><a class="page-link" href="#">4</a></li>
                 <li class="page-item">
                     <a class="page-link" href="#">
                         <i class="mdi mdi-chevron-double-right f-15"></i>
                     </a>
                 </li>
             </ul>
         </nav>
     </div>
 </div>
