<?php
include_once './include/header.php';
$_why_select = "SELECT * FROM why_us ORDER BY id ASC";
$_query = mysqli_query($_conn, $_why_select);
$_fetch = mysqli_fetch_all($_query, 1);
// echo '<pre>';
// var_dump($_fetch);
// echo '</pre>';
?>
<div class="main_content_iner ">
    <div class="container-fluid plr_30 body_white_bg pt_30">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-4">
                    <h2 class="heading-section text-uppercase">informations</h2>
                </div>
                <table class="table">
                    <thead class="thead-primary">
                        <tr>
                            <th>#</th>
                            <th>Picture</th>
                            <th>Video link</th>
                            <th>F icon Class</th>
                            <th>F Title</th>
                            <th>F des</th>
                            <th>S icon Class</th>
                            <th>S Title</th>
                            <th>S des</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($_fetch as $_key => $_why) {
                        ?>
                            <tr class="alert" role="alert">
                                <td><?= ++$_key ?></td>
                                <td><img src="../img/why_us/<?= $_why['picture'] ?>" alt="" height="60px" style="border-radius: 25px;"></td>
                                <td>
                                    <?php
                                    if (strlen($_why['video_link']) >= 20) {
                                        echo substr($_why['video_link'], 0, 20);
                                        echo '<a class="badge badge-primary btn-sm" href="#" type="button">More</a>';
                                    } else {
                                        echo $_why['video_link'];
                                    }
                                    ?>
                                </td>
                                <td><?= $_why['first_icon'] ?></td>
                                <td><?= $_why['first_title'] ?></td>
                                <td>
                                    <?php
                                    if (strlen($_why['first_description']) >= 20) {
                                        echo substr($_why['first_description'], 0, 20);
                                        echo '<a class="badge badge-primary btn-sm" href="#" type="button">More</a>';
                                    } else {
                                        echo $_why['first_description'];
                                    }
                                    ?>
                                </td>
                                <td><?= $_why['second_icon'] ?></td>
                                <td><?= $_why['second_title'] ?></td>
                                <td>
                                    <?php
                                    if (strlen($_why['second_description']) >= 20) {
                                        echo substr($_why['second_description'], 0, 20);
                                        echo '<a class="badge badge-primary btn-sm" href="#" type="button">More</a>';
                                    } else {
                                        echo $_why['second_description'];
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="#" class="badge <?= $_why['status'] == 1 ? 'badge-success' : 'badge-danger' ?> text-light"><?= $_why['status'] == 1 ? 'Active' : 'Deactive' ?></a>

                                    <a href="../controller/why_status.php?id=<?= $_why['id'] ?>" class="btn-sm <?= $_why['status'] == 1 ? 'btn-danger' : 'btn-success' ?> text-light"><?= $_why['status'] == 1 ? 'Deactive' : 'Active' ?></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include_once './include/footer.php';
