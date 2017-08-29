<form action="<?= BASE_URL . "/upload/controlFiles/" ?>" method="post" role="form">
    <legend>Form Title</legend>

    <div class="form-group">
        <label for="">Your name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Input...">
    </div>
    <button id="btnSend" type="submit" class="btn btn-primary">Submit</button>
</form>