<h1>Create item</h1>

<form action="/items/store" method="POST" class="w-50">
    <div class="mb-3">
        <label for="item-title" class="form-label">item name</label>
        <input type="text" class="form-control" id="item-title" name="item_name">
    </div>
    <div class="mb-3">
        <label for="item-title" class="form-label">item cost</label>
        <input type="text" class="form-control" id="item-title" name="cost">
    </div>
    <div class="mb-3">
        <label for="item-title" class="form-label">item price</label>
        <input type="text" class="form-control" id="item-title" name="selling_price">
    </div>
    <div class="mb-3">
        <label for="item-title" class="form-label">item quantity</label>
        <input type="text" class="form-control" id="item-title" name="quantity">
    </div>
    
    
    <button type="submit" class="btn btn-success mt-4">Create</button>
</form>