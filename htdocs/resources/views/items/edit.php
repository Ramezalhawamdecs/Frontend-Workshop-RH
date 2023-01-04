<h1>Edit item</h1>

<form action="/items/update" method="POST" class="w-50">
    <input type="hidden" name="id" value="<?= $data->item->id ?>">
    <div class="mb-3">
        <label for="item-title" class="form-label">item name</label>
        <input type="text" class="form-control" id="item-title" name="item_name" value="<?= $data->item->item_name ?>">
    </div>
    <div class="mb-3">
        <label for="item-title" class="form-label">item cost</label>
        <input type="text" class="form-control" id="item-title" name="cost" value="<?= $data->item->cost ?>">
    </div>
    <div class="mb-3">
        <label for="item-title" class="form-label">item selling price</label>
        <input type="text" class="form-control" id="item-title" name="item_name" value="<?= $data->item->selling_price?>">
    </div>
    <div class="mb-3">
        <label for="item-title" class="form-label">item quantity</label>
        <input type="text" class="form-control" id="item-title" name="item_name" value="<?= $data->item->quantity?>">
    </div>
    
    <button type="submit" class="btn btn-warning mt-4">Update</button>
</form>