<?php defined("SYSPATH") or die("No direct script access.") ?>
<script>
  $("#gAddTagForm").ready(function() {
    var url = $("#gTagCloud").attr("title") + "/autocomplete";
    $("#gAddTagForm input:text").autocomplete(
      url, {
        max: 30,
        formatResult: formatTagAutoCompleteResult}
    );
  });
</script>
<div id="gTagCloud" title="<?= url::site("tags") ?>">
  <?= $cloud ?>
</div>
<?= $form ?>