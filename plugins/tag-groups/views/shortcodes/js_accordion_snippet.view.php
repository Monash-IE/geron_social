<!-- begin Tag Groups plugin -->
<script>
jQuery(function() {
  if (jQuery.accordion) {
    tagGroupsAccordion<?php echo TagGroups_Base::create_js_fn_name( $id ) ?>();
  } else {
    setTimeout(tagGroupsAccordion<?php echo TagGroups_Base::create_js_fn_name( $id ) ?>,2000);
  }
});

function tagGroupsAccordion<?php echo TagGroups_Base::create_js_fn_name( $id ) ?>() {
  jQuery( "#<?php echo $id ?>" ).accordion(<?php echo $options_serialized ?>);
}
</script>
<!-- end Tag Groups plugin -->
