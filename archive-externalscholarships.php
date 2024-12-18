<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 */

use \Propaganda3\WPO\WPOUtilityBase as WPOUtilityBase;
use \Propaganda3\WPO\Customize\DefaultTheme as ThemeBase;
use \Propaganda3\WPO\TwigManager;


$title = 'Archive';

if ( is_tax() ) {
  global $wp_query;
  $term = $wp_query->get_queried_object();
  $title = 'Tagged: ' . $term->name;
}


get_header();

$data = [
  'site' => get_bloginfo(),
  'title' => single_cat_title( '', false ),
  'posts' => [],
  'term_name' => $term->name,
  'show_posts_nav' => WPOUtilityBase::showPostsNav(),
  'archives' => wp_get_archives( [ 'echo' => 0 ] ),
  //    'categories'=>get_categories( ),
  'current_date' => date( 'M j' ),
  'blog_options' => [
    [
      'subhead' => WPOUtilityBase::get_thm_var( "news_subhead" ),
      'cta_image' => WPOUtilityBase::get_thm_var( "cta_image" ),
      'cta_heading' => WPOUtilityBase::get_thm_var( "cta_heading" ),
      'cta_subhead' => WPOUtilityBase::get_thm_var( "cta_subhead" ),
      'cta_link' => WPOUtilityBase::get_thm_var( "cta_link" ),
    ]
  ],
];

// COMMENTED OUT SO IT WONT LOAD CATEGORIES, BUT THE CUSTOM TAXONOMY INSTEAD
// $data[ 'categories' ] = $data[ 'site' ]->id == 1 ? get_categories( [ 'parent' => 160 ] ) : get_categories( [ 'parent' => 41 ] );

$data[ 'terms' ] = get_terms( array( 'taxonomy' => 'externalscholarship_category', 'hide_empty' => false, ) );


while ( have_posts() ) {
  the_post();
  $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
  $image = $image[ 0 ];
  $post_categories = get_the_category();
  $data[ 'posts' ][] = [
    'featured_image' => get_post_meta( get_the_ID(), 'post_meta_featured_image', true ),
    'date' => get_the_time( 'F j, Y' ),
    'link' => get_the_permalink(),
    'title' => get_the_title(),
    'image' => $image,
    'post_categories' => $post_categories,
    'post_term' => get_the_terms( get_the_ID(), 'externalscholarship_category' ),
    'post_id' => get_the_ID(),
    'content' => get_the_content(),
    'excerpt' => get_the_excerpt(),
  ];

}
// COMMENTED OUT SO IT WONT USE TWIG TO RENDER THE PAGE
// print TwigManager::Twig()->render('page/archive-externalscholarships.twig', $data);


?>
<?php
$terms_p = json_encode( get_terms( array( 'taxonomy' => 'externalscholarship_category', 'orderby' => 'slug', 'hide_empty' => false ) ) );
?>
<script type="text/javascript">
function loadSecondary() {
    var xhttp = new XMLHttpRequest();
    let formPrimarySlug=jQuery('#formPrimary').val();
    jQuery("#Secondary").empty();
    console.log(formPrimarySlug);
    var secondDropDown="<span>Type:</span><select id=\"formSecondary\" name=\"formSecondary\" required class=\"course-list-select\" onChange=\"loadResults()\"><option disabled selected>Select one</option>";
    let termsin = <?php echo $terms_p; ?>;
    for (let term of termsin){
        if (formPrimarySlug==term["parent"]){ secondDropDown += "<option value="+term["term_id"]+" >"+term["name"]+"</option>"; }
    }
    secondDropDown += "</select>";

    jQuery("#Secondary").html(secondDropDown);

    };
function loadResults() {
    var xhttp = new XMLHttpRequest();
    let formSecondarySlug=jQuery('#formSecondary').val();
    /* console.log('Secondary3: '+formSecondarySlug); LOGS THE SECONDARY TERM TO SORT */
	jQuery("#Results").empty();
    var resultsTxt=" ";
    var termUndefined = false;
    let posts = <?php echo json_encode($data["posts"]); ?>;
    for (let post of posts){
        /* LOOP THROUGH ALL POSTS: EXTERNAL SCHOLARSHIPS
        console.log('3---- PostID: '+post["post_term"]["0"]["term_id"]); 
        console.log('Object:'+JSON.stringify(post)); 
        */
        
        if (typeof post["post_term"] !== "undefined" && post["post_term"] !== null){ /* TRIED TO HAVE EXCEPTION IN CASE A POST DOESNT HAVE A TERM ASSIGNED TO, BUT IS NOT CURRENTLY WORKING */
        
        for (let term of post.post_term){
            /* LOOP THROUGH ALL TERMS OF A PARTICULAR POST */
            console.log('Object:'+JSON.stringify(term.term_id));
            if(formSecondarySlug==term.term_id){ 
                /* CHECKS THROUGH POSTS WHICH ONES ARE OF THE SAME SELECTED TERMS AND ADD THEM TO THE RESULTS VARIABLE 
                THEN, LOGS THE OBJECTS TO CHECK VALUES
                */

                resultsTxt += "<div class=\"faq_listing\" id=\"faq_1730665760\">";
                resultsTxt += "<div class=\"accordion\" id=\"1730665760\">";
                resultsTxt += "<div class=\"card p-0\"><div class=\"card-header p-0 remove-border\" id=\"heading"+post["post_id"]+"\">";
                resultsTxt += "<button class=\"btn btn--faq txt-left\" type=\"button\" data-toggle=\"collapse\" data-target=\"#1730665760-collapse"+post["post_id"]+"\" aria-expanded=\"false\" aria-controls=\"collapse"+post["post_id"]+"\">";
                resultsTxt += "<h3 class=\"h4 txt-black mb-0\">"+post["title"]+"</h3></button></div>";
                resultsTxt += "<div id=\"1730665760-collapse"+post["post_id"]+"\" class=\" collapse \" aria-labelledby=\"heading"+post["post_id"]+"\" data-parent=\"#1730665760\"> <div class=\"card-body remove-border\"> <div class=\"wp-content\"> "+post["content"]+" </div></div></div></div></div></div>";

                } /* END IF SLUG EQUALS TERM */
            } /* END FOR LOOP TERMS*/
        }
    } /* END FOR LOOP THROUGH POSTS*/

    jQuery("#Results").html(resultsTxt);
    };
</script>

<style>

select{
  background-color:#f2f1f1;
}
.searchCourseHeader {
    padding: 20px;
    margin: 0px;
    background: white;
    width: 100%;
}
.searchCourseHeader ul {
    display: inline-block;
    list-style: none;
    padding: 0px;
    margin: 0px;
    background: white;
    width: 100%;
    text-align: center;
}
.searchCourseHeader ul li {
    display: inline-block;
    list-style: none;
    padding: 0px;
    margin: 0px;
    background: white;
    width: 45%;
    text-align: left;
}
.searchHeaderSubmit {
    border: 0px;
    background: black;
    color: white;
    text-align: center;
}
.align-button-center {
    text-align: center;
}
.wp-block-button__link:after {
    content: "" !important;
}
.wp-block-button__link {
    padding: 24px 60px !important;
}
</style>
<section class="body-content ">

<div class="container slim scholarship-archive-header">
  <div class="scholarship-archive-title">
  <h1 class="txt-blue font-weight-bold mb-5">External Scholarships</h1>
  <h3><!-- LEFT IT HERE IN CASE WE NEED TO CHANGE AND ADD SUBTITLES -->
    <?php if ($data['title']!=''){ echo $data['title']; } ?>
  </h3>
  <p>A student's home church, local association, or state convention may also offer scholarships. Students are encouraged to contact their church, association, or state convention in their home state to discover more scholarship opportunities.</p>
  <div class="wp-block-spacer" style="height:50px;"></div>
</div>
</div>
<div class="container slim scholarship-archive-form">
  <?php

  // GET THE PRIMARY (PARENT) TERMS
  $terms_primary = get_terms( array( 'taxonomy' => 'externalscholarship_category',
    'parent' => 0, 'orderby' => 'slug', 'hide_empty' => false ) );
	
  $url = add_query_arg( $wp->query_vars, home_url( $wp->request ) );
	
  ?>
  <form action="<?php echo $url; ?>" method="post" >
    <div class="searchCourseHeader">
      <ul>
        <li><span>View by:</span><!-- PRIMARY DROPDOWN LOADS PARENT CATEGORIES AND CALLS LOADSECONDARY FUNCTION ON CHANGE -->
          <select id="formPrimary" name="formPrimary" required class="course-list-select" onChange="loadSecondary()"> 
            <option disabled selected>Select one</option>
            <?php
            // CHECK IF THERE IS ANY PARENT TERMS
            if ( !empty( $terms_primary ) && is_array( $terms_primary ) ) {
              // RUN THE LOOP AND WRITE THE OPTIONS PARSING THE ID
              foreach ( $terms_primary as $primary ) {
                ?>
            <option value="<?php echo $primary->term_id; ?>" <?php if ($formPrimary==$primary->term_id) { echo 'selected="selected"'; } ?> ><?php echo $primary->name; ?></option>
            <?php
            } // END FOREACH
            } //END IF ?>
          </select>
        </li>
        <li id="Secondary"> </li><!-- SECONDARY DROPDOWN FROM LOADSECONDARY FUNCTION IS LOADED HERE -->
      </ul>
    </div>
  </form>
</DIV>
<div class="container blog blog-homepage pb-12 scholarship-archive-accordion">
  <div class="row add-padding-top mod-padding-x6">     
    <div id="Results" class="col-12 col-lg-12 blog-list"> <!-- RESULTS FROM LOADRESULTS FUNCTION ARE LOADED HERE -->
      
    </div>
  </div>
</div>
<div class="wp-block-cover has-background-dim-30 has-background-dim image-callout-right scholarship-archive-bg" style="background-image:url(<?php echo $data['blog_options']['0']['cta_image']; ?>)">

</div>
</section>
<?php
get_footer();
