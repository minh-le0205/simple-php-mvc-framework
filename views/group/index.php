<?php
if (!empty($this->items)) {
  foreach ($this->items as $key => $value) {
    $id = $value['id'];
    $status = ($value['status'] == 1) ? 'Active' : 'Inactive';
    $xhtml .= '
      <div class="row">
      <p class="w-10"><input type="checkbox" name="checkbox[]" value="' . $id . '"></p>
      <p>' . $value['name'] . '</p>
      <p class="w-10">' . $id . '</p>
      <p class="w-10">' . $status . '</p>
      <p class="w-10">' . $value['ordering'] . '</p>
      <p class="w-10">' . $value['total'] . '</p>
      <p class="w-10 action">
        <a href="#">Edit</a>
        <a href="#">Delete</a>
      </p>
    </div>
    ';
  }
}
?>

<div class="content">
  <h3>Group :: List</h3>
  <div class="list">
    <div class="row head">
      <p class="w-10"><input type="checkbox" name="check-all" id="check-all"></p>
      <p>Group Name</p>
      <p class="w-10">ID</p>
      <p class="w-10">Status</p>
      <p class="w-10">Ordering</p>
      <p class="w-10">Members</p>
      <p class="w-10 action">Action</p>
    </div>
    <?= $xhtml; ?>
  </div>
</div>