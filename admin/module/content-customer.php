<?php
$sql = "SELECT * FROM users";
$query = mysqli_query($conn,$sql);
?>
<div class="content">
    <div class="panel-header">
        <h2 class="text-white">Quản Lý Khách Hàng</h2>
    </div>
    <div class="product-body">
        <table class="table-striped">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Full Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $i =1;
            while ($row = mysqli_fetch_assoc($query)) { ?>
                <tr class="odd">
                    <td style="color: #999;
    font-size: 1.4rem;
    line-height: 2.1rem;
    text-align: center;
    font-weight: 500;
    padding: 2rem;"><?= $i ++;?></td>
                    <td style="color: #999;
    font-size: 1.4rem;
    line-height: 2.1rem;
    text-align: center;
    font-weight: 500;
    padding: 2rem;">
                    <?= $row['name']?>
                    </td>
                    <td style="color: #999;
    font-size: 1.4rem;
    line-height: 2.1rem;
    text-align: center;
    font-weight: 500;
    padding: 2rem;">
                    <?= $row['email']?>
                    </td>
                <?php }
?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
<script nomodule src="https://unkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
</body>

</html>