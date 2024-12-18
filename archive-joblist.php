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
$term = null;

if (is_tax()) {
    $term = get_queried_object();
    $title = 'Tagged: ' . $term->name;
}

$data = [
    'site' => get_bloginfo(),
    'title' => single_cat_title('', false),
    'posts' => [],
    'term_name' => $term ? $term->name : '',
    'show_posts_nav' => WPOUtilityBase::showPostsNav(),
    'archives' => wp_get_archives(['echo' => 0]),
    'current_date' => date('M j'),
    'blog_options' => [
        [
            'subhead' => WPOUtilityBase::get_thm_var("news_subhead"),
            'cta_image' => WPOUtilityBase::get_thm_var("cta_image"),
            'cta_heading' => WPOUtilityBase::get_thm_var("cta_heading"),
            'cta_subhead' => WPOUtilityBase::get_thm_var("cta_subhead"),
            'cta_link' => WPOUtilityBase::get_thm_var("cta_link"),
        ]
    ],
];

$data[ 'terms' ] = get_terms( array( 'taxonomy' => 'joblist_category', 'hide_empty' => false, ) );

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
    'post_term' => get_the_terms( get_the_ID(), 'joblist_category' ),
    'post_id' => get_the_ID(),
    'content' => get_the_content(),
    'excerpt' => get_the_excerpt(),
  ];

}

get_header();

// COMMENTED OUT SO IT WONT USE TWIG TO RENDER THE PAGE
// print TwigManager::Twig()->render('page/archive-externalscholarships.twig', $data);


?>
<?php
$terms_p = json_encode( get_terms( array( 'taxonomy' => 'joblist_category', 'orderby' => 'slug', 'hide_empty' => false ) ) );
?>
<script type="text/javascript">
function loadJobs() {
    let formPrimarySlug = jQuery('#formPrimary').val();
    jQuery("#Results").empty();
    jQuery("#Description").empty();
    var resultsTxt = " ";
    var descriptionTxt = " ";
    let posts = <?php echo json_encode($data["posts"]); ?>;
    for (let post of posts) {
        // Check if post_term property exists and is an array
        if (post.hasOwnProperty("post_term") && Array.isArray(post.post_term)) {
            // Iterate over each term to see if one matches the selected category
            let termMatch = post["post_term"].some(term => term["term_id"] == formPrimarySlug);
            if (termMatch) {
                resultsTxt += "<div class=\"faq_listing\" id=\"faq_1730665760\">";
                resultsTxt += "<div class=\"accordion\" id=\"1730665760\">";
                resultsTxt += "<div class=\"card p-0\"><div class=\"card-header p-0 remove-border\" id=\"heading" + post["post_id"] + "\">";
                resultsTxt += "<button class=\"btn btn--faq txt-left\" type=\"button\" data-toggle=\"collapse\" data-target=\"#1730665760-collapse" + post["post_id"] + "\" aria-expanded=\"false\" aria-controls=\"collapse" + post["post_id"] + "\">";
                resultsTxt += "<h3 class=\"h4 txt-black mb-0\">" + post["title"] + "</h3></button></div>";
                resultsTxt += "<div id=\"1730665760-collapse" + post["post_id"] + "\" class=\" collapse \" aria-labelledby=\"heading" + post["post_id"] + "\" data-parent=\"#1730665760\"> <div class=\"card-body remove-border\"> <div class=\"wp-content\"> " + post["content"] + " </div></div></div></div></div></div>";
            }
        }
    }

    switch (formPrimarySlug) {
        case '236':
            descriptionTxt += "<h4>Off-campus Employment</h4><p>These postings are provided as a service to SWBTS students, their spouses, and alumni. It is the responsibility of applicants to investigate thoroughly all posted positions. All communication needs to be directly between the student and the listing’s contact.</p><p>International students on F-2 visas are not allowed to work on or off-campus according to government regulations. If you have any questions regarding employment, please contact the International Student Office at extension 8520.</p>";
            break;
        case '235':
            descriptionTxt += "<h4>Off-campus Employment</h4><p>These postings are provided as a service to SWBTS students, their spouses, and alumni. It is the responsibility of applicants to investigate thoroughly all posted positions. All communication needs to be directly between the student and the listing’s contact.</p><p>International students on F-2 visas are not allowed to work on or off-campus according to government regulations. If you have any questions regarding employment, please contact the International Student Office at extension 8520.</p>";
            break;
        case '238':
            descriptionTxt += "<h4>Internships</h4><p>Gain practical experience while working towards completing your degree. These postings are provided as a service to SWBTS students, their spouses, and alumni. It is the responsibility of applicants to investigate thoroughly all posted positions. All communication needs to be directly between the student and the ministry's contact.</p>";
            break;
        case '237':
            descriptionTxt += "<h4>Preaching Opportunities</h4><p>These postings are provided as a service to SWBTS students, their spouses, and alumni. It is the responsibility of applicants to investigate thoroughly all posted positions. All communication needs to be directly between the student and the ministry's contact.</p>";
            break;
            
        } // end SWITCH DESCRIPTION BY JOB
    
        jQuery("#Results").html(resultsTxt);
        jQuery("#Description").html(descriptionTxt);
    
    }; // END LOAD JOBS FUNCTION

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
    /*width: 45%;*/
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

<div class="container slim joblist-archive-header">
<div class="joblist-archive-title">
  <h1 class="txt-blue font-weight-bold mb-5">Job List</h1>
  <h3><!-- LEFT IT HERE IN CASE WE NEED TO CHANGE AND ADD SUBTITLES -->
    <?php if ($data['title']!=''){ echo $data['title']; } ?>
    </h3>
    <p>The online job list is available to approved prospective students, current students, and alumni. Available church positions at Southern Baptist churches can be explored <a href="https://swbts-csm.symplicity.com/students/" target="_blank">here</a>.</p>
  <div class="wp-block-spacer" style="height:50px;"></div>
</div>
</div>
<div class="container slim joblist-archive-form">
  <?php

  // GET THE PRIMARY (PARENT) TERMS
  $terms_primary = get_terms( array( 'taxonomy' => 'joblist_category',
    'parent' => 0, 'orderby' => 'slug', 'hide_empty' => false ) );
	
  $url = add_query_arg( $wp->query_vars, home_url( $wp->request ) );
	
  ?>
  <form action="<?php echo $url; ?>" method="post" >
    <div class="searchCourseHeader">
      <ul>
        <li><span>Search by Job Type</span><!-- PRIMARY DROPDOWN LOADS PARENT CATEGORIES AND CALLS LOADSECONDARY FUNCTION ON CHANGE -->
          <select id="formPrimary" name="formPrimary" required class="job-list-select" onChange="loadJobs()"> 
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
</div>
    <div class="container blog blog-homepage joblist-archive-detail">
        <div class="row add-padding-top mod-padding-x6">
            <div id="Description" class="col-12 col-lg-12 blog-list"> 
              <!-- RESULTS FROM DESCRIPTIONS LOADED ON LOAD JOB FUNCTION ARE LOADED HERE -->
            </div>
        </div>
    </div>
<div class="container blog blog-homepage pb-12 joblist-archive-accordion">
  <div class="row add-padding-top mod-padding-x6">     
    <div id="Results" class="col-12 col-lg-12 blog-list"> <!-- RESULTS FROM LOADRESULTS FUNCTION ARE LOADED HERE -->
    </div>
  </div>
</div>
<div class="wp-block-cover has-background-dim-30 has-background-dim image-callout-right joblist-archive-bg" style="background-image:url(<?php echo $data['blog_options']['0']['cta_image']; ?>)">

</div>
</section>
<?php
get_footer();