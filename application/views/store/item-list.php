<?php
foreach($results as $row){
?>
<div class="row-fluid show-grid">
    <div class="span2"><?php print $row['id']; ?></div>
    <div class="span2"><?php print $row['name']; ?></div>
    <div class="span2"><?php print $row['brand']; ?></div>
    <div class="span2"><?php print $row['model']; ?></div>
    <div class="span2"><?php print $row['date_added']; ?></div>
    <div class="span2"><a class="fancybox fancybox.ajax" href="<?php echo base_url().'index.php/store/itemform/'.$row['id'];?>">Edit</a> | <a id="delete-item" href="<?php echo base_url().'index.php/store/deleteitem/'.$row['id'];?>">Delete</a></div>
</div>
<?php
}
?>
