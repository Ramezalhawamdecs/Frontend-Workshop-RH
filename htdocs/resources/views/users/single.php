<div class="mt-5 d-flex flex-row-reverse gap-3">
    <a href="/users/edit?id=<?= $data->user->id ?>" class="btn btn-warning">Edit</a>
    <a href="/users/delete?id=<?= $data->user->id ?>" class="btn btn-danger">Delete</a>
    <a href="/users" class="btn btn-success">Back</a>
</div>

<div class="my-5">
    <!-- for admins -->
    <h1 class="text-center">
<?= $data->user->display_name ?>
    </h1>

    <p>
        email :<?= $data->user->email ?>
    </p>
    <p>
       user name :<?= $data->user->username ?>
    </p>
    <p>
       user role : <?= $data->user->role ?>
    </p>
    <p>
       user create at : <?= $data->user->created_at ?>
    </p>
    <p>
       user updated_at :<?= $data->user->updated_at ?>
    </p>
</div>