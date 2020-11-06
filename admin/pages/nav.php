
<style>
    .cnav {
        background-color: #002dbb;
        color: white;
    }
</style>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 cnav text-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal"><a href="<?= base_url(); ?>admin"><img src="<?= base_url(); ?>assets/img/app/<?= $app['logo']; ?>" style="height: 70px; weight: 100px;"> </h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-white" href="?page=Registrasi">Registrasi</a>
            <a class="p-2 text-white" href="?page=Content">Content</a>
            <a class="p-2 text-white" href="?page=Settings">Setting</a>
        </nav>
        <a class="btn btn-info" href="pages/logout.php">Logout</a>
    </div>