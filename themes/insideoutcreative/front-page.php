<?php get_header();


// start of projects
if(have_rows('past_projects')): while(have_rows('past_projects')): the_row();
$bgImg = get_sub_field('background_image');
$content = get_sub_field('content');
$gallery = get_sub_field('gallery');
echo '<section class="position-relative bg-attachment" style="">';
echo '<div class="position-absolute w-100 h-100 bg-attachment" style="background:url(' . $bgImg['url'] . ');background-size:cover;background-attachment:fixed;opacity:.35;top:0;left:0;"></div>';

echo '<div class="container">';
echo '<div class="row bg-faded-gold pl-lg-5 pr-lg-5 pl-md-3 pr-md-3" style="padding:100px 0;">';
echo '<div class="col-12 text-center">';

echo '<div class="pb-4">';
echo $content;
echo '</div>';

if( $gallery ): 
echo '<div class="row">';
$galleryCounter = 0;
foreach( $gallery as $image ):
$galleryCounter++;
if($galleryCounter == 1){
echo '<div class="col-md-8 mb-md-0 mb-4">';
echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set" class="d-block position-relative overflow-h">';
// echo '<div class="position-absolute bg-accent text-white p-2 d-inline-block w-50 text-center" style="top:0;left:50%;transform:translate(-50%,0);">';
// echo '<h3 class="h6 mb-0">' . $image['title'] . '</h3>';
// echo '</div>';

echo '<div class="position-relative img-hover w-100">';
echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100','style'=>'height:400px;object-fit:cover;'] );
echo '</div>';

echo '</a>';
echo '</div>';
}
endforeach;

endif;

if( $gallery ): 
echo '<div class="col-md-4">';
$galleryCounter2 = 0;
foreach( $gallery as $image ):
$galleryCounter2++;
if($galleryCounter2 == 2){
echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set" class="d-block position-relative overflow-h">';
// echo '<div class="position-absolute bg-accent text-white p-2 d-inline-block w-75 text-center" style="top:0;left:50%;transform:translate(-50%,0);">';
// echo '<h3 class="h6 mb-0">' . $image['title'] . '</h3>';
// echo '</div>';

echo '<div class="position-relative img-hover w-100">';
echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100','style'=>'height:400px;object-fit:cover;'] );
echo '</div>';

echo '</a>';
}
// if($galleryCounter2 == 3){
// echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set" class="d-block position-relative" style="margin-top:12.5px;">';
// echo '<div class="position-absolute bg-accent text-white p-2 d-inline-block w-75 text-center" style="top:0;left:50%;transform:translate(-50%,0);">';
// echo '<h3 class="h6 mb-0">' . $image['title'] . '</h3>';
// echo '</div>';
// echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100','style'=>'height:187.5px;object-fit:cover;'] );
// echo '</a>';
// }
endforeach;
echo '</div>';
endif;

if( $gallery ):
$galleryCounter3 = 0;
foreach( $gallery as $image ):
$galleryCounter3++;
if($galleryCounter3 > 2){
echo '<div class="col-md-4 mt-4">';
echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set" class="d-block position-relative overflow-h">';
// echo '<div class="position-absolute bg-accent text-white p-2 d-inline-block w-75 text-center" style="top:0;left:50%;transform:translate(-50%,0);">';
// echo '<h3 class="h6 mb-0">' . $image['title'] . '</h3>';
// echo '</div>';

echo '<div class="position-relative img-hover w-100">';
echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100','style'=>'height:200px;object-fit:cover;']);
echo '</div>';

// echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100','style'=>'height:200px;object-fit:cover;'] );
echo '</a>';
echo '</div>';
}

endforeach;
endif;


if( $gallery ):
echo '</div>';
endif;




echo '</div>';
echo '</div>';
echo '</div>';


echo '</section>';
endwhile; endif;
// end of projects

get_footer(); ?>