<?php
if ( function_exists('register_sidebar') )
    register_sidebar();

//「page_item page-item-○」を削除し、現在のページクラス「current_page_item」を「is-active」に変更する
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
  if(is_array($var)){
    $varci= array_intersect($var, array('current_page_item'));
    $cmeni = array('current_page_item');
    $selava   = array('is-active');
    $selavaend = array();
    $selavaend = str_replace($cmeni, $selava, $varci);
  }
  else{
    $selavaend= '';
  }
  return $selavaend;
}

// custom comments
function custom_comments($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment;
  global $commentcount;
  if(!$commentcount) {
    $commentcount = 0;
  }
    ?>
  
  <div id="content">
        <div class="metainfo">
       <li class="comment <?php if($comment->comment_author_email == get_the_author_email()) {echo 'admincomment';} else {echo 'regularcomment';} ?>" id="comment-<?php comment_ID() ?>">
        <p>
        <div class="ava">
        <?php if (get_comment_author_url()) : ?>
        <?php comment_author_link(); ?><span style="display:none"><a id="commentauthor-<?php comment_ID() ?>" href="<?php comment_author_url() ?>"> <?php comment_author(); ?></a></span>
           <?php else : ?>
               <?php comment_author_link(); ?><span style="display:none"><b id="commentauthor-<?php comment_ID() ?>"><?php comment_author(); ?></b></span>
          <?php endif; ?>&nbsp;
          <a href="#comment-<?php comment_ID() ?>"><?php if (function_exists('get_avatar') && get_option('show_avatars')) { echo get_avatar($comment, 40); } ?></a></div>
        <?php comment_date('F jS, Y') ?><br />
        <a title="Reply" class="reply" href="javascript:void(0);" onclick="MGJS_CMT.reply('commentauthor-<?php comment_ID() ?>', 'comment-<?php comment_ID() ?>', 'comment');">REPLY))</a>
        </p>
      </div>
      <div class="comment-entry">
        <div id="commentbody-<?php comment_ID() ?>"><?php comment_text() ?> </div>
        <div class="count"><?php printf('%1$s', ++$commentcount); ?><sup>F</sup></div>
        <?php if ($comment->comment_approved == '0') : ?>
        <p>Your comments is awaiting...</p>
        <?php endif; ?>
      </div>
    <br clear="left" />
    </div>
<?php
  }
?>
