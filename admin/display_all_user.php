<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                ALL USERS
            </header>

            <table class="table table-striped table-advance table-hover">
                <tbody>
                <tr>
                    <th><i class="icon_profile"></i>user_id</th>
                    <th><i class="icon_profile"></i> Username</th>
                    <th><i class="icon_mail_alt"></i> Email</th>
                    <th><i class="icon_calendar"></i> Created date</th>
<!--                    <th style="right: auto"><i class="icon_cogs"></i> Action</th>-->
                </tr>
                <tr>
                    <?php
                    include "../include/connection.php";
                    $query = "SELECT * FROM tbl_users";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result)):?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['username']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['create_date']?></td>

<!--                    <td>-->
<!--                        --><?php //echo "<a href=edit.php?id=". $row['id']." ><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> Edit </a>" ?><!-- |-->
<!--                        --><?php //echo "<a href=delete.php?id=". $row['id']." ><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i> Delete</a>" ?>
<!---->
<!--                    </td>-->
                </tr>
                <?php endwhile; ?>
                </tr>
                </tbody>
            </table>

        </section>
    </div>
</div>