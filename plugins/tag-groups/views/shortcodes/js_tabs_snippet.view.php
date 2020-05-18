<!-- begin Tag Groups plugin -->
<script>
jQuery(function() {
  if (jQuery.accordion) {
    tagGroupsTabs<?php echo TagGroups_Base::create_js_fn_name( $id ) ?>();
  } else {
    setTimeout(tagGroupsTabs<?php echo TagGroups_Base::create_js_fn_name( $id ) ?>,2000);
  }
});

function tagGroupsTabs<?php echo TagGroups_Base::create_js_fn_name( $id ) ?>() {
  jQuery( "#<?php echo $id ?>" ).tabs(<?php echo $options_serialized ?>);
}
</script>
<!-- end Tag Groups plugin -->
